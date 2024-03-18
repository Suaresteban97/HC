<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Hidrocarburos 2023</title>
</head>
<body>

    <nav class="navbar navbar-expand-lg bg-dark " id="main-nav">
        <div class="container-fluid justify-content-center">
            <h5 class="text-white">Hidrocarburos - admin 2023</h5>
        </div>
    </nav>

    @if (session('error'))
        <div class="p-0 m-0 alert alert-dismissible fade show" id="alert-button" role="alert">
            <h6 class="alert alert-danger">{{ session('error') }}</h6>
            <button id="close-button" type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="col-auto p-5 text-center" id="login-container">
                    <form class="user-form p-1 border border-primary" action="{{ route('auth-login') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="user" class="form-label">Email or User</label>
                            <input type="text" placeholder="User" name="user" class="form-control" id="user">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" placeholder="Password" name="password" class="form-control" id="password">
                        </div>
                        <button type="submit" class="btn btn-primary">Ingresar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous">
    </script>
</body>
</html>


