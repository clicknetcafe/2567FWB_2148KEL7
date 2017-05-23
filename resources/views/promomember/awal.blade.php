@extends('halaman/master')
@section('container')
<div class="panel panel-default">
	<table>
		<thead>
			
		</thead>
		<tbody>
			<?php $x=1;?>

			@foreach ($data as $promo)
				<tr>
					<th>{{ $promo->nama_promo or 'nama kosong' }}</th>
				</tr>
				<tr>
					<td>{{ $promo->isi or 'nama kosong' }}</td>
				</tr>
				@endforeach
		</tbody>
	</table>
</div>
@stop