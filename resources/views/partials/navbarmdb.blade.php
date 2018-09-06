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
					    

                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Muslimah Wear<span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item">
                                    <a class="nav-link" href="{{ route('products') }}">Pant Suits</a>
                                    <a class="nav-link" href="{{ route('products') }}">Kimono Wrap</a>
                                    <a class="nav-link" href="{{ route('products') }}">Traditional Wear</a>
                                </a>

                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Square<span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item">
                                    <a class="nav-link" href="{{ route('products') }}">Diamon Collection</a>                            
                                </a>

                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Scarves<span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item">
                                    <a class="nav-link" href="{{ route('products') }}">Hanaascarves</a>                            
                                </a>

                            </div>
                        </li>
					</ul>
					<!-- Links -->

					<!-- Social Icon  -->
					<ul class="navbar-nav nav-flex-icons">
				
                    
					    <li class="nav-item">
                            <a class="nav-link" data-toggle="modal" data-target="#myModal">
                             <i class="fa fa-shopping-bag fa-lg"></i>                    
                            </a>
                        </li>

                        <li class="nav-item">
                            <a style="margin-left:-30px;margin-top:-5px" class="nav-link"><span class="badge badge-pill pink">5</span></i></a>
                        </li>

                        <li class="nav-item">
					        <a class="nav-link"><i class="fa fa-facebook"></i></a>
					    </li>
					    <li class="nav-item">
					        <a class="nav-link"><i class="fa fa-twitter"></i></a>
					    </li>
					    <li class="nav-item">
					        <a class="nav-link"><i class="fa fa-instagram"></i></a>
					    </li>


                        @guest
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <i class="fa fa-user fa-lg "></i><span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </a>

                                </div>
                            </li>

                            @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}<span class="caret"></span>
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
                </div>
                <!-- Collapsible content -->

            </div>
        </nav>
        <!--/.Navbar-->