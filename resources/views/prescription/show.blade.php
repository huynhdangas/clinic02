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
        
            <div class="card" style="width: 80%; margin: auto;">

            

                <div class="card-header">
                    <h3>Prescription Details</h3>
                </div>
                    
                <div class="card-body">
                    <p>Date: {{$prescription->date}}</p>
                    <p>Patient: {{$prescription->user->name}}</p>
                    <p>Doctor: {{$prescription->doctor->name}}</p>
                    <p>Disease: {{$prescription->name_of_disease}}</p>
                    <p>Symptoms: {{$prescription->symptoms}}</p>
                    <p>Medicine: {{$prescription->medicine}}</p>
                    <p>Procedure to use medicine: {{$prescription->procedure_to_use_medicine}}</p>
                    <p>Feedback: {{$prescription->feedback}}</p>
                    <p>Doctor signature: {{$prescription->signature}}</p>
                </div>
            </div>
        
    </div>




@endsection