		<?php
		defined('BASEPATH') OR exit('No direct script access allowed');
		
			?>
			
			<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
				<!-- Preloader -->
				<div id="preloader">
					<div id="load"></div>
				</div>
				<?php include("includes/navbar.php") ?>
				<div class="container">

					<div class="row">
						<div class="col-xs-6 col-sm-3 col-md-3">
							<div class="wow bounceInUp " data-wow-delay="0.2s">
								<div class="team boxed-grey img-circle">
									<div class="inner">
										<a href="<?php echo base_url()?>cusuario/start">
										<h5>USUARIOS</h5>										
										<div class="avatar"><img src="<?=base_url()?>static/images/user_admin.png" alt="" class="img-responsive img-rounded" /></div>
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-6 col-sm-3 col-md-3">
							<div class="wow bounceInUp" data-wow-delay="0.5s">
								<a href="Noticias">
									<div class="team boxed-grey img-circle">
										<div class="inner">
											<h5>NOTICIAS</h5>
											
											<div class="avatar"><img src="<?=base_url()?>static/images/megafone.png" alt="" class="img-responsive img-rounded" /></div>

										</div>
									</div>
								</a>
							</div>
						</div>
						<div class="col-xs-6 col-sm-3 col-md-3">
							<div class="wow bounceInUp" data-wow-delay="0.8s">
								<div class="team boxed-grey img-circle">
									<div class="inner">
									<a href="<?php echo base_url()?>cevento/start">
										<h5>EVENTOS</h5>
										<div class="avatar"><img src="<?=base_url()?>static/images/event.png" alt="" class="img-responsive img-rounded" /></div>
									</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-6 col-sm-3 col-md-3">
							<div class="wow bounceInUp" data-wow-delay="1s">
								<div class="team boxed-grey img-circle">
									<div class="inner">
										<a href="<?php echo base_url()?>cbrigada/start">
											<h5>BRIGADAS</h5>
											<div class="avatar"><img src="<?=base_url()?>static/images/brigadas.png" alt="" class="img-responsive img-rounded" /></div>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<br/>
					<div class="row">
						<div class="col-xs-6 col-sm-3 col-md-3">
							<div class="wow bounceInUp" data-wow-delay="0.2s">
									<div class="team boxed-grey img-circle">
										<div class="inner">
											<a href="<?php echo base_url()?>cpaciente/start">
												<h5>PACIENTES</h5>					
												<div class="avatar"><img src="<?=base_url()?>static/images/users_siluete.png" alt="" class="img-responsive img-rounded" /></div>
											</a>
										</div>
									</div>
							</div>
						</div>					
						<div class="col-xs-6 col-sm-3 col-md-3">
							<div class="wow bounceInUp" data-wow-delay="0.5s">
									<div class="team boxed-grey img-circle">
										<div class="inner">
											<a href="<?php echo base_url()?>cmedico/start">
												<h5>MEDICOS</h5>					
												<div class="avatar"><img class="img-circle" width="220" height="230" src="<?=base_url()?>static/images/team.jpg" alt="" class="img-responsive img-rounded" /></div>
											</a>
										</div>
									</div>
							</div>
						</div>
						<div class="col-xs-6 col-sm-3 col-md-3">
							<div class="wow bounceInUp" data-wow-delay="0.5s">
									<div class="team boxed-grey img-circle">
										<div class="inner">
											<a href="<?php echo base_url()?>creporte/start">
												<h5>REPORTES</h5>					
												<div class="avatar"><img class="img-circle" width="220" height="230" src="<?=base_url()?>static/images/reporte.png" alt="" class="img-responsive img-rounded" /></div>
											</a>
										</div>
									</div>
							</div>
						</div>					
				</div>

				
			
