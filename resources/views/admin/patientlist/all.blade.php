@extends('admin.layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Appointment ({{$bookings->count()}})</div>

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
                                <td><img src="/profile/{{$booking->user->image}}" width="80" style="border-radius: 50%;" alt=""></td>
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
                {{$bookings->links()}}
            </div>
        </div>
    </div>
</div>
@endsection