		<nav class="qbootstrap-nav" role="navigation">
		    <div class="top-menu">
		        <div class="container">
		            <div class="row">
		                <div class="col-xs-2">
		                    <div id="qbootstrap-logo"><a href="{{'/'}}"><i class="icon-office"></i>Hotel</a></div>
		                </div>
		                <div class="col-xs-10 text-right menu-1">
		                    <ul>
		                        <li class=""><a href="">Home</a></li>
		                        <li class="">
		                            <a href="{{'/room'}}">Rooms</a>

		                        </li>
		                        <li><a href="{{'/hall'}}">Hall</a></li>
		                        <li><a href="{{'/bus'}}">Bus</a></li>
		                        <li><a href="{{'/dining'}}">Dining</a></li>
		                        
		                        @guest
								<li><a href="{{route('login')}}">Login</a></li>
		                        <li><a href="{{route('register')}}">Register</a></li>
		                        
								@else
								
		                        <li class="nav-item dropdown mx-2">
																	 
										<a href="#" class="dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" style="cursor:pointer;">{{Auth::user()->name}}</a>
											<div class="dropdown-menu" aria-labelledby="navbarDropdown">										
					
											{{-- <a class="dropdown-item" href="#">Profile</a>										 --}}
					
											<div class="dropdown-divider"></div>
											<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
																		 document.getElementById('logout-form').submit();">
												{{ __('Logout') }}
											</a>
					
					
											<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
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
