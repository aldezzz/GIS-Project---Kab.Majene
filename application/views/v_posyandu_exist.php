<div id="map" style="width: 1180px; height: 500px;"></div>
<script>
	const map = L.map('map').setView([-3.547979515787939, 118.9688866821755], 14);

	var peta2 = L.tileLayer('https://mt1.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
        attribution: '© Google Maps',
        maxZoom: 20,
    }).addTo(map);

	<?php foreach ($posyandu_exist as $key => $value) { ?>
	L.marker([<?= $value->latitude ?>, <?= $value->longitude ?>])
	.bindPopup("<b><?= $value->namaposyandu ?></b>")
	.addTo(map);
	<?php } ?>

</script>
