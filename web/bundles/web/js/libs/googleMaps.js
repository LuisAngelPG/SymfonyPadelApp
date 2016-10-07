	function courts() {
		var amountCourts = document.getElementById("club_amountCourt").value;
		var courtsTypes = document.getElementById("courtsTypes");
		if (amountCourts > 0) {
			courtsTypes.style.visibility = "visible";
			courtsTypes.style.position = "inherit";
		} else {
			courtsTypes.style.visibility = "hidden";
			courtsTypes.style.position = "absolute";
		}
	}

 var placeSearch, club_location;
      var componentForm = {
        street_number: 'long_name',
        route: 'long_name',
        locality: 'long_name',
        country: 'long_name',
        postal_code: 'long_name',
        administrative_area_level_4: 'long_name',
        administrative_area_level_2: 'long_name',
      };

      function initAutocomplete() {
        // Create the autocomplete object, restricting the search to geographical
        // location types.
        autocomplete = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */(document.getElementById('club_location')),
            {types: ['geocode']});

        // When the user selects an address from the dropdown, populate the address
        // fields in the form.
        autocomplete.addListener('place_changed', fillInAddress);
      }

      function fillInAddress() {
        // Get the place details from the autocomplete object.
        var place = autocomplete.getPlace();
        console.log(autocomplete.getPlace);
        var location = place.geometry.location;
		    document.getElementById("club_latitude").value = location.lat();
		    document.getElementById("club_longitude").value = location.lng();

        for (var component in componentForm) {
         	document.getElementById("club_" + component).value = '';
         	console.log(component);
        }

        // Get each component of the address from the place details
        // and fill the corresponding field on the form.
        for (var i = 0; i < place.address_components.length; i++) {
          var addressType = place.address_components[i].types[0];
          if (componentForm[addressType]) {
            var val = place.address_components[i][componentForm[addressType]];
            document.getElementById("club_" + addressType).value = val;
          }
        }

      }

      // Bias the autocomplete object to the user's geographical location,
      // as supplied by the browser's 'navigator.geolocation' object.
      function geolocate() {
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var geolocation = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
            var circle = new google.maps.Circle({
              center: geolocation,
              radius: position.coords.accuracy
            });
            autocomplete.setBounds(circle.getBounds());
          });
        }
      }