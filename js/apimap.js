$(function(){
    "use strict";
        var map = L.map('mapa').setView([10.997247, -74.806488], 17);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        L.marker([10.997247, -74.806488]).addTo(map)
            .bindPopup('<b>Los coletos de sistemas</b>')
            .openPopup();

});