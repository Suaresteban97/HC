@extends('templates/header-app')

@section('content')
    @if($detail)
    <div id="detail-page">
      <div class="container-fluid" id="title-container">
        <h1 class="text-center">{{ $detail["name"] }}</h1>
        <div class="row justify-content-center">
          <div class="col-5 mx-3 card-container">
            <ul class="list-group w-100 p-4">
              <li class="list-group-item green-background">Información principal</li>
              <li class="list-group-item">Dirección: {{ $detail["address"] }}</li>
              <li class="list-group-item">Ciudad: {{ $detail["city"]["name"] }}</li>
              <li class="list-group-item">Localidad: {{ $detail["location"]["name"] }}</li>
              <li class="list-group-item">Upz: {{ $detail["upz"]["name"] }}</li>
              <li class="list-group-item">Cuenca: {{ $detail["watershed"]["name"] }}</li>
              <li class="list-group-item">Sicom: {{ $detail["sicom"] }}</li>
              <li class="list-group-item">Nit de operador: {{ $detail["operator_nit"] }}</li>
              <li class="list-group-item green-background">Expedientes</li>
              @foreach($detail["files"] as $file)
              <li class="list-group-item">
                {{ $file["file"] }}
              </li>
              @endforeach
              <li class="list-group-item green-background">Chips</li>
              @foreach($detail["chips"] as $chip)
              <li class="list-group-item">
                  {{ $chip["chip"] }}
              </li>
              @endforeach
              <li class="list-group-item green-background">Documents</li>
              @foreach($detail["documents"] as $doc)
              <li class="list-group-item">
                  {{ $doc["document"] }}
              </li>
              @endforeach
            </ul>
          </div>
          <div class="col-5 mx-3 detail-container">
            <div class="detail-map-container">
              <div id="map-detail" class="map-container-2 mt-4"></div>
            </div>     
          </div>
        </div>
      </div>
    </div>
    @else
      <div>No data</div>
    @endif
@endsection