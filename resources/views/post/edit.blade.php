@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>ویرایش پست</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('post.index') }}">بازگشت</a>
            </div>
        </div>
    </div>


    <form action="{{ route('post.update', $post->id) }}" method="POST">

         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>عنوان:</strong>
                    <input type="text" name="title" value="{{ $post->title }}" class="form-control" placeholder="">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>بدنه:</strong>
                    <textarea class="form-control" style="height:150px" name="body" placeholder="">{{ $post->body }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>نویسنده:</strong>
                    <input class="form-control" name="user_id" placeholder="" value="{{ $post->user_id }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                @csrf
                @method('PUT')
              <button type="submit" class="btn btn-primary">ثبت</button>
            </div>
        </div>

    </form>
    @endsection
