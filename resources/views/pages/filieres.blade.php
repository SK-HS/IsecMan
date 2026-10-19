@extends('layouts.master')
@section('content')

<!-- START SECTION TOP -->
<section class="section-top">
	<div class="container">
		<div class="col-lg-10 offset-lg-1 text-center">
			<div class="section-top-title wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
				<h1>Nos Filières &amp; Formations</h1>
				<ul>
					<li><a href="{{ url('/') }}">Accueil</a></li>
					<li> / Filières</li>
				</ul>
			</div>
		</div>
	</div>
</section>
<!-- END SECTION TOP -->

<!-- START FILIERES -->
<section class="home_course section-padding">
	<div class="container">
		<div class="section-title text-center">
			<h2>Nos 8 filières BTS / DTS / DUT</h2>
			<p>Chaque filière est dispensée sur trois niveaux (Année Préparatoire, BTS 1 et BTS 2) par des enseignants spécialistes dans des salles climatisées de 15 étudiants maximum.</p>
		</div>
		<div class="row">
			
			@foreach ($filieres as $filiere)
				<div class="col-lg-4 col-sm-6 col-xs-12">
					<div class="single_course">
						<div class="single_c_img">
							<img src="{{ asset('storage/'. $filiere->image) }}" class="img-fluid" alt="{{ $filiere->titre }}" />
							<span>{{ $filiere->titre }}</span>
						</div>
						<h4>{{ $filiere->option }}</h4>
						<p>{{ $filiere->description }}</p>
						<br>
						<p><span class="ti-book"></span> {{ $filiere->niveau }}</p>
						<p><span class="ti-alarm-clock"></span> 3 ans (1 an par niveau)</p>
						<div class="price">{{ $filiere->montant }}</div>
					</div>
				</div>
			@endforeach
		</div>
	</div>
</section>
<!-- END FILIERES -->

<!-- START NIVEAUX & TARIFS -->
<section class="top_cat__area section-padding">
	<div class="container">
		<div class="section-title text-center">
			<h2>Niveaux, conditions d'accès &amp; tarifs</h2>
		</div>
		<div class="row">
			
			@foreach ($niveaux as $niveau)
				<div class="col-lg-4 col-sm-6 col-xs-12">
					<div class="single_tp">
						<span class="{{ $niveau->cles }}">{{ $niveau->code }}</span>
						<h3>{{ $niveau->titre }}</h3>
						<p><b>{{ $niveau->prix }} FCFA / an</b></p>
						<p><b>Conditions d'accès :</b> {{ $niveau->condition }}</p>
					</div>
				</div>
			@endforeach
		</div>
		<div class="row">
			<div class="col-lg-10 offset-lg-1 text-center">
				<p><b>Frais d'inscription :</b> 85 000 FCFA (une fois à l'entrée) &nbsp;|&nbsp; <b>Frais annexes :</b> 40 000 FCFA / an</p>
				<p>Les étudiants affectés par l'État ne règlent que les frais d'inscription et les frais annexes.</p>
			</div>
		</div>
	</div>
</section>
<!-- END NIVEAUX & TARIFS -->

<!-- START AUTRES FORMATIONS -->
<section class="home_course section-padding">
	<div class="container">
		<div class="section-title text-center">
			<h2>Nos autres formations</h2>
		</div>
		<div class="row">
			
			@foreach ($autreformations as $autreformation)
				<div class="col-lg-4 col-sm-6 col-xs-12">
					<div class="single_course">
						<div class="single_c_img">
							<img src="{{ asset('storage/'. $autreformation->image) }}" class="img-fluid" alt="{{ $autreformation->titre }}" />
							<span>{{ $autreformation->titre }}</span>
						</div>
						<h4>{{ $autreformation->sous_titre }}</h4>
						<p>{{ $autreformation->texte }}</p>
					</div>
				</div>
			@endforeach
		</div>
		<div class="row">
			<div class="col-lg-12 text-center">
				<p>Renseignements et inscriptions : <a href="{{ route('Contact') }}">Contactez-Nous</a></p>
			</div>
		</div>
	</div>
</section>
<!-- END AUTRES FORMATIONS -->

@endsection