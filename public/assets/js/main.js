const app = Vue.createApp({

    mounted() {
        this.getFilteredBranches();
        this.getLocations();
        this.getChips();
    },

    data(){
        return {
            //Map data
            searchTerm: '',
            showDropdown: false,
            ubications: null,
            chips: null,
            locations: null,
            locationSelect: "",
            branchSelect: "",
            isMouseOver: false,
            isSidebarOpen: false
        }
    },
    computed: {
        
        filteredOptions() {
            if (Array.isArray(this.ubications)) {

                const lowerSearchTerm = this.searchTerm.toLowerCase().trim();

                if(lowerSearchTerm.startsWith("aaa")){
                    const filteredChips = this.chips.filter(chip => chip.chip.toLowerCase().startsWith(lowerSearchTerm));
                    const branchIds = filteredChips.map(chip => chip.branch_id);
                    const filteredUbications = this.ubications.filter(option => branchIds.includes(option.id));
                    return filteredUbications;
                } else {  
                    return this.ubications.filter(option => {
                        const lowerName = option.name.toLowerCase().trim();
                        const lowerAddress = option.address.toLowerCase().trim();
                        return lowerName.includes(lowerSearchTerm) ||
                        lowerAddress.includes(lowerSearchTerm)
                    });
                }
            } else {
                return [];
            }
        },
    },
    methods: {

        //Map Methods

        applyFilters() {

            const params = {
                location: this.locationSelect,
                branch: this.branchSelect
            };

            this.getFilteredBranches(params);

        },

        search() {
            this.showDropdown = this.searchTerm.length > 0;
        },

        getChips(){
            axios.get('api/chips').then(response => {
                this.chips = response.data;
            }); 
        },

        getBranches(){
            axios.get('api/ubications').then(response => {
                this.ubications = response.data;
                this.initMap();
            }); 
        },

        getLocations(){
            axios.get('api/locations').then(response => {
                this.locations = response.data;
                console.log(response.data)
            }); 
        },

        getFilteredBranches(params) {

            console.log(params);

            axios.get('api/filteredBranches', { params }).then(response => {

                if (response.data.code == 1) {
                    const data = response.data.data;
                    if (Array.isArray(data)) {
                        this.ubications = data;
                    } else if (typeof data === 'object') {
                        this.ubications = [data];
                    } else {
                        this.ubications = [];
                    }
                    this.clearMarkers();
                    this.initMap();
                } else {
                    console.log("no results");
                }

            }).catch(error => {
                // Manejo de errores
            });
        },

        resetFilters() {
            this.searchTerm = '';
            this.locationSelect = '';
            this.branchSelect = ''; 
            this.getFilteredBranches(); 
        },

        clearMarkers() {

            if (this.markers && this.markers.length > 0) {

                this.markers.forEach(marker => {
                marker.setMap(null); 
                });

                this.markers = [];
            }

            if (this.map) {
                this.map.remove();
                this.map = null;
            }
        },

        initMap() {
        const map = L.map("map").setView([4.60971, -74.08175], 11);

        L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
            attribution: "Map data © <a href='https://openstreetmap.org'>OpenStreetMap</a> contributors",
        }).addTo(map);

        if (this.ubications && this.ubications.length > 0) {
            this.ubications.forEach((coord) => {
                if (coord.latitude && coord.longitude) {
                    const iconSize = [10, 16]; // Tamaño inicial del icono
                    const scaleFactor = 0.3; // Ajuste de escala según tus necesidades

                    const myIcon = L.icon({
                        iconUrl: '../../marker.png',
                        iconSize: iconSize,
                        iconAnchor: [10, 16],
                        popupAnchor: [1, -34],
                        tooltipAnchor: [14, -28],
                    });

                    const marker = L.marker([coord.latitude, coord.longitude], { icon: myIcon }).addTo(map);
                    marker.on("mouseover", () => {
                        L.popup()
                            .setLatLng([coord.latitude, coord.longitude])
                            .setContent(`<a href="/detail/${coord.id}">${coord.name}</a>`)
                            .openOn(map);
                    });

                    map.on("zoomend", () => {
                        const currentZoom = map.getZoom();
                        const newSize = [
                            iconSize[0] + currentZoom * scaleFactor,
                            iconSize[1] + currentZoom * scaleFactor
                        ];
                        myIcon.options.iconSize = newSize;
                        marker.setIcon(myIcon);
                    });
                }
            });
        }
            this.map = map;
        },

        initDetailMap() {
            const map = L.map("map-detail").setView([coordinates[0].latitude, coordinates[0].longitude], 5);
    
            L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
                attribution: "Map data © <a href='https://openstreetmap.org'>OpenStreetMap</a> contributors",
            }).addTo(map);
    
            if (this.ubications && this.ubications.length > 0) {
                this.ubications.forEach((coord) => {
                    if (coord.latitude && coord.longitude) {
                        const iconSize = [10, 16]; // Tamaño inicial del icono
                        const scaleFactor = 0.3; // Ajuste de escala según tus necesidades
    
                        const myIcon = L.icon({
                            iconUrl: '../../marker.png',
                            iconSize: iconSize,
                            iconAnchor: [10, 16],
                            popupAnchor: [1, -34],
                            tooltipAnchor: [14, -28],
                        });
    
                        const marker = L.marker([coord.latitude, coord.longitude], { icon: myIcon }).addTo(map);
                        marker.on("mouseover", () => {
                            L.popup()
                                .setLatLng([coord.latitude, coord.longitude])
                                .setContent(`<a href="/detail/${coord.id}">${coord.name}</a>`)
                                .openOn(map);
                        });
    
                        map.on("zoomend", () => {
                            const currentZoom = map.getZoom();
                            const newSize = [
                                iconSize[0] + currentZoom * scaleFactor,
                                iconSize[1] + currentZoom * scaleFactor
                            ];
                            myIcon.options.iconSize = newSize;
                            marker.setIcon(myIcon);
                        });
                    }
                });
            }
                this.map = map;
            },

        //Other methods

        toggleSidebar() {
            this.isSidebarOpen = !this.isSidebarOpen;
        }
    },
    

}).mount("#app-page");

export default app;