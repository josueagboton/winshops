
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="favicon.png">

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />

		<!-- Bootstrap CSS -->
		<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
		<link href="{{ asset('css/tiny-slider.css')}}" rel="stylesheet">
		<link href="{{asset('css/style.css')}}" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

		<title>WinerShop</title>
	</head>

	<body>

		@include('layouts.navbar')

		@yield('content')
		

		
		<!-- End Product Section -->

		<!-- End Blog Section -->	
		<!-- Modal Inscription -->
<div class="modal fade" id="inscriptionModal" tabindex="-1" aria-labelledby="inscriptionModalLabel" aria-hidden="true">
	<div class="modal-dialog">
	  <div class="modal-content">
		<div class="modal-header">
		  <h5 class="modal-title" id="inscriptionModalLabel">Inscription</h5>
		  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>
		<div class="modal-body">
		  <p>Pour profiter de nos offres spéciales, veuillez vous inscrire en renseignant votre adresse e-mail :</p>
		  <input type="email" class="form-control" id="emailInput" placeholder="Adresse e-mail">
		</div>
		<div class="modal-footer">
		  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
		  <button type="button" class="btn btn-primary" id="inscriptionBtn">S'inscrire</button>
		</div>
	  </div>
	</div>
  </div>
  
  <script>
	// Fonction pour valider le format de l'e-mail
	function validateEmail(email) {
		var re = /\S+@\S+\.\S+/;
		return re.test(email);
	}
	
	// Fonction pour afficher le modal d'inscription après 30 secondes de chargement de la page
	$(document).ready(function(){
		setTimeout(function(){
			var utilisateurConnecte = false; // Modifier selon la méthode réelle de vérification de la connexion
	
			// Si l'utilisateur n'est pas connecté, afficher le modal d'inscription
			if (!utilisateurConnecte) {
				$('#inscriptionModal').modal('show');
			}
		}, 20000); // Afficher le modal après 20 secondes de chargement de la page
	});
	
	// Gérer l'inscription lorsque l'utilisateur clique sur le bouton d'inscription
	$('#inscriptionBtn').click(function(){
		var email = $('#emailInput').val();
		// Vérifier le format de l'e-mail
		if (validateEmail(email)) {
			// Si l'e-mail est valide, changer la couleur de l'input en vert
			$('#emailInput').removeClass('is-invalid').addClass('is-valid');
			// Cacher le message d'erreur
			$('#emailErrorMessage').hide();
			// Envoyer l'e-mail à votre backend pour traiter l'inscription (à implémenter côté serveur)
			console.log("E-mail inscrit : " + email);
			// Fermer le modal après l'inscription réussie (simulation)
			$('#inscriptionModal').modal('hide');
		} else {
			// Si l'e-mail n'est pas valide, changer la couleur de l'input en rouge
			$('#emailInput').removeClass('is-valid').addClass('is-invalid');
			// Afficher le message d'erreur
			$('#emailErrorMessage').show();
		}
	});
	</script>
  
		<!-- Start Footer Section -->
		<footer class="footer-section">
			<div class="container relative">

				<div class="sofa-img">
					<img src="images/sofa.png" alt="Image" class="img-fluid">
				</div>

				<div class="row">
					<div class="col-lg-8">
						<div class="subscription-form">
							<h3 class="d-flex align-items-center"><span class="me-1"><img src="images/envelope-outline.svg" alt="Image" class="img-fluid"></span><span>Subscribe to Newsletter</span></h3>

							<form action="#" class="row g-3">
								<div class="col-auto">
									<input type="text" class="form-control" placeholder="Enter your name">
								</div>
								<div class="col-auto">
									<input type="email" class="form-control" placeholder="Enter your email">
								</div>
								<div class="col-auto">
									<button class="btn btn-primary">
										<span class="fa fa-paper-plane"></span>
									</button>
								</div>
							</form>

						</div>
					</div>
				</div>

				<div class="row g-5 mb-5">
					<div class="col-lg-4">
						<div class="mb-4 footer-logo-wrap"><a href="#" class="footer-logo">Furni<span>.</span></a></div>
						<p class="mb-4">Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique. Pellentesque habitant</p>

						<ul class="list-unstyled custom-social">
							<li><a href="#"><span class="fa fa-brands fa-facebook-f"></span></a></li>
							<li><a href="#"><span class="fa fa-brands fa-twitter"></span></a></li>
							<li><a href="#"><span class="fa fa-brands fa-instagram"></span></a></li>
							<li><a href="#"><span class="fa fa-brands fa-linkedin"></span></a></li>
						</ul>
					</div>

					<div class="col-lg-8">
						<div class="row links-wrap">
							<div class="col-6 col-sm-6 col-md-3">
								<ul class="list-unstyled">
									<li><a href="#">About us</a></li>
									<li><a href="#">Services</a></li>
									<li><a href="#">Blog</a></li>
									<li><a href="#">Contact us</a></li>
								</ul>
							</div>

							<div class="col-6 col-sm-6 col-md-3">
								<ul class="list-unstyled">
									<li><a href="#">Support</a></li>
									<li><a href="#">Knowledge base</a></li>
									<li><a href="#">Live chat</a></li>
								</ul>
							</div>

							<div class="col-6 col-sm-6 col-md-3">
								<ul class="list-unstyled">
									<li><a href="#">Jobs</a></li>
									<li><a href="#">Our team</a></li>
									<li><a href="#">Leadership</a></li>
									<li><a href="#">Privacy Policy</a></li>
								</ul>
							</div>

							<div class="col-6 col-sm-6 col-md-3">
								<ul class="list-unstyled">
									<li><a href="#">Nordic Chair</a></li>
									<li><a href="#">Kruzo Aero</a></li>
									<li><a href="#">Ergonomic Chair</a></li>
								</ul>
							</div>
						</div>
					</div>

				</div>

				<div class="border-top copyright">
					<div class="row pt-4">
						<div class="col-lg-6">
							<p class="mb-2 text-center text-lg-start">Copyright &copy;<script>document.write(new Date().getFullYear());</script>. All Rights Reserved. &mdash; Designed with love by <a href="https://untree.co">Untree.co</a> Distributed By <a hreff="https://themewagon.com">ThemeWagon</a>  <!-- License information: https://untree.co/license/ -->
            </p>
						</div>

						<div class="col-lg-6 text-center text-lg-end">
							<ul class="list-unstyled d-inline-flex ms-auto">
								<li class="me-4"><a href="#">Terms &amp; Conditions</a></li>
								<li><a href="#">Privacy Policy</a></li>
							</ul>
						</div>

					</div>
				</div>

			</div>
		</footer>
		<!-- End Footer Section -->	


		<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
		<script src="{{ asset('js/tiny-slider.js')}}"></script>
		<script src="{{ asset('js/custom.js')}}"></script>
	</body>

</html>
