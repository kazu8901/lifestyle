@extends('layouts.app')

<link rel="stylesheet" href="{{ asset('css/user_profile/index.css') }}">

@section('content')
  <div class="contents">
    <div class="icon_block">
     <img class="icon" src="/storage/image/{{$auth->profile_icon}}">
    </div>
    <div class="follow">
      <ul class="follow-list">
        <li>投稿 <br>10</li>
        <li>フォロー <br>10</li>
        <li>フォロワー <br>10</li>
      </ul>
    </div>
    <div class="name">
      {{ $auth->name }}
    </div>
    <div class="id">
      {{ $auth->user_id}}
    </div>
    <div class="intro">{{ $auth->intro }}</div>
    <div class="edit">
      <a class="edit-btn" href="/mypage/edit">プロフィールを編集</a>
    </div>
    <div class="posts">
    </div>
  </div>
@endsection