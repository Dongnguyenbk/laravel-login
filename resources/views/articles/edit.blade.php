@extends('layouts.master')

@section('head.title')
    Chinh sua bai viet
@endsection

@section('body.content')
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Whoop!</strong>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('article.update', $article->id) }}" method='post'>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="_method" value="put">
                        <legend>Chinh sua bai viet</legend>
                        <div class="form-group">
                            <label class="control-label" for="title">Tieu de bai viet</label>
                            <input class="form-control" type="text" name="title" placeholder="Tieu de bai viet" value="{{ $article->title }}">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="description">Mo ta bai viet</label>
                            <input class="form-control" type="text" name="description" placeholder="Mo ta bai viet" value="{{ $article->description }}">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="content">Noi dung bai viet</label>
                            <textarea class="form-control" name="content" rows="10" placeholder="Noi dung bai viet">{{ $article->content }}</textarea>
                        </div>
                        <input class="btn btn-primary" type="submit" name="create" value="Cap nhat">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection