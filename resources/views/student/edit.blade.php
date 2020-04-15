@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <div class="card">
                <div class="card-header bg-primary text-light d-flex justify-content-between align-items-center">
                 <h5 class="mb-0">Edit Students - {{ $student->name }}</h5>
                 <a href="{{ route('student.index') }}" class="btn btn-light">Back to All Student</a>
                
                 </div>
        <div class="card-body">
           <div class="row">
               <div class="col-6 offset-3">
               @if(Session::has('success'))
                 <div class="alert alert-success">{{Session::get('success')}}</div>
               @endif
                <form action="{{ route('student.update', ['id'=> $student->id ]) }}" method="post">
                @csrf
                <div class="form-group">
                            <label for="">Student Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter your name" value = "{{ $student->name }}" >
                </div>
                <div class="form-group">
                            <label for="">Student Email</label>
                            <input type="text" class="form-control" name="email" placeholder="Enter your email" value = "{{ $student->email }}">
                </div>
                <div class="form-group">
                            <button type="submit" class="btn btn-success">Update Data</button>
                </div>
                
                </form>
               </div>
           </div>
            
           

        </div>

            </div>
        </div>
    </div>
</div>
@endsection
