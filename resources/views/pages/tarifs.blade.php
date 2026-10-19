@extends('layouts.master')
@section('content')

<!-- START SECTION TOP -->
<section class="section-top">
	<div class="container">
		<div class="col-lg-10 offset-lg-1 text-center">
			<div class="section-top-title wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
				<h1>Tarifs &amp; Conditions</h1>
				<ul>
					<li><a href="{{ route('index')}}">Accueil</a></li>
					<li> / Tarifs</li>
				</ul>
			</div>
		</div>
	</div>
</section>
<!-- END SECTION TOP -->

<!-- START FRAIS GENERAUX -->
<section class="top_cat__area section-padding" style="background-image: url({{ asset('assets/img/bg/shape-1.png') }}); background-size:cover; background-position:center center;">
	<div class="container">
		<div class="section-title text-center">
			<h2>Frais d'inscription &amp; frais annexes</h2>
			<p>Ces frais s'appliquent à tous les étudiants, tous niveaux confondus. Les étudiants affectés par l'État ne règlent que les frais d'inscription et les frais annexes.</p>
		</div>
		<div class="row justify-content-center">
			<div class="col-lg-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
				<div class="single_tp">
					<span class="sc_one">01</span>
					<h3>Frais d'inscription</h3>
					<p><b>85 000 FCFA</b></p>
					<p>Payables une seule fois, à l'inscription initiale dans l'établissement.</p>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
				<div class="single_tp">
					<span class="sc_two">02</span>
					<h3>Frais annexes</h3>
					<p><b>40 000 FCFA / an</b></p>
					<p>Couvrent les dépenses pédagogiques annexes.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- END FRAIS GENERAUX -->

<!-- START SCOLARITE -->
<section class="home_course section-padding">
	<div class="container">
		<div class="section-title text-center">
			<h2>Scolarité par niveau</h2>
			<p>Valable pour les 8 filières BTS / DTS / DUT. Salles climatisées, 15 étudiants maximum, enseignants spécialistes.</p>
		</div>
		<div class="row">
			@php
				$niveaux = [
					['Année Préparatoire (AP)', '250 000', "BAC général ≥ 160 points ou BAC technique ≥ 192 points.", '1'],
					['BTS 1 – Première année', '350 000', "Titulaire du Baccalauréat, ou Année Préparatoire validée à l'ISEC MAN.", '2'],
					['BTS 2 – Deuxième année', '450 000', "BTS 1 validé (ISEC MAN ou autre établissement reconnu). Conduit au BTS / DTS / DUT.", '3'],
				];
			@endphp
			@foreach ($niveaux as [$titre, $prix, $cond, $img])
				<div class="col-lg-4 col-sm-6 col-xs-12">
					<div class="single_course">
						<div class="single_c_img">
							<img src="{{ asset('assets/img/course/' . $img . '.png') }}" class="img-fluid" alt="{{ $titre }}" />
							<span>1 an</span>
						</div>
						<h4>{{ $titre }}</h4>
						<p><b>Conditions d'accès :</b> {{ $cond }}</p>
						<br>
						<div class="price">{{ $prix }} FCFA / an</div>
					</div>
				</div>
			@endforeach
		</div>
	</div>
</section>
<!-- END SCOLARITE -->

<!-- START RECAPITULATIF -->
<section class="ab_area section-padding">
	<div class="container">
		<div class="section-title text-center">
			<h2>Récapitulatif estimatif (FCFA)</h2>
			<p>Estimation calculée à partir des tarifs ci-dessus. Confirmez le montant exact auprès de l'administration.</p>
		</div>
		<div class="row">
			<div class="col-lg-10 offset-lg-1">
				<div class="table-responsive">
					<table class="table table-bordered text-center">
						<thead>
							<tr>
								<th>Niveau</th>
								<th>Scolarité</th>
								<th>1re année à l'ISEC MAN<br><small>(+ inscription + annexes)</small></th>
								<th>Années suivantes<br><small>(+ annexes)</small></th>
								<th>Affecté État<br><small>(inscription + annexes)</small></th>
							</tr>
						</thead>
						<tbody>
							@php
								$inscription = 85000; $annexes = 40000;
								$lignes = [['AP', 250000], ['BTS 1', 350000], ['BTS 2', 450000]];
							@endphp
							@foreach ($lignes as [$nom, $scol])
								<tr>
									<td><b>{{ $nom }}</b></td>
									<td>{{ number_format($scol, 0, ',', ' ') }}</td>
									<td>{{ number_format($scol + $inscription + $annexes, 0, ',', ' ') }}</td>
									<td>{{ number_format($scol + $annexes, 0, ',', ' ') }}</td>
									<td>{{ number_format($inscription + $annexes, 0, ',', ' ') }}</td>
								</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12 text-center">
				<ul style="list-style:none; padding:0;">
					<li><span class="ti-check"></span> Salles 100% climatisées</li>
					<li><span class="ti-check"></span> 15 étudiants maximum par salle</li>
					<li><span class="ti-check"></span> Enseignants spécialistes</li>
					<li><span class="ti-check"></span> Formation orientée vers l'employabilité</li>
				</ul>
				<br>
				<a class="btn_one" href="{{ route('Filieres') }}">Voir les filières <i class="ti-arrow-top-right"></i></a>
			</div>
		</div>
	</div>
</section>
<!-- END RECAPITULATIF -->



@endsection