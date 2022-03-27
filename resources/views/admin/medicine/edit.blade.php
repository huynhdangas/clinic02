@extends('admin.layouts.master')

@section('content')

<div class="page-header">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="ik ik-edit bg-blue"></i>
                <div class="d-inline">
                    <h5>Medicine</h5>
                    <span>Update Medicine</span>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <nav class="breadcrumb-container" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="../index.html"><i class="ik ik-home"></i></a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">Medicine</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Update</li>
                </ol>
            </nav>
        </div>
    </div>
</div>


<div class="row">
    <div class="card" style="margin: auto; width: 80%;">    

        <div class="card-header"><h3>Medicine</h3></div>
            <div class="card-body">
                <form class="forms-sample" method="post" action="{{ route('medicine.update', [$medicine->id])}}">
                    @csrf
                    @method('PUT')
                        <div class="row">
                            <div class="col-md-6">

                                <div class="form-group">
                                <label>Medicine Name</label>
                            
                                <input type="text" class="form-control @error('medicine') is-invalid @enderror" value="{{$medicine->medicine}}" name="medicine" placeholder="Medicine">
                                @error('medicine')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>
                        </div>
                    
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    
                </form>
            </div>
        </div>
    </div>
</div>

@endsection 