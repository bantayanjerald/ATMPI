<?php

namespace App\Http\Controllers\DCC;

use App\Http\Controllers\Controller;
use App\Models\CompanyGoals;
use App\Models\Departments;
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
        $arr_goal= [];
        $arr_data= [];

        $qual_obj_temp = DB::table('qual_obj_temp')->where([
            ['qual_year','=',$year],
            ['qual_type','=','company']
        ])->get();

        foreach($qual_obj_temp as $item){

            $id= $item->id;
            $qual_obj_goal= DB::table('qual_obj_goal')->where('temp_id','=',$id)->get();

            foreach($qual_obj_goal as $item){

                $trans_month= $item->trans_month;
                $trans_goal= $item->trans_goal;
                $temp_id= $item->temp_id;
                // echo $trans_goal."-";
                $arr_goal[$id][$trans_month]=$trans_goal;

                $qual_obj_data = DB::table('qual_obj_data')->where('temp_id','=',$temp_id)->get();
                foreach($qual_obj_data as $item){

                    $trans_month= $item->trans_month;
                    $trans_data= $item->trans_data;
                    // echo $trans_data."-";
                    $arr_data[$id][$trans_month]=$trans_data;
                }

            }

        }

        return response()->json(["arr_goal"=> $arr_goal,
        "arr_data" => $arr_data,
       ]);
        // dd($arr_data);
        // dd($arr_goal);

        // dd($result);
    }
}
