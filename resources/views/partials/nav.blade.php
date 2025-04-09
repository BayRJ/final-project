  <nav class="bg-zinc-900 px-8 py-4">
  <div class="flex justify-between items-center">
    <a href="/" class="text-white text-lg font-bold">Prdcts</a>
    <div class="hidden md:flex space-x-4">
      <a href="{{route('products.index')}}" class="text-white hover:bg-lime-600/20 px-3 py-2 rounded">Products</a>
    </div>

    <div class="hidden md:block">
  
      @guest
        <a href="{{route('show.login')}}" class="text-white bg-lime-600 px-4 py-2 rounded">Login</a>
        <a href="{{route('show.register')}}" class="text-white bg-lime-600 px-4 py-2 rounded">Register</a>
      @endguest

      @auth
      <div class="flex text-white items-center">
        <span class="border-r-2 pr-2 ">
            Hi there, {{ Auth::user()->name }}
        </span>
        <form action="{{route('logout')}}" method="POST" class="m-0">
            @csrf

            <button class="ml-2 bg-lime-600 px-4 py-2 rounded">Logout</button>
        </form>
      </div>

      @endauth
    </div>

    <div class="md:hidden">
      <button id="menu-toggle" class="text-white">menu</button>
    </div>
  </div>
</nav>

  {{-- Mobile View --}}
  <div id="mobile-menu" class="hidden bg-zinc-900 w-1/2 float-end mt-2 me-2 py-4 rounded-md shadow-lg">
    <div class="flex flex-col items-center text-center text-white space-y-4 px-4 py-2">
      <a href="{{route('products.index')}}" class="text-white hover:bg-lime-600/20 px-3 py-2 rounded">Products</a>

      <a href="{{route('show.login')}}" class="w-full bg-lime-600 px-4 py-2 rounded">Login</a>
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