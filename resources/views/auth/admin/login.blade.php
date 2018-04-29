@extends('layouts.app')

@section('content')

<div class="columns m-t-20">
    <div class="column is-4"></div>
    <div class="column is-4">
        <div class="panel">
            <div class="">
                <div class="panel-heading has-text-centered">
                Admin Login
                </div>
                <form action="{{route('admin.login')}}" method="post">
                    @csrf
                    <div class="field m-t-10">
                    <label class="label">Email</label>
                        <div class="control">
                            <input class="input {{$errors->has('email')? 'is-danger':''}}" type="email" placeholder="Email " name="email">
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
                            <input class="input {{$errors->has('password')? 'is-danger':''}}" type="Password" placeholder="******" name="password">
                        </div>
                    </div>
                    @if ($errors->has('password'))
                        <span class="help is-danger">
                            {{ $errors->first('password') }}
                        </span>
                    @endif
                    <b-checkbox name="remember" class="m-t-10"> Remember me </b-checkbox>
                    <input type="submit" class="button is-fullwidth is-outlined is-primary m-t-10" value="Login">
                </form>
            </div>
        </div>
    </div>
    <div class="column is-4"></div>
</div>
@endsection
