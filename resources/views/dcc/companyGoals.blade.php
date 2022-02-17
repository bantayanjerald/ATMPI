@extends('layouts.main')
@section('content')
@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
@endsection
<style>
     #dataTable tr.even:hover td.sorting_1 {
       background-color: grey;
       cursor: pointer;
   }
</style>
<section class="mainContent">
    <div class="details">
        <div class="recentOrders">
            <div class="cardHeader">
                <div class="row justify-content-center " style="width: 40%" >
                    <div class="col-lg-2 col-sm-12 mb-3">
                        <label for="yearpicker" class="col-sm-12 col-form-label col-form-label">Select Year</label>
                    </div>
                    <div class="col-lg-2 col-sm-12 mb-3">
                          <select  class="form-control " name="yearpicker" id="yearpicker"></select>
                    </div>
                    <div class="col-lg-3 col-sm-12 mb-3">
                        <label for="yearpicker" class="col-sm-12 col-form-label col-form-label">Select Department</label>
                    </div>
                    <div class="col-lg-5 col-sm-12 mb-3">
                          <select  class="form-control " name="department" id="department"></select>
                    </div>
                  </div>
            </div>
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                  <button class="nav-link active"  data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" id="companyGoalsTab" aria-selected="true">Company Goals</button>
                  <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Department Goals</button>
                </div>
              </nav>
              <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="companyGoalsTab">
                    <div class="cardBody p-5" style="width: 100%;border: 1px solid lightgray">
                        {{-- {{var_dump($qual_obj_temp[0]->Qual_obj_goal)}} --}}
                        <table id="dataTable" class='table table-striped table-bordered table-sm' style="font-size:14px;font-weight:bold;table-layout: fixed; " border="">
                            <thead>
                                <tr>
                                    <td rowspan="2"  style="white-space:wrap;width:220px">Key Result Area</td>
                                    <td rowspan="2"  style="white-space:no-wrap;width:70px;text-align:center" >U/M</td>
                                    <td rowspan="2" style="width:40px">Order</td>
                                    <td colspan="2" style="width:60px">Jan</td>
                                    <td colspan="2" style="width:60px">Feb</td>
                                    <td colspan="2" style="width:60px">Mar</td>
                                    <td colspan="2" style="width:60px">Apr</td>
                                    <td colspan="2" style="width:60px">May</td>
                                    <td colspan="2" style="width:60px">June</td>
                                    <td colspan="2" style="width:60px">July</td>
                                    <td colspan="2" style="width:60px">Aug</td>
                                    <td colspan="2" style="width:60px">Sept</td>
                                    <td colspan="2" style="width:60px">Oct</td>
                                    <td colspan="2" style="width:60px">Nov</td>
                                    <td colspan="2" style="width:60px">Dec</td>
                                </tr>
                                <tr>
                                    <td  style="font-size:10px;width:20px">Goal</td>
                                    <td  style="font-size:10px;width:20px">Data</td>
                                    <td  style="font-size:10px;width:20px">Goal</td>
                                    <td  style="font-size:10px;width:20px">Data</td>
                                    <td  style="font-size:10px;width:20px">Goal</td>
                                    <td  style="font-size:10px;width:20px">Data</td>
                                    <td  style="font-size:10px;width:20px">Goal</td>
                                    <td  style="font-size:10px;width:20px">Data</td>
                                    <td  style="font-size:10px;width:20px">Goal</td>
                                    <td  style="font-size:10px;width:20px">Data</td>
                                    <td  style="font-size:10px;width:20px">Goal</td>
                                    <td  style="font-size:10px;width:20px">Data</td>
                                    <td  style="font-size:10px;width:20px">Goal</td>
                                    <td  style="font-size:10px;width:20px">Data</td>
                                    <td  style="font-size:10px;width:20px">Goal</td>
                                    <td  style="font-size:10px;width:20px">Data</td>
                                    <td  style="font-size:10px;width:20px">Goal</td>
                                    <td  style="font-size:10px;width:20px">Data</td>
                                    <td  style="font-size:10px;width:20px">Goal</td>
                                    <td  style="font-size:10px;width:20px">Data</td>
                                    <td  style="font-size:10px;width:20px">Goal</td>
                                    <td  style="font-size:10px;width:20px">Data</td>
                                    <td  style="font-size:10px;width:20px">Goal</td>
                                    <td  style="font-size:10px;width:20px">Data</td>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <style>
                        /* .deptGoalsHeader
                        {
                            width: 100%;
                            display: flex;
                            justify-content: space-between
                         } */
                    </style>
                    <div class="cardBody p-5" style="width: 100%;border: 1px solid lightgray">
                        <div class="d-flex justify-content-between deptGoalsHeader " >
                            <button class="btn btn-primary" data-bs-target="#newGoalModal" data-bs-toggle="modal">New Record</button>
                            <span class="text-info">ACCTG Company Goals for 2019</span>
                        </div>
                        <table id="dataTable" class='table table-striped table-bordered table-sm' style="font-size:14px;font-weight:bold;table-layout: fixed; " border="">
                            <thead style="text-align:center">
                                <tr  >
                                    <td rowspan="2"  style="white-space:wrap;width:40px">Sort</td>
                                    <td rowspan="2"  style="width:40px;text-align:center" >Type</td>
                                    <td rowspan="2" style="width:80px">Category</td>
                                    <td rowspan="2"  style="white-space:wrap;width:220px">Key Result Area</td>
                                    <td rowspan="2"  style="white-space:no-wrap;width:70px;text-align:center" >U/M</td>
                                    <td colspan="2" style="width:60px">Jan</td>
                                    <td colspan="2" style="width:60px">Feb</td>
                                    <td colspan="2" style="width:60px">Mar</td>
                                    <td colspan="2" style="width:60px">Apr</td>
                                    <td colspan="2" style="width:60px">May</td>
                                    <td colspan="2" style="width:60px">June</td>
                                    <td colspan="2" style="width:60px">July</td>
                                    <td colspan="2" style="width:60px">Aug</td>
                                    <td colspan="2" style="width:60px">Sept</td>
                                    <td colspan="2" style="width:60px">Oct</td>
                                    <td colspan="2" style="width:60px">Nov</td>
                                    <td colspan="2" style="width:60px">Dec</td>
                                    <td style="width:100px">Action</td>
                                </tr>
                                <tr>
                                    <td  style="font-size:10px;width:20px">Goal</td>
                                    <td  style="font-size:10px;width:20px">Data</td>
                                    <td  style="font-size:10px;width:20px">Goal</td>
                                    <td  style="font-size:10px;width:20px">Data</td>
                                    <td  style="font-size:10px;width:20px">Goal</td>
                                    <td  style="font-size:10px;width:20px">Data</td>
                                    <td  style="font-size:10px;width:20px">Goal</td>
                                    <td  style="font-size:10px;width:20px">Data</td>
                                    <td  style="font-size:10px;width:20px">Goal</td>
                                    <td  style="font-size:10px;width:20px">Data</td>
                                    <td  style="font-size:10px;width:20px">Goal</td>
                                    <td  style="font-size:10px;width:20px">Data</td>
                                    <td  style="font-size:10px;width:20px">Goal</td>
                                    <td  style="font-size:10px;width:20px">Data</td>
                                    <td  style="font-size:10px;width:20px">Goal</td>
                                    <td  style="font-size:10px;width:20px">Data</td>
                                    <td  style="font-size:10px;width:20px">Goal</td>
                                    <td  style="font-size:10px;width:20px">Data</td>
                                    <td  style="font-size:10px;width:20px">Goal</td>
                                    <td  style="font-size:10px;width:20px">Data</td>
                                    <td  style="font-size:10px;width:20px">Goal</td>
                                    <td  style="font-size:10px;width:20px">Data</td>
                                    <td  style="font-size:10px;width:20px">Goal</td>
                                    <td  style="font-size:10px;width:20px">Data</td>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
              </div>
        </div>
    </div>
    <div class="modal" id="newGoalModal" tabindex="-1">
        <div class="modal-dialog  modal-dialog-centered modal-dialog-scrollable modal-lg">
          <div class="modal-content">
            <div class="modal-header bg-info text-white">
              <h5 class="modal-title">New Goal</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                {{-- <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Small</span>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div> --}}
                <form action="">

                    <div class="input-group mb-3">
                        <span class="input-group-text col-md-3 text-center" id="inputGroup-sizing-default">Apply Year</span>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text col-md-3 text-center" id="inputGroup-sizing-default">Department</span>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text col-md-3 text-center" id="inputGroup-sizing-default">Order</span>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text col-md-3 text-center" id="inputGroup-sizing-default">Goal Type</span>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text col-md-3" id="inputGroup-sizing-default">Category</span>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text col-md-3" id="inputGroup-sizing-default">KRA</span>
                        <textarea class="form-control" aria-label="With textarea"></textarea>
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text col-md-3" id="inputGroup-sizing-default">UM</span>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text col-md-3" id="inputGroup-sizing-default">Definition</span>
                        <textarea class="form-control" aria-label="With textarea"></textarea>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text col-md-3" id="inputGroup-sizing-default">Formula</span>
                        <textarea class="form-control" aria-label="With textarea"></textarea>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text col-md-3" id="inputGroup-sizing-default">Failure Flag</span>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text col-md-3" id="inputGroup-sizing-default">Scope</span>
                        <textarea class="form-control" aria-label="With textarea"></textarea>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text col-md-3" id="inputGroup-sizing-default">Data Source</span>
                        <textarea class="form-control" aria-label="With textarea"></textarea>
                    </div>
                </form>


            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>
