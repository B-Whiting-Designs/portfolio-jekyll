---

layout: portfolio
title: Case Studies
tagline: <span class="red">Designs</span>, <span class="red">branding updates</span>, and <span class="red">development</span> case studies

---

<div class="row">
	{% for case_studies in site.portfolio %}
	<div class="col-md-6 col-12 bw-work-2-column">
        <a href="{{ case_studies.url }}">
            <div class="bw-card">
                <div class="bw-card-img">
                    <img class="img-fluid" src="{{ case_studies.image_preview }}" alt="{{ case_studies.preview_title }}">
                </div>
                <div class="bw-card-block mx-auto">
                    <h6>{{ case_studies.title }}</h6>
                    <h4>{{ case_studies.tagline }}</h4>
                    <span class="red">View Case Study</span>
                </div>
            </div>
        </a>
    </div>
	{% endfor %}
</div>