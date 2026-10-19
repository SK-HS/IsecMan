<!-- START FOOTER -->
<div class="footer section-padding">
	<div class="container">
		<div class="row">

			<div class="col-lg-3 col-sm-6 col-xs-12">
				<div class="single_footer">
					<a href="{{ route('index') }}"><img width="100" height="100" src="{{ asset('storage/images/logo.jpeg') }}" alt="{{ config('app.name') }}"></a>
					<p>Institut Supérieur d'Études Commerciales de Man — former les talents d'aujourd'hui pour les défis de demain.</p>
					<p><em>« La voie de l'excellence et de l'employabilité »</em></p>
					<div class="social_profile">
						<ul>
							<li><a class="f_facebook" href="#" aria-label="Facebook" target="_blank" rel="noopener"><i class="fa-brands fa-facebook-f"></i></a></li>
							<li><a class="f_twitter" href="#" aria-label="X" target="_blank" rel="noopener"><i class="fa-brands fa-x-twitter"></i></a></li>
							<li><a class="f_instagram" href="#" aria-label="Instagram" target="_blank" rel="noopener"><i class="fa-brands fa-instagram"></i></a></li>
							<li><a class="f_linkedin" href="#" aria-label="LinkedIn" target="_blank" rel="noopener"><i class="fa-brands fa-linkedin-in"></i></a></li>
						</ul>
					</div>
				</div>
			</div><!-- END COL -->

			<div class="col-lg-2 col-sm-6 col-xs-12">
				<div class="single_footer">
					<h4>{{ config('app.name') }}</h4>
					<ul>
						<li><a href="{{ route('index') }}">Accueil</a></li>
						<li><a href="{{ route('A-Propos') }}">À propos</a></li>
						<li><a href="{{ route('Filieres') }}">Filières</a></li>
						<li><a href="{{ route('Tarifs') }}">Tarifs</a></li>
						<li><a href="{{ route('Formations') }}">Formations</a></li>
						<li><a href="{{ route('Contact') }}">Contact</a></li>
					</ul>
				</div>
			</div><!-- END COL -->

			<div class="col-lg-2 col-sm-6 col-xs-12">
				<div class="single_footer">
					<h4>Nos filières</h4>
					<ul>
						@foreach (['Agriculture Tropicale', 'Assistanat de Direction', 'Finance & Comptabilité', 'Gestion Commerciale', 'Informatique', 'Génie Civil', 'RH & Communication'] as $filiere)
							<li><a href="{{ route('Filieres') }}">{{ $filiere }}</a></li>
						@endforeach
					</ul>
				</div>
			</div><!-- END COL -->

			<div class="col-lg-3 col-sm-6 col-xs-12">
				<div class="single_footer">
					<h4>Nous contacter</h4>
					<div class="sf_contact">
						<span class="ti-map"></span>
						<p>Man, Quartier Air France à droite<br>
							Voie de la Présidence<br>
							Carrefour ISEC (après le lavage)</p>
					</div>
					<div class="sf_contact">
						<span class="ti-mobile"></span>
						<p>
							<a href="tel:+2252734775677">+225 27 34 77 56 77</a><br>
							<a href="tel:+2250788283029">+225 07 88 28 30 29</a><br>
							<a href="tel:+2250103601010">+225 01 03 60 10 10</a>
						</p>
					</div>
					<div class="sf_contact">
						<span class="fa-brands fa-whatsapp"></span>
						<p><a href="https://wa.me/2250103601010" target="_blank" rel="noopener">Nous écrire sur WhatsApp</a></p>
					</div>
					<div class="sf_contact">
						<span class="ti-email"></span>
						<p><a href="mailto:isecman.info@gmail.com">isecman.info@gmail.com</a></p>
					</div>
				</div>
			</div><!-- END COL -->

			<div class="col-lg-2 col-sm-6 col-xs-12">
				<div class="single_footer">
					<h4>Nos enseignements</h4>
					<ul>
						<li><a href="{{ route('Formations') }}#superieur">Enseignement Supérieur</a></li>
						<li><a href="{{ route('Formations') }}#technique">Enseignement Technique</a></li>
						<li><a href="{{ route('Formations') }}#professionnelle">Formation Professionnelle</a></li>
					</ul>
					<p style="margin-top:15px;">Salles climatisées · 15 étudiants max. par salle</p>
				</div>
			</div><!-- END COL -->

		</div><!-- END ROW -->
	</div><!-- END CONTAINER -->
</div>
<!-- END FOOTER -->

<!-- START FOOTER COPYRIGHT -->
<div class="foot_copy">
	<div class="footer_copyright">
		<p>&copy; {{ date('Y') }} {{ config('app.name') }} — Institut Supérieur d'Études Commerciales de Man. Tous droits réservés • <a href="http://www.isec.university" target="_blank" rel="noopener">www.isec.university</a></p>
	</div>
</div>
<!-- END FOOTER COPYRIGHT -->