let map;
let options = 
  {
    center : { lat: 34.423199, lng: 74.636002 },
    zoom:15
  }

function initMap() {
  map = new google.maps.Map(document.getElementById('map'), options);
  
  let marker = new google.maps.Marker({
    position: {lat:42.4668, lng:-70.9495},
    map: map
  });
  let infoWindow = new google.maps.InfoWindow({
    content: '<h1>Bandipora</h1>'
  });
}

