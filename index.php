<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Toque Mágico</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-social/bootstrap-social.css">
  <link href="css/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/style-index.css">
  <link rel="stylesheet" type="text/css" href="css/font/font.css">
  
  <style type="text/css">
    p a span[role="fa"]:hover{
      background: rgb(51, 122, 183) none repeat scroll 0% 0%;
    }
    a span[role="tw"]:hover{
      background:  lightblue;
    }
    p a span[role="in"]:hover{
      background: purple;
    }
  </style>
</head>
<body>
  <div class="container-fluid" style="">
    <div class="">
    
      <header class="row" >
        <div content-header="header-wrip">
          
        <nav content-header="header-wrip">
          <div class="col-md-12" style="fpadding-top: 10px;">
              <!-- Comenco -->
            <nav class="navbar navbar-fixed-top" style="background-color: #fff; padding: 10px; font-family: 'Rajdhani', sans-serif; border-bottom: solid 1px #eee
            ;">
                <div class="logo" style="font-family: 'Rajdhani', sans-serif;">
                  <h2 style="color: #444; margin-top: 5px; display: inline-block; float: left;  margin-left: 20px; margin-right: 50px;">
                    <strong>Toque mágico</strong>
                  </h2>
                </div>
                <div class="container-fluid" >
                  <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#btn-collapse" aria-expanded="false" style="border: solid 1px #aaa; ">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar" style="background-color: #555;"></span>
                      <span class="icon-bar" style="background-color: #555;"></span>
                      <span class="icon-bar" style="background-color: #555;"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                      <strong style="color: rgb(85, 102, 119)">HOME</strong>       
                    </a>
                  </div>

                  <!-- Collect the nav links, forms, and other content for toggling -->
                  <div class="collapse navbar-collapse" id="btn-collapse" >
                      <ul class="nav navbar-nav">
                        <li class="active"><a href="#"style="color: rgb(85, 102, 119)">BLOG <span class="sr-only">(current)</span></a></li>
                        <li><a href="#" style="color: rgb(85, 102, 119)">CATEGORIAS </a></li>
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false      " style="color: rgb(85, 102, 119)">MAIS <span   class="caret"></span></a>
                                   <ul class="dropdown-menu">
                           <li><a href="blog/" style="color: rgb(85, 102, 119)">Blog</a></li>
                           <li><a href="#" style="color: rgb(85, 102, 119)"></a></li>
                           <li><a href="#" style="color: rgb(85, 102, 119)">Categorias</a></li>
                           <li role="separator" class="divider"></li>
                           <li><a href="admin" style="color: rgb(85, 102, 119)">Entrar</a></li>
                           <li role="separator" class="divider"></li>
                           <li><a href="#" style="color: rgb(85, 102, 119)">Sobre</a></li>
                         </ul>
                       </li>
                      </ul>
                      <form class="navbar-form navbar-left">
                          <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search">
                              <div class="input-group-btn">
                                  <button class="btn btn-default" type="submit">
                                      <i class="glyphicon glyphicon-search"></i>
                                  </button>
                              </div>
                        </div>
                      </form> 
                  </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
          </nav>
          <!-- Fim -->
        </div>  
        <div content-header="header-wrip">
          <!-- banner -->
          <div class="col-md-12" style="width: 100%; margin-bottom: 15px; padding: 0;">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="4000" data-houver="mouse-leave">
              <!-- Indicators -->
                <ol class="carousel-indicators">
                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
              </ol>
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                      <img src="imagens/slide1_image.jpg" class="img-responsive" alt="...">
                      <div class="carousel-caption">
                        <h1>Aqui a descrição da imagem</h1>
                        <p>Falando mais sobre</p>   
                      </div>
                  </div>
                    <div class="item">
                      <img src="imagens/slide2_image.jpg" class="img-responsive" alt="...">
                      <div class="carousel-caption">
                        <h1>Outra descrição</h1>
                        <p>Também falando sobre</p>               
                      </div>
                    </div>
                    <div class="item">
                      <img src="imagens/slide3_image.jpg" class="img-responsive" alt="...">
                      <div class="carousel-caption">
                        <h1>Mais Ainda</h1>
                        <p>E assim adiante. Use quantos banners forem necessários</p>               
                      </div>
                    </div>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
            </div>
          </div>
        </div>
      </header>
      <div class="row" role="grid">
          <div class="col-md-12">
          </div>
      </div>
      <?php  
            require_once('model/connect.php');
            include_once('model/sql.php');
            $x = -1;
            $y = -1;
            $sql1 = "SELECT titulo, texto, imagem FROM post WHERE idcategoria = ". $id[++$x] ." ORDER BY idpost DESC";
            $sql2 = "SELECT titulo, texto, imagem FROM post WHERE idcategoria = " . $id[++$x] . " ORDER BY idpost DESC";
           
      ?>
      <div class="row" role="main">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
             <div  style="font-family: 'Rajdhani', sans-serif;">
                <h2 ><?php echo $nomes[++$y]?></h2>
             </div>
          </div>
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <?php  
              $resulte = $con->query($sql1);
              if ($resulte->num_rows > 0) {
                  while ($row = $resulte->fetch_assoc()){

              ?>
              <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                  <div style="border: solid 1px #eee;  margin-top: 15px;">
                    <h4 style="text-align: left;"> 
                      <span class="label label-info">
                        <?php echo $row['titulo']; ?>
                      </span>
                    </h4>
                    <div style="padding: 5px;" >
                        <img width='70%'  src="midia/<?php echo $row['imagem']; ?>" >
                    </div>
                    <p><?php echo $row['texto']; ?><span class="badge">1</span></p>
                  </div>
              </div>
              <?php  
                  }
              }
              ?>
          </div>
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
             <div class="topic" style="font-family: 'Rajdhani', sans-serif;">
                <h2> <?php echo $nomes[++$y] ?></h2>
             </div>
          </div>
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
               <?php  
               $resulte = $con->query($sql2);
                if ($resulte->num_rows > 0) {
                    while ($row = $resulte->fetch_assoc()){

              ?>
              <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                  <div style="border: solid 1px #eee; margin-top: 15px;">
                    <h4 style="text-align: left;"> 
                      <span class="label label-warning">
                      <?php echo $row['titulo']; ?>
                      </span></h4>
                    <div style="padding: 10px;">
                        <img width='70%' src="midia/<?php echo $row['imagem']; ?>">
                    </div>
                     <p><?php echo $row['texto']; ?><span class="badge">8</span></p>
                  </div>
              </div>
              <?php  
                  }
              }
              ?>
          </div>
      </div>
      <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
             <div class="topic" style="font-family: 'Rajdhani', sans-serif; text-align: center;">
                <h2>Documentários</h2>
             </div>
          </div>
          <div class="col-md-8 col-md-offset-2">
          <div class="quote"><h1><span class="glyphicon glyphicon-comment"></span></h1></div>
          <div class="carousel slide" id="fade-quote-carousel" data-ride="carousel" data-interval="5000">
          <!-- Carousel indicators -->
            <ol class="carousel-indicators">
              <li data-target="#fade-quote-carousel" data-slide-to="0"></li>
              <li data-target="#fade-quote-carousel" data-slide-to="1"></li>
              <li data-target="#fade-quote-carousel" data-slide-to="2" class="active"></li>
              <li data-target="#fade-quote-carousel" data-slide-to="3"></li>
              <li data-target="#fade-quote-carousel" data-slide-to="4"></li>
              <li data-target="#fade-quote-carousel" data-slide-to="5"></li>
            </ol>
          <!-- Carousel items -->
          <div class="carousel-inner">
          <div class="item">
                <div class="profile-circle" style="background-color: rgba(0,0,0,.2);"></div>
                <blockquote>
                <p> ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat.</p>
                </blockquote> 
          </div>
          <div class="item">
                <div class="profile-circle" style="background-color: rgba(77,5,51,.2);"></div>
                <blockquote>
                <p> ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat.</p>
                </blockquote>
          </div>
          <div class="active item">
                <div class="profile-circle" style="background-color: rgba(145,169,216,.2);"></div>
                <blockquote>
                <p> ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat.</p>
                </blockquote>
          </div>
                <div class="item">
                <div class="profile-circle" style="background-color: rgba(77,5,51,.2);"></div>
                <blockquote>
                <p> ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat.</p>
              </blockquote>
          </div>
                <div class="item">
                <div class="profile-circle" style="background-color: rgba(77,5,51,.2);"></div>
                <blockquote>
                <p> ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat.</p>
              </blockquote>
          </div>
          <div class="item">
                <div class="profile-circle" style="background-color: rgba(77,5,51,.2);"></div>
                <blockquote>
                <p> ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat.</p>
                </blockquote>
          </div>
          </div>
        </div>
      </div>
      </div>
      <div content-footer="email" class="row" style="margin-bottom: 0px;">
                    <div class="col-md-7" style="height: 150px; background: crimson;">
                        <div class="list-group" >
                            <div href="#" class="list-group-item" style="background: transparent none repeat scroll 0% 0% content-box; border: medium none; color: rgb(45, 45, 45); text-align: center;">
                                <h3 style="color: #fff;"><strong>Cadastre-se</strong></h3>
                                <p style="color: #fff;">Deixe seu email para que possamos lhe mandar novidades</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5" style="height: 150px; padding-top: 45px; background: crimson;">
                      <div class="col-md-6" style="padding: 5px">
                        <div class="input-group">
                              <input type="text" name="" class="form-control" placeholder="Seu email" aria-describedby="sizing-addon1" style="background: #eee; border: none;">
                          </div>
                      </div>
                      <div class="col-md-6" style="padding: 5px">
                        <div class="input-group">
                          <button class="form-control" style="background: rgb(51, 122, 183) none repeat scroll 0% 0%; color: #fff; border: none;">Cadastrar</button>
                        </div>
                      </div>
                    </div>
            </div>
      <footer  role="footer" class="row" style="background: #fff; font-family: 'Oswald', sans-serif;">
        <div content-footer="links" >
          <div class="col-md-3" style="">
            <div class="list-group">
                <h3>
                <span href="#" class="list-group-item " style="background: transparent none repeat scroll 0% 0% border-box; border: medium none; text-align: center; text-transform: uppercase; color: #777">
                  <strong >Blog</strong>
                </span>
                </h3>
                <div class="divider" style="border: solid 1px #333; margin-bottom: 15px;"></div>
                <a href="#" class="list-group-item" style="background: transparent none repeat scroll 0% 0% border-box; border: medium none; text-align: center; color: #777;">Conheça nossos produtos
                </a>
                <a href="#" class="list-group-item" style="background: transparent none repeat scroll 0% 0% border-box; border: medium none; text-align: center; color: #777;">Pincipais produdos
                </a>
                <a href="#" class="list-group-item" style="background: transparent none repeat scroll 0% 0% border-box; border: medium none; text-align: center; color: #777;">Produtos mais requisitados
                </a>
            </div>
          </div>
          <div class="col-md-3" style="">
            <div class="list-group">
              <h3>
                <span href="#" class="list-group-item " style="background: transparent none repeat scroll 0% 0% border-box; border: medium none; text-align: center; text-transform: uppercase; color: #777">
                  <strong> Categorias</strong>
                </span>
                </h3>
                <div class="divider" style="border: solid 1px #333; margin-bottom: 15px;"></div>
                <a href="#" class="list-group-item" style="background: transparent none repeat scroll 0% 0% border-box; border: medium none; text-align: center; color: #777;">Conheça todas as categorias
                </a>
                <a href="#" class="list-group-item" style="background: transparent none repeat scroll 0% 0% border-box; border: medium none; text-align: center; color: #777;">Principais categorias
                </a>
                <a href="#" class="list-group-item" style="background: transparent none repeat scroll 0% 0% border-box; border: medium none; text-align: center; color: #777;">Categorias mais requisitadas
                </a>
            </div>
          </div>
          <div class="col-md-3" style=" ">
            <div class="list-group">
              <h3>
                <span href="#" class="list-group-item " style="background: transparent none repeat scroll 0% 0% border-box; border: medium none; text-align: center; text-transform: uppercase; color: #777">
                  <strong>Contato</strong>
                </span>
                </h3>
                <div class="divider" style="border: solid 1px #333; margin-bottom: 15px;"></div>
                <div class="list-group-item" style="background: transparent none repeat scroll 0% 0% border-box; border: medium none; color: #777;">
                <i class="fa fa-map-marker"></i>
                <p>Av. Ceará,<br> 
                Bom Princípio, Brasil</p>
              </div>
              <div class="list-group-item" style="background: transparent none repeat scroll 0% 0% border-box; border: medium none; color: #777;">
                <i class="fa fa-phone"></i>
                <p>+55 86 98141-4089</p>
              </div>

              <div class="list-group-item" style="background: transparent none repeat scroll 0% 0% border-box; border: medium none; color: #777;">
                <i class="fa fa-envelope"></i>
                <p>tiagobandeirabarros@gmail.com</p>
              </div>
            </div>
          </div>
          <div class="col-md-3" style="">
            <div class="list-group">
              <h3>
                <span href="#" class="list-group-item " style="background: transparent none repeat scroll 0% 0% border-box; border: medium none; text-align: center; text-transform: uppercase; color: #777">
                  <strong> Social</strong>
                </span>
                </h3>
                <div class="divider" style="border: solid 1px #333; margin-bottom: 15px;"></div>
                <p style="text-align: center;">
                  <a class="btn btn-social-icon btn-facebook btn" style="border: #222; background: #222;">
                    <span class="fa fa-facebook" style="" role="fa"></span>
                  </a>
                      <a class="btn btn-social-icon btn-twitter btn" style="border: #222; background: #222;">
                      <span class="fa fa-twitter" style="" role="tw"></span>
                    </a>
                      <a class="btn btn-social-icon btn-instagram btn" style="border: #222; background: #222;">
                      <span class="fa fa-instagram" style="" role="in"></span>
                    </a>
                </p>
            </div>
          </div>
        </div>
      </footer>
      <footer class="row" style="background: #222">
        <div content-footer="endfooter" >
          <div  class="col-md-6" style="text-align: center; line-height: 2; color: #555;">
            <div class="divider" style="border: solid 1px #333; margin-bottom: 15px;"></div>
            <p>Site Produzido por Templates Now</p>
          </div>
          <div  class="col-md-6" style="text-align: center; line-height: 2; color: #555;">
            <div class="divider" style="border: solid 1px #333; margin-bottom: 15px;"></div>
            <h5><strong>Copyright &copy; 2017</strong></h5>
          </div>
        </div>
      </footer>
    </div>
  </div>

  <!-- JQuery -->
  <script src="js/jquery.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="css/bootstrap/js/bootstrap.min.js"></script>
</body>
</html> 
