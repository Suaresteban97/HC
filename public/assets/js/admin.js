const adminApp = Vue.createApp({

    mounted() {
        this.getLocations();
        this.getUpzs();
        this.getWatersheds();
        this.getOwners();
        this.getDataFromIndex();
    },

    data(){
        return {
            locations: [],
            upzs: [],
            watersheds: [],
            owners: [],
            errors: [],
            selectedLocation: null,
            selectedUpz: null,
            selectedWatershed: null,
            selectedOwner: null,
            branch_name: "",
            branch_id: "",
            sicom: null,
            nit: null,
            hc_code: null,
            area: null,
            address: "",
            latitude: null,
            longitude: null,
            flag: "",
            goal: "",
            confirmateBranch: null,

            //Associated Documents

            documentDay: '',
            documentMonth: '',
            documentYear: '',

            newDocument: {
                id: '',
                type: '',
                name: '',
                date: '',
                numeration: '',
                year: '',
                action: 0
            },
            newFile: {
                id: '',
                name: '',
                action: 0
            },
            newChip: {
                id: '',
                name: '',
                action: 0
            },

            files: [],
            documents: [],
            chips: [],

            //Hidrico
            washer: null,
            discharge: null,

            //Respel
            register: null,
            mediaPerMonth: null,
            movilMedia: null,

            //Branch Step

            branchView: 1,
            editBranchView: 1,
        }
    },

    watch: {
        errors: {
            handler(newErrors) {
                if (Object.keys(newErrors).length > 0) {
                    this.showErrors();
                }
            },
            deep: true,
        },

        confirmateBranch: {
            handler() {
                if (this.confirmateBranch["code"] == 1) {
                    this.showBranchSuccessForm();
                } else {
                    this.showBranchWrongForm();
                }
            },
            deep: true,
        },

        confirmateEditBranch: {
            handler() {
                if (this.confirmateBranch["code"] == 1) {
                    this.showBranchSuccessForm();
                } else {
                    this.showBranchWrongForm();
                }
            },
            deep: true,
        },

        documents: {
            handler() {
                console.log(this.documents);
            }, 
            deep: true,
        }
    },

    computed: {
        
    }, 

    methods: {

        getLocations() {
            fetch("/api/locations", {
            method: "GET",
            })
            .then((res) => res.json())
            .then((data) => {
                this.locations = data;
            });
        },

        getUpzs() {
            fetch("/api/upzs", {
            method: "GET",
            })
            .then((res) => res.json())
            .then((data) => {
                this.upzs = data;
            });
        },

        getWatersheds() {
            fetch("/api/watersheds", {
            method: "GET",
            })
            .then((res) => res.json())
            .then((data) => {
                this.watersheds = data;
            });
        },

        getOwners() {
            fetch("/api/owners", {
            method: "GET",
            })
            .then((res) => res.json())
            .then((data) => {
                this.owners = data;
            });
        },

        //Dynamic methods

        restrictToNumbers(event, field) {
            const inputValue = event.target.value;
            const numbersOnly = inputValue.replace(/[^0-9]/g, '');

            this[field] = numbersOnly;
        },

        restrictToNit(event, field) {
            const inputValue = event.target.value;
            const nitOnly = inputValue.replace(/[^0-9-]/g, '');

            this[field] = nitOnly;
        },

        restrictToArea(event, field) {
            const inputValue = event.target.value;
            const areaOnly = inputValue.replace(/[^0-9.,]/g, '');

            this[field] = areaOnly;
        },

        restrictToCardinal(event, field) {
            const inputValue = event.target.value;
            const cardinalOnly = inputValue.replace(/[^0-9.-]/g, '');

            this[field] = cardinalOnly;
        },

        async getDataFromIndex(){
            this.branch_id = $("#branch_id").val() ?? "";
            const documentsValue = $("#documents").val();
            const chipsValue = $("#chips").val();
            const filesValue = $("#files").val();
            this.documents = documentsValue ? JSON.parse(documentsValue) : [];
            this.chips = chipsValue ? JSON.parse(chipsValue) : [];
            this.files = filesValue ? JSON.parse(filesValue) : [];

            // Luego, puedes mapear los documentos para construir la nueva estructura
            this.documents = this.documents.map(document => {
                return {
                    id: document.id,
                    type: document.type_id,
                    name: document.document,
                    date: document.date,
                    numeration: document.numeration,
                    year: document.year,
                    action: 0
                };
            });

            this.chips = this.chips.map(chip => {
                return {
                    id: chip.id,
                    name: chip.chip,
                    action: 0
                };
            });

            this.files = this.files.map(file => {
                return {
                    id: file.id,
                    name: file.file,
                    action: 0
                };
            });

            this.clearUrl();
        },

        //Send Methods

        submitBranchForm() {

            this.errors = [];

            if (this.branch_name == "") {
                this.errors["branch_name"] = "Falta el campo de nombre";
            }

            if (this.hc_code == null) {
                this.errors["hc_code"] = "Falta el código de la base EDS";
            }

            if (this.sicom == null) {
                this.errors["sicom"] = "Falta el campo de sicom";
            }

            if (this.nit == null) {
                this.errors["nit"] = "Falta el campo de nit";
            }

            if (this.selectedLocation == null) {
                this.errors["location"] = "Falta localidad";
            }

            if (this.selectedUpz == null) {
                this.errors["upz"] = "Falta upz";
            }

            if (this.selectedWatershed == null) {
                this.errors["watershed"] = "Falta la cuenca";
            }

            if (this.selectedOwner == null) {
                this.errors["owner"] = "Falta seleccionar un propietario";
            }

            if (this.latitude == null) {
                this.errors["latitude"] = "Falta el campo latitud";
            }

            if (this.longitude == null) {
                this.errors["longitude"] = "Falta el campo longitud";
            }

            if (this.goal == "") {
                this.errors["goal"] = "Falta seleccionar una meta";
            }

            if (Object.values(this.errors).length == 0) {
                var data = {
                    "code": this.hc_code,
                    "name": this.branch_name,
                    "sicom": this.sicom,
                    "address": this.address,
                    "nit": this.nit,
                    "latitude": this.latitude,
                    "longitude": this.longitude,
                    "flag": this.flag,
                    "area": this.area,
                    "goal": this.goal,
                    "location": this.selectedLocation,
                    "owner": this.selectedOwner,
                    "upz": this.selectedUpz,
                    "watershed": this.selectedWatershed,
                    "washer": this.washer,
                    "discharge": this.discharge,
                    "register": this.register,
                    "mediaPerMonth": this.mediaPerMonth,
                    "movilMedia": this.movilMedia,
                };
                return fetch('api/saveBranch', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify(data)
                })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Error en la solicitud');
                    }
                    return response.json();
                })
                .then(data => {
                    this.confirmateBranch = data;
                    window.location.href = '/administrative'
                })
                .catch(err => {
                    throw err;
                });
            } else {
                return;
            }

        },

        submitEditBranchForm() {

            var data = {
                "name": this.branch_name,
                "sicom": this.sicom,
                "address": this.address,
                "nit": this.nit,
                "latitude": this.latitude,
                "longitude": this.longitude,
                "flag": this.flag,
                "area": this.area,
                "goal": this.goal,
                "washer": this.washer,
                "discharge": this.discharge,
                "register": this.register,
                "mediaPerMonth": this.mediaPerMonth,
                "movilMedia": this.movilMedia,
                "files": this.files,
                "documents": this.documents,
                "chips": this.chips,
            };  

            return fetch('api/editBranch/' + this.branch_id, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(data)
            })
            .then(response => {
                console.log(response);
                if (!response.ok) {
                    throw new Error('Error en la solicitud');
                }
                return response.json();
            })
            .then(data => {
                this.confirmateEditBranch = data;

                this.showBranchSuccessEditForm();

                setTimeout(() => {
                    window.location.href = '/administrative';
                }, 1500); 
            })
            .catch(err => {
                throw err;
            });

        },

        submitOwnerForm() {
            
        },

        nextViewButton() {
            if (this.branchView == 1 && this.goal != "") {
                this.branchView = 2;
            } else {
                if (this.goal == "") {
                    this.errors = [];
                    this.errors["goal"] = "Falta seleccionar una meta";
                }
            }
        },

        // Edit steps buttons

        nextEditButton() {
            if (this.editBranchView != 5) {
                this.editBranchView++;
            } else {
                return;
            }
        },

        lastViewButton() {
            if (this.branchView == 2) {
                this.branchView = 1
            }
        },

        lastEditButton() {
            if (this.editBranchView != 1) {
                this.editBranchView--;
            }
        },

        // Methods for add Associated Documents

        // Action: add: 1, delete: 2 

        addDocs() {
            if (
                this.newDocument.name != "" &&
                this.newDocument.type != "" &&
                this.documentDay != "" && 
                this.documentMonth != "" && 
                this.documentYear != ""
            ) {
                this.newDocument.date = `${this.documentDay}/${this.documentMonth}/${this.documentYear}`
                this.newDocument.year = this.documentYear;
                this.newDocument.action = 1;
                console.log(this.newDocument);
                this.documents.push({ ...this.newDocument });
                this.newDocument = { name: '', type: '', numeration: '', date: '', year: ''};
                this.documentDay = ""; 
                this.documentMonth = "";
                this.documentYear = "";
            } else {

            }
        },

        removeDocs(index) {
            this.documents[index]["action"] = 2;
        },

        addFiles() {
            if (
                this.newFile.name != ""
            ) {
                this.newFile.action = 1;
                this.files.push({ ...this.newFile });
                this.newFile = { name: '' };
                console.log(this.files);
            }
        },

        removeFiles(index) {
            this.files[index]["action"] = 2;
        },

        addChips() {
            if (
                this.newChip.name != ""
            ) {
                this.newChip.action = 1;
                this.chips.push({ ...this.newChip });
                this.newChip = { name: '' };
                console.log(this.chips);
            }
        },

        removeChips(index) {
            this.chips[index]["action"] = 2;
        },

        clearUrl(){
            const urlWithoutParameters = window.location.origin;
            window.history.replaceState({}, document.title, urlWithoutParameters);
        },

        // Modals

        showBranchSuccessForm() {
            swal({
                title: 'Formulario enviado',
                text: 'Se ha guardado la sede correctamente',
                icon: 'success',
                buttons: {
                    confirm: 'Aceptar'
                }
            });
        },

        showBranchSuccessEditForm() {
            swal({
                title: 'Formulario de edición enviado',
                text: 'Se ha editado la sede correctamente',
                icon: 'success',
                buttons: {
                    confirm: 'Aceptar'
                }
            });
        },

        showBranchWrongForm() {
            swal({
                title: 'Formulario no enviado',
                text: 'No se ha guardado la sede',
                icon: 'error',
                buttons: {
                    confirm: 'Aceptar'
                }
            });
        },

        showErrors() {
            let errorsList = Object.values(this.errors).map(error => `<li>${error}</li>`).join('');
            let content = document.createElement('ul');
            content.innerHTML = errorsList;
            content.classList.add('centered-list');
            
            swal({
                title: 'Datos incompletos',
                content: content,
                icon: 'error',
                buttons: {
                    confirm: 'Aceptar'
                }
            });
        },
    },

    components: {
        'vue-select': VueNextSelect,
    },

}).mount("#admin-page");

export default adminApp;