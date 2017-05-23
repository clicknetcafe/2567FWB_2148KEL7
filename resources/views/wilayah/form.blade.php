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