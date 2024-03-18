@extends('/templates/header')

@section('content')
    @if (session('success'))
        <div class="container">
        <div class="p-0 m-0 alert alert-dismissible fade show" id="alert-button" role="alert">
            <h6 class="alert alert-success">{{ session('success') }}</h6>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>
    @endif

    @if (session('error'))
        <div class="container">
            <div class="alert alert-dismissible fade show" id="alert-button" role="alert">
                <h6 class="alert alert-danger">{{ session('error') }}</h6>
                <button id="close-button" type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    @endif

    <div class="container text-center" id="login-container">
        <div class="row">
          <div class="col">
            <h2 class="border-bottom border-primary border-4 pb-1">Crear Propietario</h2>
            <a href="{{ route('new-branch') }}">
                <button type="submit" class="btn btn-primary">Crear Sede</button> 
            </a>
            <form class="user-form" action="/" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="name" class="form-label">Nombre</label>
                    <input type="text" placeholder="Ej: Texaco S.A.S" name="name" class="form-control" id="name">
                </div>
                <div class="mb-4">
                    <label for="name" class="form-label">Nit</label>
                    <input type="text" placeholder="Ej: 9856956599-0" name="name" class="form-control" id="name">
                </div>
                <div class="mb-4">
                    <label for="name" class="form-label">Email</label>
                    <input type="text" placeholder="Ej: Texaco@mailejemplo.com" name="name" class="form-control" id="name">
                </div>
                
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
          </div>
        </div>
      </div>    

@endsection