function getLocation()
{
  if (navigator.geolocation)
  {
    navigator.geolocation.getCurrentPosition(showPosition);
  }
  else
  {
    document.getElementById('lat-lng').innerHTML="Geolocation is not supported by this browser.";
  }
}
  function showPosition(position)
  {
    document.getElementById('lat').value=position.coords.latitude;
    document.getElementById('lng').value=position.coords.longitude;
  }

