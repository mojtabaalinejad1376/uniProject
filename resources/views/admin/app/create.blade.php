@extends('admin.master')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>ایجاد اپلیکیشن</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-left">
                            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">خانه</a></li>
                            <li class="breadcrumb-item active">ایجاد اپلیکیشن</li>
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
                            <form role="form">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="title">عنوان</label>
                                        <input type="text" class="form-control" id="title"
                                               placeholder="عنوان اپلیکیشن را وارد کنید">
                                    </div>
                                    <div class="form-group">
                                        <label for="price">قیمت</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="price"
                                                   placeholder="قیمت اپلیکیشن را وارد کنید">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">T</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="volume">حجم</label>
                                        <input type="text" class="form-control" id="volume"
                                               placeholder="حجم اپلیکیشن را وارد کنید">
                                    </div>
                                    <div class="form-group">
                                        <label for="version">نسخه</label>
                                        <input type="text" class="form-control" id="version"
                                               placeholder="نسخه اپلیکیشن را وارد کنید">
                                    </div>
                                    <div class="form-group">
                                        <label for="uploader">ارسال شده توسط</label>
                                        <input type="text" class="form-control" id="uploader"
                                               placeholder="نام شخص را وارد کنید">
                                    </div>
                                    <div class="form-group">
                                        <label for="description">توضیحات</label>
                                        <textarea name="description" id="description"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="file">انتخاب فایل</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="file">
                                                <label class="custom-file-label" for="file">فایل خود را انتخاب کنید</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text" id="">آپلود</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">ارسال</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
