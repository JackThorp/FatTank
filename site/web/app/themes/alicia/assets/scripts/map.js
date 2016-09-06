var map;

function initMap() {
  var myLatLng = {lat: 51.575850, lng:  -0.092131};

  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 13,
    center: myLatLng
  });

  var marker = new google.maps.Marker({
    position: myLatLng,
    map: map,
    title: 'Fat Tank Studios'
  }); 
}

