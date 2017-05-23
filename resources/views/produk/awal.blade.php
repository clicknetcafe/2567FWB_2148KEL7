@extends('master')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong> Seluruh Data Produk </strong>
		<a href="{{url('produk/tambah')}}" class="btn btn-xs btn-primary pull-right"><i class = "fa fa-plus"></i> produk </a>
	<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th> No. </th>
				<th> Nama Produk </th>
				<th> Kategori</th>
				<th> Harga </th>
				<th> Aksi </th>
			</tr>
		</thead>
		<tbody
			<?php $x=(1+($data->CurrentPage()-1)*10);?>

			@foreach ($data as $produk)
				<tr>
					<td>{{ $x++ }}</td>
					<td>{{ $produk->nama_produk or 'nama kosong' }}</td>
					<td>{{ $produk->kategori->nama_kategori or 'nama kosong' }}</td>
					<td>{{ $produk->harga or 'nama kosong' }}</td>
					
				
					<td>
						<div class="btn-group" role="group">
						<a href="{{url('produk/edit/'.$produk->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>	
						<!-- <a href="{{url('produk/'.$produk->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a> -->
						<a href="{{url('produk/hapus/'.$produk->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
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