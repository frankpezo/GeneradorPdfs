<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <ul>

        @foreach ($users as $user)
            {{-- <li>{{ $users->id }}</li> --}}
            <li>{{ $user->id }}{{ $user->name }} <a href="{{ route('pdf', $user->id) }}">Generar certificado</a>
            </li>
        @endforeach
    </ul>

</body>

</html>
