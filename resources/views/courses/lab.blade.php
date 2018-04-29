@extends('layouts.app')

@section('content')


<div class="columns">

    <div class="column is-3">
        <nav class="panel m-t-30 m-l-15">
        <p class="panel-heading">
            {{$courseName}}
        </p>
        
        @if(sizeof($posts)==0)
            <a class="panel-block is-active">
                No posts
            </a>
        @endif

        @foreach($posts as $post)
        <a class="panel-block is-active" href="{{config('app.url').'/courses/'.$courseCode.'/'.$post['id']}}">
            {{$post['title']}}
        </a>
        @endforeach
        
        </nav>
    </div>
    <div class="column">
    
    </div>
    <div class="column">
    
    </div>

</div>



@endsection
