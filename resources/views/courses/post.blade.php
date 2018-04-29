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
    <div class="column is-6">
        
        <div class="card m-t-30">
            <div class="card-header">
                
            <div class="card-header-title">
                
                
                <p>{{$content['title']}}</p>
                
                
            </div>
                
            </div>

            <div class="card-content">
                <div class="content">
                 {{$content['body']}}
                </div>
            </div>
               
            
        </div>

        <div class="m-t-100"></div>
        <!-- comment section 
        
        comment[
        
        id
        body
        avatar
        name
        isadmin

        ]
        
        -->




        @foreach($comments as $comment)
            
        
        <comment :inside="cb"></comment>
        



        <article class="media">
        <figure class="media-left">
            <p class="image is-64x64">
            <img src="{{asset('images/uploads/'.$comment['avatar'])}}">
            </p>
        </figure>
        <div class="media-content">
            <div class="field">
            <p class="control">
            <strong>{{$comment['name']}}</strong>
                <br>
                <input :value="cb" value="{{$comment['body']}}" ></input>
                <br>
            <sub style="color:#206887;">{{$comment['time']}}</sub>
            </p>
            </div>
        </div>
        </article>
        @endforeach


        <!-- comment sec end -->


        <!-- comment box -->

        @if(Auth::check())
        <article class="media m-t-20">
        <figure class="media-left">
            <p class="image is-64x64">
            <img src="{{asset('images/uploads/'.Auth::user()->avatar)}}">
            </p>
        </figure>
        <div class="media-content">
            <div class="field">
            <p class="control">
                <textarea class="textarea" placeholder="Add a comment..."></textarea>
            </p>
            </div>
            <nav class="level">
            <div class="level-left">
                <div class="level-item">
                <form action="">

                <button class="button is-info is-outlined">Submit</button>
                </form>
                
                </div>
            </div>
            </nav>
        </div>
        </article>
        @endif
        <!-- -->

        @if(Auth::guard('admin')->check())
        <article class="media m-t-20">
        <figure class="media-left">
            <p class="image is-64x64">
            <img src="{{asset('images/uploads/'.Auth::guard('admin')->user()->avatar)}}">
            </p>
        </figure>
        <div class="media-content">
            <div class="field">
            <p class="control">
                <textarea class="textarea" placeholder="Add a comment..."></textarea>
            </p>
            </div>
            <nav class="level">
            <div class="level-left">
                <div class="level-item">
                <form action="">

                <button class="button is-info is-outlined">Submit</button>
                </form>
                
                </div>
            </div>
            </nav>
        </div>
        </article>
        @endif




    </div>
    <div class="column">
    
    </div>

    <template>
            <div>
                @{{vo}}
            </div>
    </template>


</div>


<script>
    
    
    
    var ui = new Vue({
        export default{

        },
    })


</script>

@endsection
<script src="{{ asset('js/app.js') }}"></script>

