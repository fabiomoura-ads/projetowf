<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                //font-family: 'Lato';
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
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
				<h3> Olá {{ $user->name }},</h3>
				<p> Seu cadastro foi validado com sucesso, segue abaixo seus dados de acesso:</h3>
				<p>
					Nome: {{ $user->name }} </br>
					Login: {{ $user->email }}</br>
					Senha: {{ $user->password }}</br>
					Cadastro: {{ $user->created_at }}</br>
				</p>
				
				
            </div>
        </div>
    </body>
</html>
