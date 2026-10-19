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
			@php
				$atouts = [
					['sc_one', '01', 'Salles 100% <br />climatisées', "Chaque salle de cours est climatisée pour un confort optimal toute l'année.", '0.2s'],
					['sc_two', '02', 'Effectifs 15 <br />étudiants max.', "Pas plus de 15 étudiants par salle pour favoriser l'encadrement individualisé et la participation active.", '0.3s'],
					['sc_three', '03', 'Enseignants <br />spécialistes', "Corps enseignant composé exclusivement de spécialistes dans chaque domaine de formation.", '0.4s'],
					['sc_four', '04', "Orientation vers <br />l'employabilité", "Chaque programme est conçu pour répondre aux besoins réels du marché du travail ivoirien et régional.", '0.5s'],
				];
			@endphp
			@foreach ($atouts as [$cls, $num, $titre, $texte, $delay])
				<div class="col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="{{ $delay }}" data-wow-offset="0">
					<div class="single_tp">
						<span class="{{ $cls }}">{{ $num }}</span>
						<h3>{!! $titre !!}</h3>
						<p>{{ $texte }}</p>
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
								'Informatique Développeur d\'Applications',
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
			@php
				$filieres = [
					['Agriculture Tropicale', 'Option Animale & Option Végétale', "Formation aux sciences et techniques agricoles adaptées au contexte tropical ivoirien. Deux spécialités : productions animales et productions végétales.", '1'],
					['Assistanat de Direction', 'Secrétariat exécutif & management', "Formation aux métiers d'assistant(e) de direction : gestion administrative, communication, organisation et coordination.", '2'],
					['Finance Comptabilité & Gestion', 'Comptabilité, fiscalité, audit', "Maîtrise des outils comptables et financiers, gestion d'entreprise, analyse financière et contrôle de gestion.", '3'],
					['Gestion Commerciale', 'Commerce, marketing, vente', "Techniques commerciales, marketing, distribution et gestion des équipes de vente pour le développement commercial des entreprises.", '4'],
					['Informatique', "Développeur d'Applications – logiciel & web", "Conception et développement d'applications informatiques, programmation, bases de données et systèmes d'information.", '5'],
					['Génie Civil', 'Option Bâtiment', "Techniques du bâtiment et des travaux publics, dessin de plans, suivi de chantiers et gestion de projets de construction.", '6'],
					['RH & Communication', 'Ressources humaines, relations sociales, communication', "Gestion du capital humain, recrutement, droit social, communication interne et externe des organisations.", '6'],
				];
			@endphp
			@foreach ($filieres as [$titre, $option, $desc, $img])
				<div class="col-lg-4 col-sm-6 col-xs-12">
					<div class="single_course">
						<div class="single_c_img">
							<img src="{{ asset('assets/img/course/' . $img . '.png') }}" class="img-fluid" alt="{{ $titre }}" />
							<span>{{ $titre }}</span>
						</div>
						<h4><a href="{{ route('Filieres') }}">{{ $option }}</a></h4>
						<p>{{ $desc }}</p>
						<br>
						<p><span class="ti-alarm-clock"></span> AP · BTS 1 · BTS 2</p>
						<div class="price">Dès 250 000 FCFA / an</div>
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
			@php
				$niveaux = [
					['sc_one', 'AP', 'Année Préparatoire', '250 000 FCFA / an', "BAC général ≥ 160 points ou BAC technique ≥ 192 points. Permet aux nouveaux bacheliers de consolider leurs bases avant le BTS 1."],
					['sc_two', 'BTS 1', 'BTS Première Année', '350 000 FCFA / an', "Être titulaire du Baccalauréat, ou avoir validé l'Année Préparatoire à l'ISEC MAN."],
					['sc_three', 'BTS 2', 'BTS Deuxième Année', '450 000 FCFA / an', "Avoir validé le BTS 1 (ISEC MAN ou autre établissement reconnu). Conduit au BTS / DTS / DUT."],
				];
			@endphp
			@foreach ($niveaux as [$cls, $code, $titre, $prix, $cond])
				<div class="col-lg-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
					<div class="single_tp">
						<span class="{{ $cls }}">{{ $code }}</span>
						<h3>{{ $titre }}</h3>
						<p><b>{{ $prix }}</b></p>
						<p><b>Conditions d'accès :</b> {{ $cond }}</p>
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
					<img src="{{ asset('assets/img/about3.png') }}" class="img-fluid" alt="Frais de scolarité" />
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
			@php
				$formations = [
					['sc_one', '01', 'Enseignement Supérieur', "Formations diplômantes BTS / DTS / DUT, Licence Professionnelle et Master Professionnel. Accès aux grandes filières commerciales, techniques et scientifiques."],
					['sc_two', '02', 'Enseignement Technique', "Filières G1 (Secrétariat Bureautique) et G2 (Comptabilité) du lycée technique, de la 2nde à la Terminale. Préparation aux examens officiels."],
					['sc_three', '03', 'Formation Professionnelle', "Formations qualifiantes de courte durée pour demandeurs d'emploi, personnes en reconversion, déscolarisés et salariés souhaitant se perfectionner."],
				];
			@endphp
			@foreach ($formations as [$cls, $num, $titre, $texte])
				<div class="col-lg-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
					<div class="single_tp">
						<span class="{{ $cls }}">{{ $num }}</span>
						<h3>{{ $titre }}</h3>
						<p>{{ $texte }}</p>
					</div>
				</div>
			@endforeach
		</div>
	</div>
</section>
<!-- END FORMATIONS -->

<!-- START CONTACT -->
<section id="contact" class="blog_area section-padding">
	<div class="container">
		<div class="section-title text-center">
			<h2>Nous trouver &amp; nous joindre</h2>
			<p>Man, Quartier Air France à droite — Voie de la Présidence, Carrefour ISEC (après le lavage).</p>
		</div>
		<div class="row">
			<div class="col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
				<div class="single_tp">
					<h3>Adresse</h3>
					<p>Man, Côte d'Ivoire<br>Quartier Air France<br>Voie de la Présidence</p>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
				<div class="single_tp">
					<h3>Téléphones</h3>
					<p>
						<a href="tel:+2252734775677">+225 27 34 77 56 77</a><br>
						<a href="tel:+2250788283029">+225 07 88 28 30 29</a><br>
						<a href="tel:+2250103601010">+225 01 03 60 10 10</a>
					</p>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
				<div class="single_tp">
					<h3>Email</h3>
					<p><a href="mailto:isecman.info@gmail.com">isecman.info@gmail.com</a></p>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s" data-wow-offset="0">
				<div class="single_tp">
					<h3>Site web</h3>
					<p><a href="http://www.isec.university" target="_blank" rel="noopener">www.isec.university</a></p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- END CONTACT -->

@endsection