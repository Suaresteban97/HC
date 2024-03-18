@extends('/templates/header')

@section('content')

    <div class="container text-center" id="login-container">
        <div class="row">
          <div class="col">
            <h2 class="border-bottom border-primary border-4 pb-1">Crear Sede</h2>
            <form class="user-form" @submit.prevent="submitBranchForm">
                @csrf
                <div v-if="branchView == 1" class="container text-center">
                    <div class="row">
                        <div class="mb-4">
                            <label for="name" class="form-label">Nombre</label>
                            <input type="text" v-model="branch_name"placeholder="Ej: Texaco Norte 195" name="name" class="form-control" id="name">
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
                            <input type="text" v-model="address" placeholder="Ej: Kr 45 67 89" name="address" class="form-control" id="address">
                        </div>
                        <div class="mb-4">
                            <label for="hc_code" class="form-label">Código base HC</label>
                            <input 
                                type="text" 
                                placeholder="Ej: 530" 
                                name="hc_code" 
                                class="form-control" 
                                id="hc_code"
                                v-model="hc_code"
                                v-on:input="restrictToNit($event, 'hc_code')">
                        </div>   
                        <div class="mb-4">
                            <label for="area" class="form-label">Área</label>
                            <input 
                                type="text" 
                                placeholder="Ej: 596,3" 
                                name="area" 
                                class="form-control" 
                                id="area"
                                v-model="area"
                                v-on:input="restrictToArea($event, 'area')">
                        </div>
                        <div class="mb-4">
                            <label for="latitud" class="form-label">Latitud</label>
                            <input 
                                type="text" 
                                placeholder="Ej: -4.596659" 
                                name="latitud" 
                                class="form-control" 
                                id="latitude"
                                v-model="latitude"
                                v-on:input="restrictToCardinal($event, 'latitude')">
                        </div>
                        <div class="mb-4">
                            <label for="flag" class="form-label">Bandera</label>
                            <input type="text" v-model="flag" placeholder="Ej: Texaco" name="flag" class="form-control" id="flag">
                        </div>
                    </div>

                    {{-- Second Row --}}

                    <div class="row">
                        <div class="mb-4">
                            <label for="longitude" class="form-label">Longitud</label>
                            <input 
                                type="text" 
                                placeholder="Ej: 75.33659" 
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
                                placeholder="Ej: 5965959" 
                                name="sicom" 
                                v-on:input="restrictToNumbers($event, 'sicom')" 
                                class="form-control" 
                                id="sicom"
                                v-model="sicom"
                            >
                        </div>
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

                        <div class="mb-4">
                            <label class="form-label">Upz</label>
                            <vue-select :options="upzs" class="select-button" v-model="selectedUpz" label-by="name" 
                                search-placeholder="Click para escribir"
                                placeholder="Elige una Upz"
                                :searchable="true" 
                                :close-on-select="true"
                                :clear-on-select="true"
                            >
                            <option value=""></option>
                            </vue-select>
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Cuenca</label>
                            <vue-select :options="watersheds" class="select-button" v-model="selectedWatershed" label-by="name" 
                                search-placeholder="Click para escribir"
                                placeholder="Elige una cuenca"
                                :searchable="true" 
                                :close-on-select="true"
                                :clear-on-select="true"
                            >
                            <option value=""></option>
                            </vue-select>                      
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Localidad</label>
                            <vue-select :options="locations" class="select-button" v-model="selectedLocation" label-by="name" 
                                search-placeholder="Click para escribir"
                                placeholder="Elige una localidad"
                                :searchable="true" 
                                :close-on-select="true"
                                :clear-on-select="true"
                            >
                            <option value=""></option>
                            </vue-select>
                        </div>
                        <div class="mb-4">
                            <label for="location" class="form-label">Propietario</label>
                            <vue-select :options="owners" class="select-button" v-model="selectedOwner" label-by="name" 
                                search-placeholder="Click para escribir"
                                placeholder="Elige un propietario"
                                :searchable="true" 
                                :close-on-select="true"
                                :clear-on-select="true"
                            >
                            <option value=""></option>
                            </vue-select> 
                        </div>
                    </div>
                  </div>

                  <div v-if="branchView == 2" class="container text-center">
                    <div class="row">
                        {{-- Meta Selection --}}

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

                <button v-show="goal == 3 || goal == 4" v-on:click="submitBranchForm()" type="submit" class="btn btn-success">Guardar</button>
                <button v-show="branchView == 2" v-on:click="submitBranchForm()" type="submit" class="btn btn-success">Guardar</button>
                <button v-if="branchView == 2" type="button" v-on:click="lastViewButton()" class="btn btn-primary">Atras</button>
                <button v-if="branchView == 1 && (goal == 1 || goal == 2)" type="button" v-on:click="nextViewButton()" class="btn btn-primary">Siguiente</button>
                
            </form>            
          </div>
        </div>
      </div>    

@endsection