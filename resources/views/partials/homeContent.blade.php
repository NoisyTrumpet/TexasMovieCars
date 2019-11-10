<div class="homeContentContainer">
    {{-- Main Picture & Text Section --}}
    <section id="mainSEO">
        <div class="mainSEOWrapper">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-5">
                        <div class="mainSEOPicWrapper">
                            <img src="@asset('images/mainSEOBatPic.jpg')" alt="Looking for a famous car? Book now at Texas Movie Cars">
                            <p>Looking for a famous car?</p>
                            <a href="/book-a-car">Book Now</a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-7">
                        <div class="mainSEOTextWrapper">
                            <h1>@field('main_h1')</h1>
                            <p>@field('main_body')</p>
                            <ul>
                                <li>Company Events</li>
                                <li>Meet and Greets</li>
                                <li>Parties</li>
                                <li>Charity Events</li>
                                <li>Grand Openings</li>
                                <li>Car Shows</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Cars Grid --}}
    @php
    $args = array('post_type' => 'car');
    $loop = new WP_query($args);
    $i = 0;
    @endphp
    <secion id="mainCars">
        <div class="container">
            <div class="mainCarsWrapper">
                <h2>Our Cars</h2>
                <div class="row">
                    @while($loop->have_posts()) @php($loop->the_post())
                    <div class="col-lg-4 col-md-6 col-sm-12 car">
                        <a href="@permalink">
                            <img class="carPic" src="@php(the_post_thumbnail_url())">
                            <div class="centeredText">
                                <div class="carTitle">Rent the @php(the_title())</div>
                            </div>
                        </a>
                    </div>
                    @endwhile
                    @php(wp_reset_query())
                </div>
            </div>
        </div>
    </secion>
</div>