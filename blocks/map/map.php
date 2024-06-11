<div id="map"></div>

<!-- 
      The `defer` attribute causes the script to execute after the full HTML
      document has been parsed. For non-blocking uses, avoiding race conditions,
      and consistent behavior across browsers, consider loading using Promises. See
      https://developers.google.com/maps/documentation/javascript/load-maps-js-api
      for more information.
      -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB8pMQYqHehRWSDeAVKOrv8JD9s1dR6Y2Q&callback=initMap&libraries=places&v=weekly">
</script>
<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
<script src="https://unpkg.com/@googlemaps/markerclusterer/dist/index.min.js"></script>
<script lang="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js"></script>
<script>
    (async () => {
        const url =
            "/aktywnaszkola/wp-content/themes/aktywnaszkoła/blocks/map/xxx.xlsx";
        const data = await (await fetch(url)).arrayBuffer();
        /* data is an ArrayBuffer */
        const workbook = XLSX.read(data);

        var worksheet = XLSX.utils.sheet_to_json(workbook.Sheets.AO)
        for (var row in worksheet) {
            // for (worksheet in row) {
            // console.log(worksheet[row]);
            var name = worksheet[row]['nazwa'];
            var address = worksheet[row]['ulica'] + ', ' + worksheet[row]['pna'];
            var city = worksheet[row]['miejscowosc'];
            var sc = worksheet[row]['pna'];
            // }
            console.log(worksheet[row]['ulica'] + ', ' + worksheet[row]['pna'] + " " + worksheet[row][
                'miejscowosc'
            ]);
        }
    })();
</script>
<script>
    // const locations = [{
    //         lat: -31.56391,
    //         lng: 147.154312
    //     },
    //     {
    //         lat: -33.718234,
    //         lng: 150.363181
    //     },
    //     {
    //         lat: -33.727111,
    //         lng: 150.371124
    //     },
    //     {
    //         lat: -33.848588,
    //         lng: 151.209834
    //     },
    //     {
    //         lat: -33.851702,
    //         lng: 151.216968
    //     },
    //     {
    //         lat: -34.671264,
    //         lng: 150.863657
    //     },
    //     {
    //         lat: -35.304724,
    //         lng: 148.662905
    //     },
    //     {
    //         lat: -36.817685,
    //         lng: 175.699196
    //     },
    //     {
    //         lat: -36.828611,
    //         lng: 175.790222
    //     },
    //     {
    //         lat: -37.75,
    //         lng: 145.116667
    //     },
    //     {
    //         lat: -37.759859,
    //         lng: 145.128708
    //     },
    //     {
    //         lat: -37.765015,
    //         lng: 145.133858
    //     },
    //     {
    //         lat: -37.770104,
    //         lng: 145.143299
    //     },
    //     {
    //         lat: -37.7737,
    //         lng: 145.145187
    //     },
    //     {
    //         lat: -37.774785,
    //         lng: 145.137978
    //     },
    //     {
    //         lat: -37.819616,
    //         lng: 144.968119
    //     },
    //     {
    //         lat: -38.330766,
    //         lng: 144.695692
    //     },
    //     {
    //         lat: -39.927193,
    //         lng: 175.053218
    //     },
    //     {
    //         lat: -41.330162,
    //         lng: 174.865694
    //     },
    //     {
    //         lat: -42.734358,
    //         lng: 147.439506
    //     },
    //     {
    //         lat: -42.734358,
    //         lng: 147.501315
    //     },
    //     {
    //         lat: -42.735258,
    //         lng: 147.438
    //     },
    //     {
    //         lat: -43.999792,
    //         lng: 170.463352
    //     },
    // ];

    initMap();
    async function initMap() {
        // Request needed libraries.
        const {
            Map,
            InfoWindow
        } = await google.maps.importLibrary("maps");
        const {
            AdvancedMarkerElement,
            PinElement
        } = await google.maps.importLibrary(
            "marker",
        );
        const map = new google.maps.Map(document.getElementById("map"), {
            zoom: 3,
            center: {
                lat: -28.024,
                lng: 140.887
            },
            mapId: "DEMO_MAP_ID",
        });
        const infoWindow = new google.maps.InfoWindow({
            content: "",
            disableAutoPan: true,
        });
        // Create an array of alphabetical characters used to label the markers.
        const labels = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        // Add some markers to the map.
        const markers = locations.map((position, i) => {
            const label = labels[i % labels.length];
            const pinGlyph = new google.maps.marker.PinElement({
                glyph: label,
                glyphColor: "white",
            });
            const marker = new google.maps.marker.AdvancedMarkerElement({
                position,
                content: pinGlyph.element,
            });

            // markers can only be keyboard focusable when they have click listeners
            // open info window when marker is clicked
            marker.addListener("click", () => {
                infoWindow.setContent(position.lat + ", " + position.lng);
                infoWindow.open(map, marker);
            });
            return marker;
        });

        // Add a marker clusterer to manage the markers.
        const markerCluster = new markerClusterer.MarkerClusterer({
            markers,
            map
        });
    }
</script>