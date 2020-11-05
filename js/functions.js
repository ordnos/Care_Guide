// create map
const map = L.map('mapid').setView([-23.7099839,-46.5538248], 15);

// create and add tileLayer
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);

// create icon
const icon = L.icon({
    //iconUrl: "./../images/map-marker.svg",
    iconSize: [58, 68],
    iconAnchor: [29, 68],
    popupAnchor: [170, 2]
})

// create popup overlay
const popup = L.popup({
    closeButton: false,
    className: 'map-popup',
    minWidth: 240,
    minHeight: 240
}).setContent('Secretária da Saúde de SBC <a href="individual_page.php" class="choose-orphanage"><i class="fas fa-arrow-right text-white"></i></a>')

// create and add marker
L.marker([-23.7099839,-46.5538248])
.addTo(map)
.bindPopup(popup)