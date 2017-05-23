@extends('master')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong> Seluruh Data kota </strong>
		<a href="{{url('cabang/tambah')}}" class="btn btn-xs btn-primary pull-right"><i class = "fa fa-plus"></i> cabang </a>
	<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th> No. </th>
				<th> Nama Cabang </th>
				<th> Alamat cabang</th>
				<th> Nama kota </th>
				<th> Aksi </th>
			</tr>
		</thead>
		<tbody>
			<?php $x=(1+($data->CurrentPage()-1)*10);?>

			@foreach ($data as $cabang)
				<tr>
					<td>{{ $x++ }}</td>
					<td>{{ $cabang->nama_cabang or 'nama kosong' }}</td>
					<td>{{ $cabang->alamat_cabang or 'nama kosong' }}</td>
					<td>{{ $cabang->kota->nama_kota or 'nama kosong' }}</td>
					
				
					<td>
						<div class="btn-group" role="group">
						<a href="{{url('cabang/edit/'.$cabang->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>	
						<!-- <a href="{{url('cabang/'.$cabang->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a> -->
						<a href="{{url('cabang/hapus/'.$cabang->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
						</div>
					</td>
				</tr>
				@endforeach
		</tbody>
	</table>
</div>

<div align="center">
		{{ $data->render()}}
	</div>
@stop