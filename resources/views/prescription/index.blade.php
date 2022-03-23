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
                                <th>Prescription</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($bookings as $key => $booking)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td><img src="/profile/{{$booking->user->image}}" width="50" style="border-radius: 50%;" alt=""></td>
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
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                        Write Prescription
                                    </button>
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

@if(count($bookings)>0)

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
      <form method="post" action="{{route('prescription')}}">@csrf
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Prescription</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="app">

            <input type="hidden" name="user_id" value="{{$booking->user_id}}"> 
            <input type="hidden" name="doctor_id" value="{{$booking->doctor_id}}"> 
            <input type="hidden" name="date" value="{{$booking->date}}"> 
            <div class="form-group">
                <label for="">Disease</label>
                <input type="text" name="name_of_disease" class="form-control" required="">
            </div>
            <div class="form-group">
                <label for="">Symptoms</label>
                <textarea name="symptoms" class="form-control" required="">

                </textarea>
            </div>
            <div class="form-group">
                <label for="">Medicine</label>
                <add-btn></add-btn>
            </div>
            <div class="form-group">
                <label for="">Procedure to use medicine</label>
                <textarea name="procedure_to_use_medicine" class="form-control" required="">

                </textarea>
            </div>
            <div class="form-group">
                <label for="">Feedback</label>
                <textarea name="feedback" class="form-control" required="">

                </textarea>
            </div>
            <div class="form-group">
                <label for="">Signature</label>
                <input type="text" name="signature" class="form-control" required="">
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
    </form>
  </div>
</div>
@endif
@endsection