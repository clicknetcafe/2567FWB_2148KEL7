<div class="form-group">
<label class="col-sm-2 control-label" id="nama_produk">Nama Produk</label>

<div class="col-sm-10">
{!! Form::text('nama_produk',null,['class'=>'form-control','id'=>'nama_produk','placeholder'=>"Nama produk"]) !!}
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label" id="harga">harga</label>

<div class="col-sm-10">
{!! Form::text('harga',null,['class'=>'form-control','id'=>'harga','placeholder'=>"harga"]) !!}
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label" id="kategori_id">kategori</label>

<div class="col-sm-10">
{!! Form::select('kategori_id',$kategori->listkategori(),null,['class'=>'form-control','id'=>'kategori_id','placeholder'=>"Kategori produk"]) !!}
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label" id="cabang_id">Cabang</label>
<div class="col-sm-10">
{!! Form::select('cabang_id',$cabang->listcabang(),null,['class'=>'form-control','id'=>'cabang_id','placeholder'=>"cabang"]) !!}
</div>
</div>