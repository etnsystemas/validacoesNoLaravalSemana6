<!doctype html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{route('store')}}" method="post">
@csrf
    <label>
        Curso: <input type="text" name="curso" value="{{ old('curso') }}">
    </label>
    <br/>
    <label>
        Carga: <input type="text" name="carga" value="{{ old('carga') }}">
    </label>
    <br/>
    <button type="submit">Enviar</button>

</form>
</body>
</html>
