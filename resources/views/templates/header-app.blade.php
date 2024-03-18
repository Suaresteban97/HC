<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ysabeau+Infant:wght@100;500&display=swap" rel="stylesheet">
    <title>Hidrocarburos</title>
</head>

<body>

    <div id="app-page">
        <div class="sidebar-container">
            <div class="sidebar" :class="{ active: isSidebarOpen }">
                <ul class="menu">
                    <li><a href="/">Inicio</a></li>
                    <li><a href="/Eds">Estaciones</a></li>
                    <li><a href="#">Servicios</a></li>
                    <li><a href="/administrative">Administrar</a></li>
                </ul>
            </div>
            <button class="menu-button" @click="toggleSidebar()">
                <span class="menu-icon"></span>
            </button>
        </div>

    @yield('content')

    @extends('templates/footer-app')

    

