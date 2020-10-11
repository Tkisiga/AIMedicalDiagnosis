<div class="panel panel-primary-head">
    <div class="panel-heading">
        <h4 class="panel-title">{{request()->route()->getName()}}</h4>
    </div><!-- panel-heading -->
    @if(request()->route()->getName() == 'Patients Details')
        @foreach($patients as $patient)    
            <table id="shTable" class="table table-striped table-bordered">
                <thead class="">
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
                    <tr>
                        <td>{{$patient->first_name}}</td>   
                        <td>{{$patient->last_name}}</td>  
                        <td>{{$patient->other_name}}<td>   
                        <td>{{$patient->age}}</td> 
                        <td>{{$patient->gender}}</td>
                        <td>{{$patient->phone_number}}</td>
                        <td>{{$patient->address}}</td>
                        <td>
                        <a href="/remove-patients/{{$patients->id}}">Add Visit</a>
                        <a href="/edit-patients/{{$patients->id}}">Edit</a>
                        </td>
                    </tr>
                    
                </tbody>
            </table>
        @endforeach
    @endif 
</div> 




<div class="panel panel-primary-head">
    <div class="panel-heading">
        <h4 class="panel-title">{{request()->route()->getName()}}</h4>
    </div><!-- panel-heading -->
    @if(request()->route()->getName() == 'Appointments Details')
        @foreach($appointments as $appointments)    
            <table id="shTable" class="table table-striped table-bordered">
                <thead class="">
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
                    <tr>
                        <td>{{$appointments->patient_id}}</td>   
                        <td>{{$appointments->medical_practitioner_id}}</td>  
                        <td>{{$appointments->appointment_date}}</td>  
                        <td>{{$appointments->appointment_time}}<td>   
                        <td>{{$appointments->status}}</td> 
                        <td>
                        <a href="/remove-appointments/{{$appointments->id}}">Add Appointment</a>
                        <a href="/change-appointments/{{$appointments->id}}">Edit</a>
                        </td>
                    </tr>
                    
                </tbody>
            </table>
        @endforeach
    @endif 
</div> 




<div class="panel panel-primary-head">
    <div class="panel-heading">
        <h4 class="panel-title">{{request()->route()->getName()}}</h4>
    </div><!-- panel-heading -->
    @if(request()->route()->getName() == 'Visits Details')
        @foreach($visits as $visits)    
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
                    <tr>
                        <td>{{$patient->patient_id}}</td>   
                        <td>{{$patient->visit_date}}</td>  
                        <td>{{$patient->visit_category}}<td>   
                        <td>{{$patient->next_visit}}</td> 
                        <td>
                        <a href="/remove-visits/{{$visits->id}}">Add Visit</a>
                        <a href="/change-visits/{{$visits->id}}">Edit</a>
                        </td>
                    </tr>
                    
                </tbody>
            </table>
        @endforeach
    @endif 
</div> 


