@if(request()->route()->getName() == 'Patients Details')
<div class="panel ">

    <div class="panel-heading">
        <h4 class="panel-title">{{request()->route()->getName()}}</h4>
    </div><!-- panel-heading -->
    </br>
    <div class="info-box">
        <div class="table-responsive">
            <table id="example2" class="table table-bordered table-hover" data-name="cool-table">
                 
                <thead >
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Other Name</th>
                        <th>Age </th>
                        <th>Gender</th>
                        <th>Contact</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
                </thead>
               
                <tbody>
                
                @foreach($patients as $patient) 
                    <tr>
                        <td>{{$patient->first_name}}</td>   
                        <td>{{$patient->last_name}}</td>  
                        <td>{{$patient->other_name}}<td>   
                        <td>{{$patient->age}}</td> 
                        <td>{{$patient->gender}}</td>
                        <td>{{$patient->phone_number}}</td>
                        <td>{{$patient->address}}</td>
                        <td>
                        <a href="/delete-patient/{{$patient->id}}">Delete </a>
                        </td>
                        <td>
                        <a href="/get-edit-patients-form/{{$patient->id}}">Edit</a>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
            </div> 
            </div> 
           
    </div> 
    @endif 





@if(request()->route()->getName() == 'Appointments Details')
<div class="panel panel-primary-head">
    <div class="panel-heading">
        <h4 class="panel-title">{{request()->route()->getName()}}</h4>
    </div><!-- panel-heading -->
            
            <table  class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Patient Number</th>
                        <th>Doctor Number</th>
                        <th>Appointment Date</th>
                        <th>Appointment Time</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                
                <tbody>
                @foreach($appointments as $appointments)
                    <tr>
                        <td>{{$appointments->patient_id}}</td>   
                        <td>{{$appointments->medical_practitioner_id}}</td>  
                        <td>{{$appointments->appointment_date}}</td>  
                        <td>{{$appointments->appointment_time}}<td>   
                        <td>{{$appointments->status}}</td> 
                        <td><a href="/delete-appointments/{{$appointments->id}}">Delete</a>
                        <a href="/get-edit-appointments-form/{{$appointments->id}}">Edit</a> </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
       
</div> 

@endif 




@if(request()->route()->getName() == 'Visits Details')
<div class="panel panel-primary-head">
    <div class="panel-heading">
        <h4 class="panel-title">{{request()->route()->getName()}}</h4>
    </div><!-- panel-heading -->

            
            <table id="shTable" class="table table-striped table-bordered">
                <thead class="">
                    <tr>
                        <th>Patient Number</th>
                        <th>Visit Date</th>
                        <th>Visit Category</th>
                        <th>Next visit </th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                @foreach($visits as $visits)
                    <tr>
                        <td>{{$visits->patient_id}}</td>   
                        <td>{{$visits->visit_date}}</td>  
                        <td>{{$visits->visit_category}}<td>   
                        <td>{{$visits->next_visit}}</td> 
                        <td>
                        <a href="/delete-visits/{{$visits->id}}">Delete </a>
                        <a href="/get-edit-visits-form/{{$visits->id}}">Edit</a>
                        </td>
                    </tr>
                    @endforeach 
                </tbody>
            </table>
        
</div> 
    @endif 


