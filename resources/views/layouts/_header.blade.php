<div id="navigation" class="navbar-light bg-faded site-navigation">
			<div class="container-fluid">
				<div class="row">
					<div class="col-20 align-self-center">
						<div class="site-logo">
							<a href="{{ route('index') }}"><img width="80" height="80" src="storage/images/logo.jpeg" alt="{{config('app.name')}}"></a>          				
						</div>
					</div><!--- END Col -->
					
					<div class="col-60 d-flex">
						<nav id="main-menu">
							<ul>
							<li>
								<a {{ request()->routeIs('index') ? "style=color:#525fe1" : '' }} href="{{ route('index') }}">ACCUEIL</a>
							</li>
							<li>
								<a {{ request()->routeIs('A-Propos') ? "style=color:#525fe1" : '' }} href="{{ route('A-Propos') }}">À PROPOS</a>
							</li>
							<li>
								<a {{ request()->routeIs('Filieres') ? "style=color:#525fe1" : '' }} href="{{ route('Filieres') }}">FILIÈRES</a>
							</li>
							<li>
								<a {{ request()->routeIs('Tarifs') ? "style=color:#525fe1" : '' }} href="{{ route('Tarifs') }}">TARIFS</a>
							</li>
							<li>
								<a {{ request()->routeIs('Formations') ? "style=color:#525fe1" : '' }} href="{{ route('Formations') }}">FORMATIONS</a>
							</li>
							<li>
								<a {{ request()->routeIs('Contact') ? "style=color:#525fe1" : '' }} href="{{ route('Contact') }}">CONTACT</a>
							</li>
							</ul>
						</nav>
					</div><!--- END Col -->
					
					<div class="col-20 d-none d-xl-block text-end align-self-center">
						<a href="/admin/login" class="header-btn">Connexion</a>
					</div><!--- END Col -->
					
					<ul class="mobile_menu">						
						
							<li>
								<a {{ request()->routeIs('index') ? "style=color:#525fe1" : '' }} href="{{ route('index') }}">ACCUEIL</a>
							</li>
							<li>
								<a {{ request()->routeIs('A-Propos') ? "style=color:#525fe1" : '' }} href="{{ route('A-Propos') }}">À PROPOS</a>
							</li>
							<li>
								<a {{ request()->routeIs('Filieres') ? "style=color:#525fe1" : '' }} href="{{ route('Filieres') }}">FILIÈRES</a>
							</li>
							<li>
								<a {{ request()->routeIs('Tarifs') ? "style=color:#525fe1" : '' }} href="{{ route('Tarifs') }}">TARIFS</a>
							</li>
							<li>
								<a {{ request()->routeIs('Formations') ? "style=color:#525fe1" : '' }} href="{{ route('Formations') }}">FORMATIONS</a>
							</li>
							<li>
								<a {{ request()->routeIs('Contact') ? "style=color:#525fe1" : '' }} href="{{ route('Contact') }}">CONTACT</a>
							</li>

						
					</ul>			
				</div><!--- END ROW -->
			</div><!--- END CONTAINER -->
		</div> 