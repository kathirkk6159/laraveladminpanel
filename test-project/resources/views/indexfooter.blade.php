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
						<a href="https://www.cybersolutionindia.com/" target="_blank"><img src="img/cybrain.png" alt="Powered by Cybrain Software Solutions"></a>
					</div>
				</div>			
			 </div>
		</div>
    	</div>
</footer>