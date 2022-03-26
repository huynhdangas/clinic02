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
                <div class="card-header">Appointment ({{$bookings->count()}})</div>

                <form action="{{route('patient')}}" method="get">
                <div class="card-header">
                    
                    <div class="row">
                        <div class="col-md-10">
                            <input type="text" name="date" autocomplete="off" class="form-control datetimepicker-input" id="datepicker" data-toggle="datetimepicker" data-target="#datepicker">
                        </div>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>    
                        
                    
                </div>
                </form>

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
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($bookings as $key => $booking)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td><img src="/profile/{{$booking->user->image}}" width="50" height="50"style="border-radius: 50%;" alt=""></td>
                                <td>{{$booking->date}}</td>
                                <td>{{$booking->user->name}}</td>
                                <td>{{$booking->user->email}}</td>
                                <td>{{$booking->user->phone_number}}</td>
                                <td>{{$booking->user->gender}}</td>
                                <td>{{$booking->time}}</td>
                                <td>{{$booking->doctor->name}}</td>
                                <td>
                                    @if($booking->status == 0)
                                    <a href="{{route('update.status', [$booking->id])}}"><button class="btn btn-primary">Pending</button> </a>
                                    @else
                                    <a href="{{route('update.status', [$booking->id])}}"><button class="btn btn-success">Checked</button></a>
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

@endsection