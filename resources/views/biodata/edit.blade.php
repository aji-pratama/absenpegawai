@extends('layouts.app')

@section('content')
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                   {!! Form::model($data, ['route' => ['biodata.update', $data],'method' =>'patch'])!!}
                        @include('biodata._form', ['model' => $data])
                    {!! Form::close() !!}
                </div>
      
@endsection
