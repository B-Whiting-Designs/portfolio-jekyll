---

layout: portfolio
title: Professional Restoration
preview_title: Professional Restoration
image_preview: /images/thumbs/prorestoration/new-website.png
header_image: /images/thumbs/prorestoration/new-website.png
tagline: Updating a modern site for growth
permalink: /:collection/professional-restoration/

bio: Professional Restoration is a local restoration company based in Denver, CO with over 25 years of experience. They came looking for a new design to their old brand and gain digital pressence more. While working with my old agency I was able to help with their goal by redesign of the current site and new branding.

category: [ commercial ]

services: [ UI/UX Design, Branding, Analytics, Content Editing  ]

programs: [ Photoshop, WordPress, Adobe XD ]

location: Denver, CO

live_url: https://www.prorestoration.com/

---

<div id="intro">
    <!-- intro -->
    <div class="container col-md-9 col-12 ml-md-auto mr-md-auto p-5">

        <div class="row">
            <div class="col-md-5 col-12">
                <h6 class="text-muted">The challenge</h6>
                <h4>restoring a restoration company</h4>
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
                <img src="/images/thumbs/prorestoration/smartmockups_k3oxfoks.png" class="img-fluid" alt="current mockup">
            </div>

            <div class="col-4">
                <img src="/images/thumbs/prorestoration/smartmockups_k3oxgau4.png" class="img-fluid" alt="cropped mockup">
            </div>
			
            <div class="col-4">
                <img src="/images/thumbs/prorestoration/smartmockups_k3owuibf.png" class="img-fluid" alt="desktop and laptop mockup">
            </div>
			
            <div class="col-4">
                <img src="/images/thumbs/prorestoration/logo.webp" class="img-fluid" alt="logo">
            </div>

        </div>
    </div>
    <!-- image showcase -->

    <!-- the results -->
    <div class="container col-md-9 col-12 offset-md-3">

        <div class="col-12 p-5">
            <h6 class="text-muted">the results</h6>
            <h4>large increase of digital footprint</h4>
            <p>The update of the website was a large improvement for them. We made the site with WordPress as the CMS of choice for this one. The new site was a nice increase and improvement for the SEO that was a growth in 3 months time with an increase by <span class="red">15%</span> and conversion rating with the implementation of Google Ads that we setup for them. This was a true showcase that making a site update with content, design, and SEO optimization was a great and needed change.</p>
        </div>

    </div>
    <!-- the results -->

</div>
