---

layout: portfolio
title: Disabled In Action NYC
preview_title: DIA
image_preview: /images/thumbs/dia-nyc-images/full-screenshot-new.png
header_image: /images/thumbs/dia-nyc-images/full-screenshot-new.png
logo: /images/thumbs/dia-nyc-images/dia-logo.png
tagline: Helping those with disablities each day
permalink: /:collection/dia-nyc/

bio: DIA - NYC is a non-profit based in NYC that has been fighting the good fight to help bring equality with disabilities for years. They came to me through Taproot+ to help them with their website needs. I saw this website as a challenge to use the new platform that I planned to use for easier content management for non-profits and businesses needed. I loaded Jekyll onto their site which is fast loading and can be handled through Netlify.

category: [ non-profit ]

services: [ UI/UX Design and Development, Branding, SEO ]

programs: [ Adobe XD, Dreamweaver, Jekyll, Netlify ]

location: New York City, NY

live_url: https://www.disabledinaction.org
alt_url: https://dia-nyc.netlify.app/

---

<div id="intro">
    <!-- intro -->
    <div class="container col-md-9 col-12 ml-md-auto mr-md-auto p-5">

        <div class="row">
            <div class="col-md-5 col-12">
                <h6 class="text-muted">The challenge</h6>
                <h4>change in platforms was a plus</h4>
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
					<a href="{{ page.alt_url }}" target="_blank" class="text-link text-muted">{{ page.alt_url }}</a> - dev version
                </div>
            </div>
        </div>

    </div>
    <!-- intro section -->

    <!-- image showcase -->
    <div class="container col-12">
        <div class="row">

            <div class="col-4">
                <img src="/images/thumbs/dia-nyc-images/screenshot-old.jpeg" class="img-fluid" alt="previous design">
            </div>

            <div class="col-4">
                <img src="/images/thumbs/dia-nyc-images/full-screenshot-new.png" class="img-fluid" alt="current redesign">
            </div>

            <div class="col-4 pt-5">
                <img src="/images/thumbs/dia-nyc-images/dia-logo.png" class="img-fluid" alt="logo">
            </div>

        </div>
    </div>
    <!-- image showcase -->

    <!-- the results -->
    <div class="container col-md-9 col-12 offset-md-3">

        <div class="col-12 p-5">
            <h6 class="text-muted">the results</h6>
            <h4>Jekyll without the Hyde</h4>
            <p>With the use of Jekyll, I managed to get the overall speed and functionality of the site to go to 97 overall on desktop and an 88 overall on mobile. The site was a nice test of making a brand new website on Jekyll. The site also saw an increase in overall users and retention rates by 78% and 15% respectively with the new layout.</p>
        </div>

    </div>
    <!-- the results -->
