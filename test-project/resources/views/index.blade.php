<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1" >
	 <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
    <title>Satish Engineering</title>
    
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ url().'/css/bootstrap.min.css'}}">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ url().'/css/font-awesome.min.css'}}">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ url().'/css/owl.carousel.css'}}">
    <link rel="stylesheet" href="{{ url().'/css/style.css'}}">
    <link rel="stylesheet" href="{{ url().'/css/responsive.css'}}">
  </head>
  <body>

	
<div class="site-branding-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="logo">
                       <a href=""><img src="{{ url().'../../logo.png'}}"></a>
                    </div>
                </div>
                
    
            </div>
        </div>
    </div>  
	<div class="menu">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
				<div id="" class="">
				<div id="" class="" >
				<div class="menubar" style="">
 
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div> 
                <div class="navbar-collapse collapse" style="height: 1px;">
                    <ul class="nav navbar-nav">
                        <li class="{{ url().'active'}}"><a href="/">Home</a></li>
						<li class=""><a href="aboutus">About Us</a></li>
                        <li><a href="#">Stock List</a></li>
                        <li><a href="#">Import Duty Calculator</a></li>
                        
                        <li><a href="{{ url().'contactus'}}">Contact Us</a></li>
                    </ul>
                </div>  
            </div></div>
        </div>
        </div>
		</div>
        </div>
    </div>
	<div class="slider">
	<div class="container">
    <div class="row">
    <div class="slider-area">
        	<!-- Slider -->
			<div class="bx-viewport" style="width: 100%; overflow: hidden; position: relative; height: 450px;">

			<div class="block-slider block-slider4">
				<ul class="" id="bxslider-home4">
				@foreach($bannerrequest as $key => $bannerdata)
				<li>
						<img src="{{ url('storage/'.$bannerdata->image)}}" alt="{{$bannerdata->title}}">
					</li>
					@endforeach
				</ul>
			</div>
			<div class="search_box">
			<h1>Find used machinery</h1>
				<form action="#" method="get" class="form-search">
					<div class="form-group">					
						<i aria-hidden="true" class="fa fa-search"></i>
						<input name="search" class="search-itm" placeholder="What are you searching for?">
						<span>
							<button type="submit" class="btn btn-primary" id="searchsubmit">
							Search
							</button>
						</span>
						
					</div>
				</form>
		    </div>
			<!-- ./Slider -->
    </div> 
	 </div>
	  </div>
	</div>
 	<!-- End slider area -->
	 <section class="center_wrap">
       <div class="container center_content">
	   	<div class="">
	   <div class="row">
     @foreach($machinesrequest as $key => $machinesdata)
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 product">
	<h4 class="product_header">{{ url().'$machinesdata->title'}}</h4>
  <div class="image-gallery">
    <main class="primary1 mainimage{{ url().'$machinesdata->id'}}" style="background-image: url({{ url().'('storage/'.$machinesdata->image)'}});"></main>
  <aside class="thumbnails">
  

  @foreach( explode('|',$machinesdata->thumbimage) as $key => $machinesthumbdata)
    <a href="javascript:void(0)" class="selected thumbnail1" data-big="{{ url().'('storage/'.$machinesthumbdata)'}}" data-id="{{$machinesdata->id}}">
      <div class="thumbnail-image" style="background-image: url({{ url().'('storage/'.$machinesthumbdata)'}});"></div>
    </a>
    @endforeach
  </aside>
  </div>
  </div>
@endforeach
  
  	
	</div>
    </div>
	<div class="maincontent-area">				   
			<div class="container">					  
			<div class="row">						 
			<div class="col-md-12">							
			<div id="products">								
			<h4 class="product_header  recent_pro_header">Recently Added Machines</h4>								
			<div class="product-carousel_">			
			@foreach($recentrequest as $key => $recentmachinesdata)								
			<div class="col-lg-3 col-md-3 col-sm-6 nopad-left">												
			<div class="single-product">													
			<div class="product-f-image">													   
			<img src="{{ url().'('storage/'.$recentmachinesdata->image)}}"  alt="{{ url().'$recentmachinesdata->title'}}">													</div>													
			<h2>Meuser Small Lathe</h2>													
			<div class="product-carousel-price">my machine</div>													
			<div class="pro_more_detail">													   
			<a href="{{ url().'$recentmachinesdata->title'}}"><button type="button" class="submit" href="#">click description</button>	</a>												</div>												
			</div>											
			</div>		             @endforeach
			</div>
				

				</div>
			</div>
		</div> 
		<div class="col-md-12">
		<h4 class="product_header  recent_pro_header">{{ url().'$pagesrequest->title'}}</h4>
		<div class="wht_we_do">{{ url().'!! $pagesrequest->content !!'}}
	</div>
	</div>
		</div>
	<div class="col-md-12">
	<h4 class="product_header  recent_pro_header"></h4>
	<div class="wht_we_do">
</div>
</div>
	</div>
	</section>
