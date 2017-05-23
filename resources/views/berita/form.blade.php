<!-- <div class="form-group">
<label class="col-sm-2 control-label" id="nama_berita">Nama berita</label>

<div class="col-sm-10">
{!! Form::select('admin_id',$admin->listadmin(),null,['class'=>'form-control','id'=>'admin_id','placeholder'=>"admin"]) !!}
</div>

<div class="col-sm-10">
{!! Form::text('judul',null,['class'=>'form-control','id'=>'judul','placeholder'=>"Judul Berita"]) !!}
</div>

<div class="col-sm-10">
{!! Form::textarea('deskripsi',null,['class'=>'field','id'=>'deskripsi','placeholder'=>"Deskripsi"]) !!}
</div>
</div>

 -->

 <div class="form-group">
<label class="col-sm-2 control-label" id="admin_id">Nama Admin</label>

<div class="col-sm-10">
{!! Form::select('admin_id',$admin->listadmin(),null,['class'=>'form-control','id'=>'admin_id','placeholder'=>"admin"]) !!}
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label" id="judul">judul</label>

<div class="col-sm-10">
{!! Form::text('judul',null,['class'=>'form-control','id'=>'judul','placeholder'=>"Judul Berita"]) !!}
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label" id="deskripsi">deskripsi</label>

<div class="col-sm-10">
{!! Form::textarea('deskripsi',null,['class'=>'field','id'=>'deskripsi','placeholder'=>"Deskripsi"]) !!}
</div>
</div>