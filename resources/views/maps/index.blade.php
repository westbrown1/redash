@extends('layouts.app')

@section('title', 'Maps')

@section('content')
<p>hello</p>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.4.0/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet@1.4.0/dist/leaflet.js"></script>

<div id="mapcontainer"></div>
<script>
	var map = L.map('mapcontainer').setView([51.505, -0.09], 13);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

L.marker([51.5, -0.09]).addTo(map)
    .bindPopup('A pretty CSS3 popup.<br> Easily customizable.')
    .openPopup();
</script>

<script>
	var markers = L.markerClusterGroup();
markers.addLayer(L.marker(getRandomLatLng(map)));
map.addLayer(markers);


</script>
@stop