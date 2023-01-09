<!DOCTYPE html>
<html>

<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>NewSchool - Enregistrement</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/vendors/images/apple-touch-icon.png')}}">
	<link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/vendors/images/favicon-32x32.png')}}">
	<link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/vendors/images/favicon-16x16.png')}}">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/styles/core.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/styles/icon-font.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/src/plugins/jquery-steps/jquery.steps.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/styles/style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/src/plugins/cropperjs/dist/cropper.css')}}">

<!-- Croppie js -->
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
</head>

<body class="login-page">
	<div class="login-header box-shadow">
		<div class="container-fluid d-flex justify-content-between align-items-center">
			<div class="brand-logo">
				<a href="{{ url('/') }}">
					<img src="{{asset('assets/vendors/images/deskapp-logo.svg')}}" alt="">
				</a>
			</div>
			<div class="login-menu">
				<ul>
					<li><a href="{{route('login')}}">Se connecter</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="register-page-wrap d-flex align-items-center flex-wrap justify-content-center">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6 col-lg-7">
					<img src="{{asset('assets/vendors/images/register-page-img.png')}}" alt="">
				</div>
				<div class="col-md-8 col-lg-5">
					<div class="register-box bg-white box-shadow border-radius-10">
						<div class="wizard-content">
							<form class="tab-wizard2 wizard-circle wizard" method="POST" action="{{ route('register') }}">
								@csrf
							
								<h5>Personal Information</h5>
								<section>
									<div class="form-wrap max-width-600 mx-auto">
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Nom*</label>
											<div class="col-sm-8">
												<input type="email" class="form-control" name="name" :value="old('name')" required autofocus>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Prenom*</label>
											<div class="col-sm-8">
												<input type="text" class="form-control" name="prenom">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Mot de passe*</label>
											<div class="col-sm-8">
												<input type="password" class="form-control" name="password">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Confirmer*</label>
											<div class="col-sm-8">
												<input type="password" class="form-control"  name="password_confirmation" required>
											</div>
										</div>
									</div>
								</section>
								<!-- Step 2 -->
								<h5>Adresse</h5>
								<section>
									<div class="form-wrap max-width-600 mx-auto">
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Email*</label>
											<div class="col-sm-8">
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="form-group row align-items-center">
											<label class="col-sm-4 col-form-label">Téléphone</label>
											<div class="col-sm-8">
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Ville</label>
											<div class="col-sm-8">
												<input type="text" name="ville" class="form-control">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Quartier</label>
											<div class="col-sm-8">
												<input type="text" name="quartier" class="form-control">
											</div>
										</div>
										
									</div>
								</section>
								<!-- Step 3 -->
								<h5>Identités</h5>
								<section>
									<div class="form-wrap max-width-600 mx-auto">
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Role</label>
											<div class="col-sm-8">
												<select class="form-control selectpicker" title="Selectionnez le role">
													<option value="1">Option 1</option>
													<option value="2">Option 2</option>
													<option value="3">Option 3</option>
												</select>
											</div>
										</div>
										<div class="form-group row align-items-center">
											<label class="col-sm-4 col-form-label">Sexe*</label>
											<div class="col-sm-8">
												<div class="custom-control custom-radio custom-control-inline pb-0">
													<input type="radio" id="male" name="sexe" value="0" class="custom-control-input">
													<label class="custom-control-label" for="male">M</label>
												</div>
												<div class="custom-control custom-radio custom-control-inline pb-0">
													<input type="radio" id="female" name="sexe" value="1" class="custom-control-input">
													<label class="custom-control-label" for="female">F</label>
												</div>
											</div>
										</div>
										
										<div class="form-group row align-items-center">
											<label class="col-sm-4 col-form-label">Nationalité</label>
											<div class="col-sm-8">
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="form-group row align-items-center">
											<label class="col-sm-4 col-form-label">Date de naissance</label>
											<div class="col-md-8">
												<div class="form-group">
												
													<input type="text" class="form-control date-picker" placeholder="Date de naissance">
												</div>
											</div>
										</div>
										
										<div class="form-group row align-items-center">
											<label class="col-sm-4 col-form-label">Lieu de naissance</label>
											<div class="col-md-8">
												<div class="form-group">
												
													<input type="text" class="form-control" placeholder="Lieu de naissance">
												</div>
											</div>
										</div>
									</div>
								</section>
								<!-- Step 4 -->
								<h5 class="text-blue h5">Photo de profil</h5>
								<section>
									
									<div class="img-container">
										<img id="image" src="" alt="Photo de profil">
										</div>
										<div class="" id="actions">
											<div class="col-sm-12 col-md-12 col-lg-9 docs-buttons">
												<div class="btn-group">
													<button type="button" class="btn btn-primary" data-method="zoom" data-option="0.1" title="Zoom In">
														<span class="docs-tooltip" data-toggle="tooltip" title="cropper.zoom(0.1)">
															<span class="fa fa-search-plus"></span>
														</span>
													</button>
													<button type="button" class="btn btn-primary" data-method="zoom" data-option="-0.1" title="Zoom Out">
														<span class="docs-tooltip" data-toggle="tooltip" title="cropper.zoom(-0.1)">
															<span class="fa fa-search-minus"></span>
														</span>
													</button>
													<button type="button" class="btn btn-primary" data-method="rotate" data-option="-45" title="Rotate Left">
														<span class="docs-tooltip" data-toggle="tooltip" title="cropper.rotate(-45)">
															<span class="fa fa-rotate-left"></span>
														</span>
													</button>
												
													<button type="button" class="btn btn-primary" data-method="reset" title="Reset">
														<span class="docs-tooltip" data-toggle="tooltip" title="cropper.reset()">
															<span class="fa fa-refresh"></span>
														</span>
													</button>
													<label class="btn btn-primary btn-upload" for="inputImage" title="Upload image file">
														<input type="file" class="sr-only" id="inputImage" name="file" accept=".jpg,.jpeg,.png">
														<span class="docs-tooltip" data-toggle="tooltip" title="Import image with Blob URLs">
															<span class="fa fa-upload"></span>
														</span>
													</label>
													
												</div>
												<div class="modal fade docs-cropped" id="getCroppedCanvasModal" role="dialog" aria-hidden="true" aria-labelledby="getCroppedCanvasTitle" tabindex="-1">
													<div class="modal-dialog">
														<div class="modal-content">
															<div class="modal-header">
																<h5 class="modal-title" id="getCroppedCanvasTitle">Cropped</h5>
																<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																	<span aria-hidden="true">&times;</span>
																</button>
															</div>
															<div class="modal-body"></div>
															<div class="modal-footer">
																<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
																<a class="btn btn-primary" id="download" href="javascript:void(0);" download="cropped.jpg">Download</a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-sm-12 col-md-12 col-lg-3 docs-toggles">
												<div class="dropdown dropup docs-options">
													<ul class="dropdown-menu" role="menu" aria-labelledby="toggleOptions">
														<li class="dropdown-item">
															<div class="form-check">
																<input class="form-check-input" id="responsive" type="checkbox" name="responsive" checked>
																<label class="form-check-label" for="responsive">responsive</label>
															</div>
														</li>
														<li class="dropdown-item">
															<div class="form-check">
																<input class="form-check-input" id="restore" type="checkbox" name="restore" checked>
																<label class="form-check-label" for="restore">restore</label>
															</div>
														</li>
														<li class="dropdown-item">
															<div class="form-check">
																<input class="form-check-input" id="checkCrossOrigin" type="checkbox" name="checkCrossOrigin" checked>
																<label class="form-check-label" for="checkCrossOrigin">checkCrossOrigin</label>
															</div>
														</li>
														<li class="dropdown-item">
															<div class="form-check">
																<input class="form-check-input" id="checkOrientation" type="checkbox" name="checkOrientation" checked>
																<label class="form-check-label" for="checkOrientation">checkOrientation</label>
															</div>
														</li>
														<li class="dropdown-item">
															<div class="form-check">
																<input class="form-check-input" id="modal" type="checkbox" name="modal" checked>
																<label class="form-check-label" for="modal">modal</label>
															</div>
														</li>
														<li class="dropdown-item">
															<div class="form-check">
																<input class="form-check-input" id="guides" type="checkbox" name="guides" checked>
																<label class="form-check-label" for="guides">guides</label>
															</div>
														</li>
														<li class="dropdown-item">
															<div class="form-check">
																<input class="form-check-input" id="center" type="checkbox" name="center" checked>
																<label class="form-check-label" for="center">center</label>
															</div>
														</li>
														<li class="dropdown-item">
															<div class="form-check">
																<input class="form-check-input" id="highlight" type="checkbox" name="highlight" checked>
																<label class="form-check-label" for="highlight">highlight</label>
															</div>
														</li>
														<li class="dropdown-item">
															<div class="form-check">
																<input class="form-check-input" id="background" type="checkbox" name="background" checked>
																<label class="form-check-label" for="background">background</label>
															</div>
														</li>
														<li class="dropdown-item">
															<div class="form-check">
																<input class="form-check-input" id="autoCrop" type="checkbox" name="autoCrop" checked>
																<label class="form-check-label" for="autoCrop">autoCrop</label>
															</div>
														</li>
														<li class="dropdown-item">
															<div class="form-check">
																<input class="form-check-input" id="movable" type="checkbox" name="movable" checked>
																<label class="form-check-label" for="movable">movable</label>
															</div>
														</li>
														<li class="dropdown-item">
															<div class="form-check">
																<input class="form-check-input" id="rotatable" type="checkbox" name="rotatable" checked>
																<label class="form-check-label" for="rotatable">rotatable</label>
															</div>
														</li>
														<li class="dropdown-item">
															<div class="form-check">
																<input class="form-check-input" id="scalable" type="checkbox" name="scalable" checked>
																<label class="form-check-label" for="scalable">scalable</label>
															</div>
														</li>
														<li class="dropdown-item">
															<div class="form-check">
																<input class="form-check-input" id="zoomable" type="checkbox" name="zoomable" checked>
																<label class="form-check-label" for="zoomable">zoomable</label>
															</div>
														</li>
														<li class="dropdown-item">
															<div class="form-check">
																<input class="form-check-input" id="zoomOnTouch" type="checkbox" name="zoomOnTouch" checked>
																<label class="form-check-label" for="zoomOnTouch">zoomOnTouch</label>
															</div>
														</li>
														<li class="dropdown-item">
															<div class="form-check">
																<input class="form-check-input" id="zoomOnWheel" type="checkbox" name="zoomOnWheel" checked>
																<label class="form-check-label" for="zoomOnWheel">zoomOnWheel</label>
															</div>
														</li>
														<li class="dropdown-item">
															<div class="form-check">
																<input class="form-check-input" id="cropBoxMovable" type="checkbox" name="cropBoxMovable" checked>
																<label class="form-check-label" for="cropBoxMovable">cropBoxMovable</label>
															</div>
														</li>
														<li class="dropdown-item">
															<div class="form-check">
																<input class="form-check-input" id="cropBoxResizable" type="checkbox" name="cropBoxResizable" checked>
																<label class="form-check-label" for="cropBoxResizable">cropBoxResizable</label>
															</div>
														</li>
														<li class="dropdown-item">
															<div class="form-check">
																<input class="form-check-input" id="toggleDragModeOnDblclick" type="checkbox" name="toggleDragModeOnDblclick" checked>
																<label class="form-check-label" for="toggleDragModeOnDblclick">toggleDragModeOnDblclick</label>
															</div>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									
								</section>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- success Popup html Start -->
	
	<!-- success Popup html End -->
	<!-- js -->
	<script src="{{asset('assets/src/plugins/cropperjs/dist/cropper.js')}}"></script>
	<script src="{{asset('assets/vendors/scripts/core.min.js')}}"></script>
	<script src="{{asset('assets/vendors/scripts/script.min.js')}}"></script>
	<script src="{{asset('assets/vendors/scripts/process.js')}}"></script>
	{{-- <script src="{{asset('assets/vendors/scripts/layout-settings.js')}}"></script> --}}
	<script src="{{asset('assets/src/plugins/jquery-steps/jquery.steps.js')}}"></script>
	
	<script src="{{asset('assets/vendors/scripts/steps-setting.js')}}"></script>

	<script src="{{asset('assets/src/plugins/cropperjs/dist/cropper.js')}}"></script>
	<script src="{{asset('assets/src/plugins/cropperjs/dist/cropper-init.js')}}"></script>
	
</body>

</html>