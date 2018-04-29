@extends('layouts.app')

@section('content')


@if (session('status'))
    <Saved></Saved>
@endif


<div class="columns">
    <div class="column is-3"></div>
    <div class="column m-t-20 m-b-150">
        <b-tabs type="is-boxed">
            <b-tab-item label="Profile">
                <div class="columns">
                    
                    <div class="column">
                        <div class="label">Name:&nbsp &nbsp {{Auth::user()->name}}</div>
                        <div class="label">E-mail:&nbsp &nbsp {{Auth::user()->email}}</div>
                    </div>
                    <div class="column">
                        <img class="" src="{{asset('images/uploads/'.Auth::user()->avatar)}}" alt="" width=100 height=100 style="border-radius:50%;">
                    </div>
                </div>
                
            </b-tab-item>
            <b-tab-item label="Settings">
                <form action="{{route('profile')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="label">Name: </div>
                <input type="text" class="input" name="name" placeholder="Name">
                <div class="label m-t-5">Upload a profile picture: </div>
                <b-upload v-model="files" name="avatar" >
                    <a class="button is-primary m-t-15">
                        <i class="fa fa-upload m-r-5"></i>
                        <span>Click to upload</span>
                    </a>
                </b-upload>
                <div class="label m-t-15">Password: </div>
                <input type="password" class="input m-t-10" name="password" placeholder="******" required>
                <button type="submit" class="button m-t-20 is-primary is-outlined is-fullwidth">Update</button>
                </form>
            </b-tab-item>
        </b-tabs>
    </div>
    <div class="column is-3"></div>
</div>



               
@endsection
