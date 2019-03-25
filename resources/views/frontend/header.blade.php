		<nav class="qbootstrap-nav" role="navigation">
		    <div class="top-menu">
		        <div class="container">
		            <div class="row">
		                <div class="col-xs-2">
		                    <div id="qbootstrap-logo"><a href="{{'/'}}"><i class="icon-office"></i>Hotel</a></div>
		                </div>
		                <div class="col-xs-10 text-right menu-1">
		                    <ul>
		                        <li class="active"><a href="">Home</a></li>
		                        <li class="has-dropdown">
		                            <a href="{{'/room'}}">Rooms</a>

		                        </li>
		                        <li><a href="{{'/hall'}}">Hall</a></li>
		                        <li><a href="{{'/bus'}}">Bus</a></li>
		                        <li><a href="">Dining</a></li>
		                        
		                        @guest
								<li><a href="{{route('login')}}">Login</a></li>
		                        <li><a href="{{route('register')}}">Register</a></li>
		                        
								@else
								<a class="dropdown-item" href="#">{{Auth::user()->name}}</a>
		                        <li>
		                            {{-- <img src="{{Auth::user()->image}}" width="30"
		                                class="img-fluid dropdown-toggle d-block my-2 ml-2" href="#" id="navbarDropdown"
		                                role="button" data-toggle="dropdown" style="cursor:pointer;"> --}}
		                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		                                <a class="dropdown-item" href="#">{{Auth::user()->name}}</a>

		                                <a class="dropdown-item" href="#">Profile</a>
		                                {{-- <a class="dropdown-item" href="{{route('newstory.create')}}">New Story</a>
		                                <a class="dropdown-item" href="{{route('category.create')}}">New Category</a> --}}

		                                <div class="dropdown-divider"></div>
		                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
		                                    {{ __('Logout') }}
		                                </a>


		                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
		                                    style="display: none;">
		                                    @csrf
		                                </form>
		                            </div>
		                        </li>
		                        @endguest
		                    </ul>
		                </div>
		            </div>
		        </div>
		    </div>
		</nav>
