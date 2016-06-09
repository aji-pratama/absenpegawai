
@extends('layouts.app')
@section('content')

<div class="container">
<table class="table table-striped">
	
<tr>
	<td>Nama Karyawan</td>
	<td> <strong>{{ $user->name }}</strong></td>
</tr>

<tr>
	<td>Kegiatan</td>
	<td><strong>{{ $kegiatan->nama_kegiatan }}</strong></td>
</tr>

<tr>
	<td>Keterangan</td>
	<td><strong>{{ $kegiatan->keterangan }}</strong></td>
</tr>

<tr>
	<td>Waktu Kegiatan</td>
	<td><strong>{{ $kegiatan->created_at }}</strong></td>
</tr>
</table>

{!! Link_to('kegiatan','Back',['class'=>'btn btn-primary']) !!}

</div>


@endsection