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
                        
                    
                    
        <h5 style="text-align: center" class="lg-title">{{request()->route()->getName()}}</h5>
        <div class="row">
                        <div class="col-md-12 panel">

        <!-- BASIC WIZARD -->
        <form method="get" action="/create-clinicFindings" id="valWizard" class="panel-wizard">
            <ul class="nav nav-justified nav-wizard nav-disabled-click">
                <li><a href="#tab1-4" selected="true" data-toggle="tab"><strong>Symptoms</strong></a></li>
                <li><a href="#tab2-4" data-toggle="tab"><strong>Observations</strong></a></li>
                <li><a href="#tab3-4" data-toggle="tab"><strong>Clinical Examinations</strong></a></li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane" id="tab1-4">
                    
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Symptoms</label>
                            <div class="col-sm-8">
                                <div class="ckbox ckbox-default">
                                    <input type="checkbox" value="fatigue" id="checkboxDefault"/>
                                    <label for="checkboxDefault">Fatigue</label>
                                </div>
                                    
                                <div class="ckbox ckbox-default">
                                    <input type="checkbox" value="nausea" id="checkboxNause"/>
                                    <label for="checkboxNause">Nausea</label>
                                </div>
                                <div class="ckbox ckbox-default">
                                    <input type="checkbox" value="hyperphagia" id="checkboxHyper"/>
                                    <label for="checkboxHyper">Hyperphagia</label>
                                </div>
                                <div class="ckbox ckbox-default">
                                    <input type="checkbox" value="blurry vision" id="checkboxBlur"  />
                                    <label for="checkboxBlur">Blurry Vision</label>
                                </div>
                                <div class="ckbox ckbox-default">
                                    <input type="checkbox" value="weight loss" id="checkboxWei"/>
                                    <label for="checkboxWei">Weight Loss</label>
                                </div>
                                <div class="ckbox ckbox-default">
                                    <input type="checkbox" value="mood change" id="checkboxMo"/>
                                    <label for="checkboxMo">Mood Change</label>
                                </div>
                                <div class="ckbox ckbox-default">
                                    <input type="checkbox" value="nocturia" id="checkboxNo"/>
                                    <label for="checkboxNo">Nocturia</label>
                                </div>
                                <div class="ckbox ckbox-default">
                                    <input type="checkbox" value="genital candidiasis" id="checkboxGe"/>
                                    <label for="checkboxGe">Genital Candidiasis</label>
                                </div>
                                <div class="ckbox ckbox-default">
                                    <input type="checkbox" value="headache" id="checkboxHead"/>
                                    <label for="checkboxHead">Headache</label>
                                </div>
                                <div class="ckbox ckbox-default">
                                    <input type="checkbox" value="polyuria" id="checkboxPo"/>
                                    <label for="checkboxPo">Polyuria</label>
                                </div>
                                <div class="ckbox ckbox-default">
                                    <input type="checkbox" value="dry mouth" id="checkboxDr"/>
                                    <label for="checkboxDr">Dry Mouth</label>
                                </div>
                                

                                    
                                                    
                            
                            </div><!-- col-sm-8 -->
                    </div><!-- form-group -->  
                    
                    
                    
                </div><!-- tab-pane -->
                
                <div class="tab-pane" id="tab2-4">
                    
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Observations</label>
                            <div class="col-sm-8">
                                <div class="ckbox ckbox-default">
                                    <input type="checkbox" value="dehydration" id="checkboxDe"  />
                                    <label for="checkboxDe">Dehydration</label>
                                </div>
                                    
                                <div class="ckbox ckbox-default">
                                    <input type="checkbox" value="air hunger" id="checkboxAi" />
                                    <label for="checkboxAi">Air hunger</label>
                                </div>
                                <div class="ckbox ckbox-default">
                                    <input type="checkbox" value="mucosal candidiasis" id="checkboxMus" />
                                    <label for="checkboxMus">Mucosal candidiasis</label>
                                </div>
                                
                            </div><!-- tab-pane -->
                    </div>
                </div>
                
                <div class="tab-pane" id="tab3-4">
                    
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Hands</label>
                            <div class="col-sm-8">
                                <div class="ckbox ckbox-default">
                                    <input type="checkbox" value="cheiroarthropathy" id="checkboxM"  />
                                    <label for="checkboxM">Cheiroarthropathy</label>
                                </div>
                                    
                                <div class="ckbox ckbox-default">
                                    <input type="checkbox" value="trigger fingers" id="checkboxN"  />
                                    <label for="checkboxN">Trigger fingers</label>
                                </div>
                                <div class="ckbox ckbox-default">
                                    <input type="checkbox" value="muscle wasting" id="checkboxL"  />
                                    <label for="checkboxL">Muscle wasting</label>
                                </div>
                                <div class="ckbox ckbox-default">
                                    <input type="checkbox" value="sclerodatyly" id="checkboxK"  />
                                    <label for="checkboxK">Sclerodatyly</label>
                                </div>
                                <div class="ckbox ckbox-default">
                                    <input type="checkbox" value="carpal tunnel syndrome" id="checkboxJ"  />
                                    <label for="checkboxJ">Carpal Tunnel Syndrome</label>
                                </div>

                    
                            </div><!-- tab-pane -->
                            <label class="col-sm-4 control-label" name="Skin" >Skin</label>
                            <div class="col-sm-8">
                                <div class="ckbox ckbox-default">
                                    <input type="checkbox" value="bullae" id="checkboxH"  />
                                    <label for="checkboxH">Bullae</label>
                                </div>
                                    
                                <div class="ckbox ckbox-default">
                                    <input type="checkbox" value="pigmentation" id="checkboxG"  />
                                    <label for="checkboxG">Pigmentation</label>
                                </div>
                                <div class="ckbox ckbox-default">
                                    <input type="checkbox" value="granuloma annulare" id="checkboxS"  />
                                    <label for="checkboxS">Granuloma Annulare</label>
                                </div>
                                <div class="ckbox ckbox-default">
                                    <input type="checkbox" value="vitiligo" id="checkboxPA"  />
                                    <label for="checkboxPA">Vitiligo</label>
                                </div>

                    
                            </div><!-- tab-pane -->
                            <label class="col-sm-4 control-label" name="Neck" >Neck</label>
                            <div class="col-sm-8">
                                <div class="ckbox ckbox-default">
                                    <input type="checkbox" value="carotid pulse" id="checkboxR"  />
                                    <label for="checkboxR">Carotid pulse</label>
                                </div>
                                    
                                <div class="ckbox ckbox-default">
                                    <input type="checkbox" value="bruits" id="checkboxE"  />
                                    <label for="checkboxE">Bruits</label>
                                </div>
                                <div class="ckbox ckbox-default">
                                    <input type="checkbox" value="thyroid enlargement" id="checkboxW"  />
                                    <label for="checkboxW">Thyroid enlargement</label>
                                </div>

                    
                            </div><!-- tab-pane -->
                            <label class="col-sm-4 control-label" name="Head">Head</label>
                            <div class="col-sm-8">
                                <div class="ckbox ckbox-default">
                                    <input type="checkbox" value="xanthelasma" id="checkboxT"  />
                                    <label for="checkboxT">Xanthelasma</label>
                                </div>
                                    
                                <div class="ckbox ckbox-default">
                                    <input type="checkbox" value="cranial nerve" id="checkboxY"  />
                                    <label for="checkboxY">Cranial Nerve Palsy</label>
                                </div>

                    
                            </div><!-- tab-pane -->
                            <label class="col-sm-4 control-label" name="eyes" >Eyes</label>
                            <div class="col-sm-8">
                                <div class="ckbox ckbox-default">
                                    <input type="checkbox" value="cataract" id="checkboxX"  />
                                    <label for="checkboxX">Cataract</label>
                                </div>
                                    
                                <div class="ckbox ckbox-default">
                                    <input type="checkbox" value="retinopathy" id="checkboxV"  />
                                    <label for="checkboxV">Retinopathy</label>
                                </div>

                                <div class="ckbox ckbox-default">
                                    <input type="checkbox" value="blurry vision" id="checkboxB"  />
                                    <label for="checkboxB">Blurry Vision</label>
                                </div>

                    
                            </div><!-- tab-pane -->
                            <label class="col-sm-4 control-label" name="Insulin_injection_sites" >Insulin Injection Sites</label>
                            <div class="col-sm-8 ">
                                <div class="ckbox ckbox-default">
                                    <input type="checkbox" value="bruising" id="checkboxC"  />
                                    <label for="checkboxC">Bruising</label>
                                </div>
                                    
                                <div class="ckbox ckbox-default">
                                    <input type="checkbox" value="subcutaneous fat deposition" id="checkboxZ"  />
                                    <label for="checkboxZ">Subcutaneous fat deposition</label>
                                </div>
                                <div class="ckbox ckbox-default">
                                    <input type="checkbox" value="subcutaneous fat loss" id="checkboxTT"  />
                                    <label for="checkboxTT">Subcutaneous fat loss</label>
                                </div>

                    
                            </div><!-- tab-pane -->
                            <label class="col-sm-4 control-label" name="Legs" >Legs</label>
                            <div class="col-sm-8">
                                <div class="ckbox ckbox-default">
                                    <input type="checkbox" value="muscle wasting " id="checkboxDD"  />
                                    <label for="checkboxDD">Muscle wasting </label>
                                </div>
                                    
                                <div class="ckbox ckbox-default">
                                    <input type="checkbox" value="hair loss" id="checkboxSS"  />
                                    <label for="checkboxSS">Hair loss</label>
                                </div>
                                <div class="ckbox ckbox-default">
                                    <input type="checkbox" value="sensory abnormality" id="checkboxHH"  />
                                    <label for="checkboxHH">Sensory abnormality</label>
                                </div>
                                <div class="ckbox ckbox-default">
                                    <input type="checkbox" value="tendon reflexes" id="checkboxLL"  />
                                    <label for="checkboxLL">Tendon reflexes</label>
                                </div>

                                
                            </div><!-- tab-pane -->
                            <label class="col-sm-4 control-label" name="Feet" >Feet</label>
                            <div class="col-sm-8">
                                <div class="ckbox ckbox-default">
                                    <input type="checkbox" value="neuropathy" id="checkboxNN"  />
                                    <label for="checkboxNN">Neuropathy</label>
                                </div>
                                    
                                <div class="ckbox ckbox-default">
                                    <input type="checkbox" value="deformity" id="checkboxXX"  />
                                    <label for="checkboxXX">Deformity</label>
                                </div>
                                <div class="ckbox ckbox-default">
                                    <input type="checkbox" value="fungal infection between toes and nails" id="checkboxWW"  />
                                    <label for="checkboxWW">Fungal infection between toes and nails</label>
                                </div>
                                <div class="ckbox ckbox-default">
                                    <input type="checkbox" value="ischaemia" id="checkboxNM"  />
                                    <label for="checkboxNM">Ischaemia</label>
                                </div>
                                <div class="ckbox ckbox-default">
                                    <input type="checkbox" value="neuropathic foot ulcer" id="checkboxCV"  />
                                    <label for="checkboxCV">Neuropathic foot ulcer</label>
                                </div>
                                <div class="ckbox ckbox-default">
                                    <input type="checkbox" value="charcot foot" id="checkboxSN"  />
                                    <label for="checkboxSN">Charcot foot</label>
                                </div>
                                <div class="ckbox ckbox-default">
                                    <input type="checkbox" value="clawing of toes" id="checkboxMNM"  />
                                    <label for="checkboxMNM">Clawing of toes</label>
                                </div>
                                

                    
                            </div><!-- tab-pane -->
                    </div>
            </div><!-- tab-content -->
            <div class="panel-footer">
        <div class="row">
            <ul class="col-sm-9 col-sm-offset-3 list-unstyled wizard">
                <li class="pull-left previous"><button type="button" class="btn btn-default">Previous</button></li>
                <li class="pull-right next"><button type="button" class="btn btn-primary">Next</button></li>
                <li class="pull-right finish hide"><button type="submit" class="btn btn-primary">PROGNOSIS</button></li>
            </ul>
            </div>
            </div>
            
        </form><!-- panel-wizard -->
        </div>

    </div><!-- col-md-6 -->



        </section>


        @include('admin_layouts.javascript')

        <script src="{{asset('js/custom.js')}}"></script>
        <script>
            jQuery(document).ready(function() {
                
                
                
                // Progress Wizard
                jQuery('#progressWizard').bootstrapWizard({
                    onTabShow: function(tab, navigation, index) {
                        tab.prevAll().addClass('done');
                        tab.nextAll().removeClass('done');
                        tab.removeClass('done');
                        
                        var $total = navigation.find('li').length;
                        var $current = index + 1;
                        
                        if($current >= $total) {
                            $('#progressWizard').find('.wizard .next').addClass('hide');
                            $('#progressWizard').find('.wizard .finish').removeClass('hide');
                        } else {
                            $('#progressWizard').find('.wizard .next').removeClass('hide');
                            $('#progressWizard').find('.wizard .finish').addClass('hide');
                        }
                        
                        var $percent = ($current/$total) * 100;
                        $('#progressWizard').find('.progress-bar').css('width', $percent+'%');
                    }
                });
                
                
                
                // Wizard With Form Validation
                jQuery('#valWizard').bootstrapWizard({
                    onTabShow: function(tab, navigation, index) {
                        tab.prevAll().addClass('done');
                        tab.nextAll().removeClass('done');
                        tab.removeClass('done');
                        
                        var $total = navigation.find('li').length;
                        var $current = index + 1;
                        
                        if($current >= $total) {
                            $('#valWizard').find('.wizard .next').addClass('hide');
                            $('#valWizard').find('.wizard .finish').removeClass('hide');
                        } else {
                            $('#valWizard').find('.wizard .next').removeClass('hide');
                            $('#valWizard').find('.wizard .finish').addClass('hide');
                        }
                    },
                    onTabClick: function(tab, navigation, index) {
                        return false;
                    },
                    onNext: function(tab, navigation, index) {
                        var $valid = jQuery('#valWizard').valid();
                        if (!$valid) {
                            $validator.focusInvalid();
                            return false;
                        }
                    }
                });
                
                // Wizard With Form Validation
                var $validator = jQuery("#valWizard").validate({
                    highlight: function(element) {
                        jQuery(element).closest('.form-group').removeClass('has-success').addClass('has-error');
                    },
                    success: function(element) {
                        jQuery(element).closest('.form-group').removeClass('has-error');
                    }
                });
                
                

            });
        </script>

    </body>

<!-- Mirrored from themetrace.com/demo/chain/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 Mar 2020 04:30:31 GMT -->
</html>



















