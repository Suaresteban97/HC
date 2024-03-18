@extends('/templates/header')

@section('content')

    <div class="container text-center" id="login-container">
        <div class="row">
          <div class="col">
            <h2 class="border-bottom border-primary border-4 pb-1">Editar sede</h2>
            <form class="user-form" @submit.prevent="submitEditBranchForm">
                @csrf
                <div v-if="editBranchView == 1" class="container text-center">
                    <input type="hidden" id="branch_id" value="{{ $branch->id }}">
                    <input type="hidden" id="documents" value="{{ json_encode($branch->documents) }}">
                    <input type="hidden" id="files" value="{{ json_encode($branch->files) }}">
                    <input type="hidden" id="chips" value="{{ json_encode($branch->chips) }}">
                    <div class="row">
                        <div class="mb-4">
                            <label for="name" class="form-label">Nombre</label>
                            <input type="text" v-model="branch_name" placeholder="{{ $branch->name }}" name="name" class="form-control" id="name">
                        </div>
                        <div class="mb-4">
                            <label for="nit" class="form-label">Nit</label>
                            <input 
                                type="text" 
                                placeholder="Ej: 969636599-6" 
                                name="nit" 
                                class="form-control" 
                                id="nit"
                                v-model="nit"
                                v-on:input="restrictToNit($event, 'nit')">
                        </div>
                        <div class="mb-4">
                            <label for="address" class="form-label">Dirección</label>
                            <input type="text" v-model="address" placeholder="{{ $branch->address }}" name="address" class="form-control" id="address">
                        </div>  
                        <div class="mb-4">
                            <label for="area" class="form-label">Área</label>
                            <input 
                                type="text" 
                                placeholder="{{ $branch->area }}" 
                                name="area" 
                                class="form-control" 
                                id="area"
                                v-model="area"
                                v-on:input="restrictToArea($event, 'area')">
                        </div>
                    </div>

                    {{-- Second Row --}}

                    <div class="row">

                        <div class="mb-4">
                            <label for="flag" class="form-label">Bandera</label>
                            <input type="text" v-model="flag" placeholder="{{ $branch->flag }}" name="flag" class="form-control" id="flag">
                        </div>

                        <div class="mb-4">
                            <label for="latitud" class="form-label">Latitud</label>
                            <input 
                                type="text" 
                                placeholder="{{ $branch->latitude }}" 
                                name="latitud" 
                                class="form-control" 
                                id="latitude"
                                v-model="latitude"
                                v-on:input="restrictToCardinal($event, 'latitude')">
                        </div>

                        <div class="mb-4">
                            <label for="longitude" class="form-label">Longitud</label>
                            <input 
                                type="text" 
                                placeholder="{{ $branch->longitude }}" 
                                name="longitude" 
                                class="form-control" 
                                id="longitude"
                                v-model="longitude"
                                v-on:input="restrictToCardinal($event, 'longitude')">
                        </div>
                        <div class="mb-4">
                            <label for="sicom" class="form-label">Sicom</label>
                            <input 
                                type="text" 
                                placeholder="{{ $branch->sicom }}" 
                                name="sicom" 
                                v-on:input="restrictToNumbers($event, 'sicom')" 
                                class="form-control" 
                                id="sicom"
                                v-model="sicom"
                            >
                        </div>
                    </div>
                  </div>    

                  {{-- Second Page --}}

                  <div v-if="editBranchView == 2" class="container text-center">
                    <div class="row">
                        <h3>Documentos</h3>
                            <div class="mb-4">
                                <label class="form-label" for="name">Nombre:</label>
                                <input class="form-control" type="text" v-model="newDocument.name" 
                                placeholder="Ej: 2018IE2598654" id="name">
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Tipo de documento: </label>   
                                <select class="form-select" v-model="newDocument.type" aria-label="Default select example">
                                    <option value="1">Requerimiento</option>
                                    <option value="2">Oficio</option>
                                    <option value="3">Informe Técnico</option>
                                    <option value="4">Concepto Técnico</option>
                                    <option value="5">Auto</option>
                                    <option value="6">Resolución</option>
                                    <option value="7">Memorando</option>
                                </select>             
                            </div>
                            <div class="mb-4">
                                <label class="form-label" for="numeration">Numeración: </label>
                                <input class="form-control" type="text" v-model="newDocument.numeration" placeholder="Ej: 1565"
                                id="numeration" v-on:input="restrictToNumbers($event, 'newDocument.numeration')">
                            </div>
                            <div class="mb-4">
                                <label class="form-label" for="day">Día (fecha del documento): </label>
                                <input class="form-control" type="text" v-model="documentDay" 
                                placeholder="Ej: 03" id="day">
                            </div>
                            <div class="mb-4">
                                <label class="form-label" for="month">Mes (fecha del documento): </label>
                                <input class="form-control" type="text" v-model="documentMonth" 
                                placeholder="Ej: 05" id="month">
                            </div>
                            <div class="mb-4">
                                <label class="form-label" for="year">Año (fecha del documento): </label>
                                <input class="form-control" type="text" v-model="documentYear" 
                                placeholder="Ej: 2015" id="year">
                            </div>
                            <a href="#" @click="addDocs"><img src="{{ asset('plus-circle.svg') }}" width="50" height="50" alt="Agregar elemento"></a>
                        
                            <div class="mt-1" v-show="Object.entries(documents).length > 0">
                                <ul>
                                    <li v-for="(item, index) in documents" :key="index">
                                        <div v-if="typeof item.action !== 'undefined' && item.action !== 2">
                                            @{{ item.name }}
                                            <a href="#" @click="removeDocs(index)"><img src="{{ asset('x.svg') }}" width="30" height="30" alt="Quitar elemento"></a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                    </div>
                </div>

                {{-- Third View --}}

                <div v-if="editBranchView == 3" class="container text-center">
                    <div class="row">
                        <h3>Expedientes</h3>
                        <div class="mb-4">
                            <label class="form-label" for="name">Nombre:</label>
                            <input class="form-control" type="text" v-model="newFile.name" 
                            placeholder="Ej: SDA-05-2020-987" id="name">
                        </div>
                        <a href="#" @click="addFiles"><img src="{{ asset('plus-circle.svg') }}" width="50" height="50" alt="Agregar elemento"></a>
                        <div class="mt-1">
                            <ul>
                                <li v-for="(item, index) in files" :key="index">
                                    <div v-if="typeof item.action !== 'undefined' && item.action !== 2">
                                        @{{ item.name }}
                                        <a href="#" @click="removeFiles(index)"><img src="{{ asset('x.svg') }}" width="30" height="30" alt="Quitar elemento"></a>
                                    </div>    
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                {{-- Fourth View --}}

                <div v-if="editBranchView == 4" class="container text-center">
                    <div class="row">

                        <h3>Chips</h3>
                        <div class="mb-4">
                            <label class="form-label" for="name">Nombre:</label>
                            <input class="form-control" type="text" v-model="newChip.name" 
                            placeholder="Ej: AAAX78887HA" id="name">
                        </div>
                        <a href="#" @click="addChips"><img src="{{ asset('plus-circle.svg') }}" width="50" height="50" alt="Agregar elemento"></a>
                        <div class="mt-1">
                            <ul>
                                <li v-for="(item, index) in chips" :key="index">
                                    <div v-if="typeof item.action !== 'undefined' && item.action !== 2">
                                        @{{ item.name }}
                                        <a href="#" @click="removeChips(index)"><img src="{{ asset('x.svg') }}" width="30" height="30" alt="Quitar elemento"></a>
                                    </div>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>

                {{-- Fifth View --}}

                <div v-if="editBranchView == 5" class="container text-center">
                    <div class="row">

                        <div class="mb-4">
                            <label class="form-label">Meta</label>   
                            <select class="form-select" v-model="goal" aria-label="Default select example">
                                <option value=""></option>
                                <option value="1">Hídrico</option>
                                <option value="2">Respel</option>
                                <option value="3">suelos</option>
                                <option value="4">PDC</option>
                            </select>                 
                        </div>

                        {{-- Hidrico --}}
                        <div v-show="goal == 1" class="mb-4">
                            <label class="form-label">¿Es lavadero?</label>   
                            <select class="form-select" v-model="washer" aria-label="Default select example">
                                <option value="0">No</option>
                                <option value="1">Sí</option>
                            </select>             
                        </div>
                        <div v-show="goal == 1" class="mb-4">
                            <label for="discharge" class="form-label">Cuerpo al que vierte</label>
                            <input 
                                type="text" 
                                placeholder="Ej: Alcantarillado..." 
                                name="discharge"
                                class="form-control" 
                                id="discharge"
                                v-model="discharge"
                            >               
                        </div>

                        {{-- Respel --}}

                        <div v-show="goal == 2" class="mb-4">
                            <label for="register" class="form-label">Registro</label>
                            <input 
                                type="text" 
                                placeholder="Ej: 5965959" 
                                name="register" 
                                class="form-control" 
                                id="register"
                                v-model="register"
                            >                
                        </div>
                        <div v-show="goal == 2" class="mb-4">
                            <label for="mediaPerMonth" class="form-label">Media por mes</label>
                            <input 
                                type="text" 
                                placeholder="Ej: 115.6" 
                                name="mediaPerMonth"
                                class="form-control" 
                                id="mediaPerMonth"
                                v-model="mediaPerMonth"
                            >               
                        </div>
                        <div v-show="goal == 2" class="mb-4">
                            <label for="movilMedia" class="form-label">Media Movil</label>
                            <input 
                                type="text" 
                                placeholder="Media movil..." 
                                name="movilMedia"
                                class="form-control" 
                                id="movilMedia"
                                v-model="movilMedia"
                            >               
                        </div>

                        {{-- Meta Selection /// --}}

                    </div>
                </div>

                <button v-if="editBranchView != 1" type="button" v-on:click="lastEditButton()" class="btn btn-primary">Atras</button>
                <button v-if="editBranchView != 5" type="button" v-on:click="nextEditButton()" class="btn btn-primary">Siguiente</button>
                <br><br>
                <button v-show="editBranchView == 5" type="submit" class="btn btn-success">Guardar</button>
                
            </form>            
          </div>
        </div>
      </div>    

@endsection