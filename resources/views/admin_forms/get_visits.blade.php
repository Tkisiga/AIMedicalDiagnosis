@extends('admin_layouts.main')
@section('page_css')
<link href="{{asset('css/select2.css')}}" rel="stylesheet" />
<link href="{{asset('css/style.datatables.css')}}" rel="stylesheet">
<link href="{{asset('cdn.datatables.net/responsive/1.0.1/css/dataTables.responsive.css')}}" rel="stylesheet">
<link href="{{asset('css/style.default.css" rel="stylesheet')}}">
<link href="{{asset('css/jquery.tagsinput.css" rel="stylesheet')}}" />
<link href="{{asset('css/toggles.css" rel="stylesheet')}}" />
<link href="{{asset('css/bootstrap-timepicker.min.css" rel="stylesheet')}}" />
<link href="{{asset('css/select2.css" rel="stylesheet')}}" />
<link href="{{asset('css/colorpicker.css" rel="stylesheet')}}" />
<link href="{{asset('css/dropzone.css" rel="stylesheet')}}" />
@endsection
@section('main_content')
@include('admin_layouts.datatables')
<div class="modal fade" id="visitModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                        <div class="card">
                        <!-- BASIC WIZARD -->
                            <form method="get" action ="/create-visits"  >
                                <div class= "form-group">
                                    <label class="col-sm-4 control-label">Patient:<span class="asterisk">*</span></label>
                                    <div class="form-group">
                                        <input type="text" name="patient_name" autocomplete="off" id="patientName" class="form-control" title="Field is required!" required/>
                                    </div>
                                </div><!-- form-group -->

                                <div class="form-group">
                                    <label>Visit Date:<span class="asterisk">*</span> </label>
                                        <div class="input-group">
                                            <input type="date" name="visit_date" class="form-control" placeholder="mm/dd/yyyy" required/>
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                        </div><!-- input-group -->
                                </div><!-- form-group -->

                                <div class="form-group">
                                    <label>Visit Category:<span class="asterisk">*</span> </label>
                                    <div class="form-group">
                                        <select id="select-search-hide" class="form-control" name="visit_category" data-placeholder="Choose One" class="width300" required> 
                                            <option value="Self Request">Self Request</option>
                                            <option value="Consultation">Consultation</option>
                                            <option value="Follow Up">Follow Up</option>
                                            <option value="Referral">Referral</option>
                                            <option value="Refill">Refill</option>
                                        </select>
                                    </div>
                                </div><!-- form-group -->

                                <div class="form-group">
                                    <label>Next Visit Date:<span class="asterisk">*</span> </label>
                                        <div class="input-group">
                                            <input type="date" name="next_visit" class="form-control" placeholder="mm/dd/yyyy" required/>
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                        </div><!-- input-group -->
                                </div><!-- form-group -->
                            
                        </div> 
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

<script src="{{asset('js/jquery-1.11.1.min.js')}}"></script>
<script src="{{asset('js/jquery-migrate-1.2.1.min.js')}}"></script>
<script src="{{asset('js/jquery-ui-1.10.3.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{ asset('vendors/bootstrap3-typeahead.min.js') }}"></script>
<script src="{{asset('js/modernizr.min.js')}}"></script>
<script src="{{asset('js/pace.min.js')}}"></script>
<script src="{{asset('js/retina.min.js')}}"></script>
<script src="{{asset('js/jquery.cookies.js')}}"></script>

<script src="{{asset('js/jquery.autogrow-textarea.js')}}"></script>
<script src="{{asset('js/jquery.mousewheel.js')}}"></script>
<script src="{{asset('js/jquery.tagsinput.min.js')}}"></script>
<script src="{{asset('js/toggles.min.js')}}"></script>
<script src="{{asset('js/bootstrap-timepicker.min.js')}}"></script>
<script src="{{asset('js/jquery.maskedinput.min.js')}}"></script>
<script src="{{asset('js/select2.min.js')}}"></script>
<script src="{{asset('js/colorpicker.js')}}"></script>
<script src="{{asset('js/dropzone.min.js')}}"></script>

<script src="{{asset('js/custom.js')}}"></script>
<script>
    

    $(document).ready(function() {

$("#patientName").typeahead({
    source:function(query,result){
        $.ajax({
        url:"{{ Route('patient.search.modal') }}",
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
        
        // Spinner
        var spinner = jQuery('#spinner').spinner();
        spinner.spinner('value', 0);
        
        // Form Toggles
        jQuery('.toggle').toggles({on: true});
        
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
        
        // Input Masks
        jQuery("#date").mask("99/99/9999");
        jQuery("#phone").mask("(999) 999-9999");
        jQuery("#ssn").mask("999-99-9999");
        
        // Select2
        jQuery("#select-basic, #select-multi").select2();
        jQuery('#select-search-hide').select2({
            minimumResultsForSearch: -1
        });
        
        function format(item) {
            return '<i class="fa ' + ((item.element[0].getAttribute('rel') === undefined)?"":item.element[0].getAttribute('rel') ) + ' mr10"></i>' + item.text;
        }
        
        // This will empty first option in select to enable placeholder
        jQuery('select option:first-child').text('');
        
        jQuery("#select-templating").select2({
            formatResult: format,
            formatSelection: format,
            escapeMarkup: function(m) { return m; }
        });
        
        // Color Picker
        if(jQuery('#colorpicker').length > 0) {
            jQuery('#colorSelector').ColorPicker({
    onShow: function (colpkr) {
        jQuery(colpkr).fadeIn(500);
                    return false;
    },
    onHide: function (colpkr) {
                    jQuery(colpkr).fadeOut(500);
                    return false;
    },
    onChange: function (hsb, hex, rgb) {
        jQuery('#colorSelector span').css('backgroundColor', '#' + hex);
        jQuery('#colorpicker').val('#'+hex);
    }
            });
        }

        // Color Picker Flat Mode
        jQuery('#colorpickerholder').ColorPicker({
            flat: true,
            onChange: function (hsb, hex, rgb) {
    jQuery('#colorpicker3').val('#'+hex);
            }
        });
        
        
    });
</script>
@endsection

