@extends('layouts.master')
@section('content')

<!-- START HOME -->
<section class="home_bg hb_height" style="background-image: url({{ asset('assets/img/bg/home-bg.jpg') }}); background-size:cover; background-position:center center;">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-sm-12 col-xs-12">
				<div class="hero-text ht_top">
					<h1><span>La voie de l'excellence et de l'employabilité</span></h1>
					<p>Institut Supérieur d'Études Commerciales de Man — former les talents d'aujourd'hui pour les défis de demain.</p>
				</div>
				<div class="home_sb">
					<a href="{{ route('Filieres') }}" class="btn_one">Découvrir les filières <i class="ti-arrow-top-right"></i></a>
					<a href="#contact" class="btn_one">Nous contacter <i class="ti-arrow-top-right"></i></a>
				</div>
			</div>
			<div class="col-lg-6 col-sm-12 col-xs-12">
				<div class="hero-text-img">
					<img src="{{ asset('assets/img/home-img2.png') }}" class="img-fluid" alt="ISEC MAN" />
					<div class="home_ps">
						<span class="ti-user"></span>
						<h2>2021</h2>
						<p>Ouverture effective</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- END HOME -->

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
					<p>Étudiants max. par salle climatisée</p>
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

<!-- START CREATION & VISION -->
<section class="top_cat__area section-padding" style="background-image: url({{ asset('assets/img/bg/shape-1.png') }}); background-size:cover; background-position:center center;">
	<div class="container">
		<div class="section-title text-center">
			<h2>Création &amp; Vision</h2>
			<p>Fondé avec la mission de transformer l'enseignement supérieur à Man et dans la région de l'Ouest ivoirien.</p>
		</div>
		<div class="row">
			
			@foreach ($atouts as $atout)
				<div class="col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="{{ $atout->delay }}" data-wow-offset="0">
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
					<p>Fondé en 2019 et ouvert effectivement en juillet 2021 à Man (Côte d'Ivoire) par Jean Moïse GUÉ, l'ISEC MAN est un établissement d'enseignement supérieur privé dédié à la formation de professionnels compétents, capables de s'insérer durablement dans le marché du travail.</p>
					<p>Avec des salles climatisées à effectifs réduits (15 étudiants max.), des enseignants spécialistes et un modèle pédagogique centré sur l'employabilité, l'ISEC MAN se distingue comme un pôle d'excellence dans la région.</p>
					<ul>
						@foreach (['Excellence', 'Discipline', 'Professionnalisme', 'Innovation', 'Employabilité'] as $valeur)
							<li><span class="ti-check"></span> <b>{{ $valeur }}</b></li>
						@endforeach
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- END ABOUT US -->

<!-- START FILIERES (LISTE) -->
<section class="top_cat__area section-padding" style="background-image: url({{ asset('assets/img/bg/section-2.jpg') }}); background-size:cover; background-position:center center;">
	<div class="container">
		<div class="section-title text-center">
			<h2>Nos 8 filières BTS / DTS / DUT</h2>
			<p>Chaque filière est dispensée sur trois niveaux (Année Préparatoire, BTS 1 et BTS 2) par des enseignants spécialistes dans des salles climatisées à effectifs limités.</p>
		</div>
		<div class="row">
			<div class="col-lg-12 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
				<div class="cat_list">
					<ul>
						@php
							$liste = [
								'Agriculture Tropicale – Option Animale',
								'Agriculture Tropicale – Option Végétale',
								'Assistanat de Direction',
								'Finance Comptabilité et Gestion des Entreprises',
								'Gestion Commerciale',
								"Informatique Développeur d'Applications",
								'Génie Civil – Option Bâtiment',
								'Ressources Humaines et Communication',
							];
						@endphp
						@foreach ($liste as $i => $nom)
							<li><a href="{{ route('Filieres') }}"><img src="{{ asset('assets/img/e' . (($i % 9) + 1) . '.png') }}" alt="{{ $nom }}" /> {{ $nom }}</a></li>
						@endforeach
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- END FILIERES (LISTE) -->

<!-- START FILIERES (CARTES) -->
<section class="home_course section-padding">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-sm-6 col-xs-12">
				<div class="section-title">
					<h2>Nos filières <b>BTS / DTS / DUT</b></h2>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6 col-xs-12">
				<div class="cour_btn">
					<a href="{{ route('Filieres') }}" class="btn_one">Voir toutes les filières <i class="ti-arrow-top-right"></i></a>
				</div>
			</div>
		</div>
		<div class="row">

			@foreach ($filieres as $filiere)
				<div class="col-lg-4 col-sm-6 col-xs-12">
					<div class="single_course">
						<div class="single_c_img">
							<img src="{{ asset('storage/'.$filiere->image) }}" class="img-fluid" alt="{{ $filiere->titre }}" />
							<span>{{ $filiere->titre }}</span>
						</div>
						<h4><a href="{{ route('Filieres') }}">{{ $filiere->option }}</a></h4>
						<p>{{ $filiere->description }}</p>
						<br>
						<p><span class="ti-alarm-clock"></span> {{ $filiere->niveau }}</p>
						<div class="price"> {{ $filiere->montant }}</div>
					</div>
				</div>
			@endforeach
		</div>
	</div>
</section>
<!-- END FILIERES (CARTES) -->

<!-- START NIVEAUX -->
<section class="top_cat__area section-padding">
	<div class="container">
		<div class="section-title text-center">
			<h2>Trois niveaux de progression</h2>
			<p>Un parcours structuré, de l'Année Préparatoire jusqu'au diplôme.</p>
		</div>
		<div class="row">
			@foreach ($niveaux as $niveau)
				<div class="col-lg-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
					<div class="single_tp">
						<span class="{{ $niveau->cles }}">{{ $niveau->code }}</span>
						<h3>{{ $niveau->titre }}</h3>
						<p><b>{{ $niveau->prix }} FCFA / an</b></p>
						<p><b>Conditions d'accès :</b> {{ $niveau->condition }}</p>
					</div>
				</div>
			@endforeach
		</div>
	</div>
</section>
<!-- END NIVEAUX -->

<!-- START TARIFS -->
<section class="ab_area section-padding">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
				<div class="ab_content">
					<h2>Frais de scolarité &amp; conditions</h2>
					<p>Les frais ci-dessous s'appliquent à tous les étudiants. Les étudiants affectés par l'État ne règlent que les frais d'inscription et les frais annexes.</p>
					<ul>
						<li><span class="ti-check"></span> Frais d'inscription : <b>85 000 FCFA</b> (une fois à l'entrée, tous niveaux confondus)</li>
						<li><span class="ti-check"></span> Frais annexes : <b>40 000 FCFA</b> par année</li>
						<li><span class="ti-check"></span> Scolarité : <b>250 000</b> (AP) · <b>350 000</b> (BTS 1) · <b>450 000</b> (BTS 2) FCFA / an</li>
					</ul>
					<a class="btn_one" href="#contact">Nous contacter <i class="ti-arrow-top-right"></i></a>
				</div>
			</div>
			<div class="col-lg-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
				<div class="ab_img">
					<img src="{{ asset('storage/images/image1.jpeg') }}" class="img-fluid" alt="Frais de scolarité" />
					<div class="home_ps2">
						<span class="ti-book"></span>
						<h2>3</h2>
						<p>Niveaux de formation</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- END TARIFS -->

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
						<span class="{{ $formation->cles }}">{{ $formation->numero }}</span>
						<h3>{{ $formation->titre }}</h3>
						<p>{{ $formation->texte }}</p>
					</div>
				</div>
			@endforeach
		</div>
	</div>
</section>
<!-- END FORMATIONS -->



@endsection