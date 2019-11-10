<footer class="content-info">
    {{-- Footer CTA --}}
    <div class="footerCTAWrapper">
    	<h3>Call us to book your hollywood dreamcar for your next event! <a alt="Call us to book your hollywood dreamcar for your next event!" href="tel:210.490.2554">@svg('phone', 'phoneIcon') (210) 490-2554</a></h3>
    </div>
    <div class="footerMenuWrapper">
    	<div class="container">
    		<div class="row">
    			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
    				<img class="footerLogo" src="@asset('images/logo.png')" alt="Texas Movie Cars Logo">
    				<p class="footerAbout">Texas Movie Cars is the only famous movie and television car rental service in San Antonio, Texas and South/Central Texas. We bring you the most famous movie and television cars for rent for all occasions. Whether it’s a grand opening, company event, charity, commercial or wedding – we have an amazing selection of cars to wow your family, friends or guests.</p>
    			</div>
    			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
					<div class="footerNav">
						<h4>Navigate</h4>
						<div class="footerMenu">
							@if (has_nav_menu('primary_navigation'))
      							{!! wp_nav_menu($primarymenu) !!}
    						@endif
						</div>
					</div>
    			</div>
    			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
					<div class="footerInfoWrapper">
						<h3>Address Information</h3>
						<p>Call us at <a class="infoLink" href="tel:210.490.2554" alt="Call Texas Movie Cars">(210) 490-2554</a></p>
						<a class="infoLink" href="mailto:contact@texasmoviecars.com" alt="Email Texas Movie Cars">contact@texasmoviecars.com</a>
						<p>Mon - Fri : 9:00am to 6:00pm</p>
					</div>
    			</div>
    			<div class="col text-center infoCol">
    				<p>Copyright @php( print date("Y")) <a class="infoLink" href="/" alt="Texas Movie Cars">@php(bloginfo())</a> All rights reserved</p>
    			</div>
    		</div>
    	</div>
    </div>
</footer>

