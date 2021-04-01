<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ url('assets/teste/fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ url('assets/teste/css/owl.carousel.min.css') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ url('assets/teste/css/bootstrap.min.css') }}">

    <!-- Style -->
    <link rel="stylesheet" href="{{ url('assets/teste/css/style.css') }}">

    <title> {{ config('app.name', 'Laravel') }} | Login </title>
</head>

<body>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-6 order-md-2">
                    <img src="{{ url('assets/teste/images/undraw_file_sync_ot38.svg') }}" alt="Image" class="img-fluid">
                </div>
                <div class="col-md-6 contents">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="mb-4">
                                <h3> Entre no <strong>SISCAB</strong></h3>
                                <p class="mb-4">Sistema de Conferência de Arquivo Bancário.</p>
                            </div>
                            <form method="POST" action="fazer-login">
                                {{ csrf_field() }}
                                <div class="form-group first">
                                    <label for="username"> E-mail </label>
                                    <input type="text" class="form-control" id="username" name="email">
                                </div>

                                <div class="form-group last mb-4">
                                    <label for="password"> Senha </label>
                                    <input type="password" class="form-control" id="password" name="password">

                                </div>

                                <input type="submit" value="Entrar" class="btn text-white btn-block btn-primary">
                            </form>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>


    <script src="{{ url('assets/teste/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ url('assets/teste/js/popper.min.js') }}"></script>
    <script src="{{ url('assets/teste/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('assets/teste/js/main.js') }}"></script>
</body>

</html>