@extends('layouts.app')

@section('content')
<div class="container">
        @if(Session::has('message'))
            <div class="alert alert-success">{{Session::get('message')}}</div>
        @endif
    <div class="row">
        
        <div class="col-md-3">
            <div class="card">
                <div class="card-header"><h2>User Profile</h2></div>

                <div class="card-body">
                    <p>Name: {{auth()->user()->name}}</p>
                    <p>Email: {{auth()->user()->email}}</p>
                    <p>Address: {{auth()->user()->address}}</p>
                    <p>Phone: {{auth()->user()->phone_number}}</p>
                    <p>Gender: {{auth()->user()->gender}}</p>
                    <p>Bio: {{auth()->user()->description}}</p>
                </div>
            </div>
        </div>


        <div class="col-md-6">
            <div class="card">
                <div class="card-header"><h2>Form Update Profile</h2></div>

                <div class="card-body">
                <form action="{{route('profile.store')}}" method="post" enctype="multipart/form-data">@csrf

                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name"  value="{{auth()->user()->name}}" class="form-control @error('name') is-invalid @enderror">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" name="address" value="{{auth()->user()->address}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" name="phone_number" value="{{auth()->user()->phone_number}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Gender</label>
                            <select name="gender" class="form-control @error('gender') is-invalid @enderror" id="">
                                <option value="">Select</option>
                                <option value="male" @if(auth()->user()->gender === 'male') selected @endif>Male</option>
                                <option value="female" @if(auth()->user()->gender === 'female') selected @endif>Female</option>
                            </select>
                                @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label>Bio</label>
                            <textarea name="description" class="form-control">
                            {{auth()->user()->description}}
                            </textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary" type="submit">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card">
                <div class="card-header"><h2>Update Image</h2></div>

                
                <form action="{{route('profile.pic')}}" method="post" enctype="multipart/form-data">@csrf

                <div class="card-body">
                    @if(!auth()->user()->image)
                   <img src="images/2iwCQFIuvfXpnWic8I7O7roD86hmeu4WvEbjR047.png" width="120" alt="">
                   @else
                   <img src="/profile/{{auth()->user()->image}}" width="120" alt="">

                   @endif
                   <br>
                   <input type="file" name="file" class="form-control">
                   <br>
                   @error('file')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                   <button type="submit" class="btn btn-primary">Update</button>
                </div>
                </form>
            </div>
        </div>

    </div>
</div>
@endsection
