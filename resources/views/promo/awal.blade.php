@extends('master')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong> Seluruh Data Promo </strong>
		<a href="{{url('promo/tambah')}}" class="btn btn-xs btn-primary pull-right"><i class = "fa fa-plus"></i> promo </a>
	<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th> No. </th>
				<th> Dipost Oleh </th>
				<th> Nama Promo</th>
				<th> Isi </th>
				<th> Aksi </th>
			</tr>
		</thead>
		<tbody>
			<?php $x=(1+($data->CurrentPage()-1)*10);?>

			@foreach ($data as $promo)
				<tr>
					<td>{{ $x++ }}</td>
					<td>{{ $promo->admin->nama or 'nama kosong' }}</td>
					<td>{{ $promo->nama_promo or 'nama kosong' }}</td>
					<td>{{ $promo->isi or 'nama kosong' }}</td>
					
				
					<td>
						<div class="btn-group" role="group">
						<a href="{{url('promo/edit/'.$promo->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>	
						<!-- <a href="{{url('promo/'.$promo->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a> -->
						<a href="{{url('promo/hapus/'.$promo->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
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