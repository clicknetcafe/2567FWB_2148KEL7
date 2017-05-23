@extends('master')
@section('container')
	<div class="panel panel-primary">
		<div class="panel-heading">
			<strong><a href="{{url('promo')}}"><i style="color:white;" class="fa text-default fa-chevron-left"></i></a> promo</strong>
		</div>
		<div class="tab-pane">
		{!! Form::open(['url'=>'promo/simpan','class'=>'form-horizontal']) !!}
		@include('promo.form')
		</div>
		<div style="width:100%;text-align:right;">
			<button class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
			<button type="reset" class="btn btn-danger"><i class="fa fa-undo"></i> Ulangi </button>	
		</div>
		{!! Form::close() !!}
	</div>
@stop