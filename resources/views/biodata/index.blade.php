@extends('layouts.app')
@section('content')


	<div class="col-md-3">	
		{!! Link_to('biodata/create','Tambah Data',['class'=>'btn btn-info']) !!}
	</div>

	<div class="col-md-3">
		<div class="row">	
			{!! Link_to('laporan/excel','Export To Excel',['class'=>'btn btn-success']) !!}
		</div>
	</div>

	<div class="col-md-6">
			{!! Form::open(['url' => 'biodata', 'method'=>'get', 'class'=>'form-inline']) !!}
			{!! Form::text('data',null, ['class'=>'form-control', 'placeholder' => 'Name']) !!}
			{!! $errors->first('data', '<p class="help-block">:message</p>') !!}
			{!! Form::submit('Search', ['class'=>'btn btn-primary']) !!}
			{!! Form::close() !!}
	</div>


	<table class="table table-hover">
		<tr><thead class="btn-primary">
			<td>#</td>
			<td>Nama Karyawan</td>
			<td>Tanggal Lahir</td>
			<td>No HP</td>
			<td>E-Mail</td>
			<td>Tanggal Masuk</td>
			<td>Aksi</td>
		</thead></tr>

		@foreach ($data as $biodata)
		<tr>
			<td>{{ $no }}</td>
			<td>{{ $biodata->name }}</td>
			<td>{{ $biodata->tgl_lahir }}</td>
			<td>{{ $biodata->no_hp }}</td>
			<td>{{ $biodata->email }}</td>
			<td>{{ $biodata->created_at }}</td>
			<td>{!! Form::model($biodata, ['route' => ['biodata.destroy', $biodata], 'method' => 'delete', 'class' => 'form-inline'] ) !!}
				<a href="{{ route('biodata.edit', $biodata->id)}}">Edit</a> |
				{!! Form::submit('delete', ['class'=>'btn btn-xs btn-danger']) !!}
				{!! Form::close()!!}
			</td>
			<?php $no++ ?>	
		</tr>	
		@endforeach

	</table>
		<button class="btn btn-default"><h7>Total Data :  <strong>{{ $no-1 }}</strong></h5></button>	
		{{ $data->links() }}
</div>
@endsection