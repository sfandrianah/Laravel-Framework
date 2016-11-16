@extends('template.auth.login')

@section('login-content')
<div class="login-logo">
    {!! HTML::image('img/sddbp-login.png', 'Paper', ['style' => 'width: 300px;height: 70px;margin-top:10px;']) !!}
</div>
<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2>Login Form</h2>

            </div>

            @if (session('msg'))
            <div class="alert-error" style="color: red">
                {{ session('msg') }}
            </div>
            @endif

            <div class="panel-body">
                {!! FORM::open(['url'=>'auth/login', 'class' => 'form-horizontal', 'id' => 'validate-form']) !!}
                <div class="form-group mb-md">
                    <div class="col-xs-12">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="ti ti-user"></i>
                            </span>
                            {!! FORM::text('user_code', null, ['class'=>'form-control', 'placeholder'=>'Email or User name']) !!}
                        </div>
                    </div>
                </div>
                <div class="form-group mb-md">
                    <div class="col-xs-12">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="ti ti-key"></i>
                            </span>
                            {!!FORM::password('password', ['class'=>'form-control', 'placeholder'=>'Password']) !!}
                        </div>
                    </div>
                </div>
                <div class="form-group mb-n">
                    <div class="col-xs-12">
                        <div class="checkbox-inline icheck pull-right p-n">
                            <div class="checkbox">
                                <label for=""><input type="checkbox" /> Remember me</label>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="panel-footer">
                <div class="clearfix">
                    {!! FORM::submit('Login', ['class' => 'btn btn-primary btn-raised pull-right']) !!}
                </div>
            </div>
            {!! FORM::close() !!}
        </div>
    </div>
</div>

@endsection
