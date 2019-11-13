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
    @include('partials.carsGrid')
</div>