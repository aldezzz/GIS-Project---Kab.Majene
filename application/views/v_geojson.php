<div id="map" style="width: 1180px; height: 500px;"></div>

<script>
	var peta1 = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFyZGFsaXVzIiwiYSI6ImNsZnVtbDdtZzAyYjMzdXRhdDN6djY5cWoifQ.Xqtyqa7hvGhQla2oAwpG_Q', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
            '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
            'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        id: 'mapbox/streets-v11'
    });


    var peta2 = L.tileLayer('https://mt1.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
        attribution: '© Google Maps',
        maxZoom: 20,
    });


    var peta3 = L.tileLayer('https://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}', {
        maxZoom: 20,
        subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
    });


    var peta4 = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
        maxZoom: 18,
        id: 'mapbox/outdoors-v11',
        tileSize: 512,
        zoomOffset: -1,
        accessToken: 'pk.eyJ1IjoibWFyZGFsaXVzIiwiYSI6ImNsZnVtbDdtZzAyYjMzdXRhdDN6djY5cWoifQ.Xqtyqa7hvGhQla2oAwpG_Q'
    });


    var peta5 = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    });


    var peta6 = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFyZGFsaXVzIiwiYSI6ImNsZnVtbDdtZzAyYjMzdXRhdDN6djY5cWoifQ.Xqtyqa7hvGhQla2oAwpG_Q', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
            '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
            'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        id: 'mapbox/dark-v10'
    });


    var peta7 = L.tileLayer('https://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}{r}.png', {
        maxZoom: 19,
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
            '<a href="https://carto.com/attributions">CARTO</a>'
    });


    var peta8 = L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Street_Map/MapServer/tile/{z}/{y}/{x}', {
        attribution: 'Map data &copy; <a href="https://www.arcgis.com/">ArcGIS</a>'
    });


    var peta9 = L.tileLayer('https://{s}.google.com/vt/lyrs=y&x={x}&y={y}&z={z}', {
        maxZoom: 20,
        subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
        attribution: 'Map data &copy; <a href="https://www.google.com/maps">Google Maps</a>'
    });


    var peta10 = L.tileLayer('https://{s}.google.com/vt/lyrs=p&x={x}&y={y}&z={z}', {
        maxZoom: 20,
        subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
        attribution: 'Map data &copy; <a href="https://www.google.com/maps">Google Maps</a>'
    });

	var majeneLayerGroup = L.layerGroup();
	var geoJsonLayerGroup = L.layerGroup();

	const map = L.map('map', {
	center: [-3.547979515787939, 118.9688866821755],
	zoom: 14,
	layers: [peta1, majeneLayerGroup]
});


const baseLayers = {
	'Default': peta1,
	'Street': peta2,
	'Satelite': peta3,
	'Dark': peta4,
};

const layerControl = L.control.layers(baseLayers).addTo(map);



L.control.layers(baseLayers, {
	'Majene Layers': majeneLayerGroup,
	'GeoJSON Layers' :  geoJsonLayerGroup
}).addTo(map);

<?php foreach ($majene as $key => $value) { ?>
        $.getJSON("<?= base_url('Kab. Majene/' . $value->geojson) ?>", function(data) {
            geoLayer = L.geoJson(data).addTo(majeneLayerGroup);
        });
    <?php } ?>

// geojson tammarodo
$.getJSON("<?= base_url('Kab. Majene/Tammerodo.geojson') ?>", function(data){
	console.log(data);
	geoLayer = L.geoJson(data).addTo(geoJsonLayerGroup);
});

// geojson tandeallo
$.getJSON("<?= base_url('Kab. Majene/Tandeallo.geojson') ?>", function(data){
	geoLayer = L.geoJson(data).addTo(geoJsonLayerGroup);
});

// geojson tinambung
$.getJSON("<?= base_url('Kab. Majene/Tinambung.geojson') ?>", function(data){
	geoLayer = L.geoJson(data).addTo(geoJsonLayerGroup);
});

