@extends('layouts.layout',['title'=>'создать новый пост'])
@section('content')
    <form action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <h3>Создать пост</h3>
        @include('posts.parts.form')
        <input type="submit" value="создать пост" class="btn btn-outline-success">
    </form>
@endsection

