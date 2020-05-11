---

layout: default
title: Freelance Designer
tagline: Hey, my name is <span class="red">Brian Whiting</span>. I create detailed, custom, modern <span class="red">high-quality designs</span> for your brand needs

---

{% include about-me.html %}

<div id="showcase-work" class="container p-5 text-center">
	
	<h3>Recent Work</h3>
		
	<div class="row mt-5 d-flex justify-content-center">
			
		<div class="row">
		{% assign case_studies = site.portfolio | sample: 6 | limit: 6 %}
        {% for project in case_studies %}
        <div class="col-md-6 col-12 bw-work-2-column">
            <a href="{{ project.url }}">
                <div class="bw-card">
                    <div class="bw-card-img">
                        <img data-src="{{ project.image_preview }}" alt="{{ project.preview_title }}" class="img-fluid lazyload blur-up">
                    </div>
                    <div class="bw-card-block mx-auto">
                        <h6>{{ project.title }}</h6>
                        <h4>{{ project.tagline }}</h4>
                        <span class="red">View Case Study</span>
                    </div>
                </div>
            </a>
        </div>
        {% endfor %}
        </div>
		
	</div>
	
	<div class="mx-auto mt-5">
		<a class="btn btn-primary-solid" href="/portfolio/">
			View More
		</a>
	</div>

</div>

{% include contact-form.html %}