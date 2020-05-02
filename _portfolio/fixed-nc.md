---

layout: portfolio
title: Fixed NC
preview_title: Fixed NC
image_preview: /images/thumbs/fixed-nc-images/fixednc.png
header_image: /images/thumbs/fixed-nc-images/fixednc.png
logo: /images/thumbs/fixed-nc-images/fnc-logo.webp
tagline: Restoration with upscale design
permalink: /:collection/fixed-nc/

bio: Fixed NC is a North Carolina restoration company that was established in 2018. They have over 30 years of staffing experience combined. A restoration company that wanted to get a restoration of their website design.

category: [ commercial ]

services: [ UI/UX Design, Branding, Content Editing ]

programs: [ Photoshop, WordPress ]

location: Greenville, NC

live_url: https://www.fixednc.com/

---

<div id="intro">
    <!-- intro -->
    <div class="container col-md-9 col-12 ml-md-auto mr-md-auto p-5">

        <div class="row">
            <div class="col-md-5 col-12">
                <h6 class="text-muted">The challenge</h6>
                <h4>major update in design</h4>
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
                <img src="/images/thumbs/fixed-nc-images/smartmockups_k08wx1m4.png" class="img-fluid" alt="mockup 1">
            </div>

            <div class="col-4">
                <img src="/images/thumbs/fixed-nc-images/smartmockups_k08ww6kc.png" class="img-fluid" alt="mockup 2">
            </div>

            <div class="col-4">
                <img src="/images/thumbs/fixed-nc-images/fnc-logo.webp" class="img-fluid" alt="logo">
            </div>


        </div>
    </div>
    <!-- image showcase -->

    <!-- the results -->
    <div class="container col-md-9 col-12 offset-md-3">

        <div class="col-12 p-5">
            <h6 class="text-muted">the results</h6>
            <h4>restoration with upscale design</h4>
            <p>Update of their old site was easy to do as it was a small scale site that was in need of a change. Making a unified site structure was an improvement overall for their design. With a unified structure it helped with user interaction and increase in traffic and calls to their business locally for work. I say that was a job well done in my book, if I do say so myself.</p>
        </div>

    </div>
    <!-- the results -->

</div>
