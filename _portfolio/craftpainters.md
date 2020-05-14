---

layout: portfolio
title: Craft Painters
preview_title: Craft Painters
image_preview: /images/folio/folio-2.jpg
header_image: /images/thumbs/craft-images/craftpainters.png
tagline: SMB Growth
permalink: /:collection/craft-painters/

bio: Craft Painters was a client I had the pleasure of working with during my stent at a local agency in Denver. They came to us with a goal in mind of updating their site from the table format style they had to a nice WordPress structure that flows and updated.

category: [ commercial ]

tag: [ commercial, ui_design ]

services: [ UI/UX Design, Branding, Analytics, Content Editing  ]

programs: [ Photoshop, WordPress ]

location: Denver, CO

live_url: https://www.craftpainters.com/

---

<div id="intro">
    <!-- intro -->
    <div class="container col-md-9 col-12 ml-md-auto mr-md-auto p-5">

        <div class="row">
            <div class="col-md-5 col-12">
                <h6 class="text-muted">The challenge</h6>
                <h4>large overhaul</h4>
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
                <img src="/images/thumbs/craft-images/smartmockups_k06sfbr1.png" class="img-fluid" alt="current mockup">
            </div>

            <div class="col-4">
                <img src="/images/thumbs/craft-images/smartmockups_k08wo8b9.jpg" class="img-fluid" alt="laptop mockup">
            </div>

        </div>
    </div>
    <!-- image showcase -->

    <!-- the results -->
    <div class="container col-md-9 col-12 offset-md-3">

        <div class="col-12 p-5">
            <h6 class="text-muted">the results</h6>
            <h4>large increase of digital footprint</h4>
            <p>With the update of the design, they received an increase in digial exposure and sales due to the help of the SEO team. With an implementation of the update of design for the content and use of spacing around their ctas it was a major improvement for them. They received an overall of <span class="red">82%</span> in traffic and about <span class="red">90%</span> or more in search optimization increase.</p>
        </div>

    </div>
    <!-- the results -->

</div>
