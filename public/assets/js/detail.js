const app = Vue.createApp({

    data() {
        return {
          detail: "",
          isLoading: false,
          monitoringWells: [],
        }
      },

    mounted() {
        const currentPath = window.location.pathname;
        const parts = currentPath.split('/');
        const lastValue = parts[parts.length - 1];
        this.getDetail(lastValue);
    },

    methods: {

        async getDetail(id) {
            try {
              const response = await axios.get(`http://api_hc.test/api/detail/${id}`);
              this.detail = response.data;
              this.isLoading = false;
              this.initDetailMap();
            } catch (error) {
              this.isLoading = false;
            }
        },

        initDetailMap() {
            const map = L.map("map-detail").setView([this.detail["latitude"], this.detail["longitude"]], 17);
    
            L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
                attribution: "Map data © <a href='https://openstreetmap.org'>OpenStreetMap</a> contributors",
            }).addTo(map);
    
            if (this.detail.monitoring && this.detail.monitoring.length > 0) {
                this.detail.monitoring.forEach((coord) => {
                    if (coord.latitude && coord.longitude) {
                        const iconSize = [20, 25]; // Tamaño inicial del icono
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
                                .setContent(`<a href=""></a>`)
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
    }

}).mount("#detail-page");

export default app;