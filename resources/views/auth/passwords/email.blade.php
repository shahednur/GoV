@extends('layouts.app')

@section('content')

<div class="columns">
    <div class="column is-one-third is-offset-one-third m-t-100">
        <div class="card shadow">
            <div class="card-content">
                <h1 class="title">Password Resend</h1>
                 @if (session('status'))
                        <div class="notification is-success">
                            {{ session('status') }}
                        </div>
                 @endif
                <form action="{{route('password.email')}}" method="POST" role="form" >
                    {{csrf_field()}}
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
                 <div class="field is-grouped">
                  <p class="control">
                    <button type="submit" class="button is-primary is-outlined m-t-20">Send Password Reset Link</button>
                  </p>
                  <p class="control m-l-30">
                      <h5 class="has-text-right m-t-20"><a href="{{route('login')}}" class="is-muted">
                   <span class="icon is-small"><i class="fa fa-arrow-left"></i></span>
                      Back to Login</a></h5>
                  </p>
                </div>
                </form>
            </div> <!-- end-card-content -->
        </div>
    </div>
</div>
@endsection
