@extends('layouts.app')

@section('content')

    <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    {!! Form::open(['route' => 'biodata.store'])!!}
                        @include('biodata._form')
                    {!! Form::close() !!}
                </div>
    </div>
@endsection
