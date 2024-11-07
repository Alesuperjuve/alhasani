<x-app-layout>
    
    {{ __("Testing Halaman Laporan") }}
    <div class="card">
        <div class="card-body">
            <div id="map" style="height: 500px;"></div>
        </div>
        
    </div>
    
</x-app-layout>

<script>
    const map = L.map("map").setView([-6.2088, 106.8456], 12);

    L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
    }).addTo(map);

    const routingControl = L.Routing.control({
        waypoints: [],
        routeWhileDragging: true,
        show: true,
        router: L.Routing.osrmv1({ serviceUrl: 'https://router.project-osrm.org/route/v1/' }),
    }).addTo(map);

    map.on("click", (e) => {
        if (routingControl.getWaypoints().length < 2) {
            routingControl.spliceWaypoints(routingControl.getWaypoints().length, 0, e.latlng);
        }

        if (routingControl.getWaypoints().length === 2) {
            routingControl.route();
        }
    });
</script>



