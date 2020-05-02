---

layout: portfolio
title: Pepsi Center - Denver
preview_title: Pepsi Center
image_preview: /images/thumbs/pepsi-center/pepsi-center-home.png
header_image: /images/thumbs/pepsi-center/pepsi-center-home.png
logo: 
tagline: No crystal pepsi here
permalink: /:collection/pepsi-center-mockup/

bio: Pepsi Center is the stable of the sporting events in Denver, CO. Home to the Denver Nuggets and many different events, it was in need of an update. The design was a bit stale and looked a bit outdated.

category: [ mockup ]

services: [ Mockup, Web Design, Rebranding ]

programs: [ Photoshop, Adobe XD ]

location: Denver, CO

live_url: https://www.pepsicenter.com/

---

<div id="intro">
    <!-- intro -->
    <div class="container col-md-9 col-12 ml-md-auto mr-md-auto p-5">

        <div class="row">
            <div class="col-md-5 col-12">
                <h6 class="text-muted">The challenge</h6>
                <h4>Making it feel like an event location</h4>
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
                <img src="/images/thumbs/pepsi-center/smartmockups_k08g8ca0.png" class="img-fluid" alt="desktop mock">
            </div>

            <div class="col-4">
                <img src="/images/thumbs/pepsi-center/smartmockups_k08vmzqg.png" class="img-fluid" alt="current redesign">
            </div>

            <div class="col-4">
                <img src="/images/thumbs/pepsi-center/smartmockups_k08vo4if.png" class="img-fluid" alt="old website">
            </div>

        </div>
    </div>
    <!-- image showcase -->

    <!-- the results -->
    <div class="container col-md-9 col-12 offset-md-3">

        <div class="col-12 p-5">
            <h6 class="text-muted">the results</h6>
            <h4>website update and modernistic</h4>
            <p>I wanted to push the limit of the design starting with the header from the very beginning. I focused on making the colors of Pepsi standout for the entire design. Showcasing of the events and having filtered letter designs and showing levels makes it modern and gives attention. This was one of my first few design challenges and also featured in an article from <a href="https://www.attentioninsight.com/why-good-design-matters/bringing-attention-to-the-small-details/" class="red">Attention Insight</a>.</p>
			
			<p>You can also read more about it <a href="https://blog.bwhitingdesigns.com/featured-on-attention-insight" class="red">here</a> on my blog.</p>
        </div>

    </div>
    <!-- the results -->

</div>
