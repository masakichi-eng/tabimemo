@extends('layouts.articles_app')

@section('title', $user->name . 'のフォロー中')

@section('content')
  @include('article_nav')
  <div class="container">
    @include('users.user')
    @include('users.tabs', ['hasArticles' => false, 'hasLikes' => false])
    @foreach($followings as $person)
      @include('users.person')
    @endforeach
  </div>
@endsection
