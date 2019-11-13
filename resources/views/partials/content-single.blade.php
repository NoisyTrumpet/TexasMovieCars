<article @php post_class() @endphp>
    @include('partials.carHero')
    <section class="carPostWrapper blackBackground">
    	<div class="container">
    		<div class="row">
    			<div class="col-xs-12 col-sm-12 col-md-5">
    				<div class="carPostDescriptionWrapper">
    					<h2>@title</h2>
    					<h4>@field('description')</h4>
    					<img class="front" src="/app/themes/TexasMovieCars/dist/images/front/@field('front_image')">
    					<img class="threeQuarter" src="/app/themes/TexasMovieCars/dist/images/threeQuarter/@field('threequarter')">
    				</div>
    			</div>
    			<div class="col-xs-12 col-sm-12 col-md-7">
    				<div class="carPostFormWrapper">
    					@php
							gravity_form( 2, $display_title = true, $display_inactive = false, $field_values = null, $ajax = false, $echo = true );
						@endphp
    				</div>
    			</div>
    		</div>
    	</div>
    </section>
</article>
