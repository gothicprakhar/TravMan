@extends('templates.first')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div style="text-align:center;color:red">
                {{$save}}
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">Register Member</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="save">
                        {!! csrf_field() !!}
                        @include ('pages.form',['submitButtonText' => 'Register Member'])
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
