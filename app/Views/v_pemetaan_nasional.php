<div class="col-sm-12">
    <div id="mapid" style="height: 600px;"></div>
</div>

<script>
    var mymap = L.map('mapid').setView([-1.973104, 117.668911], 5);

    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
            '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
            'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        id: 'mapbox/streets-v11',
    }).addTo(mymap);

    <?php foreach ($prov['features'] as $key => $value) { ?>
        L.marker([<?= $value['geometry']['y'] ?>, <?= $value['geometry']['x'] ?>]).addTo(mymap)
        .bindPopup("Provinsi: <?= $value['attributes']['Provinsi'] ?><br>"+
        "Positif: <?= $value['attributes']['Kasus_Posi'] ?><br>"+
        "Sembuh: <?= $value['attributes']['Kasus_Semb'] ?><br>"+
        "Meninggal: <?= $value['attributes']['Kasus_Meni'] ?><br>");

    <?php } ?>
    
</script>