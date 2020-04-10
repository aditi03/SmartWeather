function getLocation() {

  if (navigator.geolocation) {
    position = navigator.geolocation.getCurrentPosition(showPosition);
  } else {
    console.log("Geolocation is not supported by this browser.");
  }

}
function showPosition(position) {
  sessionStorage.setItem('latitude', position.coords.latitude);
  sessionStorage.setItem('longitude', position.coords.longitude);
}