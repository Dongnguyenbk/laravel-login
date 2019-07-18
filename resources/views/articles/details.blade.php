@extends('layouts.master')

@section('head.title')
    Chi tiet bai viet
@endsection

@section('body.content')
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <a href="/">Back to home</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="article">
                    <h3>{{ $article->title }}</h3>
                    <hr>
                    <p>{{ $article->content }}</p>
                </div>
                <a href="{{ route('article.edit', $article->id) }}">
                    <button class="btn btn-primary">Chinh sua</button>
                </a>
                <form action="{{ route('article.destroy', $article->id) }}" method="post" style="display: inline;">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="_method" value="delete">
                    <input class="btn btn-danger" type="submit" name="delete" value="Xoa bai viet">
                </form>
            </div>
            
        </div>
    </div>
</div>
@endsection
