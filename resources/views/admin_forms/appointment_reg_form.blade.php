<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from themetrace.com/demo/chain/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 Mar 2020 04:30:31 GMT -->
@include('admin_layouts.styling')

    <body>
        
    @include('admin_layouts.top_navbar')
        
        <section>
            <div class="mainwrapper">
            @include('admin_layouts.sidebar')
                
                <div class="mainpanel">
                    
                    
                    <div class="contentpanel">
                        
                   
<form action="/create-visits" method="post" id="valWizard" class="panel-wizard">
    <ul class="nav nav-justified nav-wizard nav-disabled-click">
        <li><a href="#Patient info" data-toggle="tab"><strong>Step 1:</strong> Patients Info</a></li>
        <li><a href="#Visits" data-toggle="tab"><strong>Step 2:</strong> Visits</a></li>
        <li><a href="#Appointments" data-toggle="tab"><strong>Step 3:</strong> Appointments</a></li>
    </ul>
        <div class="tab-pane" id="Appointments">
            <div class="form-group">
                <label class="col-sm-4">Patient No</label>
                <div class="col-sm-8">
                    <input type="text" name="patientNo" class="form-control" />
                </div>
            </div><!-- form-group -->

            <div class="form-group">
                <label class="col-sm-4">Patient Names</label>
                <div class="col-sm-8">
                    <input type="text" name="patient" class="form-control" />
                </div>
            </div><!-- form-group -->

            <div class="form-group">
                <label class="col-sm-4">Visit No</label>
                <div class="col-sm-4">
                    <input type="text" name="visitNo" class="form-control" />
                </div>
            </div><!-- form-group -->

            <div class="form-group">
                <label class="col-sm-4">Appointment No</label>
                <div class="col-sm-4">
                    <input type="text" name="appointment" class="form-control" />
                </div>
            </div><!-- form-group -->

            <div class="form-group">
                <label class="col-sm-4">Appointment Date</label>
                <div class="col-sm-4">
                    <input type="text" name="appointmentdate" class="form-control" placeholder="mm/dd/yyyy" id="datepicker-multiple" required />
                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                </div>
            </div><!-- form-group -->

            <div class="form-group">
                <label class="col-sm-4">Appointment Time</label>
                <div class="col-sm-4">
                    <input type="text" name="appointmenttime" class="form-control" required />
                </div>
            </div><!-- form-group -->
        </div><!-- tab-pane -->

        <ul class="list-unstyled wizard">
            <li class="pull-left previous"><button type="button" class="btn btn-default">Previous</button></li>
            <li class="pull-right next"><button type="button" class="btn btn-primary">Next</button></li>
            <li class="pull-right finish hide"><button type="submit" class="btn btn-primary">Finish</button></li>
        </ul>
        
    </form><!-- panel-wizard -->
  
                       


        </section>


        @include('admin_layouts.javascript')
    </body>

<!-- Mirrored from themetrace.com/demo/chain/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 Mar 2020 04:30:31 GMT -->
</html>


