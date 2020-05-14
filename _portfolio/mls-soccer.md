---

layout: portfolio
title: MLS Soccer League
preview_title: MLS Soccer
image_preview: /images/folio/folio-6.jpg
header_image: /images/thumbs/mls-images/mls-homepage.png
logo: /images/thumbs/mls-images/MLS-logo.png
tagline: Bring soccer into a modern era
permalink: /:collection/mls-soccer-mockup/

bio: MLS - Major League Soccer (GO Atlanta United) - has been around for some time with their design. I saw the website after I was in need of a design challenge. The task at hand I set forth was to improve the design but not take away from the heavy use of images they use throughout their site.

category: [ mockup ]

tag: [ web_design, ui_design ]

services: [ Mockup, Web Design, Rebranding ]

programs: [ Adobe XD, Photoshop ]

location: N/A

live_url: https://www.mlssoccer.com/

---

<div id="intro">
    <!-- intro -->
    <div class="container col-md-9 col-12 ml-md-auto mr-md-auto p-5">

        <div class="row">
            <div class="col-md-5 col-12">
                <h6 class="text-muted">The challenge</h6>
                <h4>improving on a long lasting design</h4>
                {{ page.bio }}
            </div>

            <div class="col-md-5 col-12 ml-md-auto p-4">
                <div class="col-md-12">
                    <h6>services</h6>
					{% if page.services %}
                    <ul class="list-unstyled list-inline">
						{% for services in page.services %}
                        <li class="list-inline-item">
							{{ services }}
						</li>
						{% endfor %}
                    </ul>
					{% endif %}
                </div>
				
                <div class="col-md-12">
                    <h6>tools used</h6>
					{% if page.programs %}
                    <ul class="list-unstyled list-inline">
						{% for programs in page.programs %}
                        <li class="list-inline-item">
							{{ programs }}
						</li>
						{% endfor %}
                    </ul>
					{% endif %}
                </div>

                <div class="col-md-12">
                    <h6>location</h6>
                    <p>{{ page.location }}</p>
                </div>

                <div class="col-md-12">
                    <h6>live website</h6>
                    <a href="{{ page.live_url }}" target="_blank" class="text-link text-muted">{{ page.live_url }}</a>
                </div>
            </div>
        </div>

    </div>
    <!-- intro section -->

    <!-- image showcase -->
    <div class="container col-12">
        <div class="row">

            <div class="col-4">
                <img src="/images/thumbs/mls-images/smartmockups_k08tzsdl.png" class="img-fluid" alt="new design">
            </div>

            <div class="col-4">
                <img src="/images/thumbs/mls-images/smartmockups_k08u0yyh.png" class="img-fluid" alt="old design">
            </div>

            <div class="col-4">
                <img src="/images/thumbs/mls-images/MLS-logo.png" class="img-fluid" alt="logo">
            </div>


        </div>
    </div>
    <!-- image showcase -->

    <!-- the results -->
    <div class="container col-md-9 col-12 offset-md-3">

        <div class="col-12 p-5">
            <h6 class="text-muted">the results</h6>
            <h4>keeping up with the times</h4>
            <p>Update of the design with the addition of a featured news section and a ticket tracker for stats on the left was a nice improvement. Due to being a sport that has a full Fantasy League that was a needed improvement for easy stat tracking. Use of large images more but spaced out makes it easier to follow and mobile friendly.</p>
        </div>

    </div>
    <!-- the results -->

</div>
