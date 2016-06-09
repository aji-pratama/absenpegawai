@extends('layouts.app')
@section('content')

	<div class="col-md-7">
		
	<div class="form-group {!! $errors->has('kegiatan') ? 'has-error' : '' !!} ">
	{!! Form::open(['url'=>'kegiatan', 'method'=>'post','class'=>'form-inline']) !!}
	{!! Form::hidden('user_id') !!}
	</div>

	<div class="form-group">
	{!! Form::label('nama_kegiatan','Kegiatan',['class'=>'form-inline']) !!}
	{!! Form::text('nama_kegiatan','',['class'=>'form-control']) !!}
	</div>

	<div class="form-group">
	{!! Form::label('keterangan','Keterangan',['class'=>'form-inline']) !!}
	{!! Form::text('keterangan','',['class'=>'form-control']) !!}
	</div>





{{--	<div class="form-group">
		{!! Form::label('foto', 'Foto Kegiatan')!!}
		{!! Form::text('foto','',['class'=>'form-control']) !!}
		{!! $errors->first('foto', '<p class="help-block">:message</p>') !!}
	</div> --}}

	<div>
	{!! Form::submit('Submit', ['class'=>'btn btn-primary']) !!}
	{!! Form::close() !!}
	</div>
</div>


<br>
<div class="col-md-12">
<h3>Daftar Kegiatan</h3>
<table class="table table-hover">
	<tr><thead class="btn-primary">
		<td>#</td>
		<td>Nama Karyawan</td>
		<td>Kegiatan</td>
		<td>Keterangan</td>
		<td>Waktu Kegiatan</td>
		<td>Opsi</td>
	</thead></tr>
	<?php $no=1; ?>
	@foreach ($kegiatan as $keg)
	<tr>
		<td>{{ $no }}</td>
		<td>{{ $user->name }}</td>
		<td>{{ $keg->nama_kegiatan }}</td>
		<td>{{ $keg->keterangan }}</td>
		<td>{{ $keg->created_at }}</td>
		<td>
			{!! Form::model($keg, ['route' => ['kegiatan.destroy', $keg], 'method' => 'delete', 'class' => 'form-inline'] ) !!}
			<a href="{{ route('kegiatan.show', $keg->id)}}">Detil</a> |
			{!! Form::submit('delete', ['class'=>'btn btn-xs btn-danger']) !!}
			{!! Form::close()!!}
			
		</td>
	</tr><?php $no++; ?>
	@endforeach
</table>
<button class="btn btn-default"><h7>Total Data :  <strong>{{ $no-1 }}</strong></h5></button>
</div>

@endsection