@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left m-2">
                <h2>ساخت پست جدید</h2>
            </div>
            <div class="pull-right d-flex m-1">
                <a class="btn btn-primary" href="{{ route('post.index') }}">بازگشت</a>
            </div>
        </div>
    </div>
<div class="text-right">
    @include('layouts.partials.error')
</div>

    <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
@csrf
        <div class="row text-right">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>عنوان:</strong>
                    <input type="text" name="title" class="form-control" placeholder="">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>بدنه:</strong>
                    <textarea type="text" name="body" class="form-control"  style="height:150px" placeholder=""></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>نویسنده:</strong>
                    <input class="form-control" type="text" name="user_id" placeholder="">
                </div>
               <div class="col-md-6">
                   <input type="file" name="image" class="form-control mb-3">
            </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary btn-block">ثبت</button>
            </div>
        </div>

    </form>
@endsection
