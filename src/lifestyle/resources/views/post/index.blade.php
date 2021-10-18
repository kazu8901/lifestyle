@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('css/post/post.css') }}">

@section('content')
    @section('maincopy', '投稿してください')

    <!-- 投稿フォーム -->
    <form action="/post" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}

        <input type="hidden" name="user_id" value="{{$auth->id}}">
        @if($errors->has('title'))
            <div class="error_msg">{{ $errors->first('title') }}</div>
        @endif
        <input type="text" class="form" name="title" placeholder="タイトル" value="{{ old('title') }}">

        @if($errors->has('message'))
            <div class="error_msg">{{ $errors->first('message') }}</div>
        @endif
        <div>
            <textarea class="form" name="content" placeholder="メッセージ">{{ old('message') }}</textarea>
        </div>
        <input class="form" type="file" name="file">
        <input type="submit" class="create" value="投  稿">
    </form>

    <!-- 記事描画部分 -->
    @if(count($items) > 0)
        @foreach($items as $item)
            <div class="alert alert-primary" role="alert">
                <a href="/post/{{ $item->id }}" class="alert-link">{{ $item->title }}</a>
                <form action="/post/{{ $item->id }}" method="POST">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="DELETE">
                <input type="submit" class="delete" value="削除">
                </form>
            </div>
        @endforeach
    @else
        <div>投稿記事がありません</div>
    @endif
@endsection