@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h2>My prescriptions</h2></div>

                <div class="card-body">
                    <table class="table table-striped" style="text-align: left;">
                        <thead class="table-head">
                            <tr>
                                
                                <th>Doctor</th>
                                <th>Date</th>
                                <th>Disease</th>
                                <th>Symptoms</th>
                                <th>Medicine</th>
                                <th>Proceduce to use medicine</th>
                                <th>Doctor Feedback</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($prescriptions as $prescription)
                            <tr>
                                
                                <td>{{$prescription->doctor->name}}</td>
                                <td>{{$prescription->date}}</td>
                                <td>{{$prescription->name_of_disease}}</td>
                                <td>{{$prescription->symptoms}}</td>
                                <td>{{$prescription->medicine}}</td>
                                <td>{{$prescription->procedure_to_use_medicine}}</td>
                                <td>{{$prescription->feedback}}</td>
                                
                            </tr>
                            @empty
                            <td>You have no prescription</td>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
