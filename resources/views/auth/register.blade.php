@extends('layouts.app')

@section('content')




<div class="columns m-t-20">
    <div class="column is-4"></div>
    <div class="column is-4">
        <div class="panel">
            <div class="">
                <div class="panel-heading has-text-centered">
                Register
                </div>
                <form action="{{ route('register') }}" method="post">
                    @csrf

                    <div class="field m-t-10">
                    <label class="label">Name</label>
                        <div class="control">
                            <input class="input {{$errors->has('name')? 'is-danger':''}}" type="text" placeholder="Name " name="name" required>
                        </div>
                    </div>
                    @if ($errors->has('name'))
                        <span class="help is-danger">
                            {{ $errors->first('name') }}
                        </span>
                    @endif



                    <div class="field m-t-10">
                    <label class="label">Email</label>
                        <div class="control">
                            <input class="input {{$errors->has('email')? 'is-danger':''}}" type="email" placeholder="Email " name="email" required>
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
                    

                    <input type="submit" class="button is-fullwidth is-outlined is-primary m-t-20" value="Register">
                </form>
            </div>
        </div>
    </div>
    <div class="column is-4"></div>
</div>

@endsection
