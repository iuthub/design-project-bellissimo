 function initMap(){
    var options ={
      zoom:17,
      center:{lat:41.346942,lng:69.286346}
    }
    var map = new
    google.maps.Map(document.getElementById("map"),options);    
    
    var marker = new google.maps.Marker({
      position:{lat:41.346942,lng:69.286346},
      map:map,
       icon:'flagIcon2.1.png',
      title:'Bellissimo',
      
      });
    var infowindow = new google.maps.InfoWindow({
        content:"Bellissimo"
    });
      infowindow.open(map,marker);
  }
