<!--Navbar-->
		<nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
            <div class="container">

                <!-- Navbar brand -->
                <a class="navbar-brand" href="{{ route('get.mainpage') }}">Eda's Site</a>

                <!-- Collapse button -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Collapsible content -->
                <div class="collapse navbar-collapse" id="basicExampleNav">

					<!-- Links -->
					<ul class="navbar-nav mr-auto smooth-scroll">
					    <li class="nav-item">
                        <a class="nav-link" href="{{ route('products') }}">Products</a>
                </li>

                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}"><i class="fa fa-user ml-2"></i>{{ __('Login') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
                @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
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
					<!-- Links -->

					<!-- Social Icon  -->
					<ul class="navbar-nav nav-flex-icons">
				
                    
					    <li class="nav-item">

                            <a class="nav-link" data-toggle="modal" data-target="#myModal">
                             <i class="fa fa-shopping-bag fa-lg"></i>
                             <span style="margin-left:-15px;font-size:10px" class="badge badge-pill pink">5</span>
                            </a>
                        </li>
                        <li class="nav-item">
					        <a class="nav-link"><i class="fa fa-facebook fa-lg"></i></a>
					    </li>
					    <li class="nav-item">
					        <a class="nav-link"><i class="fa fa-twitter"></i></a>
					    </li>
					    <li class="nav-item">
					        <a class="nav-link"><i class="fa fa-instagram"></i></a>
					    </li>
					</ul>
                </div>
                <!-- Collapsible content -->

            </div>
        </nav>
        <!--/.Navbar-->