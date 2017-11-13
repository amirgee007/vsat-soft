<script>


    $("form").bind("keypress", function (e) {
        if (e.keyCode == 13) {
            return false;
        }
    });

    $("#autocomplete").on('focus', function () {
        geolocate();
    });

    var placeSearch, autocomplete;
    var componentForm = {
        street_number: 'short_name',
        route: 'long_name',
        locality: 'long_name',
        administrative_area_level_1: 'short_name',
        country: 'long_name',
        postal_code: 'short_name'
    };

    function initialize() {
        autocomplete = new google.maps.places.Autocomplete(
            (document.getElementById('autocomplete')), {
                types: ['geocode']
            });

        google.maps.event.addListener(autocomplete, 'place_changed', function () {
            fillInAddress();
        });
    }

    function fillInAddress() {

        var place = autocomplete.getPlace();

        document.getElementById("latitude").value = place.geometry.location.lat();
        document.getElementById("longitude").value = place.geometry.location.lng();

        for (var i = 0; i < place.address_components.length; i++) {
            var addressType = place.address_components[i].types[0];

            if (componentForm[addressType]) {
                var val = place.address_components[i][componentForm[addressType]];
                document.getElementById(addressType).value = val;
            }
        }
    }


    function geolocate() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function (position) {
                var geolocation = new google.maps.LatLng(
                    position.coords.latitude, position.coords.longitude);

                var latitude = position.coords.latitude;
                var longitude = position.coords.longitude;
                document.getElementById("latitude").value = latitude;
                document.getElementById("longitude").value = longitude;

                autocomplete.setBounds(new google.maps.LatLngBounds(geolocation, geolocation));
            });
        }

    }

    initialize();
</script>