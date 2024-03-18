@extends('templates/header-app')

@section('content')
    <div class="container-fluid" id="title-container">
        <h1 class="text-center">Hidrocarburos</h1>
        <div class="row justify-content-center">
            <div class="col-3 mx-3 description-container">
                <p class="resume-index">La Subdirección del Recurso Hídrico y Suelo, enmarcada en la Secretaría de Ambiente 
                    de Bogotá, despliega un compromiso incansable en la gestión sostenible de los 
                    recursos naturales y la preservación de la calidad ambiental en el Distrito Capital.
                     Dentro de esta subdirección, el Grupo de Hidrocarburos se distingue por su 
                     dedicación a brindar servicios especializados a diversos sectores de la ciudad.

                    Nuestra labor se centra en atender las necesidades de usuarios críticos en el 
                    ámbito de hidrocarburos, abarcando desde estaciones de servicios hasta movilizadores
                     de aceites, con el fin de asegurar prácticas seguras y ambientalmente responsables 
                     en el manejo de estos recursos.</p>
            </div>
            <div class="col-7 mx-3 m-0">
                <div>
                    <div class="filters input-group position-relative">
                        <select class="form-control" id="locationSelect" v-model="locationSelect">
                        <option value="">Localidades</option>
                        <option v-for="localidad in locations" :value="localidad.id">@{{ localidad.name }}</option>
                        </select>
                        <input class="form-control" type="text" v-model="searchTerm" @input="search" placeholder="Eds..." />
                        <select class="form-control" id="branchSelect" v-if="showDropdown" v-model="branchSelect">
                        <option v-for="option in filteredOptions" :value="option.id">@{{ option.name }}</option>
                        </select>
                        <button class="btn btn-success" @click="applyFilters">Buscar</button>
                        <button class="btn btn-secondary" @click="resetFilters">Limpiar</button>
            
                    </div>
                    <div class="map-container">
                        <div id="map"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection

