@extends('layouts.app')

<link rel="stylesheet" href="{{ asset('css/user_profile/edit.css') }}">



@section('content')
<script src="{{ asset('js/user_profile/edit.js') }}"></script>
  <div class="content">
  <img id="icon" class="icon_view" src="/storage/image/{{$auth->profile_icon}}">

    <!-- フォームエリア -->
    <form action="/mypage/edit" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" value="{{$auth->id}}">
    <label for="profile_icon" class="col-md-4 col-form-label text-md-right">{{ __('Icon') }}</label>
    <input id="user_icon" type="file" name="profile_icon">
    
    <!-- <script>
      function previewImage(obj)
      {
        var fileReader = new FileReader();
        fileReader.onload = (function() {
          document.getElementById('icon').src = fileReader.result;
        });
        fileReader.readAsDataURL(obj.files[0]);
      }
    </script> -->
    <br>

    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
    <input class="name" type="text" name="name" value="{{$auth->name}}">
    <br>

    <label for="user_id" class="col-md-4 col-form-label text-md-right">{{ __('User ID') }}</label>
    <input class="user_id" type="text" name="user_id" value="{{$auth->user_id}}">
    <br>

    <div class="intro_area">
      <label for="intro" class="intro_label col-md-4 col-form-label text-md-right">{{ __('Introduction') }}</label>
      <textarea class="intro" name="intro" id="" cols="50" rows="10">{{$auth->intro}}</textarea>
    </div>
    <br>

    <div class="col-md-6 offset-md-4">
      <button type="submit" class="btn btn-primary">
        {{ __('UPDATE!') }}
      </button>
    </div>
    </form>
  </div>
@endsection