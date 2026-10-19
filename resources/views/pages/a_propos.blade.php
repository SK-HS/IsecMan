@extends('layouts.master')
@section('content')

<!-- START SECTION TOP -->
<section class="section-top">
	<div class="container">
		<div class="col-lg-10 offset-lg-1 text-center">
			<div class="section-top-title wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
				<h1>À propos</h1>
				<ul>
					<li><a href="{{ url('/') }}">Accueil</a></li>
					<li> / À propos</li>
				</ul>
			</div>
		</div>
	</div>
</section>
<!-- END SECTION TOP -->

<!-- START CREATION & VISION -->
<section class="top_cat__area section-padding" style="background-image: url({{ asset('assets/img/bg/shape-1.png') }}); background-size:cover; background-position:center center;">
	<div class="container">
		<div class="section-title text-center">
			<h2>Création &amp; Vision</h2>
			<p>Fondé avec la mission de transformer l'enseignement supérieur à Man et dans la région de l'Ouest ivoirien.</p>
		</div>
		<div class="row">
			
			@foreach ($atouts as $atout)
				<div class="col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="{{ $atout->delais }}" data-wow-offset="0">
					<div class="single_tp">
						<span class="{{ $atout->cles }}">{{ $atout->numero }}</span>
						<h3>{!! $atout->titre !!}</h3>
						<p>{{ $atout->texte }}</p>
					</div>
				</div>
			@endforeach
		</div>
	</div>
</section>
<!-- END CREATION & VISION -->

<!-- START ABOUT US -->
<section class="ab_area section-padding">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
				<div class="ab_img">
					<img src="{{ asset('storage/images/image5.jpeg') }}" class="img-fluid" alt="ISEC MAN" />
				</div>
			</div>
			<div class="col-lg-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
				<div class="ab_content">
					<h2>Un établissement fondé sur l'excellence</h2>
					<p>Fondé en 2019 et ouvert effectivement en juillet 2021 à Man (Côte d'Ivoire) par Jean Moïse GUÉ, l'ISEC MAN — Institut Supérieur d'Études Commerciales de Man — est un établissement d'enseignement supérieur privé dédié à la formation de professionnels compétents, capables de s'insérer durablement dans le marché du travail.</p>
					<p>Avec des salles climatisées à effectifs réduits (15 étudiants max.), des enseignants spécialistes et un modèle pédagogique centré sur l'employabilité, l'ISEC MAN se distingue comme un pôle d'excellence dans la région.</p>
					<ul>
						<li>
						@foreach (['Excellence', 'Discipline', 'Professionnalisme', 'Innovation'] as $valeur)
							<span class="ti-check"></span> <b>{{ $valeur }}</b>
							@endforeach
							<br> <span class="ti-check"></span> <b>Employabilité</b>
						</li>
					</ul>
					<a class="btn_one" href="{{ route('Filieres') }}">Voir nos filières <i class="ti-arrow-top-right"></i></a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- END ABOUT US -->

<!-- START COUNTER -->
<section class="count_area counter_feature">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-sm-6 col-xs-12">
				<div class="single-counter">
					<span class="ti-folder sc_one"></span>
					<h2 class="counter-num">2021</h2>
					<p>Ouverture effective</p>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 col-xs-12">
				<div class="single-counter">
					<span class="ti-medall-alt sc_two"></span>
					<h2 class="counter-num">8</h2>
					<p>Filières BTS / DTS / DUT</p>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 col-xs-12">
				<div class="single-counter">
					<span class="ti-id-badge sc_three"></span>
					<h2 class="counter-num">15</h2>
					<p>Étudiants max. par salle</p>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 col-xs-12">
				<div class="single-counter">
					<span class="ti-user sc_four"></span>
					<h2 class="counter-num">3</h2>
					<p>Types de formations</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- END COUNTER -->

<!-- START FORMATIONS -->
<section class="top_cat__area section-padding">
	<div class="container">
		<div class="section-title text-center">
			<h2>Trois types d'enseignements</h2>
		</div>
		<div class="row">
			
			@foreach ($formations as $formation)
				<div class="col-lg-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
					<div class="single_tp">
						<span class="sc_one">{{ $formation->numero }}</span>
						<h3>{{ $formation->sous_titre }}</h3>
						<p>{{ $formation->texte }}</p>
					</div>
				</div>
			@endforeach
		</div>
	</div>
</section>
<!-- END FORMATIONS -->

<!-- START CTA -->
<section class="insfreecourse section-padding">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
				<div class="single_ins" style="background-image: url({{ asset('storage/images/image1.jpeg') }}); background-size:cover; background-position:center center;">
					<div class="single_ins_content">
						<h4>Construisez votre avenir</h4>
						<h1>Rejoindre l'ISEC MAN</h1>
						<p>Découvrez nos filières, </p>
						<p>nos niveaux d'accès et nos tarifs.</p>
						<a class="btn_one" href="{{ route('Filieres') }}">Nos filières <i class="ti-arrow-top-right"></i></a>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
				<div class="single_ins" style="background-image: url({{ asset('storage/images/image3.jpeg') }}); background-size:cover; background-position:center center;">
					<div class="single_ins_content">
						<h4>Une question ?</h4>
						<h1>Nous contacter</h1>
						<p>Man, Quartier Air France — Voie de la Présidence, Carrefour ISEC.<br>
							<p>Appelez-nous au <a href="tel:+2250788283029">+225 07 88 28 30 29</a> pour les conditions et tarifs.</p>
						<a class="btn_one" href="mailto:isecman.info@gmail.com">Écrire un email <i class="ti-arrow-top-right"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- END CTA -->

@endsection