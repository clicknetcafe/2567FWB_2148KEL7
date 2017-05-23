@extends('halaman/master')
@section('container')
<div class="panel panel-default">
	<table class="table">
		<thead>

		</thead>
		<tbody>
			<?php $x=1;?>

			@foreach ($data as $berita)
				<tr>
					<th>{{ $berita->judul or 'nama kosong' }}</th>					
				</tr>
				<tr>
					<td>{{ $berita->deskripsi or 'nama kosong' }}</td>
				</tr>
				@endforeach
		</tbody>
	</table>
</div>
@stop