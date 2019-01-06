<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link href="../css/loginStyle.css" rel="stylesheet" type="text/css">
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>/*
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }*/
        </style>
    </head>
    <body>
        <div class="container-fluid">
            <div id="whiteContainer">
                <div id="imgLogin">
                    <img src="../img/HR SOFTWARE.png">
                </div>
                <form>
                    <div class="form-group">
                        <label for="usuarioLogin">Usuario</label>
                        <input type="text" class="form-control" id="usuarioLogin" placeholder="Usuario">
                        <small id="emailHelp" class="form-text text-muted">No comparta sus credenciales.</small>
                    </div>
                    <div class="form-group">
                        <label for="passwordLogin">Password</label>
                        <input type="password" class="form-control" id="passwordLogin" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <small><a href="###">¿Olvidaste tu contraseña?</a></small>
                    </div>
                    <button type="submit" class="btn btn-success btn-block">Iniciar sesión</button>
                </form>
            </div>
        </div>
    </body>

    <script src="../js/bootstrap.min.js" rel="script" type="text/javascript"></script>
</html>
