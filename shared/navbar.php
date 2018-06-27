<nav class="navbar-top w-full fixed z-10">
  <?#php include "cookie-consent.php"; ?>
  <?#php include "alert.php"; ?>
  <div class="flex items-center justify-between flex-wrap bg-primary">
    <div class="flex justify-start text-xs">
      <a href="index.php" class="p-3">
        <img src="images/logo.svg" alt="Garden 9010" width="80px" height="40px" class="mr-6 xs:mr-0">
      </a>
      <div class="self-center xs:hidden md:block">
        <ul class="list-reset flex">
          <li class="pt-6 pb-6">
            <a href="#" class="btn-navbar">Azienda</a>
          </li>
          <li class="pt-6 pb-6 cursor-pointer">
            <a href="sidebar-page.php" class="btn-navbar">Piante</a>
            <?php include "submenu.php"; ?>
          </li>
          <li class="pt-6 pb-6">
            <a href="#" class="btn-navbar">Servizi</a>
          </li>
          <li class="pt-6 pb-6">
            <a href="contact.php" class="btn-navbar">Contatti</a>
          </li>
        </ul>
      </div>
    </div>

    <div class="flex justify-end text-xs xs:hidden md:block">
      <a href="login.php" class="btn-navbar">Accedi / Registrati</a>
      <a href="#" class="btn-navbar">347 42.60.996</a>
      <a href="#" class="btn-navbar btn-search">
        <i class="fa fa-search"></i> Cerca
      </a>
    </div>

    <a class="btn-xs toggle-button sm:visible md:hidden mr-3">
      <i class="fas fa-bars"></i>
    </a>

    <a href="login.php" class="btn-xs sm:visible md:hidden mr-3">
      <i class="fas fa-user"></i>
    </a>

    <a href="#" class="btn-xs btn-search sm:visible md:hidden mr-3 no-underline">
      <i class="fas fa-search"></i>
    </a>

    <a href="tel:+3474260996" class="btn-xs sm:visible md:hidden mr-3 absolute pin-r no-underline">
      <i class="fas fa-phone"></i>
    </a>

  </div>
</nav>

<div class="flex flex-col navbar-responsive bg-primary text-xs fixed z-10 h-screen w-full hide-navbar-responsive md:invisible">
  <a class="text-white rounded-full btn-xs w-8 m-auto mt-8 mb-8 md:invisible toggle-button">
    <i class="fas fa-times"></i>
  </a>
  <a href="index.php" class="btn-navbar px-4 py-4 m-2 mt-0 block text-center">Home</a>
  <a href="#" class="btn-navbar px-4 py-4 m-2 mt-0 block text-center">Azienda</a>
  <a href="sidebar-page.php" class="btn-navbar px-4 py-4 m-2 block text-center">Piante</a>
  <a href="#" class="btn-navbar px-4 py-4 m-2 block text-center">Servizi</a>
  <a href="contact.php" class="btn-navbar px-4 py-4 m-2 block text-center">Contatti</a>
</div>

<?php include "search.php"; ?>
