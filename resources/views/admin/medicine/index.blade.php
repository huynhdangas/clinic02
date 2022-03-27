@extends('admin.layouts.master')

@section('content')


<div class="page-header">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="ik ik-inbox bg-blue"></i>
                <div class="d-inline">
                    <h5>Medicine</h5>
                    <span>List Medicine</span>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <nav class="breadcrumb-container" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="../index.html"><i class="ik ik-home"></i></a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#">Medicines</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">All Medicine</li>
                </ol>
            </nav>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-md-12">
    @if(Session::has('message'))
        <div class="alert alert-success">
            {{ Session::get('message') }}
        </div>
    @endif
        <div class="card">
            <div class="card-header"><h3>Medicine</h3></div>
            <div class="card-body">
                <table id="data_table" class="table">
                    <thead>
                        <tr>
                            <th>Medicine</th>
                            
                            <th>&nbsp;</th>
                            <th>&nbsp;</th>

                            
                            
                        </tr>
                    </thead>
                    <tbody>
                    @if(count($medicines)>0)
                        @foreach($medicines as $medicine)
                        <tr>
                            <td>{{$medicine->medicine}}</td>
                            
                            <td>
                                <div class="table-actions">
                                    
                                    <a href="{{route('medicine.edit', [$medicine->id])}}"><i class="ik ik-edit-2"></i></a>
                                    
                                    <form action="{{route('medicine.destroy', [$medicine->id])}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"><i class="ik ik-trash-2"></i></button>
                                    </form>
                                </div>
                            </td>
                            <td></td>
                            
                        </tr>


                        <!-- Modal -->

                        @endforeach



                    @else 
                    <td>No medicines to display</td>
                    @endif
                   
                        
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>




@endsection
