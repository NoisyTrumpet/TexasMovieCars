{{-- Cars Grid --}}
    @php
    $args = array('post_type' => 'car', 'posts_per_page' => 25);
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
                                <div class="carTitle">Rent @php(the_title())</div>
                            </div>
                        </a>
                        <h3 class="underTitle">@title</h3>
                    </div>
                    @endwhile
                    @php(wp_reset_query())
                </div>
            </div>
        </div>
    </secion>