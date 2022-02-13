@extends('layouts.main')
@section('content')
@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
@endsection
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
                    <div class="cardBody p-5" style="border: 1px solid lightgray">

                        <table id="dataTable" class='table table-striped table-bordered table-sm' style="width: 70%;font-size:10px" border="">
                            <thead>
                                <tr>
                                    <td rowspan="2"  style="white-space:nowrap;">Key Result Area</td>
                                    <td rowspan="2" >U/M</td>
                                    <td rowspan="2" >Order</td>
                                    <td colspan="2">Jan</td>
                                    <td colspan="2">Feb</td>
                                    <td colspan="2">Mar</td>
                                    <td colspan="2">Apr</td>
                                    <td colspan="2">May</td>
                                    <td colspan="2">June</td>
                                    <td colspan="2">July</td>
                                    <td colspan="2">Aug</td>
                                    <td colspan="2">Sept</td>
                                    <td colspan="2">Oct</td>
                                    <td colspan="2">Nov</td>
                                    <td colspan="2">Dec</td>
                                </tr>
                                <tr>
                                    <td >Goal</td>
                                    <td >Data</td>
                                    <td >Goal</td>
                                    <td >Data</td>
                                    <td >Goal</td>
                                    <td >Data</td>
                                    <td >Goal</td>
                                    <td >Data</td>
                                    <td >Goal</td>
                                    <td >Data</td>
                                    <td >Goal</td>
                                    <td >Data</td>
                                    <td >Goal</td>
                                    <td >Data</td>
                                    <td >Goal</td>
                                    <td >Data</td>
                                    <td >Goal</td>
                                    <td >Data</td>
                                    <td >Goal</td>
                                    <td >Data</td>
                                    <td >Goal</td>
                                    <td >Data</td>
                                    <td >Goal</td>
                                    <td >Data</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td >Emma Smith</td>
                                    <td>%</td>
                                    <td>8.5</td>
                                    <td> </td>
                                </tr>
                                <tr>
                                    <td>Melody Macy</td>
                                    <td>%
                                    </td>
                                    <td>7.9</td>
                                    <td> </td>
                                </tr>
                                <tr>
                                    <td>Max Smith</td>
                                    <td>%</td>
                                    <td>5.8</td>
                                    <td> </td>
                                </tr>
                                <tr>
                                    <td>Sean Bean</td>
                                    <td>%</td>
                                    <td>7.5</td>
                                    <td> </td>
                                </tr>
                                <tr>
                                    <td>Brian Cox</td>
                                    <td>%</td>
                                    <td>5.6</td>
                                    <td> </td>
                                </tr>
                                <tr>
                                    <td>Mikaela Collins</td>
                                    <td>%</td>
                                    <td>9.1</td>
                                    <td> </td>
                                </tr>
                                <tr>
                                    <td>Francis Mitchan</td>
                                    <td>%</td>
                                    <td>9.3</td>
                                    <td> </td>
                                </tr>
                                <tr>
                                    <td>Olivia Wild</td>
                                    <td>%</td>
                                    <td>5.1</td>
                                    <td> </td>
                                </tr>
                                <tr>
                                    <td>Neil Owen</td>
                                    <td>%</td>
                                    <td>4.9</td>
                                    <td> </td>
                                </tr>
                                <tr>
                                    <td>Dan Wilson</td>
                                    <td>%</td>
                                    <td>8.7</td>
                                    <td> </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">...</div>
              </div>
        </div>
    </div>
</section>

    @section('js')
    <script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function () {
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
                alert("123");
                $.ajax({
                    type: "get",
                    url: "{{url('/dcc/company_goals')}}"+"/"+$("#yearpicker option:selected").val(),
                    dataType: "json",
                    success: function (response) {
                        alert(response);
                        console.log(response);
                    },
                    error:function(res){
                        alert(res);
                    }
                });
            });
            //  $('#dataTable').DataTable( {
            //     "scrollX": true
            // } );
        });
    </script>
    @endsection

@endsection
