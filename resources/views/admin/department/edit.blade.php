@extends('admin.layouts.master')

@section('content')

<div class="page-header">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="ik ik-edit bg-blue"></i>
                <div class="d-inline">
                    <h5>Department</h5>
                    <span>Update Department</span>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <nav class="breadcrumb-container" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="../index.html"><i class="ik ik-home"></i></a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">Department</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Update</li>
                </ol>
            </nav>
        </div>
    </div>
</div>


<div class="row">
    <div class="card" style="margin: auto; width: 80%;">    

        <div class="card-header"><h3>Department</h3></div>
            <div class="card-body">
                <form class="forms-sample" method="post" action="{{ route('department.update', [$department->id])}}">
                    @csrf
                    @method('PUT')
                        <div class="row">
                            <div class="col-md-6">

                                <div class="form-group">
                                <label>Department Name</label>
                            
                                <input type="text" class="form-control @error('department') is-invalid @enderror" value="{{$department->department}}" name="department" placeholder="Department">
                                @error('department')
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