// geojson Kelurahan Labuang Utara
$.getJSON("<?= base_url('Kab. Majene/Kelurahan Labuang Utara.geojson') ?>", function(data){
	geoLayer = L.geoJson(data).addTo(geoJsonLayerGroup);
});

// geojson totolisi sendana
$.getJSON("<?= base_url('Kab. Majene/Totolisi Sendana.geojson') ?>", function(data){
	geoLayer = L.geoJson(data).addTo(geoJsonLayerGroup);
});

// geojson tubo poang
$.getJSON("<?= base_url('Kab. Majene/Tubo Poang.geojson') ?>", function(data){
	geoLayer = L.geoJson(data).addTo(geoJsonLayerGroup);
});

// geojson tubo selatan
$.getJSON("<?= base_url('Kab. Majene/Tubo Selatan.geojson') ?>", function(data){
	geoLayer = L.geoJson(data).addTo(geoJsonLayerGroup);
});

// geojson Tubo Tengah
$.getJSON("<?= base_url('Kab. Majene/Tubo Tengah.geojson') ?>", function(data){
	geoLayer = L.geoJson(data).addTo(geoJsonLayerGroup);
});

// geojson Tubo
$.getJSON("<?= base_url('Kab. Majene/Tubo.geojson') ?>", function(data){
	geoLayer = L.geoJson(data).addTo(geoJsonLayerGroup);
});

// geojson ulidang
$.getJSON("<?= base_url('Kab. Majene/Ulidang.geojson') ?>", function(data){
	geoLayer = L.geoJson(data).addTo(geoJsonLayerGroup);
});

// geojson ulumanda
$.getJSON("<?= base_url('Kab. Majene/Ulumanda.geojson') ?>", function(data){
	geoLayer = L.geoJson(data).addTo(geoJsonLayerGroup);
});

// geojson papali soreang
$.getJSON("<?= base_url('Kab. Majene/Papali Soreang.geojson') ?>", function(data){
	geoLayer = L.geoJson(data).addTo(geoJsonLayerGroup);
});

// geojson Pesuloang
$.getJSON("<?= base_url('Kab. Majene/Pesuloang.geojson') ?>", function(data){
	geoLayer = L.geoJson(data).addTo(geoJsonLayerGroup);
});

