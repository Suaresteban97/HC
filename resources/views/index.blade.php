@extends('/templates/header')

@section('content')

    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-4 admin-card">
                <div class="card">
                    <div class="card-body">
                    <h5 class="card-title">Cantidad de Propietarios</h5>
                    <p class="card-text">{{ $data["owners"] }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 admin-card">
                <div class="card">
                    <div class="card-body">
                    <h5 class="card-title">Cantidad de sedes</h5>
                    <p class="card-text">{{ $data["branches"] }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 admin-card">
                <div class="card">
                    <div class="card-body">
                    <h5 class="card-title">Cantidad de documentos</h5>
                    <p class="card-text">{{ $data["documents"] }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 admin-card">
                <div class="card">
                    <div class="card-body">
                    <h5 class="card-title">Hidrico</h5>
                    <p class="card-text">{{ $data["hidrico"] }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 admin-card">
                <div class="card">
                    <div class="card-body">
                    <h5 class="card-title">Suelo</h5>
                    <p class="card-text">{{ $data["suelo"] }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 admin-card">
                <div class="card">
                    <div class="card-body">
                    <h5 class="card-title">Respel</h5>
                    <p class="card-text">{{ $data["respel"] }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


  


