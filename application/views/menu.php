
<body>

    <div id="wrapper">
        
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
         <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> 
                    <span>
                        <a href="<?php echo base_url()?>"><img alt="image" class="img-circle" src="<?php echo base_url()?>static/img/logo121.jpg" /></a>
                    </span>
                        
                        <span class="clear"> 
                        <span class="block m-t-xs"> <strong class="fa-lg">&nbsp;CEUPROPSF</strong></span> 
                            
                    </div>               
                </li>  
                
                <?php if($this->session->userdata('tipo') == '1'): ?> <!-- SI ES ADMINISTRADOR-->
                <li>
                    <a href="<?php echo base_url()?>cdispensario/start">Dispensario</a>
                </li>
                <li>
                    <a href="<?php echo base_url()?>cusuario/start"><i class="fa fa-users fa-lg"><span class="nav-label">  Usuario</span></i></a>
                </li> 
                <li>
                    <a href="<?php echo base_url()?>cpaciente/start"><i class="fa fa-wheelchair fa-lg"><span class="nav-label">  Pacientes</span></i></a>
                </li>

                <li>
                    <a href="<?php echo base_url()?>cmedico/start"><i class="fa fa-user-md fa-lg"><span class="nav-label">  Medico</span></i></a>
                </li>           
                
                <li>
                    <a href="<?php echo base_url()?>cespecialidad/start"><i class="fa fa-plus-square fa-lg"><span class="nav-label">  Especialidad</span></i></a>
                </li>
                
				<li>
                    <a href="<?php echo base_url()?>cbrigada/start"><i class="fa fa-building-o fa-lg"><span class="nav-label">  Brigada</span></i></a>
                </li>

				<li>
                    <a href="<?php echo base_url()?>cconsultas/start"><i class="fa fa-stethoscope fa-lg"><span class="nav-label"> Consultas</span></i></a>
                </li>                

                <li>
                    <a href="<?php echo base_url()?>cevento/start"><i class="fa fa-dedent fa-lg"><span class="nav-label"> Evento</span></i></a>
                </li>

                <li>
                    <a href="<?php echo base_url()?>Noticias/index"><i class="fa fa-rss-square fa-lg"><span class="nav-label">  Noticias</span></i></a>
                </li>

                <li>
                    <a href="<?php echo base_url()?>creporte/start"><i class="fa fa-file-o fa-lg"><span class="nav-label">  Reportes</span></i></a>
                </li>

                <li>
                    <a href="<?php echo base_url()?>chorario/start">Horario</a>
                </li>

                <li>
                    <a href="<?php echo base_url()?>cdmh/start">Asignar Horario</a>
                </li>

                <li>
                    <a href="<?php echo base_url()?>ccita/start">Cita</a>
                </li>

                <li>
                    <a href="<?php echo base_url()?>chistorial/start">Historial Paciente</a>
                </li>

                <?php endif; ?>

                <?php if($this->session->userdata('tipo') == '3'): ?><!-- SI ES USUARIO O MEDICO-->
                    
                    <li>
                        <a href="<?php echo base_url()?>cconsultas/start"><i class="fa fa-stethoscope fa-lg"><span class="nav-label"> Consultas</span></i></a>
                    </li>

                    <li>
                        <a href="<?php echo base_url()?>ccita/start">Cita</a>
                    </li>

                    <li>
                        <a href="<?php echo base_url()?>chistorial/start">Historial Paciente</a>
                    </li>
                <?php endif; ?>

            </ul>

        </div>
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            
            
        </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <span class="m-r-sm text-muted welcome-message">Bienvenidos a CEUPROPSF</span>
                </li>
                <li>
                    <a href="<?=base_url()?>index.php/administracion/logout"><i class="fa fa-sign-out"></i>Cerra Sesion</a>
                </li>
            </ul>

        </nav>
        
        
        <!-- /#sidebar-wrapper -->
      
