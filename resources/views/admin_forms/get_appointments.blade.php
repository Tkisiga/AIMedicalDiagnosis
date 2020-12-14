@extends('admin_layouts.main')
@section('page_css')
<link href="{{asset('css/select2.css')}}" rel="stylesheet" />
<link href="{{asset('css/style.datatables.css')}}" rel="stylesheet">
<link href="{{asset('cdn.datatables.net/responsive/1.0.1/css/dataTables.responsive.css')}}" rel="stylesheet">
@endsection
@section('main_content')
@include('admin_layouts.datatables')
<div class="modal fade" id="appointmentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="panel-heading col-md-10 panel">
                    <h5 style="text-align: center" class="panel-title">{{request()->route()->getName()}}</h5>
                </div><!-- panel-heading --> 
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-10 panel">
                        <form method="get" action ="/create-appointments">
                            <div class= "form-group">
                                <label class="col-sm-4 control-label">Patient:<span class="asterisk">*</span></label>
                                    <div class="form-group">
                                        <input type="text" name="patient_name" autocomplete="off" id="patientName" class="form-control" title="Field is required!" required/>
                                    </div>
                            </div><!-- form-group -->
                            <div class= "form-group">
                                <label class="col-sm-4 control-label">Medical Practitioner:<span class="asterisk">*</span></label>
                                    <div class="form-group">
                                        <input type="text" name="medical_practitioner_name" autocomplete="off" id="userName" class="form-control" title="Field is required!" required/>
                                    </div>
                            </div><!-- form-group -->
                            <div class="form-group">
                                <label>Appointment Date:<span class="asterisk">*</span> </label>
                                <div class="input-group">
                                    <input type="date" name="appointment_date" class="form-control" placeholder="mm/dd/yyyy">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                </div><!-- input-group -->
                            </div><!-- form-group -->
                            <div class="form-group">
                                <label>Appointment Time:<span class="asterisk">*</span></label>
                                <div class="input-group mb15">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                                <div class="bootstrap-timepicker"><input name="appointment_time" id="timepicker" type="time" class="form-control"/></div>
                            </div><!-- input-group -->
                            <div class="form-group">
                                <label class="col-sm-4 control-label">status:<span class="asterisk">*</span></label>
                                <div class=" col-sm-4">
                                    <input type="radio" name="status" value="Confirmed" id="radioPrimary" />
                                    <label>Confirmed</label>
                                </div>
                                <div class=" col-sm-4">
                                    <input type="radio" name="status" value="Not Confirmed" id="radioPrimary" />
                                    <label>Not Confirmed</label>
                                </div>
                            </div><!-- form-group -->
                                     
                        
                    </div>
                </div><!-- tab-pane -->
            </div>
            <div class="modal-footer">
                <div class="panel-footer">
                        <div class="row">
                            <div class="col-sm-9 col-sm-offset-3">
                                <button class="btn btn-primary mr5">Submit</button>
                                <button type="reset" class="btn btn-dark">Reset</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    
                            </div>
                        </div>
                    </div><!-- panel-footer -->
            </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('page_js')
<script src="{{asset('js/custom.js')}}"></script>
<script src="{{ asset('vendors/bootstrap3-typeahead.min.js') }}"></script>
<script src="{{asset('js/jquery.autogrow-textarea.js')}}"></script>
        <script src="{{asset('js/jquery.mousewheel.js')}}"></script>
        <script src="{{asset('js/jquery.tagsinput.min.js')}}"></script>
        <script src="{{asset('js/toggles.min.js')}}"></script>
        <script src="{{asset('js/bootstrap-timepicker.min.js')}}"></script>
        <script src="{{asset('js/jquery.maskedinput.min.js')}}"></script>
        <script src="{{asset('js/select2.min.js')}}"></script>
        <script src="{{asset('js/colorpicker.js')}}"></script>
        <script src="{{asset('js/dropzone.min.js')}}"></script>
        <script src="{{ asset('vendors/bootstrap3-typeahead.min.js') }}"></script>

        <script src="js/custom.js"></script>

<script>
    
    $(document).ready(function() {

$("#patientName").typeahead({
    source:function(query,result){
        $.ajax({
        url:"{{ Route('patient1.search.modal') }}",
        method:'get',
        data:{
            query:query,
        },
        dataType:'json',
        success: function(data){
            result($.map(data, function(item){
            return item;
            }));
        },
        error:function(data){
            console.log('am not getting anything');
        },
        });
    }
    });

    $("#userName").typeahead({
    source:function(query,result){
        $.ajax({
        url:"{{ Route('medical.practitioner.search.modal') }}",
        method:'get',
        data:{
            query:query,
        },
        dataType:'json',
        success: function(data){
            result($.map(data, function(item){
            return item;
            }));
        },
        error:function(data){
            console.log('am not getting anything');
        },
        });
    }
    });




        
        // Tags Input
        jQuery('#tags').tagsInput({width:'auto'});
            
        // Textarea Autogrow
        jQuery('#autoResizeTA').autogrow();
        
        
        // Time Picker
        jQuery('#timepicker').timepicker({defaultTIme: false});
        jQuery('#timepicker2').timepicker({showMeridian: false});
        jQuery('#timepicker3').timepicker({minuteStep: 15});
        
        // Date Picker
        jQuery('#datepicker').datepicker();
        jQuery('#datepicker-inline').datepicker();
        jQuery('#datepicker-multiple').datepicker({
            numberOfMonths: 3,
            showButtonPanel: true
        });
        
    });
</script>
@endsection