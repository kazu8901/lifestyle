@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('css/home.css') }}">


@section('content')
        @if(count($posts) > 0)
            @foreach($posts as $post)
                <div class="box">
                    <div class="post">
                        <div class="icon-area">
                            <a href="/home">
                                <img class="icon" src="/storage/image/{{$post->user->profile_icon}}" alt="">
                            </a>
                        </div>
                        <div class="contents">
                            <div class="name-area">
                                <div class="name">
                                    {{$post->user->name}}
                                </div>
                                <div class="id">
                                    {{$post->user->user_id}}
                                </div>
                            </div>
                            <div class="title">
                                <a href="">{{$post->title}}</a>
                            </div>
                            <div class="content">
                                {{$post->content}}
                            </div>
                            <!-- <div class="test">
                            </div> -->
                            @if($post->file !== null)
                                <div class="file">
                                    <img class="file-view" src="/storage/posts/{{$post->file}}">
                                </div>
                            @endif
                            <div class="date">
                                {{$post->user->updated_at}}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <div class="container">
                <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">Dashboard</div>

                                <div class="card-body">
                                    @if (session('status'))
                                        <div class="alert alert-success" role="alert">
                                            {{ session('status') }}
                                        </div>
                                    @endif

                                    投稿がありません
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
@endsection