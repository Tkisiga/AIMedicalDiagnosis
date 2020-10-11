<div class="col-md-6">
                                <h5 class="lg-title">Wizard with Form Validation</h5>
                                <p class="mb20">Same with basic wizard setup but with form validation</p>

                                <!-- BASIC WIZARD -->
                                <form action="/create-visits" method="post" id="valWizard" class="panel-wizard">
                                    <ul class="nav nav-justified nav-wizard nav-disabled-click">
                                        <li><a href="#Patient info" data-toggle="tab"><strong>Step 1:</strong> Patients Info</a></li>
                                        <li><a href="#Visits" data-toggle="tab"><strong>Step 2:</strong> Visits</a></li>
                                        <li><a href="#Appointments" data-toggle="tab"><strong>Step 3:</strong> Appointments</a></li>
                                    </ul>

                                    <div class="tab-content">
                                        
                                        <div class="tab-pane" id="Visits">
                                            <div class="form-group">
                                                <label class="col-sm-4">Patients No</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="patientNo" class="form-control" required />
                                                </div>
                                            </div><!-- form-group -->
                                            
                                            <div class="form-group">
                                                <label class="col-sm-4">Visit No</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="visitNo" class="form-control" required />
                                                </div>
                                            </div><!-- form-group -->

                                            <div class="form-group">
                                                <label class="col-sm-4">Visit Date</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="visitdate" class="form-control" placeholder="mm/dd/yyyy" id="datepicker-multiple" required />
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                                </div>
                                            </div><!-- form-group -->

                                            <div class="form-group">
                                                <label class="col-sm-4">Category No</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="category" class="form-control" required />
                                                    <select id="select-search-hide" data-placeholder="Choose One" class="width300" required>
                                                        <option >Consultation</option>
                                                        <option >Referal</option>
                                                        <option >Refill</option>
                                                        <option >Medication</option>
                                                        <option >Follow up</option>
                                                </div>
                                            </div><!-- form-group -->

                                            <div class="form-group">
                                                <label class="col-sm-4">Patients Names</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="names" class="form-control" required />
                                                </div>
                                            </div><!-- form-group -->

                                            <div class="form-group">
                                                <label class="col-sm-4">Age</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="age" class="form-control" required />
                                                </div>
                                            </div><!-- form-group -->

                                            <div class="form-group">
                                                <label class="col-sm-4">Gender</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="gender" class="form-control" required />
                                                    <select id="select-search-hide" data-placeholder="Choose One" class="width300" required>
                                                        <option >Male</option>
                                                        <option >Female</option>
                                                </div>
                                            </div><!-- form-group -->

                                            <div class="form-group">
                                                <label class="col-sm-4">Join Date</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="joindate" class="form-control" placeholder="mm/dd/yyyy" id="datepicker-multiple" required />
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                                </div>
                                            </div><!-- form-group -->

                                            <div class="form-group">
                                                <label class="col-sm-4">Last Visit Date</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="lastvisitdate" class="form-control" placeholder="mm/dd/yyyy" id="datepicker-multiple" required />
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                                </div>
                                            </div><!-- form-group -->
                                            
                                        </div><!-- tab-pane -->

                                        
                                    </div><!-- tab-content -->
                
                                    <ul class="list-unstyled wizard">
                                        <li class="pull-left previous"><button type="button" class="btn btn-default">Previous</button></li>
                                        <li class="pull-right next"><button type="button" class="btn btn-primary">Next</button></li>
                                        <li class="pull-right finish hide"><button type="submit" class="btn btn-primary">Finish</button></li>
                                    </ul>
                                    
                                </form><!-- panel-wizard -->
              
                            </div><!-- col-md-6 -->