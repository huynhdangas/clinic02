@extends('admin.layouts.master')

@section('content')

<div class="page-header">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="ik ik-edit bg-blue"></i>
                <div class="d-inline">
                    <h5>Doctor Information</h5>
                    <span>Update Doctor</span>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <nav class="breadcrumb-container" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="../index.html"><i class="ik ik-home"></i></a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">Doctor</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Create</li>
                </ol>
            </nav>
        </div>
    </div>
</div>


<div class="row">
    <div class="card" style="margin: auto; width: 80%;">

        <div class="card-header"><h3>Update Doctor</h3></div>
            <div class="card-body">
                <form class="forms-sample" enctype="multipart/form-data" method="post" action="{{ route('doctor.update', [$user->id])}}">
                    @csrf

                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Email address</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" value="{{$user->email}}" name="email" placeholder="Doctor Email">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label>Full Name</label>
                        
                            <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{$user->name}}" name="name" placeholder="Doctor Full Name">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Enter Password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label>Gender</label>
                            <select name="gender" class="form-control @error('gender') is-invalid @enderror">
                                @foreach(['male', 'female'] as $gender)
                                    <option value="{{$gender}}" @if($user->gender == $gender) selected @endif >{{$gender}}</option>
                                @endforeach 
                            </select>
                            @error('gender')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Education</label>
                        <input type="text" name="education" class="form-control @error('education') is-invalid @enderror" placeholder="Education" value="{{$user->education}}">
                            @error('education')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                    
                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" name="address" class="form-control @error('address') is-invalid @enderror"  placeholder="Address" value="{{$user->address}}">
                            @error('address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>

                    <div class="form-group">
                        <label>Phone Number</label>
                        <input type="text" name="phone_number" class="form-control @error('phone_number') is-invalid @enderror"  placeholder="Phone Number" value="{{$user->phone_number}}">
                            @error('phone_number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>

                    <div class="form-group">
                        <label>Specialist</label>
                        <select name="department" class="form-control" id="">

                            @foreach(App\Models\Department::all() as $department)
                                <option value="{{$department->department}}" @if($user->department == $department->department) selected @endif >{{$department->department}}</option>
                            @endforeach
                        </select>

                            @error('department')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                    
                    <div class="form-group">
                        <label>Image</label>
                        
                        <div class="input-group col-xs-12">
                            <input type="file" name="image" class="form-control file-upload-info @error('image') is-invalid @enderror"  placeholder="Upload Image">
                            <span class="input-group-append">
                            
                            </span>
                        </div>
                            @error('image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>

                    <div class="form-group">
                        <label>Role</label>
                        <select name="role_id" class="form-control @error('role') is-invalid @enderror" id="">
                            <option value="">Please Select Role</option>
                            @foreach(App\Models\Role::where('name', '!=', 'patient')->get() as $role)
                                <option value="{{ $role->id }}" @if($user->role_id==$role->id) selected @endif>{{ $role->name }}</option>
                            @endforeach
                        </select>
                            @error('role_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>

                    <div class="form-group">
                        <label>Description</label>                        
                        <textarea class="form-control @error('description') is-invalid @enderror"  name="description" rows="4" >
                        {{$user->description}}
                        </textarea>
                            @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>

                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection