<div class="form-group">
<label class="col-sm-2 control-label" id="admin_id">Nama Admin</label>

<div class="col-sm-10">
{!! Form::select('admin_id',$admin->listadmin(),null,['class'=>'form-control','id'=>'admin_id','placeholder'=>"admin"]) !!}
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label" id="produk_id">nama produk</label>

<div class="col-sm-10">
{!! Form::select('produk_id',$produk->listproduk(),null,['class'=>'form-control','id'=>'produk_id','placeholder'=>"produk"]) !!}
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label" id="nama_promo">nama_promo</label>

<div class="col-sm-10">
{!! Form::text('nama_promo',null,['class'=>'form-control','id'=>'nama_promo','placeholder'=>"Nama Promo"]) !!}
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label" id="isi">isi promo</label>

<div class="col-sm-10">
{!! Form::textarea('isi',null,['class'=>'field','id'=>'isi','placeholder'=>"isi"]) !!}
</div>
</div>