@extends('admin::layouts.master')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">

                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>ویرایش مقاله</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                @if ($errors->any())

                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div><br />
                @endif

                @if(\Illuminate\Support\Facades\Session::has('message'))
                    <div class="alert alert-success">
                        {{\Illuminate\Support\Facades\Session::get('message')}}
                    </div>
                @endif
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">ویرایش مقاله </h3>

                            </div>
                            <!-- /.card-header -->
                            <div class="card-body  p-0">
                                <!-- form start -->
                                <form action="{{route('banners.update',$banner->id)}}" method="POST" role="form" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6 form-group">
                                                <label for="title">عنوان</label>
                                                <input type="text" class="form-control" value="{{$banner->title}}" id="title" name="title" placeholder="عنوان تبلیغ را وارد کنید">
                                            </div>

                                            <div class="col-6 form-group">
                                                <label for="link">لینک(اختیاری)</label>
                                                <input type="text" class="form-control" value="{{$banner->link}}"  id="link" name="link" placeholder="لینک تبلیغ را وارد کنید">
                                            </div>


                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="1" name="active" id="flexCheckDefault"
                                                {{$banner->active  === 1 ? 'checked' : ''}}
                                                >
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    فعال
                                                </label>
                                            </div>

                                        </div>


                                        <div class="row justify-content-lg-start">
                                            <label class="btn btn-primary" for="image">آپلود عکس</label>
                                            <input type="file" hidden class="form-control" id="image" name="image" >

                                        </div>

                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-warning col-2">بروزرسانی</button>
                                    </div>
                                </form>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>

@endsection
