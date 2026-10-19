@extends('layouts.master')
@section('content')

<!-- START SECTION TOP -->
<section class="section-top">
	<div class="container">
		<div class="col-lg-10 offset-lg-1 text-center">
			<div class="section-top-title wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
				<h1>Contactez-nous</h1>
				<ul>
					<li><a href="{{ url('/') }}">Accueil</a></li>
					<li> / Contact</li>
				</ul>
			</div>
		</div>
	</div>
</section>
<!-- END SECTION TOP -->

<!-- START ADDRESS -->
<section class="address_area section-padding">
	<div class="container">
		<div class="row text-center">
			<div class="col-lg-4 col-sm-4 col-xs-12 no-padding wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
				<div class="single_address sa_one">
					<i class="ti-map"></i>
					<h4>Notre adresse</h4>
					<p>Man, Quartier Air France à droite <br /> Voie de la Présidence <br /> Carrefour ISEC (après le lavage)</p>
				</div>
			</div>
			<div class="col-lg-4 col-sm-4 col-xs-12 no-padding wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
				<div class="single_address sa_two">
					<i class="ti-mobile"></i>
					<h4>Téléphones</h4>
					<p><a href="tel:+2252734775677">+225 27 34 77 56 77</a></p>
					<p><a href="tel:+2250788283029">+225 07 88 28 30 29</a></p>
					<p><a href="tel:+2250103601010">+225 01 03 60 10 10</a></p>
				</div>
			</div>
			<div class="col-lg-4 col-sm-4 col-xs-12 no-padding wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
				<div class="single_address sa_three">
					<i class="ti-email"></i>
					<h4>Email &amp; site web</h4>
					<p><a href="mailto:isecman.info@gmail.com">isecman.info@gmail.com</a></p>
					<p><a href="http://www.isec.university" target="_blank" rel="noopener">www.isec.university</a></p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- END ADDRESS -->

<!-- CONTACT -->
<div id="contact" class="contact_area section-padding">
	<div class="container">
		<div class="row">
			<div class="col-lg-7 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
				<div class="contact">
					@if (session('success'))
						<div class="alert alert-success">{{ session('success') }}</div>
					@endif
					@if ($errors->any())
						<div class="alert alert-danger">
							<ul class="mb-0">
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
					<form class="form" name="enq" method="POST" action="{{ route('Contact-Message') }}">
	                   @csrf

				<!-- SÉCURITÉ SILENCIEUSE : Champ Honeypot (Piège à robots invisible) -->
				<input type="text" name="website_url_hp" style="display:none !important;" tabindex="-1" autocomplete="off">

				<div class="row">
					<div class="form-group col-md-6">
						<label for="name">Nom complet</label>
						<input type="text" id="name" name="nom" value="{{ old('nom') }}" class="form-control" required>
						@error('nom') <small class="text-danger">{{ $message }}</small> @enderror
					</div>

					<div class="form-group col-md-6">
						<label for="telephone">Votre Téléphone</label>
						<input type="tel" id="telephone" name="telephone" value="{{ old('telephone') }}" class="form-control" required>
						@error('telephone') <small class="text-danger">{{ $message }}</small> @enderror
					</div>
					<div class="form-group col-md-6">
						<label for="email">Votre email</label>
						<input type="email" id="email" name="email" value="{{ old('email') }}" class="form-control" >
						@error('email') <small class="text-danger">{{ $message }}</small> @enderror
					</div>

					<div class="form-group col-md-6">
						<label for="subject">Objet</label>
						<input type="text" id="subject" name="subject" value="{{ old('subject') }}" class="form-control" placeholder="Ex. : Inscription en BTS 1 – Gestion Commerciale" required>
						@error('subject') <small class="text-danger">{{ $message }}</small> @enderror
					</div>

					<div class="form-group col-md-12">
						<label for="message">Votre message</label>
						<textarea rows="6" id="message" name="message" class="form-control" required>{{ old('message') }}</textarea>
						@error('message') <small class="text-danger">{{ $message }}</small> @enderror
					</div>

					<!--  CASE À COCHER SIMPLE -->
					<div class="form-group col-md-12 my-3">
					<label style="display: flex; align-items: center; gap: 20px; cursor: pointer; user-select: none; font-weight: normal;">
						<input type="checkbox" name="not_robot" id="not_robot" value="1" required 
							style="display: inline-block !important; opacity: 1 !important; visibility: visible !important; width: 40px; height: 40px; accent-color: #525fe1; cursor: pointer;">
						<span>Je ne suis pas un robot</span>
					</label>
					@error('not_robot')
						<small class="text-danger d-block mt-1">{{ $message }}</small>
					@enderror
				</div>

					<div class="col-md-12 text-center mt-3">
						<button type="submit" id="submitButton" class="btn_one" title="Envoyer votre message">Envoyer le message</button>
					</div>
				</div>
			</form>

				</div>
			</div>
			<div class="col-lg-5 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
				<div class="map">
					<iframe src="https://www.google.com/maps?q=Man,+C%C3%B4te+d%27Ivoire&output=embed" title="Localisation ISEC MAN" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- END CONTACT -->

@endsection