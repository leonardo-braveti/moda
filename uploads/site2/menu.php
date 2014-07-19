
<div class="container">
         <div class="navbar navbar_ clearfix">
            <div class="navbar-inner">      
                  <div class="clearfix">
                        <h1><a href="index.php">
								<?php 
									$local = "../uploads/";
									$foto = $local.$empresa["logomarca"];
								?>
								<img src="<?php echo $foto; ?>" alt="">
							</a>
						</h1>						
                        <div class="nav-collapse nav-collapse_ collapse">
                        	<ul class="nav sf-menu clearfix">
                        	  <li class="active" data-title="home"><a href="index.php"><?php echo $menu["opc1"]; ?><!-- <span>welcome</span>--></a></li> 
                              <li data-title="about"><a href="lancamento.php"><?php echo $secundario["opc1"]; ?></p></a></li> 
                              <li data-title="gallery"><a href="colecao.php"><?php echo $secundario["opc2"]; ?> </a></li> 
                              <li data-title="blog"><a href="promocao.php"><?php echo $secundario["opc3"]; ?> </a></li> 
                              <li data-title="contacts"><a href="revender.php"><?php echo $menu["opc5"]; ?>  </a></li>
							  <li data-title="contacts"><a href="contato.php"><?php echo $menu["opc6"]; ?>  </a></li>                       
                            </ul>
                        </div>                                                                                                                   
                  </div>
             </div>  
         </div>
    </div>
    <div class="border"></div>