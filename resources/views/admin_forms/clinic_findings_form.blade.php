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
                        
                    
                    <div class="col-md-6">
        <h5 class="lg-title">Clinical Findings Form</h5>

        <!-- BASIC WIZARD -->
        <form method="get" action="/create-clinicFindings" id="valWizard" class="panel-wizard">
            <ul class="nav nav-justified nav-wizard nav-disabled-click">
                <li><a href="#tab1-4" data-toggle="tab"><strong>Symptoms</strong></a></li>
                <li><a href="#tab2-4" data-toggle="tab"><strong>Observations</strong></a></li>
                <li><a href="#tab3-4" data-toggle="tab"><strong>Clinical Examinations</strong></a></li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane" id="tab1-4">
                    
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Symptoms</label>
                            <div class="col-sm-8">
                                <div class="ckbox ckbox-default">
                                    <input type="checkbox" value="fatigue" id="checkboxDefault"  />
                                    <label for="checkboxDefault">Fatigue</label>
                                </div>
                                    
                                <div class="ckbox ckbox-default">
                                    <input type="checkbox" value="nausea" id="checkboxPrimary"  />
                                    <label for="checkboxPrimary">Nausea</label>
                                </div>
                                <div class="ckbox ckbox-default">
                                    <input type="checkbox" value="hyperphagia" id="checkboxPrimary"  />
                                    <label for="checkboxPrimary">Hyperphagia</label>
                                </div>
                                <div class="ckbox ckbox-default">
                                    <input type="checkbox" value="blurry vision" id="checkboxPrimary"  />
                                    <label for="checkboxPrimary">Blurry Vision</label>
                                </div>
                                <div class="ckbox ckbox-default">
                                    <input type="checkbox" value="weight loss" id="checkboxPrimary"  />
                                    <label for="checkboxPrimary">Weight Loss</label>
                                </div>
                                <div class="ckbox ckbox-default">
                                    <input type="checkbox" value="mood change" id="checkboxPrimary"  />
                                    <label for="checkboxPrimary">Mood Change</label>
                                </div>
                                <div class="ckbox ckbox-default">
                                    <input type="checkbox" value="nocturia" id="checkboxPrimary"  />
                                    <label for="checkboxPrimary">Nocturia</label>
                                </div>
                                <div class="ckbox ckbox-default">
                                    <input type="checkbox" value="genital candidiasis" id="checkboxPrimary"  />
                                    <label for="checkboxPrimary">Genital Candidiasis</label>
                                </div>
                                <div class="ckbox ckbox-default">
                                    <input type="checkbox" value="headache" id="checkboxPrimary"  />
                                    <label for="checkboxPrimary">Headache</label>
                                </div>
                                <div class="ckbox ckbox-default">
                                    <input type="checkbox" value="polyuria" id="checkboxPrimary"  />
                                    <label for="checkboxPrimary">Polyuria</label>
                                </div>
                                <div class="ckbox ckbox-default">
                                    <input type="checkbox" value="dry mouth" id="checkboxPrimary"  />
                                    <label for="checkboxPrimary">Dry Mouth</label>
                                </div>
                                

                                    
                                                    
                            
                            </div><!-- col-sm-8 -->
                    </div><!-- form-group -->  
                    
                    
                    
                </div><!-- tab-pane -->
                
                <div class="tab-pane" id="tab2-4">
                    
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Observations</label>
                            <div class="col-sm-8">
                                <div class="ckbox ckbox-default">
                                    <input type="checkbox" value="dehydration" id="checkboxDefault"  />
                                    <label for="checkboxDefault">Dehydration</label>
                                </div>
                                    
                                <div class="ckbox ckbox-default">
                                    <input type="checkbox" value="air hunger" id="checkboxPrimary" />
                                    <label for="checkboxPrimary">Air hunger</label>
                                </div>
                                <div class="ckbox ckbox-default">
                                    <input type="checkbox" value="mucosal candidiasis" id="checkboxPrimary" />
                                    <label for="checkboxPrimary">Mucosal candidiasis</label>
                                </div>
                                
                            </div><!-- tab-pane -->
                    </div>
                </div>
                
                <div class="tab-pane" id="tab3-4">
                    
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Hands</label>
                            <div class="col-sm-8">
                                <div class="ckbox ckbox-default">
                                    <input type="checkbox" value="cheiroarthropathy" id="checkboxDefault"  />
                                    <label for="checkboxDefault">Cheiroarthropathy</label>
                                </div>
                                    
                                <div class="ckbox ckbox-default">
                                    <input type="checkbox" value="trigger fingers" id="checkboxPrimary"  />
                                    <label for="checkboxPrimary">Trigger fingers</label>
                                </div>
                                <div class="ckbox ckbox-default">
                                    <input type="checkbox" value="muscle wasting" id="checkboxPrimary"  />
                                    <label for="checkboxPrimary">Muscle wasting</label>
                                </div>
                                <div class="ckbox ckbox-default">
                                    <input type="checkbox" value="sclerodatyly" id="checkboxPrimary"  />
                                    <label for="checkboxPrimary">Sclerodatyly</label>
                                </div>
                                <div class="ckbox ckbox-default">
                                    <input type="checkbox" value="carpal tunnel syndrome" id="checkboxPrimary"  />
                                    <label for="checkboxPrimary">Carpal Tunnel Syndrome</label>
                                </div>

                    
                            </div><!-- tab-pane -->
                            <label class="col-sm-4 control-label" name="Skin" >Skin</label>
                            <div class="col-sm-8">
                                <div class="ckbox ckbox-default">
                                    <input type="checkbox" value="bullae" id="checkboxDefault"  />
                                    <label for="checkboxDefault">Bullae</label>
                                </div>
                                    
                                <div class="ckbox ckbox-default">
                                    <input type="checkbox" value="pigmentation" id="checkboxPrimary"  />
                                    <label for="checkboxPrimary">Pigmentation</label>
                                </div>
                                <div class="ckbox ckbox-default">
                                    <input type="checkbox" value="granuloma annulare" id="checkboxPrimary"  />
                                    <label for="checkboxPrimary">Granuloma Annulare</label>
                                </div>
                                <div class="ckbox ckbox-default">
                                    <input type="checkbox" value="vitiligo" id="checkboxPrimary"  />
                                    <label for="checkboxPrimary">Vitiligo</label>
                                </div>

                    
                            </div><!-- tab-pane -->
                            <label class="col-sm-4 control-label" name="Neck" >Neck</label>
                            <div class="col-sm-8">
                                <div class="ckbox ckbox-default">
                                    <input type="checkbox" value="carotid pulse" id="checkboxDefault"  />
                                    <label for="checkboxDefault">Carotid pulse</label>
                                </div>
                                    
                                <div class="ckbox ckbox-default">
                                    <input type="checkbox" value="bruits" id="checkboxPrimary"  />
                                    <label for="checkboxPrimary">Bruits</label>
                                </div>
                                <div class="ckbox ckbox-default">
                                    <input type="checkbox" value="thyroid enlargement" id="checkboxPrimary"  />
                                    <label for="checkboxPrimary">Thyroid enlargement</label>
                                </div>

                    
                            </div><!-- tab-pane -->
                            <label class="col-sm-4 control-label" name="Head">Head</label>
                            <div class="col-sm-8">
                                <div class="ckbox ckbox-default">
                                    <input type="checkbox" value="xanthelasma" id="checkboxDefault"  />
                                    <label for="checkboxDefault">Xanthelasma</label>
                                </div>
                                    
                                <div class="ckbox ckbox-default">
                                    <input type="checkbox" value="cranial nerve" id="checkboxPrimary"  />
                                    <label for="checkboxPrimary">Cranial Nerve Palsy</label>
                                </div>

                    
                            </div><!-- tab-pane -->
                            <label class="col-sm-4 control-label" name="eyes" >Eyes</label>
                            <div class="col-sm-8">
                                <div class="ckbox ckbox-default">
                                    <input type="checkbox" value="cataract" id="checkboxDefault"  />
                                    <label for="checkboxDefault">Cataract</label>
                                </div>
                                    
                                <div class="ckbox ckbox-default">
                                    <input type="checkbox" value="retinopathy" id="checkboxPrimary"  />
                                    <label for="checkboxPrimary">Retinopathy</label>
                                </div>

                                <div class="ckbox ckbox-default">
                                    <input type="checkbox" value="blurry vision" id="checkboxPrimary"  />
                                    <label for="checkboxPrimary">Blurry Vision</label>
                                </div>

                    
                            </div><!-- tab-pane -->
                            <label class="col-sm-4 control-label" name="Insulin_injection_sites" >Insulin Injection Sites</label>
                            <div class="col-sm-8 ">
                                <div class="ckbox ckbox-default">
                                    <input type="checkbox" value="bruising" id="checkboxDefault"  />
                                    <label for="checkboxDefault">Bruising</label>
                                </div>
                                    
                                <div class="ckbox ckbox-default">
                                    <input type="checkbox" value="subcutaneous fat deposition" id="checkboxPrimary"  />
                                    <label for="checkboxPrimary">Subcutaneous fat deposition</label>
                                </div>
                                <div class="ckbox ckbox-default">
                                    <input type="checkbox" value="subcutaneous fat loss" id="checkboxPrimary"  />
                                    <label for="checkboxPrimary">Subcutaneous fat loss</label>
                                </div>

                    
                            </div><!-- tab-pane -->
                            <label class="col-sm-4 control-label" name="Legs" >Legs</label>
                            <div class="col-sm-8">
                                <div class="ckbox ckbox-default">
                                    <input type="checkbox" value="muscle wasting " id="checkboxDefault"  />
                                    <label for="checkboxDefault">Muscle wasting </label>
                                </div>
                                    
                                <div class="ckbox ckbox-default">
                                    <input type="checkbox" value="hair loss" id="checkboxPrimary"  />
                                    <label for="checkboxPrimary">Hair loss</label>
                                </div>
                                <div class="ckbox ckbox-default">
                                    <input type="checkbox" value="sensory abnormality" id="checkboxPrimary"  />
                                    <label for="checkboxPrimary">Sensory abnormality</label>
                                </div>
                                <div class="ckbox ckbox-default">
                                    <input type="checkbox" value="tendon reflexes" id="checkboxPrimary"  />
                                    <label for="checkboxPrimary">Tendon reflexes</label>
                                </div>

                                
                            </div><!-- tab-pane -->
                            <label class="col-sm-4 control-label" name="Feet" >Feet</label>
                            <div class="col-sm-8">
                                <div class="ckbox ckbox-default">
                                    <input type="checkbox" value="neuropathy" id="checkboxDefault"  />
                                    <label for="checkboxDefault">Neuropathy</label>
                                </div>
                                    
                                <div class="ckbox ckbox-default">
                                    <input type="checkbox" value="deformity" id="checkboxPrimary"  />
                                    <label for="checkboxPrimary">Deformity</label>
                                </div>
                                <div class="ckbox ckbox-default">
                                    <input type="checkbox" value="fungal infection between toes and nails" id="checkboxPrimary"  />
                                    <label for="checkboxPrimary">Fungal infection between toes and nails</label>
                                </div>
                                <div class="ckbox ckbox-default">
                                    <input type="checkbox" value="ischaemia" id="checkboxPrimary"  />
                                    <label for="checkboxPrimary">Ischaemia</label>
                                </div>
                                <div class="ckbox ckbox-default">
                                    <input type="checkbox" value="neuropathic foot ulcer" id="checkboxPrimary"  />
                                    <label for="checkboxPrimary">Neuropathic foot ulcer</label>
                                </div>
                                <div class="ckbox ckbox-default">
                                    <input type="checkbox" value="charcot foot" id="checkboxPrimary"  />
                                    <label for="checkboxPrimary">Charcot foot</label>
                                </div>
                                <div class="ckbox ckbox-default">
                                    <input type="checkbox" value="clawing of toes" id="checkboxPrimary"  />
                                    <label for="checkboxPrimary">Clawing of toes</label>
                                </div>
                                

                    
                            </div><!-- tab-pane -->
                    </div>
            </div><!-- tab-content -->

            <ul class="list-unstyled wizard">
                <li class="pull-left previous"><button type="button" class="btn btn-default">Previous</button></li>
                <li class="pull-right next"><button type="button" class="btn btn-primary">Next</button></li>
                <li class="pull-right finish hide"><button type="submit" class="btn btn-primary">PROGNOSIS</button></li>
            </ul>
            
        </form><!-- panel-wizard -->

    </div><!-- col-md-6 -->



        </section>


        @include('admin_layouts.javascript')

        <script src="js/custom.js"></script>
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



















