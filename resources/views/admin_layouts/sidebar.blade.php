<div class="leftpanel">
                    <div class="media profile-left">
                        <a class="pull-left profile-thumb" href="profile.html">
                            <img class="img-circle" src="images/photos/profile.png" alt="">
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading">Elen Adarna</h4>
                            <small class="text-muted">Beach Lover</small>
                        </div>
                    </div><!-- media -->
                    
                    <h5 class="leftpanel-title">Navigation</h5>
                    <ul class="nav nav-pills nav-stacked">
                        <li ><a href="/dashboard"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
                        <li class="parent"><a href="#"><i class="fa fa-suitcase"></i> <span>Patients</span></a>
                            <ul class="children">
                                <li ><a href="/create-patients">New Patient</a></li>
                                <li @if(request()->route()->getName()== 'Patients Details') class="active" @endif><a href="/get-patient">Patient Records</a></li>
                            </ul>
                        </li>
                        <li class="parent"><a href="#"><i class="fa fa-edit"></i> <span>Visits</span></a>
                            <ul class="children">
                                <li><a href="/create-visits">New Visit</a></li>
                                <li><a href="/get-visits">Visits Records</a></li>
                            </ul>
                        </li>
                        <li class="parent"><a href="#"><i class="fa fa-bars"></i> <span>Appointments</span></a>
                            <ul class="children">
                                <li @if(request()->route()->getName()== 'Make Appointment') class="active" @endif><a href="/create-appointments">Make Appointment</a></li>
                                <li @if(request()->route()->getName()== 'Appointment Details') class="active" @endif><a href="/get-appointments">Appointment Records</a></li>
                            </ul>
                        </li>
                        <li class="parent"><a href="#"><i class="fa fa-file-text"></i> <span>Clinical Findings</span></a>
                            <ul class="children">
                                <li><a href="notfound.html">404 Page</a></li>
                                <li><a href="blank.html">Blank Page</a></li>
                                <li><a href="calendar.html">Calendar</a></li>
                                <li><a href="invoice.html">Invoice</a></li>
                                <li><a href="locked.html">Locked Screen</a></li>
                                <li><a href="media-manager.html">Media Manager</a></li>
                                <li><a href="people-directory.html">People Directory</a></li>
                                <li><a href="profile.html">Profile</a></li>                                
                                <li><a href="search-results.html">Search Results</a></li>
                                <li><a href="signin.html">Sign In</a></li>
                                <li><a href="signup.html">Sign Up</a></li>
                            </ul>
                        </li>
                        
                    </ul>
                    
                </div><!-- leftpanel -->