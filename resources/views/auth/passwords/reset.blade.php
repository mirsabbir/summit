@extends('layouts.app')

@section('content')




<div class="columns m-t-20">
    <div class="column is-4"></div>
    <div class="column is-4">
        <div class="panel">
            <div class="">
                <div class="panel-heading has-text-centered">
                Reset Password
                </div>
                <form action="{{route('password.request')}}" method="post">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">
                    <div class="field m-t-10">
                    <label class="label">Email</label>
                        <div class="control">
                            <input class="input {{$errors->has('email')? 'is-danger':''}}" type="email" placeholder="Email " name="email" required autofocas>
                        </div>
                    </div>
                    @if ($errors->has('email'))
                        <span class="help is-danger">
                            {{ $errors->first('email') }}
                        </span>
                    @endif
                    <div class="field m-t-10">
                    <label class="label">Password</label>
                        <div class="control">
                            <input class="input {{$errors->has('password')? 'is-danger':''}}" type="Password" placeholder="******" name="password" required>
                        </div>
                    </div>
                    @if ($errors->has('password'))
                        <span class="help is-danger">
                            {{ $errors->first('password') }}
                        </span>
                    @endif



                    <div class="field m-t-10">
                    <label class="label">Confirm Password</label>
                        <div class="control">
                            <input class="input {{$errors->has('password')? 'is-danger':''}}" type="Password" placeholder="******" name="password_confirmation" required>
                        </div>
                    </div>
                    @if ($errors->has('password_confirmation'))
                        <span class="help is-danger">
                            {{ $errors->first('password_confirmation') }}
                        </span>
                    @endif
                    
                    <input type="submit" class="button is-fullwidth is-outlined is-primary m-t-10" value="Reset password">
                </form>
                
            </div>
        </div>
    </div>
    <div class="column is-4"></div>
</div>
@endsection