/* // geojson Popenga
$.getJSON("<?= base_url('Kab. Majene/Popenga.geojson') ?>", function(data){
	geoLayer = L.geoJson(data).addTo(map);
});

// geojson Pandau
$.getJSON("<?= base_url('Kab. Majene/Pandau.geojson') ?>", function(data){
	geoLayer = L.geoJson(data).addTo(map);
});

// geojson Puttada
$.getJSON("<?= base_url('Kab. Majene/Puttada.geojson') ?>", function(data){
	geoLayer = L.geoJson(data).addTo(map);
});

// geojson Salutahongan
$.getJSON("<?= base_url('Kab. Majene/Salutahongan.geojson') ?>", function(data){
	geoLayer = L.geoJson(data).addTo(map);
});

// geojson Salutambung
$.getJSON("<?= base_url('Kab. Majene/Salutambung.geojson') ?>", function(data){
	geoLayer = L.geoJson(data).addTo(map);
});

// geojson Sambabo
$.getJSON("<?= base_url('Kab. Majene/Sambabo.geojson') ?>", function(data){
	geoLayer = L.geoJson(data).addTo(map);
});

// geojson Sendana
$.getJSON("<?= base_url('Kab. Majene/Sendana.geojson') ?>", function(data){
	geoLayer = L.geoJson(data).addTo(map);
});

// geojson Seppong
$.getJSON("<?= base_url('Kab. Majene/Seppong.geojson') ?>", function(data){
	geoLayer = L.geoJson(data).addTo(map);
});

// geojson Pundau
$.getJSON("<?= base_url('Kab. Majene/Pundau.geojson') ?>", function(data){
	geoLayer = L.geoJson(data).addTo(map);
});

// geojson Simbang
$.getJSON("<?= base_url('Kab. Majene/Simbang.geojson') ?>", function(data){
	geoLayer = L.geoJson(data).addTo(map);
});

// geojson Sulai
$.getJSON("<?= base_url('Kab. Majene/Sulai.geojson') ?>", function(data){
	geoLayer = L.geoJson(data).addTo(map);
});

// geojson Tallambalao
$.getJSON("<?= base_url('Kab. Majene/Tallambalao.geojson') ?>", function(data){
	geoLayer = L.geoJson(data).addTo(map);
});

// geojson Tallubanua Utara
$.getJSON("<?= base_url('Kab. Majene/Tallubanua Utara.geojson') ?>", function(data){
	geoLayer = L.geoJson(data).addTo(map);
});

// geojson Tallumbanua
$.getJSON("<?= base_url('Kab. Majene/Tallubanua.geojson') ?>", function(data){
	geoLayer = L.geoJson(data).addTo(map);
});

// geojson Tammerodo Udata
$.getJSON("<?= base_url('Kab. Majene/Tammerodo Utara.geojson') ?>", function(data){
	geoLayer = L.geoJson(data).addTo(map);
});

// geojson Limboro rambu rambu
$.getJSON("<?= base_url('Kab. Majene/Limboro Rambu rambu.geojson') ?>", function(data){
	geoLayer = L.geoJson(data).addTo(map);
});

// geojson limbua
$.getJSON("<?= base_url('Kab. Majene/Limbua.geojson') ?>", function(data){
	geoLayer = L.geoJson(data).addTo(map);
});

// geojson Lombang Timur
$.getJSON("<?= base_url('Kab. Majene/Lombang Timur.geojson') ?>", function(data){
	geoLayer = L.geoJson(data).addTo(map);
});

// geojson Lombang
$.getJSON("<?= base_url('Kab. Majene/Lombang.geojson') ?>", function(data){
	geoLayer = L.geoJson(data).addTo(map);
});

// geojson Lombong Timur
$.getJSON("<?= base_url('Kab. Majene/Lombong Timur.geojson') ?>", function(data){
	geoLayer = L.geoJson(data).addTo(map);
});

// geojson Lombong
$.getJSON("<?= base_url('Kab. Majene/Lombong.geojson') ?>", function(data){
	geoLayer = L.geoJson(data).addTo(map);
});


// geojson Maliaya
$.getJSON("<?= base_url('Kab. Majene/Maliaya.geojson') ?>", function(data){
	geoLayer = L.geoJson(data).addTo(map);
});

// geojson manyamba
$.getJSON("<?= base_url('Kab. Majene/Manyamba.geojson') ?>", function(data){
	geoLayer = L.geoJson(data).addTo(map);
});

// geojson Mekkatta
$.getJSON("<?= base_url('Kab. Majene/Mekkatta.geojson') ?>", function(data){
	geoLayer = L.geoJson(data).addTo(map);
});

// geojson Mekkatta selatan 
$.getJSON("<?= base_url('Kab. Majene/Mekkatta Selatan.geojson') ?>", function(data){
	geoLayer = L.geoJson(data).addTo(map);
});

// geojson Onang Utara
$.getJSON("<?= base_url('Kab. Majene/Onang utara.geojson') ?>", function(data){
	geoLayer = L.geoJson(data).addTo(map);
});

// geojson Onang
$.getJSON("<?= base_url('Kab. Majene/Onang.geojson') ?>", function(data){
	geoLayer = L.geoJson(data).addTo(map);
});

// geojson Pamboborang
$.getJSON("<?= base_url('Kab. Majene/Pamboborang.geojson') ?>", function(data){
	geoLayer = L.geoJson(data).addTo(map);
});

// geojson Paminggalan
$.getJSON("<?= base_url('Kab. Majene/Paminggalan.geojson') ?>", function(data){
	geoLayer = L.geoJson(data).addTo(map);
});

// geojson Panggalo
$.getJSON("<?= base_url('Kab. Majene/Panggalo.geojson') ?>", function(data){
	geoLayer = L.geoJson(data).addTo(map);
});

// geojson Kel Malunda
$.getJSON("<?= base_url('Kab. Majene/Kel Malunda.geojson') ?>", function(data){
	geoLayer = L.geoJson(data).addTo(map);
});

// geojson Kel Tande timur
$.getJSON("<?= base_url('Kab. Majene/Kel Tande Timur.geojson') ?>", function(data){
	geoLayer = L.geoJson(data).addTo(map);
});

// geojson Kel tande
$.getJSON("<?= base_url('Kab. Majene/Kel Tande.geojson') ?>", function(data){
	geoLayer = L.geoJson(data).addTo(map);
});

// geojson Kelurahan Banggae
$.getJSON("<?= base_url('Kab. Majene/Kelurahan Banggae.geojson') ?>", function(data){
	geoLayer = L.geoJson(data).addTo(map);
});

// geojson Kelurahan Baru
$.getJSON("<?= base_url('Kab. Majene/Kelurahan Baru.geojson') ?>", function(data){
	geoLayer = L.geoJson(data).addTo(map);
});

// geojson Kelurahan Galung
$.getJSON("<?= base_url('Kab. Majene/Kelurahan Galung.geojson') ?>", function(data){
	geoLayer = L.geoJson(data).addTo(map);
});

// geojson Kelurahan lalampanua
$.getJSON("<?= base_url('Kab. Majene/Kelurahan Lalampanua.geojson') ?>", function(data){
	geoLayer = L.geoJson(data).addTo(map);
});

// geojson Kelurahan mosso dhua
$.getJSON("<?= base_url('Kab. Majene/Kelurahan Mosso Dhua.geojson') ?>", function(data){
	geoLayer = L.geoJson(data).addTo(map);
});

// geojson Kelurahan Mosso
$.getJSON("<?= base_url('Kab. Majene/Kelurahan Mosso.geojson') ?>", function(data){
	geoLayer = L.geoJson(data).addTo(map);
});

// geojson Klurahan Pangala ali
$.getJSON("<?= base_url('Kab. Majene/Kelurahan Pangali Ali.geojson') ?>", function(data){
	geoLayer = L.geoJson(data).addTo(map);
});

// geojson Kelurahan rangas
$.getJSON("<?= base_url('Kab. Majene/Kelurahan Rangas.geojson') ?>", function(data){
	geoLayer = L.geoJson(data).addTo(map);
});

// geojson Kelurahan Sirindu
$.getJSON("<?= base_url('Kab. Majene/Kelurahan Sirindu.geojson') ?>", function(data){
	geoLayer = L.geoJson(data).addTo(map);
});

// geojson Kelurahan Totoli
$.getJSON("<?= base_url('Kab. Majene/Kelurahan Totoli.geojson') ?>", function(data){
	geoLayer = L.geoJson(data).addTo(map);
});

// geojson Lalatedzog
$.getJSON("<?= base_url('Kab. Majene/Lalatedzog.geojson') ?>", function(data){
	geoLayer = L.geoJson(data).addTo(map);
});

// geojson Leppangang
$.getJSON("<?= base_url('Kab. Majene/Leppangang.geojson') ?>", function(data){
	geoLayer = L.geoJson(data).addTo(map);
});

// geojson Betteng
$.getJSON("<?= base_url('Kab. Majene/Betteng.geojson') ?>", function(data){
	geoLayer = L.geoJson(data).addTo(map);
});

// geojson Binanga
$.getJSON("<?= base_url('Kab. Majene/Binanga.geojson') ?>", function(data){
	geoLayer = L.geoJson(data).addTo(map);
});

// geojson Bonde bonde
$.getJSON("<?= base_url('Kab. Majene/Bonde Bonde.geojson') ?>", function(data){
	geoLayer = L.geoJson(data).addTo(map);
});

// geojson Bonde utara
$.getJSON("<?= base_url('Kab. Majene/Bonde Utara.geojson') ?>", function(data){
	geoLayer = L.geoJson(data).addTo(map);
});

// geojson Bonde
$.getJSON("<?= base_url('Kab. Majene/Bonde.geojson') ?>", function(data){
	geoLayer = L.geoJson(data).addTo(map);
});

// geojson Bukit Samang
$.getJSON("<?= base_url('Kab. Majene/Bukit Samang.geojson') ?>", function(data){
	geoLayer = L.geoJson(data).addTo(map);
});

// geojson Buttu baruga
$.getJSON("<?= base_url('Kab. Majene/Buttu Baruga.geojson') ?>", function(data){
	geoLayer = L.geoJson(data).addTo(map);
});

// geojson Buttu pamboang
$.getJSON("<?= base_url('Kab. Majene/Buttu Pamboang.geojson') ?>", function(data){
	geoLayer = L.geoJson(data).addTo(map);
});

// geojson Kabiraan
$.getJSON("<?= base_url('Kab. Majene/Kabiraan.geojson') ?>", function(data){
	geoLayer = L.geoJson(data).addTo(map);
});

// geojson Kayuangin
$.getJSON("<?= base_url('Kab. Majene/Kayuangin.geojson') ?>", function(data){
	geoLayer = L.geoJson(data).addTo(map);
});

// geojson Kel Baruga
$.getJSON("<?= base_url('Kab. Majene/Kel Baruga.geojson') ?>", function(data){
	geoLayer = L.geoJson(data).addTo(map);
});

// geojson Kel Baruga dhua
$.getJSON("<?= base_url('Kab. Majene/Kel Baruga Dhua.geojson') ?>", function(data){
	geoLayer = L.geoJson(data).addTo(map);
});


// geojson Kel Baurung
$.getJSON("<?= base_url('Kab. Majene/Kel Baurung.geojson') ?>", function(data){
	geoLayer = L.geoJson(data).addTo(map);
});

// geojson Kel Labuang
$.getJSON("<?= base_url('Kab. Majene/Kel Labuang.geojson') ?>", function(data){
	geoLayer = L.geoJson(data).addTo(map);
});

// geojson Kel Lamungang Batu
$.getJSON("<?= base_url('Kab. Majene/Kel Lamungang Batu.geojson') ?>", function(data){
	geoLayer = L.geoJson(data).addTo(map);
});

// geojson Kel lembang
$.getJSON("<?= base_url('Kab. Majene/Kel Lembang.geojson') ?>", function(data){
	geoLayer = L.geoJson(data).addTo(map);
});

// geojson Adolang Dhua
$.getJSON("<?= base_url('Kab. Majene/Adolang Dhua.geojson') ?>", function(data){
	geoLayer = L.geoJson(data).addTo(map);
});

// geojson Adolang
$.getJSON("<?= base_url('Kab. Majene/Adolang.geojson') ?>", function(data){
	geoLayer = L.geoJson(data).addTo(map);
});

// geojson Awo
$.getJSON("<?= base_url('Kab. Majene/Awo.geojson') ?>", function(data){
	geoLayer = L.geoJson(data).addTo(map);
});

// geojson Bababulo Utara
$.getJSON("<?= base_url('Kab. Majene/Bababulo Utara.geojson') ?>", function(data){
	geoLayer = L.geoJson(data).addTo(map);
});

// geojson Bababulo
$.getJSON("<?= base_url('Kab. Majene/Bababulo.geojson') ?>", function(data){
	geoLayer = L.geoJson(data).addTo(map);
});

// geojson Balombong
$.getJSON("<?= base_url('Kab. Majene/Balombong.geojson') ?>", function(data){
	geoLayer = L.geoJson(data).addTo(map);
});

// geojson Bamabangan
$.getJSON("<?= base_url('Kab. Majene/Bambangan.geojson') ?>", function(data){
	geoLayer = L.geoJson(data).addTo(map);
});

// geojson Banua Adolang
$.getJSON("<?= base_url('Kab. Majene/Banua Adolang.geojson') ?>", function(data){
	geoLayer = L.geoJson(data).addTo(map);
});

// geojson Banua Sendana
$.getJSON("<?= base_url('Kab. Majene/Banua Sendana.geojson') ?>", function(data){
	geoLayer = L.geoJson(data).addTo(map);
}); */
</script>