</section>

    @section('js')
    <script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
    <script>

        $(document).ready(function () {
        var table= $('#dataTable').DataTable({"ordering": false, "pageLength": 50});
            for (i = new Date().getFullYear(); i > 1980; i--)
            {
                $('#yearpicker').append($('<option />').val(i).html(i));
            }
            $.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});
            $.ajax({
                type: "get",
                url: "{{route('dcc.dept')}}",
                success: function (response) {
                    // alert(response);
                    // console.log(response);
                    $.each(response, function (index, value) {
                        $("#department").append('<option value="'+value.CODE+'">'+value.department+'</option>')

                    });
                },
                error:function(res){
                    alert(res);
                }
            });

            $("#companyGoalsTab").click(function(){
                // alert("123");
                table.clear().draw();
                var count =0;
                $.ajax({
                    type: "get",
                    url: "{{url('/dcc/company_goals')}}"+"/"+$("#yearpicker option:selected").val(),
                    dataType: "json",
                    success: function (response) {
                        // alert(response);
                        console.log(response);
                        var dataAppend = "";
                        var appendTo = $("#dataTable");
                        // console.log(response.result[0]['qual_obj_data']);

                        $.each(response.result, function (i, v) {

                            //console.log(v.qual_objective);
                            // console.log(goal_data);
                            // var v




                            if(v.qual_obj_goal.length != 0 && v.qual_obj_data.length != 0)
                            {
                                dataAppend += "<tr style='text-align:center;'>";
                                dataAppend +="<td style='color:green; width:120px;text-align:left;'>"+v.qual_objective+"</td>";
                                dataAppend +="<td style='text-align:center;'>"+v.qual_um+"</td>";
                                dataAppend +="<td>"+v.qual_order+"</td>";

                                for(var i = 1; i<=12; i++){
                                    $.each(v.qual_obj_goal, function (ig, vg) {
                                    // console.log(vg.trans_month+'-');
                                        if(vg.trans_month==i.toString()){
                                            // console.log("true")
                                            if(vg.trans_goal === null||vg.trans_goal ==='' || vg.trans_goal === undefined){
                                                dataAppend += "<td>-</td>"
                                            }else{

                                                dataAppend += "<td>"+vg.trans_goal+"</td>"
                                            }
                                        }
                                    });



                                    $.each(v.qual_obj_data, function (id, vd) {
                                    // console.log(vv[v.id]+'-');
                                        if(vd.trans_month==i.toString()){


                                            if(vd.trans_data==null||vd.trans_data ==='' || vd.trans_data === undefined){

                                                dataAppend += "<td>-</td>";
                                                //console.log(vd.trans_data);
                                            }else{
                                                if(v.qual_fail=="under"){
                                                    if(parseInt(vd.trans_data)< parseInt(v.qual_obj_goal[id].trans_goal)){
                                                        console.log(vd.trans_data+"=------"+v.qual_obj_goal[id].trans_goal);

                                                        dataAppend += "<td style='color:white;background-color:maroon''>"+vd.trans_data+"</td>";
                                                    }
                                                    else{

                                                        dataAppend += "<td style='color:white;background-color:green'>"+vd.trans_data+"</td>";
                                                    }

                                                }
                                                else{
                                                    if(parseInt(vd.trans_data) > parseInt(v.qual_obj_goal[id].trans_goal)){

                                                        dataAppend += "<td style='color:white;background-color:maroon'>"+vd.trans_data+"</td>";
                                                    }
                                                    else{

                                                        dataAppend += "<td style='color:white;background-color:green'>"+vd.trans_data+"</td>";
                                                    }


                                                }

                                            }
                                        }

                                    });


                                }

                                dataAppend += "</tr>";
                            }


                                // $.each(, function (indexInArray, valueOfElement) {

                                // });




                        });
                            const tr =$(dataAppend);
                        $.each(response.result, function (indexInArray, valueOfElement) {
                            // console.log(tr);
                            table.row.add(tr[indexInArray]).draw();
                        });

                        // table.row.add(dataAppend);

                    },
                    error:function(res){
                        alert(res);
                    }
                });
            });

        });
    </script>
    @endsection

@endsection
