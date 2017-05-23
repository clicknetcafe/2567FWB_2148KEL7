@extends('master')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong> Seluruh Data kota </strong>
		<a href="{{url('kota/tambah')}}" class="btn btn-xs btn-primary pull-right"><i class = "fa fa-plus"></i> kota </a>
	<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th> No. </th>
				<th> Nama kota </th>
				<th> Nama Wilayah</th>
				<th> Aksi </th>
			</tr>
		</thead>
		<tbody>
			<?php $x=(1+($data->CurrentPage()-1)*10);?>

			@foreach ($data as $kota)
				<tr>
					<td>{{ $x++ }}</td>
					<td>{{ $kota->nama_kota or 'nama kosong' }}</td>
					<td>{{ $kota->wilayah->nama_wilayah or 'nama kosong' }}</td>
					
				
					<td>
						<div class="btn-group" role="group">
						<a href="{{url('kota/edit/'.$kota->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>	
						<!-- <a href="{{url('kota/'.$kota->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a> -->
						<a href="{{url('kota/hapus/'.$kota->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
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