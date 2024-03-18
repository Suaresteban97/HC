<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/vue-next-select/dist/index.min.css" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <title>Hidrocarburos administrativo</title>
</head>

<body>
    <div id="admin-page">

        <nav class="navbar navbar-expand-lg bg-dark" id="main-nav">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('index') }}">
                    <h5>Hidrocarburos Administrativo</h5>
                </a>
                <a class="nav-link active" href=" {{route('new') }}">Crear</a>
                <a class="nav-link active" href="{{ route('edit', 1) }}">Editar</a>
                <a class="nav-link active" href="{{ route('logout') }}"> {{ auth()->user()->name }} </a>
            </div>
        </nav>

        @yield('content')

        @extends('templates/footer')



