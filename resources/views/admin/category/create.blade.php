@extends('admin.master')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>ایجاد دسته بندی</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-left">
                            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">خانه</a></li>
                            <li class="breadcrumb-item active">ایجاد دسته بندی</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-header">
                            </div>
                            <form role="form" method="POST" action="{{ route('admin.storeCategory') }}">
                                {{ csrf_field() }}
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="title">عنوان</label>
                                        <input type="text" name="name" class="form-control" id="title" placeholder="عنوان دسته بندی را وارد کنید">
                                    </div>
                                    <div class="form-group">
                                        <label>انتخاب کنید</label>
                                        <select class="form-control" name="parent_id">
                                            <option value="">یکی از موارد زیر را انتخاب کنید</option>
                                            @foreach($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">ارسال</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
