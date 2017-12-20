@extends('layouts.app')

@section('content')

<div class="columns">
    <div class="column is-one-third is-offset-one-third m-t-50">
        <div class="card shadow">
            <div class="card-content">
                <h1 class="title">Join The Community</h1>
                <form action="{{route('register')}}" method="POST" role="form" >
                    {{csrf_field()}}
                 <div class="field">
                    <label for="name" class="label">User name</label>
                    <div class="control has-icons-left has-icons-right">
                        <input type="text" class="input {{ $errors->has('name') ? 'is-danger' : '' }}" name="name" id="name" placeholder="Enter your name here..." value="{{old('name')}}" required>
                        <span class="icon is-small is-left"><i class="fa fa-user"></i></span>
                        <span class="icon is-small is-right"><i class="fa fa-check"></i></span>
                    </div>
                    @if($errors->has('name'))
                       <p class="help is-danger">{{$errors->first('name')}}</p>
                    @endif
                 </div>
                 <div class="field">
                    <label for="email" class="label">Email Address</label>
                    <div class="control has-icons-left has-icons-right">
                        <input type="email" class="input {{ $errors->has('email') ? 'is-danger' : '' }}" name="email" id="email" placeholder="name@example.com" value="{{old('email')}}" required>
                        <span class="icon is-small is-left"><i class="fa fa-envelope"></i></span>
                        <span class="icon is-small is-right"><i class="fa fa-check"></i></span>
                    </div>
                    @if($errors->has('email'))
                       <p class="help is-danger">{{$errors->first('email')}}</p>
                    @endif
                 </div>
                <div class="field">
                    <label for="password" class="label">Password</label>
                    <div class="control has-icons-left">
                        <input type="password" class="input {{ $errors->has('password') ? 'is-danger' : '' }}" name="password" id="password" placeholder="Enter your password here" required>
                        <span class="icon is-small is-left"><i class="fa fa-lock"></i></span>
                    </div>
                    @if($errors->has('password'))
                       <p class="help is-danger">{{$errors->first('password')}}</p>
                    @endif
                </div>
                 <div class="field">
                    <label for="password" class="label">Confirm Password</label>
                    <div class="control has-icons-left">
                        <input type="password" class="input {{ $errors->has('password') ? 'is-danger' : '' }}" name="password_confirmation" id="password_confirmation" placeholder="Enter your password here" required>
                        <span class="icon is-small is-left"><i class="fa fa-lock"></i></span>
                    </div>
                    @if($errors->has('password'))
                       <p class="help is-danger">{{$errors->first('password')}}</p>
                    @endif
                </div>
                 <div class="field is-grouped">
                  <p class="control">
                    <button type="submit" class="button is-primary is-outlined m-t-20">Register</button>
                  </p>
                  <p class="control m-l-95">
                      <h5 class="has-text-right m-t-20"><a href="{{route('login')}}" class="is-muted">Already have an account?</a></h5>
                  </p>
                </div>
                </form>
            </div> <!-- end-card-content -->
        </div>
    </div>
</div>
<!-- <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection
