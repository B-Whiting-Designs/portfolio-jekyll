---

layout: portfolio
title: 
preview_title: 
image_preview: 
header_image: 
tagline: 
permalink: /:collection/

bio: 

category: [  ]

services: [  ]

programs: [  ]

location: 

live_url: 

---

<div id="intro">
    <!-- intro -->
    <div class="container col-md-9 col-12 ml-md-auto mr-md-auto p-5">

        <div class="row">
            <div class="col-md-5 col-12">
                <h6 class="text-muted">The challenge</h6>
                <h4>A non-profit in need of change</h4>
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
    <div class="container col-md-9 col-12 offset-md-3">
        <div class="row">

            <div class="col-3">
                <img src="/images/thumbs/ati-images/smartmockups_k06si3wn.png" class="img-fluid" alt="previous design">
            </div>

            <div class="col-3">
                <img src="/images/thumbs/ati-images/smartmockups_k06sdinl.png" class="img-fluid" alt="current redesign">
            </div>

            <div class="col-3 pt-5">
                <img src="/images/thumbs/ati-images/logo-v1.png" class="img-fluid" alt="new logo">
            </div>

            <div class="col-3 p-4">
                <img src="/images/thumbs/ati-images/smartmockups_k08s3rln.jpg" class="img-fluid" alt="laptop mockup">
            </div>

        </div>
    </div>
    <!-- image showcase -->

    <!-- the results -->
    <div class="container col-md-9 col-12 offset-md-3">

        <div class="col-12 p-5">
            <h6 class="text-muted">the results</h6>
            <h4>website update and modernistic</h4>
            <p>An update of the fonts for the website made a difference in getting it up to date. With the redesign of the site the overall speed of the site for mobile users and tablet users has increased by <span class="red">24%</span> due to the changes. More responsive and faster with the updated Bootstrap framework used on top.</p>
			<p>Upon reversion, instead focus on optimization of the currently used template and pages on WordPress was a change that also helped them get their interactions back up to par.</p>
        </div>

    </div>
    <!-- the results -->

</div>