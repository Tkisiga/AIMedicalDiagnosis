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
                @include('admin_layouts.message')
                        <div class="panel-heading">
                            <h5 class="panel-title">{{request()->route()->getName()}}</h5>
                        </div><!-- panel-heading -->    
                    
                    <div class="contentpanel">
                        
                        <div class="col-md-6 panel " >

                            <!-- BASIC WIZARD -->
                           <div class="card">
                            <form method="get" action ="/create-patients">
                            
                                <div class= "col-sm-4"  >
                                    <label class="col-sm-4 control-label">First Name:<span class="asterisk">*</span></label>
                                    <div class="form-group">
                                        <input type="text" name="first_name" class="form-control" title="Field is required!" />
                                    </div>
                                </div><!-- form-group -->

                                <div class="col-sm-4">
                                    <label class="col-sm-4 control-label">Last Name:<span class="asterisk">*</span></label>
                                    <div class="form-group">
                                        <input type="text" name="last_name" class="form-control" title="Field is required!"/>
                                    </div>
                                </div><!-- form-group -->

                                <div class="col-sm-4">
                                    <label class="col-sm-4 control-label">Other Names:</label>
                                    <div class="form-group">
                                        <input type="text" name="other_name" class="form-control" />
                                    </div>
                                </div><!-- form-group -->

                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Age:<span class="asterisk">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="text" name="age" class="form-control" title="Field is required!" required/>
                                    </div>
                                </div><!-- form-group -->

                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Gender:<span class="asterisk">*</span></label>
                                    
                                    <div class=" col-sm-4">
                                        <input type="radio" name="gender" value="Male" id="radioPrimary" />
                                        <label>Male</label>
                                    </div>
                                        
                                    <div class=" col-sm-4">
                                        <input type="radio" name="gender" value="Female" id="radioPrimary" />
                                        <label>Female</label>
                                    </div>
                                </div><!-- form-group -->

                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Address:<span class="asterisk">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="text" name="address" class="form-control" title="Field is required!" required/>
                                    </div>
                                </div><!-- form-group -->

                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Patient Contact:<span class="asterisk">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="text" name="phone_number" class="form-control" title="Field is required!" required/>
                                    </div>
                                </div><!-- form-group -->

                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Next of kin:<span class="asterisk">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="text" name="kin" class="form-control" title="Field is required!" required/>
                                    </div>
                                </div><!-- form-group -->

                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Next of kin Contact:<span class="asterisk">*</span></label>
                                    <div class="col-sm-8">
                                        <input type="text" name="kin_contact" class="form-control" title="Field is required!" required/>
                                    </div>
                                </div><!-- form-group -->
                            
                                <div class="panel-footer">
                                    <div class="row">
                                        <div class="col-sm-9 col-sm-offset-3">
                                            <button class="btn btn-primary mr5">Submit</button>
                                            <button type="reset" class="btn btn-dark">Reset</button>
                                        </div>
                                    </div>
                                </div><!-- panel-footer -->         
                            </form> 
                        </div> 

                        </div><!-- tab-pane -->

                </div>
            </div>
                         
        

        </section>


        @include('admin_layouts.javascript')
    </body>

<!-- Mirrored from themetrace.com/demo/chain/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 Mar 2020 04:30:31 GMT -->
</html>














