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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
    public function store(Request $request)
    {
        //
    }

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
        //
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
        //
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


    public function dept()
    {
        $data = Departments::all();

        return $data;
    }

    public function company_goals($year='2020'){
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
}
