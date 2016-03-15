@extends('templates.first')

@section('title', 'Book')

@section('content')
<form action="booked" method="POST" role="form">
    <div style="text-align:center;">
        <p style="color:red;">{{$save}}</p>
    </div>
    {!! csrf_field() !!}
    <div>
         <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

                <label class="col-md-2 control-label" style="text-align:center;">Customer Name</label>
                <div class="col-md-4">
                    <input type="text" class="form-control fg-line" name="name" value="{{ old('name') }}">
                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif

            </div>
        </div>
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} ">
            <label class="col-md-2 control-label" style="text-align:center;">Email</label>
            <div class="col-md-4">
                <input type="text" class="form-control" name="email" value="{{ old('email') }}">
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>
    <br /><br />
    <div>
        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
            <label class="col-md-2 control-label" style="text-align:center;">Phone No</label>
            <div class="col-md-4">
                <input type="text" class="form-control" name="phone" value="{{ old('phone') }}">
                @if ($errors->has('phone'))
                    <span class="help-block">
                        <strong>{{ $errors->first('phone') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="form-group{{ $errors->has('pname') ? ' has-error' : '' }} ">
            <label class="col-md-2 control-label" style="text-align:center;">Package Name</label>
            <div class="col-md-4">
                <input type="text" class="form-control" name="pname" value="{{ old('pname') }}">
                @if ($errors->has('pname'))
                    <span class="help-block">
                        <strong>{{ $errors->first('pname') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>

    <br /><br />
    <div>
        <div class="form-group{{ $errors->has('idate') ? ' has-error' : '' }} ">
            <label class="col-md-2 control-label" style="text-align:center;">Date of Interest</label>
            <div class="col-md-4">
                <input type="date" class="form-control" name="idate" value="{{ Carbon\Carbon::now()->format('Y-m-d') }}">
                @if ($errors->has('idate'))
                    <span class="help-block">
                        <strong>{{ $errors->first('idate') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="form-group{{ $errors->has('budget') ? ' has-error' : '' }} ">
            <label class="col-md-2 control-label" style="text-align:center;">Estimated Budget</label>
            <div class="col-md-4">
                <input type="text" class="form-control" name="budget" value="{{ old('budget') }}">
                @if ($errors->has('budget'))
                    <span class="help-block">
                        <strong>{{ $errors->first('budget') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <br /><br /><br />
    </div>
     <div class="form-group">
        <button type="submit" class="btn btn-primary form-control">
        Submit
        </button>
    </div>
</form>
@endsection
