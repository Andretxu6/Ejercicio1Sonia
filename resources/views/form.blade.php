<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Form</title>

    </head>
    <body>
        <form action="/formAnswer" method="post">
            {!! csrf_field() !!}
            Nombre: <input type="text" name="nombre" />
            <br/>
            <br/>
            Apellido: <input type="text" name="apellido" />
            <br/>
            <br/>
            Edad: <input type="number" name="edad" />
            <br/>
            <br/>
            <input type="submit" name="submit" value="Enviar" />
        </form>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

    </body>
</html>
