<!DOCTYPE html>
<html lang="en">

<?php include "head.php"; ?>

<body id="top">
<!--header-->
<header>
    <?php include "menu.php"; ?>
</header>
<div class="container">
    <div class="row">
        <div class="span12 isotopeGall">
            <div id="container" class="clearfix">
				<?php
					foreach($album as $f){
						if ($f["pagina"] != "coleção")
							continue;
						?>
							<div class="element transition term" data-category="transition">
								<?php 
									$photo = $f["foto"]; 
									$local = "../uploads/".$photo;
								?>								
								
								<a href="<?php echo $local; ?>" class="thumbnail"><img src="<?php echo $local; ?>" alt="">
									<p class="description">
										<em></em><br>
										<span class="txt1"><?php echo $f["titulo"]; ?></span><br>
										<span class="txt2"><?php echo $f["descricao"]; ?></span>
										<br>
										<span class="txt2"><?php echo "R$ ".$f["preco"]; ?></span>
									</p>
								</a>
							</div>							
						<?php							
					}
				?>                                      
            </div>
                <p><a href="galeria.php"> Ver Todas as Fotos da Galeria</a></p>
                <div class="borderBottom"><span class="fleft"></span><span class="fright"></span></div>                
            </div>
            <div class="span12">                              
                <div class="splTitle">
                    <p class="title1">Seja revendedor da marca <br><span><?php echo $empresa["marca"]; ?></span></p>
                    <p class="title2">Aguardamos seu contato</p>
                    <a href="contato.php" class="btn btn-primary">Fale conosco</a>
                </div>
            </div>
    </div>
</div>
<!--content-->
<div class="global">
    <div class="container">
        <div class="row">
             <article class="span4 box1">
                <h2>Nossas lojas</h2>
                <ul class="list1">
                   <?php
						$x = 0;
						foreach($eoutros as $e){
							if($x >2)
								break;
					?>		
							<li>
								<img width=100  src='../uploads/<?php echo $e['foto_colorida'];?>'>
								<div class='extra-wrap'>
									<h3><?php echo $e['cidade']." - ".$e['estado'];?></h3>
									<p><?php echo $e['logradouro']." - ".$e['bairro'];?></p>
									<!--<a href='http://<?php echo $e['url1']; ?>' target="_blank"><?php echo $e['url1']; ?></a>-->
								</div>
							</li>
					<?php
							$x++;
						}
						
					?>             
                </ul>
                <a href="#" class="btn btn-link">read more</a>
             </article>
             <article class="span4 box1">
				<h2>Como revender</h2>                
                <h3><?php echo $conteudo['titulo5']; ?></h3>
                <p class="margBot"><?php echo $conteudo['paragrafo4']; ?></p>
                <h3><?php echo $conteudo['titulo6']; ?></h3>
                <p class="margBot1"><?php echo $conteudo['paragrafo5']; ?></p>
                <a href="#" class="btn btn-link">leia mais</a>
             </article>
             <article class="span4 box2">
                <h2>Depoimento</h2>
                <div class="testimonials">
                    <p>&ldquo;<?php echo $conteudo["testemunho1"]; ?>&rdquo;</p>
                    <span class="triangle"></span>
                </div>                
				<div class="testimInfo">
                    <h3><?php echo $conteudo["autoria1"]; ?></h3>
                    <!--<p>Photographer</p>-->
                </div>
             </article>
         </div>
    </div>
</div>
<!--footer-->
<footer>
  <?php include "rodape.php"; ?>
</footer>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script>
    if($.browser.msie && $.browser.version == 8){    
        $('footer #menu li').css({'padding-right':'17px', 'margin-right':'17px'});
        $('.nav-collapse_ .nav > li > a p').css({'display':'none'});
        $('footer .f-logo').css({'width':'170px'}); 
        $('.description em').css({'margin-top':'81px'});
        $('footer p').css({'margin-left':'10px'});
    }
    if($.browser.mozilla){
        $('footer .f-logo').css({'padding-right':'55px'});
    } 
</script>
</body>
</html>