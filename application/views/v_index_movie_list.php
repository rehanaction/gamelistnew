<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Game Me</title>

    <!-- Bootstrap Core CSS -->
    <link href="<? echo base_url() ?>assets/css/bootstrap.css" rel="stylesheet" type="text/css">

    <!-- Fonts -->
    <link href="<? echo base_url() ?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


    <!-- Custom Theme CSS -->
    <link href="<? echo base_url() ?>assets/css/style.css" rel="stylesheet">
   
    <!-- Advanced CSS -->
    <link href="<? echo base_url() ?>assets/css/animate.css" rel="stylesheet">
	<link href="<? echo base_url() ?>assets/js/lib/owl-carousel/owl.carousel.css" rel="stylesheet">
	<link href="<? echo base_url() ?>assets/js/lib/owl-carousel/owl.theme.css" rel="stylesheet">
	<link href="<? echo base_url() ?>assets/js/lib/owl-carousel/owl.transitions.css" rel="stylesheet">
	<link href="<? echo base_url() ?>assets/js/lib/magnific-popup/magnific-popup.css" rel="stylesheet">
    <link href="<? echo base_url() ?>assets/js/lib/video/YTPlayer.css" rel="stylesheet">
    <link href="<? echo base_url() ?>assets/js/lib/flipclock/flipclock.css" rel="stylesheet">
    
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">

	<!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top wp1" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#page-top">
                    <i class="fa fa-video-camera"></i> Movie <span class="font-light"> Me</span>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                   <!-- <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#about">About</a>
                    </li
                    
                    <li class="page-scroll">
                        <a href="#movie-player">Player</a>
                    </li>>-->
                    <li class="page-scroll">
                        <a href="#actors">Game List</a>
                    </li>
                    <!--
                    <li class="page-scroll">
                        <a href="#gallery">Gallery</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#contact">Contact</a>
                    </li>
                    <li class="page-scroll">
                        <a href="blog.html">Blog</a>
                    </li>-->
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

   
   

          








  
  
  
    <!-- Actors Section -->
    <section id="actors">
    <div class="container"> 
        <div class="row">      
        <div class="col-lg-12">
		<h1 class="section-title">Game List</h1>
        
		<?php
        
            foreach($result as $row){

            ?>
				
				<div class="item" >
					<div class="col-md-4 wp4">
						
								<div class="actor">
									<div class="avatar">
                                      <img alt="img" width="100%" height="100%" src="<?php echo $row['background_image'] ?>">
                                    </div>
									
									<div class="details">
                                                                                    
                                            <h5>Rating:  </h5>
                                            <? if($row['rating']<1){ ?>
                                                <i class="fa fa-star-half-o"></i>
                                            <? }else if($row['rating']==1){ ?>
                                                <i class="fa fa-star"></i>
                                            <? }else if($row['rating']>1 and $row['rating']<1){ ?>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            <? }else if($row['rating']==2){ ?>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            <? }else if($row['rating']>2 and $row['rating']<3){ ?>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            <? }else if($row['rating']==3){ ?>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            <? }else if($row['rating']>3 and $row['rating']<4){ ?>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                             <? }else if($row['rating']==4){ ?>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                         <? }else if($row['rating']>4 and $row['rating']<5){ ?>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                                <? }else if($row['rating']==4){ ?>
                                                    <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            <? } ?>
                                         
                                      
                                          
									</div>
  								</div><!-- /.actor -->                                  
                                <div class="actor-info">
                                <h4 class="heading"><?= $row['name'] ?></h4>
                                <h5 class="sub-heading">
                                 <br>
                                Midlend, Texas, USA
                                </h5>
                                </div> <!-- /.actor-info -->        
					</div>
				</div><!-- /.item -->
                <br/>

            <? }?>
			<br/>
            <br/>
            <br/>
            <br/>
			 
		</div><!-- /.col-lg-12 -->        
		</div><!-- /.row -->  
        </div><!-- /.container --> 
        <center>
			    <input class="btn btn-primary" type="button" value="Load more" name='loadmore' onclick="loadmore()">
              </center>
        
        <!-- Advantages -->
        <div class="advantages">
		
        
        <div class="section-sub-title">
			
		</div>
        <div class="colored-line"></div>
        
        <div class="container">
        <div class="col-md-4 advantages-item wp7 delay-05s">
        
  		</div><!-- /.col-md-4 -->        

        
  
 
    </div><!-- /.container --> 
	</section><!-- /#actors --> 
    




    <!-- Core JavaScript Files -->
    <script src="<? echo base_url() ?>assets/js/jquery-1.10.2.js"></script>
    <script src="<? echo base_url() ?>assets/js/bootstrap.min.js"></script>
    <script src="<? echo base_url() ?>assets/js/jquery.easing.min.js"></script>

    <!-- JavaScript -->
    <script src="<? echo base_url() ?>assets/js/lib/jquery.appear.js"></script>
    <script src="<? echo base_url() ?>assets/js/lib/owl-carousel/owl.carousel.min.js"></script>
    <script src="<? echo base_url() ?>assets/js/lib/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="<? echo base_url() ?>assets/js/lib/video/jquery.mb.YTPlayer.js"></script> 		
    <script src="<? echo base_url() ?>assets/js/lib/flipclock/flipclock.js"></script>
    <script src="<? echo base_url() ?>assets/js/lib/jquery.animateNumber.js"></script>
    <script src="<? echo base_url() ?>assets/js/lib/waypoints.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<? echo base_url() ?>assets/js/main.js"></script>
    
<script>
    function loadmore(uri){
        alert("ada");
    }
    </script>
</body>

</html>
