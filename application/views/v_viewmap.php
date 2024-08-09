<div id="map" style="width: 1180px; height: 500px;"></div>
<script>
	const map = L.map('map').setView([-3.547979515787939, 118.9688866821755], 14);

	const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
	maxZoom: 19,
	attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
	}).addTo(map);
</script>
