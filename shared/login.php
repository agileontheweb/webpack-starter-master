<div class="module-login bg-secondary pt-10 pb-10">

  <div class="flex justify-center">
    <form class="container px-8 pt-6 pb-8 mb-4 max-w-sm">
      <div class="mb-4">
        <h2 class="uppercase text-white">
          Accedi o <a href="register.php" class="text-third my-3 no-underline hover:underline"> Registrati</a>.
        </h2>
        <p class="text-white py-4">
          Accedi inserendo i tuoi dati di accesso.
        </p>

        <input class="w-full p-6 text-grey-darker leading-tight" type="text" placeholder="Inserisci la tua email">
        <div class="error p-2 bg-red text-white">
          <span>Ci sono degli errori</span>
        </div>
        <br />
        <input class="w-full p-6 text-grey-darker leading-tight" type="password" placeholder="Inserisci la password">
        <div class="error p-2 bg-red text-white">
          <span>Ci sono degli errori</span>
        </div>
        <br />
        <a href="recover-password.php" class="block text-third my-3 no-underline hover:underline">Hai perso la password?</a>
        <br />
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
          Accedi
        </button>
      </div>
      <a href="register.php" class="block text-third text-center my-3 mt-8 no-underline hover:underline">Registrati da qui</a>.
    </form>
  </div>
</div>