<footer class="footer" id="Footermanus">
	<div class="social-links social-links--homepage">
		<a class="social_link_outline" target="_blank" href="https://www.facebook.com/SatishEngineering/app_609574862403579">
			<i class="fa fa-facebook" aria-hidden="true"></i>
		</a>
		<a class="social_link_outline" target="_blank" href="https://twitter.com/_usedmachinery">
			<i class="fa fa-twitter" aria-hidden="true"></i>	
		</a>
		<a class="social_link_outline" target="_blank" href="https://www.linkedin.com/company/satishengineering">
			<i class="fa fa-linkedin" aria-hidden="true"></i>
		</a>
		<a class="social_link_outline" target="_blank" href="https://plus.google.com/117945850506803631403/posts?hl=en">
			<i class="fa fa-google-plus" aria-hidden="true"></i>
		</a>
		<a class="social_link_outline_end" target="_blank" href="https://www.youtube.com/channel/UCnWzUBjbCjBV-C5_DQhFsWg">
			<i class="fa fa-youtube" aria-hidden="true"></i>
		</a>		
		
	</div>
	<div class="whatsapp_block close_whatsapp" style="position:fixed;bottom:60px;right:-315px;">
		<div class="weakly_block whatsapp contactwhatsapp">
			<h5><span style="padding-left:20px"></span>Whatsapp Us</h5>	
			<div class="new_letr new_letr2">
				<form target="_blank" method="get" action="https://api.whatsapp.com/send" id="whatsapp-form">
				<input name="phone" value="918041272652" type="hidden">
				<input type="text" name="text" placeholder="Type a message" class="pass_input" style="opacity:0">
				<button type="submit" class="subscribe_btn" style="opacity:0">Submit</button>
				</form>
			</div>
		</div>
	</div>	
	<div class="link_block">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
					<div class="quick_ling">
						<h5><i class="fa fa-link" aria-hidden="true"></i>Quick Links</h5>
						<ul>
						<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Grinding Machines</a></li>
							<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Boring Machines</a></li>
							<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Planning Machines</a></li>
							<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Lathe</a></li>
							<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Drilling Machine</a></li>
						</ul>
					<form name="mcn" method="post">
					<select id="article" name="articleredirect" onchange="this.form.submit()">
					<option value="">--Quick access--</option>
											<option value="#">Lathe</option>
											<option value="#">Floor Boring Machine</option>
											<option value="#">CNC Floor Boring Machine</option>
											<option value="#">Key-way Milling Machine</option>
											<option value="#">Shearing Machine</option>
											<option value="#">Cylindrical Grinding Machine</option>
											<option value="#">Pneumatic Press</option>
											<option value="#">Overhead Crane</option>
											<option value="#">Mechanical Press</option>
											<option value="#">Jig Boring Machine</option>
											<option value="#">Surface Grinding Machine</option>
											<option value="#">Band Saw Cutting Machine</option>
											<option value="#">Co-ordinate Boring Machine</option>
											<option value="#">Vertical Machining Center</option>
											<option value="#">Horizontal Boring Machine</option>
											<option value="#">Heavy Duty Lathe</option>
											<option value="#">CNC Lathe</option>
											<option value="#">VTL</option>
											<option value="#">Gear Hobbing</option>
											<option value="#">Pneumatic Hammer</option>
											<option value="#">Vertical ID Grinding</option>
											<option value="#">Rotary Surface Grinding</option>
											<option value="#">Hoist</option>
											<option value="#">Gear Grinding</option>
											<option value="#">ID Grinding</option>
											<option value="#">CNC Portal Milling</option>
											<option value="#">Forklift</option>
										</select>
					</form>
					</div>					
				</div>
				
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
				<div class="weakly_block">
						<h5><i class="fa fa-envelope" aria-hidden="true"></i>Get Machine Details Daily</h5>	
							<div class="new_letr">
                            <form method="post" action="subscribe" id="frmSS1" name="frmSS1">
							@csrf
								<input type="email" name="email" placeholder="Email address" class="pass_input" id="input_emeail"maxlength="15" required>
								<input type="submit"  id="submit" value="subscribe">
								<span class="resultdiv" id="resultdiv"></span>
								@if (Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{{ Session::get('success') }}</li>
        </ul>
    </div>
@endif
@if (Session::has('error'))
    <div class="alert alert-success">
        <ul>
            <li>{{ Session::get('error') }}</li>
        </ul>
    </div>
@endif
                            </form>
							</div>
					</div>
                           
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
					<div class="fb_plug">
					<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FSatishEngineering%2F&tabs=timeline&width=340&height=500&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="250" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
					</div>
				</div>			
			</div>
		</div>	
	</div>
	<div class="copy_block">
    					<div class="container">
		<div class="row">
				<div class="col-lg-6 col-sm-6">
					<p>Copyright © 2020 by Satishengineering.com</p>
				</div>
				<div class="col-lg-6 col-sm-6">
					<div class="power_by">
						<a href="https://www.cybersolutionindia.com/" target="_blank"><img src="{{ url().' img/cybrain.png '}}" alt="Powered by Cybrain Software Solutions"></a>
					</div>
				</div>			
			 </div>
		</div>
    	</div>
</footer>
    <!-- Latest jQuery form server -->
    <script src="https://code.jquery.com/jquery.min.js"></script>
    
    <!-- Bootstrap JS form CDN -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    
    <!-- jQuery sticky menu -->
    <script src="{{ url().' /js/owl.carousel.min.js '}}"></script>
    
    <!-- jQuery easing -->
    
    <!-- Main Script -->
    <script src="{{ url().' /js/main.js '}}"></script>
    
    <!-- Slider -->
    <script type="text/javascript" src="{{ url().' js/bxslider.min.js '}}"></script>
	<script type="text/javascript" src="{{ url().' js/script.slider.js '}}"></script>
	<script>
	$('.thumbnail1').on('click', function() {
  var clicked = $(this);
  var newSelection = clicked.data('big');
  var id=clicked.data('id');
  var $img = $('.mainimage'+id).css("background-image","url(" + newSelection + ")");
  clicked.parent().find('.thumbnail1').removeClass('selected');
  clicked.addClass('selected');
  $('.mainimage'+id).empty().append($img.hide().fadeIn('slow'));
});



	</script>
  </body>
</html>