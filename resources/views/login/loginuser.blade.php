<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <title>PUSKESMAS | LOG IN</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('LogoPuskesmas.jpeg') }}">
    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('AdminLTE/plugins/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('AdminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('AdminLTE/dist/css/adminlte.min.css?v=3.2.0')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback')}}">

    <style>
        body {
            background: linear-gradient(45deg, #27ae60, #2980b9);
            background-size: cover;
            background-attachment: fixed;
            background-position: center;
            animation: gradientAnimation 15s ease infinite;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 5%;
        }

        .login-card {
            position: relative;
            z-index: 1;
            max-width: 400px;
            background: #fff;
            padding-top: 100px;
            margin-right: 10%;
        }

        .logo {
            position: absolute;
            top: -50px;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            z-index: 2;
        }

        .content-left {
            position: relative;
            width: 45%;
            background: rgba(255, 255, 255, 0.8);
            padding: 1em;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        @media (max-width: 768px) {
            body {
                padding: 5% 1%;
                flex-direction: column;
                justify-content: center;
            }

            .content-left,
            .login-card {
                width: 100%;
                margin-bottom: 20px;
                margin-right: 0;
            }
        }

        .kata-gaya {
            font-family: 'Roboto', sans-serif;
            font-size: 18px;
            line-height: 1.6;
            color: #333;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1);
            margin-top: 0;
            /* Menghapus spasi di atas teks */
            margin-bottom: 0;
            /* Menghapus spasi di bawah teks */
        }
    </style>
</head>

<body>

    <div class="content-left">
        <div class="card">
            <div class="card-header">
                Visi dan Misi
            </div>
            <div class="card-body">
                <lottie-player src="https://assets5.lottiefiles.com/packages/lf20_QpYA0iEZzb.json" background="transparent" speed="1" style="width: 100%; height: auto;" loop autoplay></lottie-player>
                <p class="kata-gaya" style="font-weight: bold;"> Visi : </p>
                <p>Terwujudnya masyarakat dan lingkungan yang sehat secara mandiri.</p>
                <p class="kata-gaya" style="font-weight: bold;">Misi : </p>

                <p class="kata-gaya">a. Memelihara dan meningkatkan pelayanan kesehatan yang merata, bermutu, dan berkeadilan.</p>
                <p class="kata-gaya">b. Mendorong kemandirian masyarakat untuk berprilaku hidup bersih dan sehat.</p>
                <p class="kata-gaya">c. Menggerakkan pembangunan berwawasan kesehatan.</p>
                <p class="kata-gaya">d. Meningkatkan kualitas SDM bidang tugasnya.</p>
            </div>
        </div>
    </div>

    <!-- Right Side -->
    <div class="login-card card card-outline card-primary">
        <img class="logo" src="{{ asset('images/logo_puskesmas.png') }}">

        <div class="card-header text-center">
            <a href="#" class="h4"><b style="color: #3CB371"> PUSKESMAS</b> PARSOBURAN</a>
        </div>
        <div class="card-body">
            <p class="login-box-msg">Sign in to start your session</p>
            <form action="{{ route('postlogin') }}" method="post">
                {{ csrf_field() }}
                <div class="input-group mb-3">
                    <input type="username" class="form-control" name="username" placeholder="Username">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <i class="fas fa-user"></i>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>

                @if(Session::has('error'))
                <div class="alert alert-danger">
                    {{ Session::get('error') }}
                </div>
                @endif

                <div class="row">
                    <div class="col-8">
                        <div class="icheck-primary">
                            <input type="checkbox" id="remember">
                            <label for="remember"> Remember Me </label>
                        </div>
                    </div>
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                    </div>
                </div>

                <p class="mb-1">
                    <a href="forgot-password.html">Lupa sandi?</a>
                </p>
            </form>
        </div>
    </div>

    <!-- JS Scripts -->
    <script src="{{asset('AdminLTE/plugins/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('AdminLTE/dist/js/adminlte.min.js?v=3.2.0')}}"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
</body>

</html>