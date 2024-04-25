<div class="container-fluid bg-light d-flex justify-content-center">
    <div class="row justify-content-center">
        <div class="d-flex justify-content-center">
            <a href={{route('homepage')}}><img src="/img/logo.png" alt="logo" width="65"></a>
        </div>
        <div class="d-flex justify-content-around mt-2">
            <a href={{route('homepage')}}>Primo Link</a>
            <a href="">Secondo Link</a>
            @guest
            <a href="{{route('login')}}">Accedi</a>
            <a href="{{route('register')}}">Registrati</a>
            @endguest
            @auth
            Benvenuto {{Auth::user()->name}}
            <li><form action="{{route('logout')}}" method="POST">
              @csrf
             <li><a href=""><button type="submit" class="nav-link text-dark p">Logout</button></a></li>
            </form></li>
          </ul>
            @endauth
        </div>
    </div>
</div>