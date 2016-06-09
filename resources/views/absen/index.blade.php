@extends('layouts.app')
@section('content')

<div class="container">
	{!! Form::open(['url'=>'absen', 'method'=>'post','class'=>'form-inline']) !!}
	{!! Form::hidden('user_id') !!}
	<div class="form-group {!! $errors->has('absen') ? 'has-error' : '' !!}">
		<strong>Jenis Absen</strong>
		{!! Form::select('jenis_absen',['masuk'=>'Masuk','keluar'=>'Keluar'],null,['class'=>'form-control']) 
		!!}

	</div>
	{!! Form::submit('Absen', ['class'=>'btn btn-primary']) !!}
	{!! Form::close() !!}
</div>


<br>
<div class="col-md-6">
<h3>Daftar Absen Masuk</h3>
<table class="table table-hover">
	<tr><thead class="btn-primary">
		<td>#</td>
		<td>Nama</td>
		<td>Waktu Absen</td>
		<td>Detil</td>
	</thead></tr>
	<?php $no=1;?>
	@foreach ($masuk as $absen)
	<tr>
		<td>{{ $no }}</td>
		<td>{{ $user->name }}</td>
		<td>{{ $absen->created_at }}</td>
		<td>
			{!! Form::model($absen, ['route' => ['absen.destroy', $absen], 'method' => 'delete', 'class' => 'form-inline'] ) !!}
			<a href="{{ route('absen.show', $absen->id)}}">Detil</a> |
			{!! Form::submit('delete', ['class'=>'btn btn-xs btn-danger']) !!}
			{!! Form::close()!!}
			
		</td>
	</tr><?php $no++;?>
	@endforeach
</table>
<button class="btn btn-default"><h7>Total Data :  <strong>{{ $no-1 }}</strong></h5></button>

</div>

<div class="col-md-6">
<h3>Daftar Absen Keluar</h3>
<table class="table table-hover">
	<tr><thead class="btn-primary">
		<td>#</td>
		<td>Nama</td>
		<td>Waktu Absen</td>
		<td>Detil</td>
	</thead></tr>

	 <?php $no=1;?>
	@foreach ($keluar as $absen)
	<tr>
		<td>{{ $no }}</td>
		<td>{{ $user->name }}</td>
		<td>{{ $absen->created_at }}</td>
		<td>
			{!! Form::model($absen, ['route' => ['absen.destroy', $absen], 'method' => 'delete', 'class' => 'form-inline'] ) !!}
			<a href="{{ route('absen.show', $absen->id)}}">Detil</a> |
			{!! Form::submit('delete', ['class'=>'btn btn-xs btn-danger']) !!}
			{!! Form::close()!!}
			
		</td>
	</tr><?php $no++;?>
	@endforeach
</table>
<button class="btn btn-default"><h7>Total Data :  <strong>{{ $no-1 }}</strong></h5></button>
</div>

@endsection