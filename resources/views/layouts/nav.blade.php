<nav class="navbar navbar-expand-lg   navbar-dark bg-dark mb-5">
  <div class="container"> 
       <a class="navbar-brand" href="{{ route('welcome') }}">Ma {{config('app.name') }}</a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
     </button>

     <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
               <li class="nav-item {{ page_active('welcome') }}">
                    <a class="nav-link" href="{{ route('welcome') }}">Accueil <span class="sr-only">(current)</span></a>
               </li>
               <li class="nav-item {{ page_active('about') }} ">
                    <a class="nav-link" href="{{ route('about') }}">A propos</a>
               </li>
               <li class="nav-item {{ page_active('contact.create') }}">
                    <a class="nav-link" href="{{ route('contact.create') }}" >Contact</a>
               </li>
               <li class="nav-item {{ page_active('client.index') }}">
                    <a class="nav-link" href="{{ route('client.index') }}" >Voir nos clients</a>
               </li>
          </ul>
          <ul class="navbar-nav navbar-right ">
               @if (Route::has('login'))
                    <div class="hidden fixed top-0 right-0 px-6 py-2 sm:block">
                         @auth
                              <li><a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a></li>
                         @else
                              <li><a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Se connecter</a>
                                   @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">S'enregister</a>
                                   @endif     
                              </li>
                         @endif
                    </div>
               @endif 
          </ul>
     </div>
</nav>

