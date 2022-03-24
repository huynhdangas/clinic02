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

            @if(Session::has('message'))
                <div class="alert alert-success">
                    {{Session::get('message')}}
                </div>
            @endif

                <div class="card-header"><h3>Appointment ({{$bookings->count()}})</h3></div>

               

                <div class="card-body">
                    <table class="table table-striped" style="text-align: center;">
                        <thead class="table-head">
                            <tr>
                                <th>#</th>
                                <th>Photo</th>
                                <th>Date</th>
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
                            @forelse ($bookings as $key => $booking)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td><img src="/profile/{{$booking->user->image}}" width="50" height="50" style="border-radius: 50%;" alt=""></td>
                                <td>{{$booking->date}}</td>
                                <td>{{$booking->user->name}}</td>
                                <td>{{$booking->user->email}}</td>
                                <td>{{$booking->user->phone_number}}</td>
                                <td>{{$booking->user->gender}}</td>
                                <td>{{$booking->time}}</td>
                                <td>{{$booking->doctor->name}}</td>
                                <td>
                                    @if($booking->status == 1)
                                        Checked
                                    @endif
                                    
                                </td>
                                <td>
                                    <!-- Button trigger modal -->
                                    @if(!App\Models\Prescription::where('date',date('Y-m-d'))->where('doctor_id',auth()->user()->id)->where('user_id',$booking->user->id)->exists())
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{$booking->user_id}}">
                                        Write Prescription
                                    </button>
                                    @else
                                    <a href="{{route('prescription.show',[$booking->user_id,$booking->date])}}" class="btn btn-secondary">View Prescription</a>
                                    @endif
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


    @include('prescription.form')

@endsection