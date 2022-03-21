@extends('admin.layouts.master')

@section('content')

<div class="page-header">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="ik ik-edit bg-blue"></i>
                <div class="d-inline">
                    <h5>Doctor</h5>
                    <span>Appointment Time</span>
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
                    <li class="breadcrumb-item active" aria-current="page">Appointment</li>
                </ol>
            </nav>
        </div>
    </div>
</div>


<!-- time  -->

<div class="container">
    @if(Session::has('message'))
        <div class="alert alert-success">
            {{ Session::get('message') }}
        </div>
    @endif

    @foreach($errors->all() as $error)
        <div class="alert alert-danger">
            {{ $error }}
        </div>

    @endforeach

    <form action="{{route('appointment.store')}}" method="post"> @csrf


    

    <div class="card">

        <div class="card-header">
            <h3>Choose date</h3>
        </div>
        <div class="card-body">
            <input type="text" name="date" autocomplete="off" class="form-control datetimepicker-input" id="datepicker" data-toggle="datetimepicker" data-target="#datepicker">
            
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h3>Choose AM time</h3>
            
            <span style="margin-left: 700px;"> Check all:
        
                <input type="checkbox"  onclick=" for(c in document.getElementsByName('time[]')) document.getElementsByName('time[]').item(c).checked=this.checked ">
            </span>

        </div>
        <div class="card-body">
            <table class="table table-striped">
                <tbody>
                    <tr>
                        <th>1</th>
                        <td><input type="checkbox" name="time[]" value="6am"> 6:00 AM</td>
                        <td><input type="checkbox" name="time[]" value="6.20am"> 6:20 AM</td>
                        <td><input type="checkbox" name="time[]" value="6.40am"> 6:40 AM</td>
                    </tr>
                    <tr>
                        <th>2</th>
                        <td><input type="checkbox" name="time[]" value="7am"> 7:00 AM</td>
                        <td><input type="checkbox" name="time[]" value="7.20am"> 7:20 AM</td>
                        <td><input type="checkbox" name="time[]" value="7.40am"> 7:40 AM</td>
                    </tr>
                    <tr>
                        <th>3</th>
                        <td><input type="checkbox" name="time[]" value="8am"> 8:00 AM</td>
                        <td><input type="checkbox" name="time[]" value="8.20am"> 8:20 AM</td>
                        <td><input type="checkbox" name="time[]" value="8.40am"> 8:40 AM</td>
                    </tr>
                    <tr>
                        <th>4</th>
                        <td><input type="checkbox" name="time[]" value="9am"> 9:00 AM</td>
                        <td><input type="checkbox" name="time[]" value="9.20am"> 9:20 AM</td>
                        <td><input type="checkbox" name="time[]" value="9.40am"> 9:40 AM</td>
                    </tr>
                    <tr>
                        <th>4</th>
                        <td><input type="checkbox" name="time[]" value="10am"> 10:00 AM</td>
                        <td><input type="checkbox" name="time[]" value="10.20am"> 10:20 AM</td>
                        <td><input type="checkbox" name="time[]" value="10.40am"> 10:40 AM</td>
                    </tr>
                    <tr>
                        <th>6</th>
                        <td><input type="checkbox" name="time[]" value="11am"> 11:00 AM</td>
                        <td><input type="checkbox" name="time[]" value="11.20am"> 11:20 AM</td>
                        <td><input type="checkbox" name="time[]" value="11.40am"> 11:40 AM</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h3>Choose PM time</h3>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <tbody>
                        <th>7</th>
                        <td><input type="checkbox" name="time[]" value="2pm"> 2:00 PM</td>
                        <td><input type="checkbox" name="time[]" value="2.20pm"> 2:20 PM</td>
                        <td><input type="checkbox" name="time[]" value="2.40pm"> 2:40 PM</td>
                    </tr>
                    <tr>
                        <th>8</th>
                        <td><input type="checkbox" name="time[]" value="3pm"> 3:00 PM</td>
                        <td><input type="checkbox" name="time[]" value="3.20pm"> 3:20 PM</td>
                        <td><input type="checkbox" name="time[]" value="3.40pm"> 3:40 PM</td>
                    </tr>
                    <tr>
                        <th>9</th>
                        <td><input type="checkbox" name="time[]" value="4pm"> 4:00 PM</td>
                        <td><input type="checkbox" name="time[]" value="4.20pm"> 4:20 PM</td>
                        <td><input type="checkbox" name="time[]" value="4.40pm"> 4:40 PM</td>
                    </tr>
                    <tr>
                        <th>10</th>
                        <td><input type="checkbox" name="time[]" value="5pm"> 5:00 PM</td>
                        <td><input type="checkbox" name="time[]" value="5.20pm"> 5:20 PM</td>
                        <td><input type="checkbox" name="time[]" value="5.40pm"> 5:40 PM</td>
                    </tr>
                    <tr>
                        <th>11</th>
                        <td><input type="checkbox" name="time[]" value="6pm"> 6:00 PM</td>
                        <td><input type="checkbox" name="time[]" value="6.20pm"> 6:20 PM</td>
                        <td><input type="checkbox" name="time[]" value="6.40pm"> 6:40 PM</td>
                    </tr>
                    <tr>
                        <th>12</th>
                        <td><input type="checkbox" name="time[]" value="7pm"> 7:00 PM</td>
                        <td><input type="checkbox" name="time[]" value="7.20pm"> 7:20 PM</td>
                        <td><input type="checkbox" name="time[]" value="7.40pm"> 7:40 PM</td>
                    </tr>
                    <tr>
                        <th>13</th>
                        <td><input type="checkbox" name="time[]" value="8pm"> 8:00 PM</td>
                        <td><input type="checkbox" name="time[]" value="8.20pm"> 8:20 PM</td>
                        <td><input type="checkbox" name="time[]" value="8.40pm"> 8:40 PM</td>
                    </tr>
                    <tr>
                        <th>14</th>
                        <td><input type="checkbox" name="time[]" value="9pm"> 9:00 PM</td>
                        <td><input type="checkbox" name="time[]" value="9.20pm"> 9:20 PM</td>
                        <td><input type="checkbox" name="time[]" value="9.40pm"> 9:40 PM</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>


    <div class="card">
        <div class="card-body">
            <button type="submit" class="btn btn-primary" >Submit</button>
        </div>
    </div>

    </form>
</div>

<!-- chinh style -->

<style type="text/css">
    input[type="checkbox"] {
        zoom: 1.1;
        
    }
    body {
        font-size: 17px;
    }
</style>


@endsection