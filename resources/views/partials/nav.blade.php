<nav class="bg-zinc-900 px-8 py-4">
  <div class="flex justify-between items-center">
    <a href="" class="text-white text-lg font-bold">Brands</a>
    <div class="hidden md:flex space-x-4">
      <a href="" class="text-white hover:bg-lime-600/20 px-3 py-2 rounded">Home</a>
      <a href="" class="text-white hover:bg-lime-600/20 px-3 py-2 rounded">Service</a>
      <a href="" class="text-white hover:bg-lime-600/20 px-3 py-2 rounded">About</a>
      <a href="" class="text-white hover:bg-lime-600/20 px-3 py-2 rounded">Contact</a>
    </div>

    <div class="hidden md:block">
      <a href="" class="text-white bg-lime-600 px-4 py-2 rounded">
        Login
      </a>
    </div>

    <div class="md:hidden">
      <button id="menu-toggle" class="text-white">menu</button>
    </div>
  </div>
</nav>

  {{-- Mobile View --}}
  <div id="mobile-menu" class="hidden bg-zinc-900 w-1/2 float-end mt-2 me-2 py-4 rounded-md shadow-lg">
    <div class="flex flex-col items-center text-center text-white space-y-4 px-4 py-2">
      <a href="" class="text-white hover:bg-lime-600/20 px-3 py-2 rounded">Home</a>
      <a href="" class="text-white hover:bg-lime-600/20 px-3 py-2 rounded">Service</a>
      <a href="" class="text-white hover:bg-lime-600/20 px-3 py-2 rounded">About</a>
      <a href="" class="text-white hover:bg-lime-600/20 px-3 py-2 rounded">Contact</a>
      <a href="" class="w-full bg-lime-600 px-4 py-2 rounded">Login</a>
    </div>
  </div>

  <script>
    document.getElementById('menu-toggle').addEventListener('click',function(){
      const mobileMenu = document.getElementById('mobile-menu');
      mobileMenu.classList.toggle('hidden');
    })

    document.getElementsByClassName('fa-bars')[0].addEventListener('click',function(){
      if(this.classList.contains('fa-bars')){
        this.classList.replace('fa-bars','fa-xmark');
      }
      else{
        this.classList.replace('fa-xmark','fa-bars');
      }
    });
  </script>