@extends('admin.layouts.master')

@section('content')
<div class="page-header">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="ik ik-edit bg-blue"></i>
                <div class="d-inline">
                    <h5>Patient Appointment</h5>
                    <span>Appointment Today</span>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <nav class="breadcrumb-container" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="../index.html"><i class="ik ik-home"></i></a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">Patient Appointment</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Today</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

    <div class="row">
        
            <div class="card">


                <div class="card-header"><h3>Appointment ({{$patients->count()}})</h3></div>

               

                <div class="card-body">
                    <table class="table table-striped" style="text-align: center;">
                        <thead class="table-head">
                            <tr>
                                <th>#</th>
                                <th>Photo</th>
                                <th>User</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Gender</th>
                                <th>Time</th>
                                <th>Doctor</th>
                                <th>Status</th>
                                <th>Prescription</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($patients as $key => $patient)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td><img src="/profile/{{$patient->user->image}}" width="50" height="50" style="border-radius: 50%;" alt=""></td>
                                
                                <td>{{$patient->user->name}}</td>
                                <td>{{$patient->user->email}}</td>
                                <td>{{$patient->user->phone_number}}</td>
                                <td>{{$patient->user->gender}}</td>
                                <td>{{$patient->time}}</td>
                                <td>{{$patient->doctor->name}}</td>
                                <td>
                                    @if($patient->status == 1)
                                        Checked
                                    @endif
                                    
                                </td>
                                <td>
                                    <!-- Button trigger modal -->
                                    
                                    <a href="{{route('prescription.show',[$patient->user_id,$patient->date])}}" class="btn btn-secondary">View Prescription</a>
                                    
                                </td>
                            </tr>
                            @empty
                            <td>There is no appointment today</td>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        
    </div>




@endsection