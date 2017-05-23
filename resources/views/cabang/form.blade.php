<div class="form-group">
<label class="col-sm-2 control-label" id="nama_produk">Nama cabang</label>

<div class="col-sm-10">
{!! Form::text('nama_cabang',null,['class'=>'form-control','id'=>'nama_cabang','placeholder'=>"Nama cabang"]) !!}
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label" id="alamat_cabang">alamat</label>

<div class="col-sm-10">
{!! Form::text('alamat_cabang',null,['class'=>'form-control','id'=>'alamat_cabang','placeholder'=>"alamat cabang"]) !!}
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label" id="kategori_id">kategori</label>

<div class="col-sm-10">
{!! Form::select('kota_id',$kota->listkota(),null,['class'=>'form-control','id'=>'kota_id','placeholder'=>"nama kota"]) !!}
</div>
</div>