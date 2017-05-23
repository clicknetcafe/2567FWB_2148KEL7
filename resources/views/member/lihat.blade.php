@extends('master')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{url('member')}}"><i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a>Detail Data member</strong>

	</div>
	<table class="table">
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td>{{ $member->nama }}</td>
			</tr>
			<tr>
				<td>alamat</td>
				<td>:</td>
				<td>{{ $member->alamat }}</td>
			</tr>
			<tr>
				<td>Jenis kelamin</td>
				<td>:</td>
				<td>{{ $member->jekel }}</td>
			</tr><tr>
				<td>telepon</td>
				<td>:</td>
				<td>{{ $member->telepon }}</td>
			</tr>
			</tr><tr>
				<td>Username</td>
				<td>:</td>
				<td>{{ $member->username }}</td>
			</tr>
			</tr><tr>
				<td>password</td>
				<td>:</td>
				<td>{{ $member->password }}</td>
			</tr>
	</table>
</div>
@stop