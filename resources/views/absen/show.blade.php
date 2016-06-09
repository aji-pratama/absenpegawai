@extends('layouts.app')
@section('content')

<div class="container">
<table class="table table-striped">
	
<tr>
	<td>Nama Karyawan</td>
	<td> <strong>{{ $user->name }}</strong></td>
</tr>

<tr>
	<td>Jenis Absen</td>
	<td><strong>{{ $absen->jenis_absen }}</strong></td>
</tr>

<tr>
	<td>Waktu Absen</td>
	<td><strong>{{ $absen->created_at }}</strong></td>
</tr>
</table>

{!! Link_to('absen','Back',['class'=>'btn btn-primary']) !!}

</div>


@endsection
