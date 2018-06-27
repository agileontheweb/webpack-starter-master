<div class="flex">
  <div class="xs:hidden sm:block sm:w-1/5 md:w-1/5 text-grey-darker px-4 py-2 justify-start border-r">
    <p>
      <ul class="list-reset pt-6">
        <strong>Categorie</strong>
        <li>
          <a href="#" class="block text-third my-3 no-underline hover:underline">Pianta 1</a>
            <?php include_once "submenu-list-items.php"; ?>
        </li>
        <li>
          <a href="#" class="block text-third my-3 no-underline hover:underline">Pianta 2</a>
        </li>
        <li>
          <a href="#" class="block text-third my-3 no-underline hover:underline">Pianta 3</a>
        </li>
      </ul>
    </p>
  </div>

  <div class="md:w-full text-grey-darker px-4 py-2 leading-normal">
    <div class="flex w-full border-b">
      <div class="inline-flex">
        <a href="#" class="flex-1 text-third text-center bg-grey-light px-4 py-2 m-2 no-underline hover:bg-third hover:text-white btn-toggle-list xs:hidden sm:block">
          <i class="fa fa-list-ul"></i>
        </a>
        <a href="#" class="flex-1 text-third text-center bg-grey-light px-4 py-2 m-2 no-underline hover:bg-third hover:text-white btn-toggle-sidebar sm:invisible">
          <i class="fa fa-ellipsis-v"></i>
        </a>
      </div>
    </div>
    <?php include_once "list-items.php"; ?>
    <?php include_once "pagination.php"; ?>
  </div>
</div>
