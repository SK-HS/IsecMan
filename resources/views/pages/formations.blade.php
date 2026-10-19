@extends('layouts.master')
@section('content')

<!-- START SECTION TOP -->
<section class="section-top">
	<div class="container">
		<div class="col-lg-10 offset-lg-1 text-center">
			<div class="section-top-title wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
				<h1>Nos Enseignements</h1>
				<ul>
					<li><a href="{{ url('/') }}">Accueil</a></li>
					<li> / Formations</li>
				</ul>
			</div>
		</div>
	</div>
</section>
<!-- END SECTION TOP -->

<!-- START INTRO -->
<section class="top_cat__area section-padding" style="background-image: url({{ asset('assets/img/bg/shape-1.png') }}); background-size:cover; background-position:center center;">
	<div class="container">
		<div class="section-title text-center">
			<h2>Trois types d'enseignements</h2>
			<p>Quel que soit votre profil — nouveau bachelier, élève du technique, demandeur d'emploi ou salarié — l'ISEC MAN propose une formation orientée vers l'employabilité.</p>
		</div>
		<div class="row">
			
			@foreach ($formations as $formation)
				<div class="col-lg-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
					<div class="single_tp">
						<span class="{{ $formation->cles }}">{{ $formation->numero }}</span>
						<h3>{!! $formation->titre !!}</h3>
						<p>{{ $formation->texte }}</p>
						<br>
						<a class="btn_one" href="{{ route('Filieres')}}">En savoir plus <i class="ti-arrow-top-right"></i></a>
					</div>
				</div>
			@endforeach
		</div>
	</div>
</section>
<!-- END INTRO -->

<!-- START SUPERIEUR -->
<section id="superieur" class="ab_area section-padding">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
				<div class="ab_img">
					<img src="{{ asset('storage/images/image1.jpeg') }}" class="img-fluid" alt="Enseignement Supérieur" />
				</div>
			</div>
			<div class="col-lg-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
				<div class="ab_content">
					<h2>Enseignement Supérieur</h2>
					<p>Formations diplômantes BTS / DTS / DUT, Licence Professionnelle et Master Professionnel, avec accès aux grandes filières commerciales, techniques et scientifiques.</p>
					<ul>
						<li><span class="ti-check"></span> <b>8 filières</b> BTS / DTS / DUT</li>
						<li><span class="ti-check"></span> <b>3 niveaux :</b> Année Préparatoire, BTS 1, BTS 2</li>
						<li><span class="ti-check"></span> <b>Poursuite d'études :</b> Licence Pro et Master Pro</li>
					</ul>
					<a class="btn_one" href="{{ route('Filieres') }}">Voir les filières <i class="ti-arrow-top-right"></i></a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- END SUPERIEUR -->

<!-- START TECHNIQUE -->
<section id="technique" class="ab_area section-padding">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
				<div class="ab_content">
					<h2>Enseignement Technique</h2>
					<p>Filières du lycée technique, de la 2nde à la Terminale, avec une préparation aux examens officiels.</p>
					<ul>
						<li><span class="ti-check"></span> <b>G1 :</b> Secrétariat Bureautique</li>
						<li><span class="ti-check"></span> <b>G2 :</b> Comptabilité</li>
						<li><span class="ti-check"></span> <b>Parcours :</b> 2nde → Terminale</li>
					</ul>
					<a class="btn_one" href="{{ route('Contact') }}">Nous contacter <i class="ti-arrow-top-right"></i></a>
				</div>
			</div>
			<div class="col-lg-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
				<div class="ab_img">
					<img src="{{ asset('storage/images/image2.jpeg') }}" class="img-fluid" alt="Enseignement Technique" />
				</div>
			</div>
		</div>
	</div>
</section>
<!-- END TECHNIQUE -->

<!-- START PROFESSIONNELLE -->
<section id="professionnelle" class="ab_area section-padding">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
				<div class="ab_img">
					<img src="{{ asset('storage/images/image3.jpeg') }}" class="img-fluid" alt="Formation Professionnelle" />
				</div>
			</div>
			<div class="col-lg-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
				<div class="ab_content">
					<h2>Formation Professionnelle</h2>
					<p>Formations qualifiantes de courte durée pour acquérir ou perfectionner rapidement des compétences utiles sur le marché du travail.</p>
					<ul>
						<li><span class="ti-check"></span> Demandeurs d'emploi</li>
						<li><span class="ti-check"></span> Personnes en reconversion</li>
						<li><span class="ti-check"></span> Déscolarisés</li>
						<li><span class="ti-check"></span> Salariés souhaitant se perfectionner</li>
					</ul>
					<a class="btn_one" href="{{ route('Contact') }}">Nous contacter <i class="ti-arrow-top-right"></i></a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- END PROFESSIONNELLE -->

<!-- START CADRE -->
<section class="count_area counter_feature">
	<div class="container">
		<div class="row">
			@php
				$cadre = [
					['ti-folder sc_one', '100%', 'Salles climatisées'],
					['ti-id-badge sc_two', '15', 'Étudiants max. par salle'],
					['ti-medall-alt sc_three', '100%', 'Enseignants spécialistes'],
					['ti-user sc_four', '3', 'Types de formations'],
				];
			@endphp
			@foreach ($cadre as [$icone, $chiffre, $libelle])
				<div class="col-lg-3 col-sm-6 col-xs-12">
					<div class="single-counter">
						<span class="{{ $icone }}"></span>
						<h2 class="counter-num">{{ $chiffre }}</h2>
						<p>{{ $libelle }}</p>
					</div>
				</div>
			@endforeach
		</div>
	</div>
</section>
<!-- END CADRE -->

<!-- START CTA -->
<section class="insfreecourse section-padding">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-sm-12 col-xs-12">
				<div class="single_ins" style="background-image: url({{ asset('storage/images/image1.jpeg') }}); background-size:cover; background-position:center center;">
					<div class="single_ins_content">
						<h4>Enseignement supérieur</h4>
						<h1>Frais de scolarité</h1>
						<p>Consultez les tarifs de l'Année Préparatoire, du BTS 1 et du BTS 2.</p>
						<a class="btn_one" href="{{ route('Tarifs') }}">Voir les tarifs <i class="ti-arrow-top-right"></i></a>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-sm-12 col-xs-12">
				<div class="single_ins" style="background-image: url({{ asset('storage/images/image2.jpeg') }}); background-size:cover; background-position:center center;">
					<div class="single_ins_content">
						<h4>Technique &amp; professionnel</h4>
						<h1>Renseignez-vous</h1>
						<p>Appelez-nous au <a href="tel:+2250788283029">+225 07 88 28 30 29</a> pour les conditions et tarifs.</p>
						<a class="btn_one" href="{{ route('Contact') }}">Contact <i class="ti-arrow-top-right"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- END CTA -->

@endsection