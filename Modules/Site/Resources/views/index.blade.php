<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>صفحه نخست</title>
    <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css" media="all"/>
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css" media="all"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="/assets/js/bootstrap.min.js" defer></script>

</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div  class="header " >
            <div class="col-12 col-xl-4 offset-xl-4 mt-5 text-center">
                <h3 class="header-title">تعاونی تامین نیاز های کشوری پیشخوان دولت</h3>
                <p class="header-text">شماره ثبت :567648</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-lg-8 col-xl-9 banner-section ">
            <div class="row justify-content-around">
                <div class="col-4 mt-2 col-lg-2 ">
                    <a class="btn btn-outline-dark menu-button" href="/contact-us"style="font-size: 14px">تماس باما</a>
                </div>
                <div class="col-4 mt-2 col-lg-2 ">
                    <a class="btn btn-outline-dark menu-button" href="/about-us"style="font-size: 15px">درباره ما</a>
                </div>
                <div class="col-4 mt-2 col-lg-2 ">
                    <a class="btn btn-outline-dark menu-button" href="#">ورود اعضا</a>
                </div>
                <div class="col-4 mt-2 col-lg-2 mt-lg-9">
                    <a class="btn btn-outline-dark menu-button" href="{{route('register.stock')}}">خرید سهام</a>
                </div>
                <div class="col-4 mt-2 col-lg-2 mt-lg-9">
                    <a class="btn btn-outline-dark menu-button" href="{{route('stockholder.login')}}">ورود سهامداران</a>
                </div>
                <div class="col-4 mt-2 col-lg-2 mt-lg-9">
                    <a class="btn btn-outline-dark menu-button" href="#">ورود مهمان</a>
                </div>
                <div class="col-4 mt-2 col-lg-2 ">
                    <a class="btn btn-outline-dark menu-button" href="/content">اخبار  و وقایع</a>
                </div>

            </div>
            <div class="row mt-3">
                <div class="col-12 col-md-3 left-banner-item"></div>
                <div class="col-12 col-md-7 banner"></div>
                <div class="col-12 col-md-2  right-banner-item">
            </div>
        </div>
            <div class="row mt-3 ml-lg-5   justify-content-center ">
                <div class="col-12 mt-3 col-md-2">
                    <a class="btn btn-outline-dark menu-button" href="#">اطلاعیه ها</a>
                </div>
                <div class="col-12 mt-3 col-md-2">
                    <a class="btn btn-outline-dark menu-button" href="#">فروشگاه هایپر پیشخوان</a>
                </div>
                <div class="col-12 mt-3 col-md-2">
                    <a class="btn btn-outline-dark menu-button" href="#">درخواست همکاری</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-4 col-xl-3 form-section text-center mt-sm-3">
            <h4>ورود به سامانه خدمات پیشخوان دولت</h4>

            @if ($errors->any())

                <div class="alert alert-danger text-right">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br />
            @endif

            @if(\Illuminate\Support\Facades\Session::has('message'))
                <div class="alert alert-success text-right">
                    {{\Illuminate\Support\Facades\Session::get('message')}}
                </div>
            @endif
            <div class="col-12">
                <form action="{{route('office.send-otp')}}" method="POST" class="mt-4">
                    @csrf
                    <div class="form-group">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control text-center" placeholder="شماره همراه" name="phone" aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <span class="input-group-text" id="username"><i class="fa fa-phone"></i></span>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-dark w-100">ورود به سیستم</button>
                </form>

                <a href="{{route('terms.office')}}" class="btn btn-light submit-btn">فرم ثبت نام</a>
            </div>
            <div class="col-12 enmad-box">
                <img src="/assets/img/enmad.jpg" width="100%" height="170px" >
            </div>
        </div>
    </div>
</div>
</body>
</html>
