<div class="module-tabs-sections bg-primary text-white pt-10 pb-10">
  <div class="tabbed-area">
  	<ul class="tabs group inline-flex list-reset" id="tabs">
  	    <li class="flex cursor-pointer p-6 mr-6 xs:mr-0 xs:p-3 sm:mr-3 sm:p-6 active">
          <a href="#box-one" class="text-white uppercase no-underline">
            <span class="xs:text-xs">Nuovi prodotti</span>
          </a>
        </li>
  	    <li class="flex cursor-pointer p-6 mr-6 xs:mr-0 xs:p-3 sm:mr-3 sm:p-6">
          <a href="#box-two" class="text-white uppercase no-underline">
            <span class="xs:text-xs">Offerte speciali</span>
          </a>
        </li>
  	    <li class="flex cursor-pointer p-6 mr-6 xs:mr-0 xs:p-3 sm:mr-3 sm:p-6">
          <a href="#box-three" class="text-white uppercase no-underline">
            <span class="xs:text-xs">Raccomandati</span>
          </a>
        </li>
        <li class="flex cursor-pointer p-6 mr-6 xs:mr-0 xs:p-3 sm:mr-3 sm:p-6">
          <a href="#box-four" class="text-white uppercase no-underline">
            <span class="xs:text-xs">Idee regalo</span>
          </a>
        </li>
  	</ul>
  	<div class="box-wrap relative overflow-scroll-xs">
  		<div id="box-one" class="bg-secondary absolute w-full py-4">
        <?php include_once "shared/tabs/new_products.php"; ?>
  		</div>
  		<div id="box-two" class="bg-secondary absolute w-full py-4">
        <?php include_once "shared/tabs/special_offers.php"; ?>
  		</div>
  		<div id="box-three" class="bg-secondary absolute w-full py-4">
        <?php include_once "shared/tabs/recommended.php"; ?>
  		</div>
      <div id="box-four" class="bg-secondary absolute w-full py-4">
        <?php include_once "shared/tabs/gifts_idea.php"; ?>
  		</div>
  	</div>
  </div>
</div>
