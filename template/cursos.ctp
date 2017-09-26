<?php
	$curso_categoria_nome = $this->action;
	$cursos = $this->cursos->getCursosPorCategoria($curso_categoria_nome);
?>
    <div id="main-content">

        <header class="page-header">
            <div class="mask-pattern"></div>
            <div class="mask"></div>
            <div class="page-header-bg page-header-bg-1"></div>
            <div class="page-header-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="page-title clearfix pull-left">
                                <?=$curso_categoria_nome;?>
                            </h1>
                        </div>
                        <div class="col-md-12">
							<h5 class=" clearfix pull-left" style="color:#fff">
								Os maiores especialistas em
								<?=$curso_categoria_nome?>
							</h5>
                        </div>

                        <!-- col-md-12 -->                        
                    </div>
                    <!-- row -->
                </div>
                <!-- container -->
            </div>
            <!-- page-header-inner -->
        </header>

		
        <section class="kopa-area kopa-area-15">

			<div class="container">
	    		<div class="row">
	    			<div class="col-md-12 col-sm-12 col-xs-12">
	    				<div class="widget kopa-masonry-list-2-widget">
	    					<div class="widget-title widget-title-s5 text-left">
 	                            <h4>Cursos para: <?=$curso_categoria_nome;?></h4>
 	                        </div>

	    					<div class="masonry-list-wrapper">
                                <ul class="clearfix">
								
								<?php
                                        foreach ($cursos as $curso){
                                            extract($curso);
                                            $imagem = empty($imagem)?'img/curso/no-image.png':base64_decode($imagem);
                                            $media  = number_format($media, 2, '.', ' ');

											echo 
											'
												<li class="masonry-item">
													<article class="entry-item hot-item">
														<div class="entry-thumb">
															<a href="curso/'.$idcurso.'/'.Main::preparaURL($categoria).'/'.Main::preparaURL($titulo).'">
																<div class="mask"></div>
																<img src="'.$imagem.'" height="230px">
															</a>
															<!--<span class="entry-hot">Hot</span>-->
                                                        </div>
                                                            
                                                        <div class="avaliacao">
                                                            <div class="starrr" data-rating="'.$media.'" title="Média entre '.$votantes.' opiniões de alunos"><span>'.$media.'</span></div>
                                                        </div>

														<div class="entry-content">
															<div class="course-teacher">
																<span>'.$categoria.'</span><br>
																<a href="instrutor/'.$instrutor_idinstrutor.'/'.Main::preparaURL($instrutor).'">'.$instrutor.'</a>
															</div>
															<h6 class="entry-title">
															    <a href="curso/'.$idcurso.'/'.Main::preparaURL($categoria).'/'.Main::preparaURL($titulo).'">                                                            
																	'.$titulo.'
																</a>
															</h6>
														</div>
													</article>
												</li>
											';
										}
									?>

                                </ul>
                                <!-- clearfix -->
                            </div>
                            <!-- masonry-list-wrapper -->
	    				</div>
	    				<!-- widget -->
	    			</div>
	    			<!-- col-md-12 -->
	    		</div>
	    		<!-- row -->
	    	</div>
	    	<!-- container -->
    	</section>
    	<!-- kopa-area-12 -->

		
		
        <section class="kopa-area-16 kopa-area-parallax">

            <div class="mask"></div>

            <div class="container">
                
                <div class="row">

                    <div class="col-md-12">

                        <div class="widget kopa-tagline-1-widget">
                            <h3>Veja mais de <?=count($cursos)?> cursos, ministrados por instrutores especializados</h3>

                            <a class="kopa-button kopa-line-button medium-button" href="#">entrar agora</a>
                            
                        </div>
                        <!-- widget -->
                        
                    </div>
                    <!-- col-md-12 -->
                    
                </div>
                <!-- row -->

            </div>
            <!-- container -->
            
        </section>

		
		<section class="kopa-area kopa-area-15">
     		<div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="widget kopa-ads-2-widget">
                            <div class="widget-title widget-title-s5 text-center">
                                <span></span>
                                <h2>Faça parte do Didática Online</h2>
                                <p>Comece a ensinar ou a aprender</p>
								<BR><BR><BR>
                             </div>
							 
 
							 
							<div class="col-md-12 col-sm-12 col-xs-12">
								<div class="col-md-6 col-sm-6 col-xs-12 text-center">
									<h4>Torne-se um Instrutor</h4>
									Ensine o que você adora. A Didática Online disponibiliza a facilidade para você criar seu curso online
									<br>
									<a href="#" class="kopa-button blue-button medium-button kopa-button-icon">Começar</a>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-12 text-center">
									<h4>Aprenda com os melhores</h4>
									Escolha grandes cursos e aprenda com os melhores e mais especializados instrutores da Didática Online
									<br>
									<a href="#" class="kopa-button blue-button medium-button kopa-button-icon">Entrar</a>
								</div>
							</div>
							
                        </div>
                        <!-- widget -->
                    </div>
                    <!-- col-md-12 -->
                </div>
                <!-- row -->
			</div>	
		 </section>	
			
    </div>
    <!-- main-content -->

    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js" charset="utf-8"></script>
	<script src="js/main.js"></script>
	<script src="dist/functions.js"></script>
	<script src="js/menu/modernizr.custom.js"></script>
	<script src="js/menu/jquery.dlmenu.js"></script>
	
	<link href="../plugins/notification/toastr.min.css" rel="stylesheet" type="text/css" />
	<script src="../plugins/notification/toastr.min.js"></script>
</body> 


</html>
<script>
	$(function() {
		$( '#dl-menu' ).dlmenu({
			animationClasses : { classin : 'dl-animate-in-5', classout : 'dl-animate-out-5' }
		});
	});
</script>