<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Carter+One&display=swap" rel="stylesheet" />
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('/css/login.css') }}" />
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
</head>

<body style="">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="login-wrap">
                    <div class="image-wrap">
                        <div class="overlay"></div>

                    </div>
                    <div class="form-wrap">
                        @if (session()->has('gagal'))
                            <div class="alert alert-danger alert-dismissible fade show mb-3 mt-3" role="alert">
                                {{ session('gagal') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif
                        <h1 class="fw-bold login-text">Login</h1>

                        <form method="POST" action="{{ url('/login') }}">
                            @csrf
                            <label for="username">Username</label>

                            <input type="text" name="username" class="username-field" style="margin-bottom: 30px" />

                            <label for="password">Password</label>

                            <input type="password" name="password" class="pass-field" style="margin-bottom: 40px" />
                            <button class="submit-btn" type="submit" style="margin-bottom: 150px">Login</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>
