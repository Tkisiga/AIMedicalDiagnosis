@extends('admin_layouts.main')
@section('page_css')
@endsection
@section('main_content')
@include('admin_layouts.message')
<div class="panel-heading col-md-10 panel">
    <h5 style="text-align: center" class="panel-title">{{request()->route()->getName()}}</h5>
</div>   
                    
<div class="col-md-10 panel " >
    <!-- BASIC WIZARD -->
    <div class="card">
    @foreach($edit_visits as $edit_visits)
        <form method="get" action ="/change-visits/{{$edit_visits->id}}">
    
            <div class= "form-group">
                <label class="col-sm-4 control-label">Patient ID:<span class="asterisk">*</span></label>
                <div class="form-group">
                    <input type="text" value="{{$edit_visits->patient_name}}" name="patient_name" class="form-control" title="Field is required!" />
                </div>
            </div><!-- form-group -->

            <div class="form-group">
                <label>Visit Date:<span class="asterisk">*</span> </label>
                <div class="input-group">
                    <input type="date" value="{{$edit_visits->visit_date}}" name="visit_date" class="form-control" placeholder="mm/dd/yyyy"/>
                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                </div><!-- input-group -->
            </div><!-- form-group -->

            <div class="form-group">
                <label>Visit Category:<span class="asterisk">*</span> </label>
                <div class="form-group">
                    <select class="form-control" id="select-search-hide" value="{{$edit_visits->visit_category}}" name="visit_category" data-placeholder="Choose One" class="width300">
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
                    <input type="date" value="{{$edit_visits->next_visit}}" name="next_visit" class="form-control" placeholder="mm/dd/yyyy" />
                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                </div><!-- input-group -->
            </div><!-- form-group -->

            <div class="panel-footer">
                <div class="row">
                    <div class="col-sm-9 col-sm-offset-3">
                        <button class="btn btn-primary mr5">Submit</button>
                        <button type="reset" class="btn btn-dark">Reset</button>
                        <a href="/get-visits"><button type="button" class="btn btn-dark">Back</button></a>
                    </div>
                </div>
            </div><!-- panel-footer -->         
        </form> 
    @endforeach

    </div> 
</div>
@endsection

@section('page_js')

<script src="{{asset('js/custom.js')}}"></script>
<script>
    jQuery(document).ready(function() {
        
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