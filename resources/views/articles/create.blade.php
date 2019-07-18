@extends('layouts.master')

@section('head.title')
    Them bai viet
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
                    
                    <form action="{{ route('article.create') }}" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <legend>Them bai viet</legend>
                        <div class="form-group">
                            <label class="control-label" for="title">Tieu de bai viet</label>
                            <input class="form-control" type="text" name="title" placeholder="Tieu de bai viet">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="description">Mo ta bai viet</label>
                            <input class="form-control" type="text" name="description" placeholder="Mo ta bai viet">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="content">Noi dung bai viet</label>
                            <textarea class="form-control" name="content" rows="10" placeholder="Noi dung bai viet"></textarea>
                        </div>
                        <input class="btn btn-primary" type="submit" name="create" value="Tao bai viet">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection