@extends('layouts.main')
@section('content')
@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
@endsection
<style>



table#dataTable.dataTable tbody tr:hover {
  background-color: lightgray;
  color:black;
}

table#dataTable.dataTable tbody tr:hover > .sorting_1 {
  background-color: lightgray;
  color:black;
}

table#dataTableDepartment.dataTable tbody tr:hover {
  background-color: lightgray;
  color:black;
}

table#dataTableDepartment.dataTable tbody tr:hover > .sorting_1 {
  background-color: lightgray;
  color:black;
}
#chartdiv {
  width: 60%;
  height: 400px;
}

</style>
<section class="mainContent">
    <div class="details">
        <div class="recentOrders">
            <div class="cardHeader">
                <div class="row justify-content-center " style="width: 60%" >
                    <div class="col-lg-2 col-sm-12 mb-1 " style="text-align: right">
                        <label for="yearpicker" class="col-sm-12 col-form-label col-form-label">Select Year:</label>
                    </div>
                    <div class="col-lg-4 col-sm-12 mb-2  d-flex">
                        <select  class="form-control " style="width: 150px" name="yearpicker" id="yearpicker"></select>
                        <button class="form-control" onclick="company()">Company Goals</button>
                    </div>
                    <div class="col-lg-1 col-sm-12 mb-1" style="text-align: right">
                        <label for="department" class="col-sm-12 col-form-label col-form-label">Department: </label>
                    </div>
                    <div class="col-lg-5 col-sm-12 mb-2 d-flex">

                          <select  class="form-control " style="width: 220px" name="department" id="department"></select>
                          <button class="form-control " onclick="department()" style="width: 70%">Department Goals</button>
                    </div>
                  </div>
            </div>
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                  <button class="nav-link active"  data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" id="companyGoalsTab" aria-selected="true">Company Goals</button>
                  <button class="nav-link" id="departmentGoalsTab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Department Goals</button>
                  <button class="nav-link" id="departmentDataTab" data-bs-toggle="tab" data-bs-target="#nav-data" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Data</button>
                </div>
              </nav>
              <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="companyGoalsTab">
                    <div class="cardBody p-5" style="width: 100%;border: 1px solid lightgray">
                        {{-- {{var_dump($qual_obj_temp[0]->Qual_obj_goal)}} --}}
                        <table id="dataTable" class='table table-striped table-bordered table-sm' style="font-size:14px;table-layout: fixed; " border="">
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
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="departmentGoalsTab">
                    <style>
                        /* .deptGoalsHeader
                        {
                            width: 100%;
                            display: flex;
                            justify-content: space-between
                         } */
                    </style>

                    <div class="cardBody p-5" style="width: 100%;border: 1px solid lightgray">
                        <center style="font-size: 20px;font-weight:bold"><span class="text"><span id="spanDept"></span> Department Goals for <span id="spanYear"></span></span></center>
                        <div class="d-flex justify-content-between deptGoalsHeader " >
                            <button class="btn btn-primary" data-bs-target="#newGoalModal" data-bs-toggle="modal" id="newGoal">New Record</button>
                        </div>
                        <table id="dataTableDepartment" class='table table-striped table-bordered table-sm' style="font-size:14px; width:100% ;text-align:center" border="">
                            <thead style="text-align:center">
                                <tr  >

                                    <td rowspan="2"  style="white-space:nowrap">Action</td>
                                    <td rowspan="2"  style="white-space:wrap">Sort</td>
                                    <td rowspan="2"  style="width:40px;text-align:center;" >Type</td>
                                    <td rowspan="2" style="width:50px">Category</td>
                                    <td rowspan="2"  style="white-space:wrap;">Key Result Area</td>
                                    <td rowspan="2"  style="white-space:no-wrap;text-align:center" >U/M</td>
                                    <td colspan="2" style="width:50px;padding:0px">Jan</td>
                                    <td colspan="2" style="width:50px;padding:0px">Feb</td>
                                    <td colspan="2" style="width:50px;padding:0px">Mar</td>
                                    <td colspan="2" style="width:50px;padding:0px">Apr</td>
                                    <td colspan="2" style="width:50px;padding:0px">May</td>
                                    <td colspan="2" style="width:50px;padding:0px">June</td>
                                    <td colspan="2" style="width:50px;padding:0px">July</td>
                                    <td colspan="2" style="width:50px;padding:0px">Aug</td>
                                    <td colspan="2" style="width:50px;padding:0px">Sept</td>
                                    <td colspan="2" style="width:50px;padding:0px">Oct</td>
                                    <td colspan="2" style="width:50px;padding:0px">Nov</td>
                                    <td colspan="2" style="width:50px;padding:0px;text-align:center">Dec</td>
                                </tr>
                                <tr>
                                    <td  style="font-size:12px;width:20px;padding:0px 1px 0px 1px">Goal</td>
                                    <td  style="font-size:12px;width:20px;padding:0px 1px 0px 1px">Data</td>
                                    <td  style="font-size:12px;width:20px;padding:0px 1px 0px 1px">Goal</td>
                                    <td  style="font-size:12px;width:20px;padding:0px 1px 0px 1px">Data</td>
                                    <td  style="font-size:12px;width:20px;padding:0px 1px 0px 1px">Goal</td>
                                    <td  style="font-size:12px;width:20px;padding:0px 1px 0px 1px">Data</td>
                                    <td  style="font-size:12px;width:20px;padding:0px 1px 0px 1px">Goal</td>
                                    <td  style="font-size:12px;width:20px;padding:0px 1px 0px 1px">Data</td>
                                    <td  style="font-size:12px;width:20px;padding:0px 1px 0px 1px">Goal</td>
                                    <td  style="font-size:12px;width:20px;padding:0px 1px 0px 1px">Data</td>
                                    <td  style="font-size:12px;width:20px;padding:0px 1px 0px 1px">Goal</td>
                                    <td  style="font-size:12px;width:20px;padding:0px 1px 0px 1px">Data</td>
                                    <td  style="font-size:12px;width:20px;padding:0px 1px 0px 1px">Goal</td>
                                    <td  style="font-size:12px;width:20px;padding:0px 1px 0px 1px">Data</td>
                                    <td  style="font-size:12px;width:20px;padding:0px 1px 0px 1px">Goal</td>
                                    <td  style="font-size:12px;width:20px;padding:0px 1px 0px 1px">Data</td>
                                    <td  style="font-size:12px;width:20px;padding:0px 1px 0px 1px">Goal</td>
                                    <td  style="font-size:12px;width:20px;padding:0px 1px 0px 1px">Data</td>
                                    <td  style="font-size:12px;width:20px;padding:0px 1px 0px 1px">Goal</td>
                                    <td  style="font-size:12px;width:20px;padding:0px 1px 0px 1px">Data</td>
                                    <td  style="font-size:12px;width:20px;padding:0px 1px 0px 1px">Goal</td>
                                    <td  style="font-size:12px;width:20px;padding:0px 1px 0px 1px">Data</td>
                                    <td  style="font-size:12px;width:20px;padding:0px 1px 0px 1px">Goal</td>
                                    <td  style="font-size:12px;width:20px;padding:0px 1px 0px 1px">Data</td>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>


                <div class="tab-pane fade" id="nav-data" role="tabpanel" aria-labelledby="departmentDataTab">
                    <style>
                        /* .deptGoalsHeader
                        {
                            width: 100%;
                            display: flex;
                            justify-content: space-between
                         } */
                    </style>
                        <center><span class="text-info"><span id=""></span></span></center>
                    <div class="cardBody p-5" style="width: 100%;border: 1px solid lightgray">
                        <div class="d-flex justify-content-between deptGoalsHeader " >
                            <button class="btn btn-primary"  id="">Back to Goals</button>
                            <button class="btn btn-success"  id="">Refresh</button>
                        </div>

                        <!-- HTML -->
                        <div id="chartdiv" ></div>

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
            <form action="" id="newCompanyGoalForm" method="POST">
            <div class="modal-body">
                {{-- <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Small</span>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div> --}}
                    @csrf
                    @method("POST")
                    <div class="input-group mb-3">
                        <span class="input-group-text col-md-3 text-center" id="inputGroup-sizing-default" >Apply Year</span>
                        <input type="text" class="form-control" aria-label="Sizing example input" name="applyYear" id="applyYear" aria-describedby="inputGroup-sizing-default">
                        <span class="is-invalid"></span>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text col-md-3 text-center" id="inputGroup-sizing-default">Department</span>
                        <input type="text" class="form-control" aria-label="Sizing example input" name="newDepartment" id="newDepartment" aria-describedby="inputGroup-sizing-default">
                        <span class="is-invalid"></span>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text col-md-3 text-center" id="inputGroup-sizing-default">Order</span>
                        <input id="order" name="order" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                        <span></span>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text col-md-3 text-center" id="inputGroup-sizing-default">Goal Type</span>
                        <select  id="goalType" name="goalType" class="form-control custom-select" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                            <option value="Company">Company</option>
                            <option value="Department">Department</option>
                        </select>
                        <span class="is-invalid"></span>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text col-md-3 text-center" id="inputGroup-sizing-default">Category</span>
                        <select  id="category" name="category" class="form-control custom-select" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                            <option value="Quality">Quality</option>
                            <option value="Delivery">Delivery</option>
                            <option value="Cost">Cost</option>
                            <option value="People Development">People Development</option>
                            <option value="Quality">Quality</option>
                            <option value="Overall Customer Satisfaction Level">Overall Customer Satisfaction Level</option>
                            <option value="QD">QD</option>
                            <option value="QC">QC</option>
                            <option value="QP">QP</option>
                            <option value="DC">DC</option>
                            <option value="DP">DP</option>
                            <option value="CP">CP</option>
                            <option value="QP">QP</option>
                            <option value="QDC">QDC</option>
                            <option value="DCP">DCP</option>
                            <option value="QCP">QCP</option>
                            <option value="QDCP">QDCP</option>
                        </select>
                        <span class="is-invalid"></span>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text col-md-3" id="inputGroup-sizing-default">KRA</span>
                        <textarea class="form-control" name="qual_objective" id="qual_objective" aria-label="With textarea"></textarea>
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text col-md-3" id="inputGroup-sizing-default">UM</span>
                        <select name="um" class="form-control custom-select" id="um" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                            <option value="%">%</option>
                            <option value="PPM">PPM</option>
                            <option value="PPB">PPB</option>
                            <option value="Days">Days</option>
                            <option value="Occurrence">Occurrence</option>
                        </select>
                        <span class="is-invalid"></span>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text col-md-3" id="inputGroup-sizing-default">Definition</span>
                        <textarea class="form-control" name="definition" id="definition" aria-label="With textarea"></textarea>
                        <span class="is-invalid"></span>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text col-md-3" id="inputGroup-sizing-default">Formula</span>
                        <textarea class="form-control" name="formula" aria-label="With textarea" id="formula"></textarea>
                        <span class="is-invalid"></span>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text col-md-3" id="inputGroup-sizing-default">Failure Flag</span>

                        <select name="failureFlag" class="form-control custom-select" id="failureFlag" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                            <option value="under">Below Target</option>
                            <option value="over">Over Target</option>
                        </select>
                        <span class="is-invalid"></span>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text col-md-3" id="inputGroup-sizing-default">Scope</span>
                        <textarea class="form-control" aria-label="With textarea" name="scope" id="scope"></textarea>
                        <span class="is-invalid"></span>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text col-md-3" id="inputGroup-sizing-default">Data Source</span>
                        <textarea class="form-control" aria-label="With textarea" name="dataSource" id="dataSource"></textarea>
                        <span class="is-invalid"></span>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" id="btnSave">Save changes</button>
                </div>
            </form>
          </div>
        </div>
      </div>

      <div class="modal" id="editGoalModal" tabindex="-1">
        <div class="modal-dialog  modal-dialog-centered modal-dialog-scrollable modal-lg">
          <div class="modal-content">
            <div class="modal-header bg-info text-white">
              <h5 class="modal-title">Update Goal</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" id="editCompanyGoalForm" method="PUT">
            <div class="modal-body">
                {{-- <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Small</span>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div> --}}
                    @csrf
                    @method("PUT")
                    <div class="input-group mb-3">
                        <span class="input-group-text col-md-3 text-center" id="inputGroup-sizing-default" >Apply Year</span>
                        <input type="text" class="form-control" aria-label="Sizing example input" name="applyYearEdit" id="applyYearEdit" aria-describedby="inputGroup-sizing-default">
                        <span class="is-invalid"></span>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text col-md-3 text-center" id="inputGroup-sizing-default">Department</span>
                        <input type="text" class="form-control" aria-label="Sizing example input" name="newDepartmentEdit" id="newDepartmentEdit" aria-describedby="inputGroup-sizing-default">
                        <span class="is-invalid"></span>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text col-md-3 text-center" id="inputGroup-sizing-default">Order</span>
                        <input id="orderEdit" name="orderEdit" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                        <span></span>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text col-md-3 text-center" id="inputGroup-sizing-default">Goal Type</span>
                        <select  id="goalTypeEdit" name="goalTypeEdit" class="form-control custom-select" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">

                        </select>
                        <span class="is-invalid"></span>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text col-md-3 text-center" id="inputGroup-sizing-default">Category</span>
                        <select  id="categoryEdit" name="categoryEdit" class="form-control custom-select" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">

                        </select>
                        <span class="is-invalid"></span>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text col-md-3" id="inputGroup-sizing-default">KRA</span>
                        <textarea class="form-control" name="qual_objectiveEdit" id="qual_objectiveEdit" aria-label="With textarea"></textarea>
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text col-md-3" id="inputGroup-sizing-default">UM</span>
                        <select name="umEdit" class="form-control custom-select" id="umEdit" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">

                        </select>
                        <span class="is-invalid"></span>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text col-md-3" id="inputGroup-sizing-default">Definition</span>
                        <textarea class="form-control" name="definitionEdit" id="definitionEdit" aria-label="With textarea"></textarea>
                        <span class="is-invalid"></span>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text col-md-3" id="inputGroup-sizing-default">Formula</span>
                        <textarea class="form-control" name="formulaEdit" aria-label="With textarea" id="formulaEdit"></textarea>
                        <span class="is-invalid"></span>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text col-md-3" id="inputGroup-sizing-default">Failure Flag</span>

                        <select name="failureFlagEdit" class="form-control custom-select" id="failureFlagEdit" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">

                        </select>
                        <span class="is-invalid"></span>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text col-md-3" id="inputGroup-sizing-default">Scope</span>
                        <textarea class="form-control" aria-label="With textarea" name="scopeEdit" id="scopeEdit"></textarea>
                        <span class="is-invalid"></span>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text col-md-3" id="inputGroup-sizing-default">Data Source</span>
                        <textarea class="form-control" aria-label="With textarea" name="dataSourceEdit" id="dataSourceEdit"></textarea>
                        <span class="is-invalid"></span>
                    </div>


                </div>

                <div class="modal-footer">
                    <input type="hidden" id="dataID">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary"  id="btnUpdate" >Save changes</button>
                </div>
            </form>
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
        var tableDept = $('#dataTableDepartment').DataTable({"ordering": false, "pageLength": 50});

        // jQuery.validator.addMethod("lettersonly", function(value, element) {
        //     return this.optional(element) || /^[a-z\s]+$/i.test(value);
        // }, "Only alphabetical characters");

        $("#newCompanyGoalForms").validate({
        invalidHandler: function(event, validator) {
            // 'this' refers to the form
            var errors = validator.numberOfInvalids();
            if (errors) {
            var message = errors == 1
                ? 'You missed 1 field. It has been highlighted'
                : 'You missed ' + errors + ' fields. They have been highlighted';
            $("div.error span").html(message);
            $("div.error").show();
            } else {
            $("div.error").hide();
            }
        }
        });

    $('#newCompanyGoalForm').validate({
        debug: true,
        errorClass: 'is-invalid',
        errorElement: "span",
        errorPlacement: function(error, element) {
            //  $('.invalid-feedback').append(error);
            error.appendTo( element.next("span") );
            console.log(element);
        },

        rules: {
            applyYear: {
                required: true,

            },
            newDepartment: {
                required: true
            },
            order: {
                required: true,
                maxlength:2,
                number:true
            },
            goalType: {
                required: true
            },
            category: {
                required: true,
            },
            qual_objective: {
                required: true,
            },
            um: {
                required: true
            },
            definition: {
                required: true
            },
            formula: {
                required: true
            },
            failureFlag:{
                required:true,
            },
            scope:{
                required:true,
            },
            dataSource:{
                required:true,
            }
        },
        messages: {
            applyYear: {
                required: "Please input Apply Year",
            },
            newDepartment: {
                required: "Please input Department",
            },
            order: {
                required: "Please Input Order",
                maxlength:"Please input of 2 maximum characters only",
            },
            goalType: {
                required: "Please select Goal Type",
            },
            category: {
                required: "Please select Category",
            },
            qual_objective: {
                required: "Please input KRA"
            },
            um: {
                required: "Please select Unit of Measurement"
            },
            definition: {
                required: "Please input Definition"

            },
            formula:{
                required: "Please input Formula",
            },
            failureFlag:{
                required: "Please select Failure Flag",
            },
            scope:{
                required: "Please input Scope",
            },
            dataSource:{
                required: "Please input Data Source",
            }
        }
    });



        $("#btnSave").click(function(){

            var section = $(this).closest(".multisteps-form__content");
            var fields = section.find(".form-control");


                if (fields.valid()){
                    //alert("valid");
                    valid = true;
                   // $(this).addClass("js-btn-next").trigger("click");
                }
                else{
                    //alert("not validss");
                    valid = false;
                }
            console.log($('#newCompanyGoalForm').validate());
            //alert("adad");
            $.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});
            $.ajax({
                type: "POST",
                url: "{{url('/dcc/company_goals/store')}}"+"/"+$("#department option:selected").val()+"/"+$("#department option:selected").text(),
                data: $("#newCompanyGoalForm").serialize(),
                dataType: "text",
                success: function (response) {
                    // alert(response);
                }
            });
        });


        const d = new Date();
        let year = d.getFullYear();
        $("#newGoal").click(function(){
            $("#applyYear").val(year);
            $("#newDepartment").val($("#department option:selected").text());

        })



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
                    // console.log(response);
                    // alert(response);
                    $.each(response, function (index, value) {
                        $("#department").append('<option value="'+value.id+'">'+value.code+'</option>')

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

            $("#departmentGoalsTab").click(function (e) {

                $("#spanDept").html($("#department option:selected").text());
                $("#spanYear").html($("#yearpicker option:selected").val());
                // e.preventDefault();
                // alert("test");

                tableDept.clear().draw();
                $.ajax({
                    type: "get",
                    url: "{{url('/dcc/department')}}"+'/'+$("#yearpicker option:selected").val()+'/'+$("#department option:selected").val(),
                    dataType: "json",
                    success: function (response) {
                        console.log(response);

                        var dataAppend2 = "";

                        $.each(response.result, function (i, v) {
                            if(v.qual_obj_goal.length != 0 && v.qual_obj_data.length != 0)
                            {
                                dataAppend2+= "<tr>";
                                // dataAppend2+= "<td style='width:180px;font-size:10px;padding:0px' ><button style='font-size:18px;height:30px;margin-bottom:6px' title='Edit' onclick='editGoals("+v.id+")' class='btn-sm'><i class='bx bx-edit-alt' style=''></i></button><button  title='Goal' style='font-size:18px;height:30px;margin-bottom:6px' href='#' class='btn-sm '><i class='bx bx-line-chart' ></i></button><button  style='font-size:18px;height:30px;margin-bottom:6px'title='Data' href='#' class='btn-sm '><i class='bx bxs-data' ></i></button></td>";

                                dataAppend2+= "<td style='width:180px;font-size:10px;padding:0px' ><button style='font-size:12px;height:30px;padding:0px 3px 0px 3px '  title='Edit' onclick='editGoals("+v.id+")' class='btn-sm'>Edit</button><button  title='Goal' style='font-size:12px;height:30px;padding:0px 3px 0px 3px '  href='#' class='btn-sm '>Goal</button><button  style='font-size:12px;height:30px;padding:0px 3px 0px 3px '  title='Data' onclick='dataDept("+v.id+")' href='#' class='btn-sm '>Data</button></td>";

                                // dataAppend2+= "<td style='width:180px;font-size:10px' onclick='editGoals("+v.id+")'><button class=' btn-sm '>Edit</button><button class=' btn-sm '>Goal</button><button class=' btn-sm '>Data</button></td>";
                                dataAppend2+= "<td style='width:10px;padding:0px;text-align:center'>"+v.qual_order+"</td>";
                                dataAppend2+= "<td style='width:20px;padding:0px'>"+v.qual_type.substring(0, 1)+"</td>";
                                dataAppend2+= "<td style='width:10px;padding:0px'> "+v.qual_category+"</td>";
                                dataAppend2+= "<td style='width:600px;padding:0px ' > "+v.qual_objective+"</td>";
                                dataAppend2+= "<td style='width:10px;font-size:12px;padding:0px'> "+v.qual_um+"</td>";

                                for(var i = 1; i<=12; i++){
                                    $.each(v.qual_obj_goal, function (ig, vg) {
                                    // console.log(vg.trans_month+'-');
                                        if(vg.trans_month==i.toString()){
                                            // console.log("true")
                                            if(vg.trans_goal === null||vg.trans_goal ==='' || vg.trans_goal === undefined){
                                                dataAppend2 += "<td style='padding:0px'>-</td>"
                                            }else{

                                                dataAppend2 += "<td style='padding:0px'>"+vg.trans_goal+"</td>"
                                            }
                                        }
                                    });
                                $.each(v.qual_obj_data, function (id, vd) {
                                    // console.log(vv[v.id]+'-');
                                        if(vd.trans_month==i.toString()){


                                            if(vd.trans_data==null||vd.trans_data ==='' || vd.trans_data === undefined){

                                                dataAppend2 += "<td>-</td>";
                                                //console.log(vd.trans_data);
                                            }else{
                                                if(v.qual_fail=="under"){
                                                    if(parseInt(vd.trans_data)< parseInt(v.qual_obj_goal[id].trans_goal)){
                                                        console.log(vd.trans_data+"=------"+v.qual_obj_goal[id].trans_goal);

                                                        dataAppend2 += "<td style='color:white;background-color:maroon;padding:0px'>"+vd.trans_data+"</td>";
                                                    }
                                                    else{

                                                        dataAppend2 += "<td style='color:white;background-color:green;padding:0px'>"+vd.trans_data+"</td>";
                                                    }

                                                }
                                                else{
                                                    if(parseInt(vd.trans_data) > parseInt(v.qual_obj_goal[id].trans_goal)){

                                                        dataAppend2 += "<td style='color:white;background-color:maroon;padding:0px'>"+vd.trans_data+"</td>";
                                                    }
                                                    else{

                                                        dataAppend2 += "<td style='color:white;background-color:green;padding:0px'>"+vd.trans_data+"</td>";
                                                    }


                                                }

                                            }
                                        }

                                    });
                                }

                                dataAppend2 += "</tr>";


                            }


                        });
                        // console.log(dataAppend2);
                        const tr =$(dataAppend2);
                        $.each(response.result, function (indexInArray, valueOfElement) {
                            // console.log(tr);
                            tableDept.row.add(tr[indexInArray]).draw();
                        });

                        // alert(response);
                    },
                    error: function(res){
                        alert(res);
                    }

                });

            });




            $("#btnUpdate").click(function(){
               var id = $("#dataID").val();
               alert(id);
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: "PUT",
                    url: "{{url('/dcc/company_goals/update')}}"+"/"+id,
                    data: $("#editCompanyGoalForm").serialize(),
                    dataType: "text",
                    success: function (response) {

                        if(response=="success"){

                            $("#editGoalModal").modal("hide");
                            Swal.fire({
                                title: 'Data Successfully Saved!',
                                icon: 'success',
                                confirmButtonColor: '#3085d6',
                                allowOutsideClick:false,
                                }).then((result) => {
                                if (result.isConfirmed) {
                                    $("#departmentGoalsTab").trigger("click");
                                }
                                })
                        }
                    },
                    error: function(res){
                        console.log(res +"error")
                        alert(res);
                    }
                });
            });

        });



            function company(){


                $("#companyGoalsTab").trigger("click");
            }
            function department(){

                $("#departmentGoalsTab").trigger("click");
            }


        function graphData(data){

            console.log("returned data");
            console.log(data);
            am5.ready(function() {

            // Create root element
            // https://www.amcharts.com/docs/v5/getting-started/#Root_element
            var root = am5.Root.new("chartdiv");

            // Set themes
            // https://www.amcharts.com/docs/v5/concepts/themes/
            root.setThemes([am5themes_Animated.new(root)]);

            // Create chart
            // https://www.amcharts.com/docs/v5/charts/xy-chart/
            var chart = root.container.children.push(
            am5xy.XYChart.new(root, {
                panX: false,
                panY: false,
                wheelX: "panX",
                wheelY: "zoomX",
                layout: root.verticalLayout
            })
            );

            // Add scrollbar
            // https://www.amcharts.com/docs/v5/charts/xy-chart/scrollbars/
            chart.set(
            "scrollbarX",
            am5.Scrollbar.new(root, {
                orientation: "horizontal"
            })
            );

            // Create axes
            // https://www.amcharts.com/docs/v5/charts/xy-chart/axes/
            var xAxis = chart.xAxes.push(
            am5xy.CategoryAxis.new(root, {
                categoryField: "month",
                renderer: am5xy.AxisRendererX.new(root, {}),
                tooltip: am5.Tooltip.new(root, {})
            })
            );

            xAxis.data.setAll(data);

            var yAxis = chart.yAxes.push(
            am5xy.ValueAxis.new(root, {
                min: 0,
                extraMax: 0.1,
                renderer: am5xy.AxisRendererY.new(root, {})
            })
            );


            // Add series
            // https://www.amcharts.com/docs/v5/charts/xy-chart/series/

            var series1 = chart.series.push(
            am5xy.ColumnSeries.new(root, {
                name: "Actual",
                xAxis: xAxis,
                yAxis: yAxis,
                valueYField: "actual",
                categoryXField: "month",
                tooltip:am5.Tooltip.new(root, {
                pointerOrientation:"horizontal",
                labelText:"{name} in {categoryX}: {valueY} {info}"
                })
            })
            );

            series1.columns.template.setAll({
            tooltipY: am5.percent(10),
            templateField: "columnSettings"
            });

            series1.data.setAll(data);

            var series2 = chart.series.push(
            am5xy.LineSeries.new(root, {
                name: "Goal",
                xAxis: xAxis,
                yAxis: yAxis,
                valueYField: "goal",
                categoryXField: "month",
                tooltip:am5.Tooltip.new(root, {
                pointerOrientation:"horizontal",
                labelText:"{name} in {categoryX}: {valueY} {info}"
                })
            })
            );

            series2.strokes.template.setAll({
            strokeWidth: 3,
            templateField: "strokeSettings"
            });


            series2.data.setAll(data);

            series2.bullets.push(function () {
            return am5.Bullet.new(root, {
                sprite: am5.Circle.new(root, {
                strokeWidth: 3,
                stroke: series2.get("stroke"),
                radius: 5,
                fill: root.interfaceColors.get("background")
                })
            });
            });

            chart.set("cursor", am5xy.XYCursor.new(root, {}));

            // Add legend
            // https://www.amcharts.com/docs/v5/charts/xy-chart/legend-xy-series/
            var legend = chart.children.push(
            am5.Legend.new(root, {
                centerX: am5.p50,
                x: am5.p50
            })
            );
            legend.data.setAll(chart.series.values);

            // Make stuff animate on load
            // https://www.amcharts.com/docs/v5/concepts/animations/
            chart.appear(1000, 100);
            series1.appear();

            }); // end am5.ready()


        }

        function dataDept(id){


            var dataArr = [];
            var obj = {};

            $.ajax({
                type: "GET",
                url: "{{url('/dcc/department_goals/data')}}"+"/"+id,
                dataType: "json",
                success: function (response) {
                    console.log("response");
                    console.log(response.result);
                    var result = response.result;
                    var goal = result.goal;
                    console.log("goal");
                    console.log(goal);
                    var data = result.data;
                    console.log("data");
                    console.log(data);

                    //var jsonData = JSON.parse(response['result']);
                    // var jsonResult = jsonData['result'];


                    // $.each(goal, function (indexInArray, valueOfElement) {

                    // });
                        var months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'June', 'July', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'];
                        var year = $("#yearpicker option:selected").val();
                    for (var index = 0; index < goal.length; index++) {
                        obj = {};
                        console.log(data[index]['trans_data']+" "+index);
                        console.log(goal[index]['trans_goal']+" "+index);
                        obj['month'] = months[index];
                        obj['actual'] = parseInt(data[index]['trans_data']);
                        // obj['townSize'] = "8";
                        obj['goal'] = parseInt(goal[index]['trans_goal']);


                        dataArr.push(obj);

                    }
                    console.log(dataArr)
                    graphData(dataArr);




                },
                error: function (res){
                    alert("ERROR:" + res);
                }
            });

            $("#departmentDataTab").trigger("click");
            // chart.dataSource.url = "{{url('/dcc/department_goals/data')}}"+"/"+id;
            // chart.dataSource.parser = am4core.JSONParser;

        }

        function editGoals(id){
            // alert(id);
            $("#goalTypeEdit").empty();
            $("#categoryEdit").empty();
            $("#failureFlagEdit").empty();
            $("#umEdit").empty();
            $("#editGoalModal").modal("show");
            $.ajax({
                type: "get",
                url: "{{url('/dcc/company_goals/edit/')}}"+'/'+id,
                dataType: "json",
                success: function (response) {
                    console.log(response);
                    // alert(response);
                    $("#dataID").val(response.data[0].id)
                    var qual_type =response.data[0].qual_type;
                    var goalTypeArr = ["Company", "Department"];
                    $.each(goalTypeArr, function (i, v) {
                        var value= v;
                        var text= value;
                        var selected="";
                        if(qual_type==v){selected="selected";}
                        else{selected="";}
                        $("#goalTypeEdit").append('<option value="'+value+'  " '+selected+' >'+text+'</option>');

                    });

                    var qual_category =response.data[0].qual_category;
                    var categoryArr =["Quality","Delivery","Cost","People Development","Quality","Overall Customer Satisfaction Level","QD","QC","QP","DC","DP","CP","QP","QDC","DCP","QCP","QDCP"];
                    $.each(categoryArr, function (i, v) {
                        var value= v;
                        var text= value;
                        var selected="";
                        if(qual_category==v){selected="selected";}
                        else{selected="";}
                        $("#categoryEdit").append('<option value="'+value+'  " '+selected+' >'+text+'</option>');

                    });

                    $("#applyYearEdit").val(response.data[0].qual_year);
                    $("#orderEdit").val(response.data[0].qual_order);
                    $("#applyYearEdit").val(response.data[0].qual_year);
                    $("#newDepartmentEdit").val(response.data[0].department);
                    $("#qual_objectiveEdit").val(response.data[0].qual_objective);
                    $("#definitionEdit").val(response.data[0].qual_definition);
                    $("#formulaEdit").val(response.data[0].qual_formula);

                    var failFlagArr = ["under", "over"];

                    var qual_fail =response.data[0].qual_fail;
                    $.each(failFlagArr, function (i, v) {
                        var value= v;
                        var text= '';
                        var selected="";

                        if(qual_fail==v){selected="selected";}
                        else{selected="";}

                        if(v=="under"){
                            text='Below Target';
                        }
                        else{
                            text="Over Target";
                        }
                        $("#failureFlagEdit").append('<option value="'+value+'  " '+selected+' >'+text+'</option>');

                    });



                    // alert(response);

                    var qual_um =response.data[0].qual_um;
                    var umArr = ["%", "PPM", "PPB", "Days", "Occurrence"];

                    $.each(umArr, function (i, v) {
                        var value= v;
                        var text= value;
                        var selected="";
                        if(qual_um==v){selected="selected";}
                        else{selected="";}
                        $("#umEdit").append('<option value="'+value+'  " '+selected+' >'+text+'</option>');

                    });

                    // $("#definitionEdit").val(response.data[0].qual_formula);
                    $("#scopeEdit").val(response.data[0].qual_scope);
                    $("#dataSourceEdit").val(response.data[0].qual_source);
                },
                error:function(res){
                    // alert(res);
                }
            });
        }


    </script>

    <script>

    </script>
    @endsection

@endsection
