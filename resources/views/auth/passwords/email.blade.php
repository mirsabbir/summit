@extends('layouts.app')

@section('content')





<div class="columns m-t-20">
    <div class="column is-4"></div>
    <div class="column is-4">
        <div class="panel">
            <div class="">
                <div class="panel-heading has-text-centered">
                Reset password
                </div>
                @if (session('status'))
                <example-component></example-component>
                @endif
                <form action="{{ route('password.email') }}" method="post">
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
                    <input type="submit" class="button is-fullwidth is-outlined is-danger m-t-10" value="Send password reset link">
                </form>
                
            </div>
        </div>
    </div>
    <div class="column is-4"></div>
</div>
@endsection
