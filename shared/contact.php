<div class="module-contact bg-secondary pt-10 pb-10">
  <div class="flex flex-wrap">
    <div class="xs:w-full lg:w-1/2 px-4 py-2 mb-6">
      <div class="md:flex md:justify-center">
        <form>
          <div class="mb-4">
            <h2 class="uppercase text-white">
              Contattaci
            </h2>
            <p class="text-white py-4">
              Puoi scriverci dal modulo che trovi qui sotto.
            </p>
            <div class="mb-6">
              <label class="block text-white text-sm mb-2" for="password">Nome</label>
              <input class="w-full p-6 text-grey-darker leading-tight" type="text" placeholder="Come ti chiami?">
              <div class="error p-2 bg-red text-white hidden">
                <span>Ci sono degli errori</span>
              </div>
            </div>
            <div class="mb-6">
              <label class="block text-white text-sm mb-2" for="password">Email</label>
              <input class="w-full p-6 text-grey-darker leading-tight" type="text" placeholder="A che email ti rispondiamo?">
              <div class="error p-2 bg-red text-white hidden">
                <span>Ci sono degli errori</span>
              </div>
            </div>
            <div class="mb-6">
              <label class="block text-white text-sm mb-2" for="password">Telefono</label>
              <input class="w-full p-6 text-grey-darker leading-tight" type="text" placeholder="Ti chiamiamo?">
              <div class="error p-2 bg-red text-white hidden">
                <span>Ci sono degli errori</span>
              </div>
            </div>
            <div class="mb-6">
              <label class="block text-white text-sm mb-2" for="password">Messaggio</label>
              <textarea class="w-full p-2 text-grey-darker leading-tight" type="text" rows="6">
              </textarea>
              <div class="error p-2 bg-red text-white hidden">
                <span>Ci sono degli errori</span>
              </div>
            </div>

            <label class="flex text-white mt-4 p-1">
              <div class="container-checkbox">
                <input class="mr-2" type="checkbox" checked="checked">
                <span class="text-sm checkmark"></span>
              </div>
              <span class="text-sm cursor-pointer">Accetto la Privacy</span>
            </label>

            <label class="flex text-white mt-4 p-1">
              <div class="container-checkbox">
                <input class="mr-2" type="checkbox">
                <span class="text-sm checkmark"></span>
              </div>
              <span class="text-sm cursor-pointer">Accetto consenso Marketing</span>
            </label>
          </div>
          <div class="flex items-center justify-between">
            <button class="w-full btn-show-all mt-4" type="button">
              Invia email
            </button>
          </div>
        </form>
      </div>

    </div>
    <div class="xs:w-full md:w-1/2 px-4 py-2 ">
      <div class="mb-4">
        <h2 class="uppercase text-white">
          Dove siamo
        </h2>
      </div>
      <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script>
      <div style='overflow:hidden;height:440px;width:700px;'>
        <div id='gmap_canvas' style='height:440px;width:700px;'></div>
        <div>
          <small><a href="embedgooglemaps.com/it/">https://embedgooglemaps.com/it/</a></small>
        </div>
        <div>
          <small><a href="http://www.kumo-racing.nl/">bekijk website</a></small>
        </div>
        <style>
          #gmap_canvas img{
            max-width:none!important;
            background:none!important
            }
          </style>

        </div>
        <script type='text/javascript'>
        function init_map(){
          var myOptions = {
            zoom:10,
            center:new google.maps.LatLng(41.9027835,12.496365500000024),
            mapTypeId: google.maps.MapTypeId.ROADMAP};
            map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);
            marker = new google.maps.Marker({
                      map: map,position: new google.maps.LatLng(41.9027835,12.496365500000024)});
                      infowindow = new google.maps.InfoWindow({content:'<strong>Titolo</strong><br>Rome, Italy<br>'});
                      google.maps.event.addListener(marker, 'click', function(){
                        infowindow.open(map,marker);
                      });
                      infowindow.open(map,marker);
                    }
                    google.maps.event.addDomListener(window, 'load', init_map);
                  </script>
    </div>
</div>
