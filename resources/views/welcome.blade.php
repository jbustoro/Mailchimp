<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    </head>
    <body>
        <div class="container text-center">
            <h1>Landing page</h1>
            <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur id nisi consequat tortor elementum
                venenatis. Curabitur finibus massa non felis dignissim vehicula. </h2>

            <form method="POST" action="/subscribe" class="form-inline">
                {!! csrf_field() !!}
                <input class="form-control" type="email" name="email" placeholder="Ingresa tu email">
                <button class="btn btn-primary" type="submit">Enviar</button>
            </form>
        </div>
    </body>
</html>
