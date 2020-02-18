$(document).ready(function() {
  var map = L.map("mapid")
    .on("load", onMapLoad)
    .setView([41.4, 2.206], 9);
  //map.locate({setView: true, maxZoom: 17});

  var tiles = L.tileLayer(
    "https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}",
    {
      attribution:
        'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
      maxZoom: 18,
      id: "mapbox/streets-v11",
      accessToken:
        "pk.eyJ1IjoiYWx6Y2ExIiwiYSI6ImNrNXhxdGx2cDFjcDUzZW8wNjhpOGptejEifQ.FfoqLVhSigNQB_K5Blcq0A"
    }
  ).addTo(map);

  //en el clusters almaceno todos los markers
  var markers = L.markerClusterGroup();
  var data_markers = [];
  var cuisines = [];

  // markers.addLayer(L.marker([51.5, -0.09]).addTo(map))

  function populate_list() {
    $(cuisines).each(function() {
      $("<option>" + this + "</option>").appendTo("#kind_food_selector");
    });
  }

  function check_kind_food(element) {
    var array = [];
    if (element.includes(",")) {
      array = element.split(",");
    } else {
      array.push(element);
    }
    return array;
  }

  function onMapLoad() {
    $.getJSON("./public/pages/get_restaurants.php", function(result) {
      data_markers = result;

      for (let marker of data_markers) {
        var tempArray = check_kind_food(marker.kind_food);
        for (let element of tempArray) {
          if (!cuisines.includes(element)) {
            cuisines.push(element);
          }
        }
      }

      render_to_map(data_markers, "All");
      populate_list();
    });

    console.log("Mapa cargado");

    
  }


  $("#kind_food_selector").on("change", function() {
    console.log(this.value);
    render_to_map(data_markers, this.value);
  });

  function render_to_map(data_markers, filter) {
    markers.clearLayers();
    for (let i = 0; i < data_markers.length; i++) {
      if (filter !== "All") {
        if (data_markers[i].kind_food.includes(filter)) {
          markers.addLayer(
            L.marker([data_markers[i].lat, data_markers[i].lng]).bindPopup(
              `<p>Name: <b>${data_markers[i].name}</b></p>
			  <p>Address: ${data_markers[i].address}</p>
			  <p>Type: ${data_markers[i].kind_food}</p>
			  `
            )
          );
        }
      } else {
        markers.addLayer(
          L.marker([data_markers[i].lat, data_markers[i].lng]).bindPopup(
            `<p>Name: <b>${data_markers[i].name}</b></p>
			  <p>Address: ${data_markers[i].address}</p>
			  <p>Type: ${data_markers[i].kind_food}</p>
			  `
          )
        );
      }
    }

    map.addLayer(markers);
  }
});
