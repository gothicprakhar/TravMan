@extends('templates.first')

@section('title', 'Book')

@section('content')
<form action="booked" method="POST">
    <p style="color:red;">{{$save}}</p>
    {!! csrf_field() !!}
    <div class="form-group">
        <label>Customer Name</label>
        <input type="text" name="name" class="form-control" />
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="text" name="email" class="form-control" />
    </div>
    <div class="form-group">
        <label>Phone No</label>
        <input type="text" name="phone" class="form-control" />
    </div>
    <div class="form-group">
        <label>Package Name</label>
        <input type="text" name="pname" class="form-control" />
    </div>
    <div class="form-group">
        <label>Package Detail</label>
        <input type="text" name="package_det" class="form-control" />
    </div>
    <div class="form-group">
        <label>Date of Interest</label>
        <input type="date" name="idate" class="form-control" />
    </div>
    <div class="form-group">
        <label>Estimated Budget</label>
        <input type="text" name="budget" class="form-control" />
    </div>
     <div class="form-group">
        <button type="submit" class="btn btn-primary form-control">
            Submit
        </button>
    </div>
</form>
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@endsection
