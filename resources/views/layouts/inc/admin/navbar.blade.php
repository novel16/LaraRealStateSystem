<header class="header">

    <nav class="nav nav1">
        <section class="flex">
            
            
                <a href="#">MyHome</a>
                <a href="#">post property <i class="fa-regular fa-paper-plane"></i></a>
            

        </section>
    </nav>


    <nav class="nav nav2">
        <section class="flex">
            <ul>
                <li><a href="#" id="menu"><i class="fa-solid fa-bars"></i></a></li>

                <li><a href="#">my listings <i class="fa-solid fa-angle-down"></i></a>
                    <ul>
                        <li><a href="{{ url('admin/dashboard') }}">dashboard</a></li>
                        <li><a href="{{ url('admin/create-property') }}">post property</a></li>
                        <li><a href="#">my listings</a></li>
                    </ul>
                </li>
                <li><a href="#">options <i class="fa-solid fa-angle-down"></i></a>
                    <ul>
                        <li><a href="#">filter search</a></li>
                        <li><a href="#">all listings</a></li>
                    </ul>
                </li>

                <li><a href="#">help <i class="fa-solid fa-angle-down"></i></a>
                    <ul>
                        <li><a href="#">about</a></li>
                        <li><a href="#">contact</a></li>
                        <li><a href="#">FAQ</a></li>
                        
                    </ul>
                </li>
            </ul>

            <ul>
                <li><a href="#">saved <i class="fa-regular fa-heart"></i></a></li>
               

                <li><a href="#"> {{ Auth::user()->name }} <i class="fa-solid fa-angle-down"></i></a>
                    <ul>
                        {{-- <li><a href="#">login</a></li> --}}
                        {{-- <li><a href="#">Logout</a></li> --}}

                        <li>
                            <a  href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                        </li>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                       
                        
                    </ul>
                </li>
            </ul>
        </section>
    </nav>

</header>