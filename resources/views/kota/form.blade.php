<div class="form-group">
<label class="col-sm-2 control-label" id="nama_kota">Nama kota</label>

<div class="col-sm-10">
{!! Form::text('nama_kota',null,['class'=>'form-control','id'=>'nama_kota','placeholder'=>"Nama kota"]) !!}
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label" id="cabang_id">Cabang</label>
<div class="col-sm-10">
{!! Form::select('wilayah_id',$wilayah->listwilayah(),null,['class'=>'form-control','id'=>'wilayah_id','placeholder'=>"wilayah"]) !!}
</div>
</div>