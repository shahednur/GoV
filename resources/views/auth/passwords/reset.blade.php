@extends('layouts.app')

@section('content')

<div class="columns">
    <div class="column is-one-third is-offset-one-third m-t-100">
        <div class="card shadow">
            <div class="card-content">
                <h1 class="title">Reset Password</h1>
                @if (session('status'))
                        <div class="notification is-success">
                            {{ session('status') }}
                        </div>
                 @endif
                <form action="{{route('password.request')}}" method="POST" role="form" >
                    {{csrf_field()}}
                    <input type="hidden" name="token" value="{{ $token }}">
                    <div class="field">
                    <label for="email" class="label">Email Address</label>
                    <div class="control has-icons-left has-icons-right">
                        <input type="text" class="input {{ $errors->has('email') ? 'is-danger' : '' }}" name="email" id="email" placeholder="name@example.com" value="{{ $email or old('email') }}" required>
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
                        <input type="password" class="input {{ $errors->has('password') ? 'is-danger' : '' }}" name="password" id="password" placeholder="enter your password here" required>
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
                    <button type="submit" class="button is-primary is-outlined m-t-20">Reset Password</button>
                  </p>
                </div>
                </form>
            </div> <!-- end-card-content -->
        </div>
    </div>
</div>
@endsection
