<!DOCTYPE html>
<html>
    <head>
        <!--<title>Be right back.</title>-->
        <title>Página em manutenção</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                /*color: #B0BEC5;*/
                display: table;
                font-weight: 100;
                /*font-family: 'Lato';*/
                font-family: 'Stark';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 72px;
                margin-bottom: 40px;
            }

            .links > a {                
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <!--<div class="title">Be right back.</div>-->
                <div class="title">PAGE NOT FOUND</div>
                <p>NÃO FOI POSSÍVEL ENCONTRAR A PÁGINA SOLICITADA</p>                              
            </div>

            <div class="links">
                <a href="{{ url('/tasks') }}">Voltar</a>
            </div>

        </div>
    </body>
</html>
