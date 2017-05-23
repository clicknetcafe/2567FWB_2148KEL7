<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- BEGIN HEAD -->
<head>
     <meta charset="UTF-8" />
    <title>Halaman Admin</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
     <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <!-- GLOBAL STYLES -->
     <!-- PAGE LEVEL STYLES -->
     <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/plugins/magic/magic.css') }}" />
     <!-- END PAGE LEVEL STYLES -->
   <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
    <!-- END HEAD -->

    <!-- BEGIN BODY -->
<body >

   <!-- PAGE CONTENT --> 
    <div class="container">
    <div class="tab-content">
        <div id="login" class="tab-pane active">
            {!! Form::open(['url'=>'login','class'=>'form-signin']) !!}
            @if (count($errors)>0)
            <ul>@foreach($errors->all() as $error)
                <p class="text-muted text-center btn-block btn btn-primary btn-rect">
                    {{$error}}
                </p>
                @endforeach
            </ul>
            @endif
                <!-- <input type="text" placeholder="Username" class="form-control" /> -->
                {!! Form::text('username',null,['class'=>'form-control','placeholder'=>"Username"]) !!}
                <!-- <input type="password" placeholder="Password" class="form-control" /> -->
                {!! Form::password('password',['class'=>'form-control','placeholder'=>"Password"]) !!}
                <button class="btn text-muted text-center btn-danger" type="submit">Sign in</button>
           {!! Form::close() !!}
        </div>
        <div id="forgot" class="tab-pane">
            {!! Form::open(['url'=>'loginmember','class'=>'form-signin']) !!}
                @if (count($errors)>0)
            <ul>@foreach($errors->all() as $error)
                <p class="text-muted text-center btn-block btn btn-primary btn-rect">
                    {{$error}}
                </p>
                @endforeach
            </ul>
            @endif
                <!-- <input type="email"  required="required" placeholder="Your E-mail"  class="form-control" /> -->
                {!! Form::text('username',null,['class'=>'form-control','placeholder'=>"Username"]) !!}
                <!-- <input type="email"  required="required" placeholder="Your E-mail"  class="form-control" /> -->
                {!! Form::password('password',['class'=>'form-control','placeholder'=>"Password"]) !!}
                <br />
                <button class="btn text-muted text-center btn-success" type="submit">Sign in</button>
            {!! Form::close() !!}
        </div>
        <div id="signup" class="tab-pane">
            <!-- {!! Form::open(['url'=>'member/simpan','class'=>'form-signin']) !!}
                            <div class="form-group">
                            <label class="col-sm-2 control-label">Username</label>
                            <div class="col-sm-10">
                            {!! Form::text('username',null,['class'=>'form-control','placeholder'=>"Username"]) !!}
                            </div>  
                            </div>
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Password</label>
                              <div class="col-sm-10">
                                {!! Form::password('password',['class'=>'form-control','placeholder'=>"Password"]) !!}
                              </div>  
                            </div>
                            <div class="form-group">
                            <label class="col-sm-2 control-label">nama</label>
                            <div class="col-sm-10">
                            {!! Form::text('nama',null,['class'=>'form-control','placeholder'=>"nama"]) !!}
                            </div>  
                            </div>
                            <div class="form-group">
                            <label class="col-sm-2 control-label">Jenis kelamin</label>
                            <div class="col-sm-10">
                            {!! Form::text('jekel',null,['class'=>'form-control','placeholder'=>"jenis kelamin"]) !!}
                            </div>  
                            </div>
                            <div class="form-group">
                            <label class="col-sm-2 control-label">alamat</label>
                            <div class="col-sm-10">
                            {!! Form::text('alamat',null,['class'=>'form-control','placeholder'=>"alamat"]) !!}
                            </div>  
                            </div>
                            <div class="form-group">
                            <label class="col-sm-2 control-label">telepon</label>
                            <div class="col-sm-10">
                            {!! Form::text('telepon',null,['class'=>'form-control','placeholder'=>"telepon"]) !!}
                            </div>  
                            </div>

            <button class="btn text-muted text-center btn-danger" type="submit">Sign in</button>
            {!! Form::close() !!} -->
            {!! Form::open(['url'=>'member/simpan','class'=>'form-signin']) !!}
                <p class="text-muted text-center btn-block btn btn-primary btn-rect">Please Fill Details To Register</p>
                 {!! Form::text('username',null,['class'=>'form-control','placeholder'=>"Username"]) !!}
                 {!! Form::password('password',['class'=>'form-control','placeholder'=>"Password"]) !!}
                 {!! Form::text('nama',null,['class'=>'form-control','placeholder'=>"nama"]) !!}
                 {!! Form::text('jekel',null,['class'=>'form-control','placeholder'=>"jenis kelamin"]) !!}
                 {!! Form::text('alamat',null,['class'=>'form-control','placeholder'=>"alamat"]) !!}
                 {!! Form::text('telepon',null,['class'=>'form-control','placeholder'=>"telepon"]) !!}
                <!-- <input type="text" placeholder="First Name" class="form-control" />
                <input type="text" placeholder="Last Name" class="form-control" />
                <input type="text" placeholder="Username" class="form-control" />
                <input type="email" placeholder="Your E-mail" class="form-control" />
                <input type="password" placeholder="password" class="form-control" />
                <input type="password" placeholder="Re type password" class="form-control" /> -->
                <button class="btn text-muted text-center btn-success" type="submit">Register</button>
            {!! Form::close() !!}
        </div>
    </div>
    <div class="text-center">
        <ul class="list-inline">
            <li><a class="text-muted" href="#login" data-toggle="tab">Login</a></li>
            <li><a class="text-muted" href="#forgot" data-toggle="tab">login member</a></li>
            <li><a class="text-muted" href="#signup" data-toggle="tab">Signup</a></li>
        </ul>
    </div>

</div>

	  <!--END PAGE CONTENT -->     
	      
      <!-- PAGE LEVEL SCRIPTS -->
      <script src="{{ asset('assets/plugins/jquery-2.0.3.min.js') }}"></script>
      <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.js') }}"></script>
   <script src="{{ asset('assets/js/login.js') }}"></script>
      <!--END PAGE LEVEL SCRIPTS -->

</body>
    <!-- END BODY -->
</html>
