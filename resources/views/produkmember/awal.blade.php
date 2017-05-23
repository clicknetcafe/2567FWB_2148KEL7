@extends('halaman/master')
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
					
				
				</tr>
				@endforeach
		</tbody>
	</table>
</div>

<div align="center">
		{{ $data->render()}}
	</div>
@stop