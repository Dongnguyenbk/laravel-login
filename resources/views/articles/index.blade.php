@extends('layouts.master')

@section('head.title')
    Danh sach bai viet
@endsection

@section('body.content')
<div class="content">
    <div class="container">
        @foreach ($article as $a)
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="article">
                        <h3>{{ $a->title }}</h3>
                        <hr>
                        <p>{{ $a->description }}</p>
                    <a href="{{ route('article.show', $a->id) }}">Read more</a>    
                    </div>
                </div>
            </div>
        @endforeach

        <div class="row text-center">
            <div class="col-md-8 col-md-offset-2">
                {!! $article->render() !!}
            </div>
        </div>

    </div>
</div>
@stop