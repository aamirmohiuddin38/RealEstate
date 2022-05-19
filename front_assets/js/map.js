let map;
function initMap() {
  var latt=parseFloat(document.getElementById('latitude').innerHTML);
  var lngg=parseFloat(document.getElementById('longitude').innerHTML);
  // console.log(latt);
  // console.log(lngg);
  let options = 
  {
    center : { lat:latt, lng:lngg},
    zoom:15
  }
  map = new google.maps.Map(document.getElementById('map'), options);
}

