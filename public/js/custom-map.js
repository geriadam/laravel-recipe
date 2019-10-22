var map;
var geocoder;
var refMarker;
var drag;
var dataLat  = parseFloat($('.data-lat').attr('value'));
var dataLng  = parseFloat($('.data-lng').attr('value'));
var myLatLng = {lat: dataLat, lng: dataLng};

// Inisialisasi Map
function initMap() {
    geocoder = new google.maps.Geocoder();
    map = new google.maps.Map(document.getElementById('location-map'), {
        center: {lat:dataLat,  lng:dataLng},
        zoom: 15,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    // Ambil id Input search Map
    var input = document.getElementById('pac-input');
    var searchBox = new google.maps.places.SearchBox(input);
    searchBox.setBounds(map.getBounds());

    var markers = [];
    searchBox.addListener('places_changed', function() {

        var places = searchBox.getPlaces();
        if (places.length == 0) {
            return;
        }

        // Clear out the old markers.
        deleteMarkers();

        // For each place, get the icon, name and location.
        var bounds = new google.maps.LatLngBounds();
        places.forEach(function(place) {

            newAddress(place);

            // Create a marker for each place.
            addMarker(place.geometry.location, map);
            if (place.geometry.viewport) {
                // Only geocodes have viewport.
                bounds.union(place.geometry.viewport);
            } else {
                bounds.extend(place.geometry.location);
            }
        });

        map.fitBounds(bounds);
    });

    addMarker(myLatLng, map);
      
    $('.data-lat').on("change", function () {
        //alert($(this).val());
        deleteMarkers();
        map.setCenter(new google.maps.LatLng(parseFloat($(this).val()), dataLng));
        addMarker(new google.maps.LatLng(parseFloat($(this).val()), dataLng),map);
        //marker.setPosition(new google.maps.LatLng(parseFloat($(this).val()), dataLng));  
    });

    $('.data-lng').on("change", function () {
        //alert($(this).val());
        deleteMarkers();
        map.setCenter(new google.maps.LatLng(dataLat, parseFloat($(this).val())));
        //marker.setPosition(new google.maps.LatLng(dataLat, parseFloat($(this).val())));mar
    }); 
}

function newAddress(place){
    // Add Value Alamat Pencarian Kota Pencarian
    for (var i = 0; i < place.address_components.length; i++)
    {
        if (place.address_components[i].types[0] == "administrative_area_level_2") {
            $(".kota-pencarian").val(place.address_components[i].long_name);
        }
    }

    $(".alamat-pencarian").val(place.formatted_address);
}


function addMarker(latlng,map) {
    var marker = new google.maps.Marker({
        position: latlng,
        map: map,
        title: 'hello',
        draggable:true
    });

    refMarker = marker;
    google.maps.event.addListener(refMarker, 'dragend', function (event) {
        geocoder.geocode({
            'latLng': marker.getPosition()
        }, function(results, status) {
            if (status == google.maps.GeocoderStatus.OK) {
                if (results[0]) {
                    $('#pac-input').val(results[0].formatted_address);
                    $('.data-lat').val(refMarker.getPosition().lat());
                    $('.data-lng').val(refMarker.getPosition().lng());
                    newAddress(results[0]);
                }
            }
        });
    });  

    $('.data-lat').val(refMarker.getPosition().lat());
    $('.data-lng').val(refMarker.getPosition().lng());   
}


function deleteMarkers() {
    refMarker.setMap(null);
    refMarker = null;
}