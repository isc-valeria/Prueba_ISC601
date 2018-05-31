<html>

<head>
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/materialize.css">
    <link rel="stylesheet" type="text/css" href="css/stylo.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <link rel="stylesheet" href="style.css">

    <style>
        body {
            display: flex;
            min-height: 100vh;
            flex-direction: column;
        }

        main {
            flex: 1 0 auto;
        }

    </style>
</head>

<body background="fondohotel.jpg" >
<div></div>
<div class="section"></div>
<main >
    <center>
        <img class="responsive-img" style="width: 250px;" src="hotel.gif" />
        <div class="section"></div>


        <div class="section"></div>

        <div class="container">
            <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">

                <form class="col s12" method="post">
                    <div class='row'>
                        <div class='col s12'>
                        </div>
                    </div>
                    <h5 class="black-text ">Por favor, inicia sesión en tu cuenta</h5><br>
                    <div class='row'>
                        <div class='input-field col s12'>
                            <i class="icon-user-solid-circle prefix  indigo-text"></i>
                            <input class='validate' type='email' name='email' id='email' />
                            <label for='email'>  Ingresa tu email</label>
                        </div>
                    </div>

                    <div class='row'>
                        <div class='input-field col s12'>
                            <i class="icon-lock-closed prefix #3f51b5 indigo-text"></i>
                            <input class='validate' type='password' name='password' id='password' />
                            <label for='password'>  Ingresa tu contraseña</label>
                        </div>


                        <label style='float: right;'>
                            <a class='red-text' href='#!'><b>Olvidaste tu contraseña?</b></a>
                        </label>
                    </div>

                    <br />
                    <center>
                        <div class='row'>
                            <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect indigo'>Entrar</button>
                        </div>
                        <a href="#!">Crear una cuenta</a>
                    </center>
                </form>
            </div>
        </div>
    </center>

    <div class="section"></div>
    <div class="section"></div>
</main>
</body>
</html>