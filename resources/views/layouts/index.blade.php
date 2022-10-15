<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />

    <link rel="stylesheet" href="{{ asset('/css/styleku.css') }}" />
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
</head>

<body>
    <div class="btn-custom">
        <span class="fas fa-bars"></span>
    </div>
    <!-- Sidebar -->
    @include('layouts.sidebar')
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    @yield('content')
                </div>
            </div>
        </div>












        {{-- <div class="header">Arsip Digital Sekolah</div>
        <p>HTML CSS & Javascript (Full Tutorial)</p> --}}

    </div>
    <script>
        $(".btn-custom").click(function() {
            $(this).toggleClass("click");
            $(".sidebar").toggleClass("show");
            $(".content").toggleClass("move");
            $(".content").toggleClass("container");
            $(".inner").toggleClass("col-lg-12");
            $(".inner").toggleClass("col-lg-10");
        });
        $(".feat-btn").click(function() {
            $("nav ul .feat-show").toggleClass("show");
            $("nav ul .first").toggleClass("rotate");
        });

        $("nav ul li").click(function() {
            $(this).addClass("active").siblings().removeClass("active");
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>
