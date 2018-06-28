<div class="module-tabs-sections bg-primary text-white pt-10 pb-10">
  <div class="tabbed-area">
    <ul class="tab tabs group inline-flex list-reset">
      <li class="flex cursor-pointer p-6 mr-6 xs:mr-0 xs:p-3 sm:mr-3 sm:p-6 tablinks active"
          onclick="changeTab(event, 'newProduct')">
          Nuovi prodotti
      </li>
	    <li class="flex cursor-pointer p-6 mr-6 xs:mr-0 xs:p-3 sm:mr-3 sm:p-6 tablinks"
          onclick="changeTab(event, 'specialOffers')">
          Offerte speciali
      </li>
	    <li class="flex cursor-pointer p-6 mr-6 xs:mr-0 xs:p-3 sm:mr-3 sm:p-6 tablinks"
          onclick="changeTab(event, 'reccomended')">
        Raccomandati
      </li>
      <li class="flex cursor-pointer p-6 mr-6 xs:mr-0 xs:p-3 sm:mr-3 sm:p-6 tablinks"
          onclick="changeTab(event, 'gift')">
        Idee regalo
      </li>
  	</ul>
    <div class="overflow-scroll-xs bg-secondary">
      <div id="newProduct" class="tabcontent active">
        <?php include "new_products.php"; ?>
      </div>
      <div id="specialOffers" class="tabcontent">
        <?php include "special_offers.php"; ?>
      </div>
      <div id="reccomended" class="tabcontent">
        <?php include "recommended.php"; ?>
      </div>
      <div id="gift" class="tabcontent">
        <?php include "gifts_idea.php"; ?>
      </div>
    </div>
  </div>
</div>
