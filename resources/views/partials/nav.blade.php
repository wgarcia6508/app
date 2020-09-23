<

<nav>
        <ul>
        <!-- <li class="{{request()->routeIs('home') ? 'active' : 'active2'}}" ><a href="/">Home</a><br></li>-->
            <li class="{{setActive('home')}}" ><a href="/">Home</a><br></li>
            <li class="{{setActive('nosotros')}}"><a href="/nosotros">we have</a><br>
            </li>
            <li class="{{setActive('ellos')}}"><a href="/ellos">ellos</a><br></li>
            <li class="{{setActive('contacto')}}"><a href="/contacto">LLAMAME</a><br>
            </li>
        </ul>
    </nav>