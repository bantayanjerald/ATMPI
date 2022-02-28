<?php

namespace App\Http\Controllers\DCC;

use App\Http\Controllers\Controller;
use App\Models\CompanyGoals;
use App\Models\Departments;
use App\Models\Qual_obj_goal;
use App\Models\Qual_obj_temp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CompanyGoalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $title = 'Company Goals';
        return view("dcc.companyGoals",
        [
            'title' => $title
        ]);
    }


    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=Qual_obj_temp::where('id','=',$id)->get();
        if($data){

            return response()->json(["data"=> $data]);
        }
        else{
            return response()->json(["data"=> "error"]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // return $request->all();
        // dd($request->all);
        // return("123");
        $update =Qual_obj_temp::where('id', $id)->update([
            'qual_category' => $request->categoryEdit,
            'qual_order' => $request->orderEdit,
            'qual_objective' => $request->qual_objectiveEdit,
            'qual_definition' => $request->definitionEdit,
            'qual_formula' => $request->formulaEdit,
            'qual_scope' => $request->scopeEdit,
            'qual_source' => $request->dataSourceEdit,
            'qual_type' => $request->goalTypeEdit,
            'qual_fail' => $request->failureFlagEdit,
            'qual_um' => $request->umEdit
        ]);
        if($update){
            return "success";
        }
        else{
            return "false";
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

    }

    public function data($id)
    {
        $arr_result=[];
        $arr_goal=[];
        $arr_data=[];
        // dd($id);
        $qual_obj_temp = Qual_obj_temp::where('id','=',$id)->get();
        // dd($qual_obj_temp[0]->id);
        $arr_result['goal'] =$qual_obj_temp[0]->Qual_obj_goal;
        $arr_result['data'] =$qual_obj_temp[0]->Qual_obj_data;
        // dd($arr_result);
        return response()->json(["result"=> $arr_result]);
    }


    public function dept()
    {
        $data = Departments::all();

        return $data;
    }

    public function company_goals($year){
        $arr_result=[];
        $arr_goal=[];
        $arr_data=[];

        $qual_obj_temp = Qual_obj_temp::where([
            ['qual_year','=',$year],
            ['qual_type','=','company']
        ])->orderBy('qual_order', 'ASC')->get();

        // $arr_month
        foreach ($qual_obj_temp as $key => $item) {
            $id = $item->id;
            $goal = $item->Qual_obj_goal;
            $data = $item->Qual_obj_data;
            // $arr_data[$qual_obj_temp->id]=$item;
            $arr_goal[$id]=$goal;
            $arr_data[$id]=$data;


        }


        return response()->json(["result"=> $qual_obj_temp,"goal"=> $arr_goal,"data"=> $arr_data]);
        // dd($arr_data);
        // dd($arr_goal);

        // dd($result);
    }

    public function department_goals( $year,$department){
        $arr_goal=[];
        $arr_data=[];

        $qual_obj_temp= Qual_obj_temp::where([
            ['qual_year','=',$year],['deptid','=',$department]
        ])->orderBy('qual_type', 'ASC')->orderBy('qual_order', 'ASC')->get();

        foreach ($qual_obj_temp as $key => $item) {
            $id = $item->id;
            $goal = $item->Qual_obj_goal;
            $data = $item->Qual_obj_data;
            // $arr_data[$qual_obj_temp->id]=$item;
            $arr_goal[$id]=$goal;
            $arr_data[$id]=$data;


        }


        return response()->json(["result"=> $qual_obj_temp,"goal"=> $arr_goal,"data"=> $arr_data]);
        // dd($qual_obj_temp);

    }

    public function store($deptID,$department){


        $store =Qual_obj_temp::create([
            'qual_category' => request('category'),
            'qual_order' => request('order'),
            'qual_objective' => request('qual_objective'),
            'qual_um' => request('um'),
            'qual_definition' => request('definition'),
            'qual_formula' => request('formula'),
            'qual_scope' => request('scope'),
            'qual_source' => request('dataSource'),
            'qual_type' => request('goalType'),
            'deptid' => $deptID,
            'department' => $department,
            'qual_year' => request('applyYear'),
            'qual_fail' => request('failureFlag')

        ]);

        if($store){
            return "success";

        }else{
            return "failed";
        }

    }
}
