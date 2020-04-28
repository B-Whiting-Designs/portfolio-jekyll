---

layout: default
title: Freelance Designer
tagline: Hey, my name is <span class="red">Brian Whiting</span>. I create detailed, custom, modern <span class="red">high-quality designs</span> for your brand needs

post_1:
  title: SMB Growth
  text: See how I helped to create a large overhall for <a class="text-link" href="/portfolio/craftpainters/">Craft Painters</a> for a new website and how it has helped increase their overall digital footprint online. One of Denver, CO premier painting company.
  url: /portfolio/craftpainters/
  url_text: view case study
  image_foreground: /images/thumbs/craft-images/smartmockups_k06sfbr1.png
  image_background: /images/thumbs/craft-images/stock-craft-img.jpeg
  
post_2:
  title: Non-profit help
  text: Sometimes a client comes along that needs help for their organization and I am here to provide the solution. Check out the work I did for a recent non-profit located in Southeast Queens, NY by the name of <a class="text-link" href="/portfolio/ati/">Art Transforms Inc.</a> They work with helping
  url: /portfolio/ati/
  url_text: view case study
  image_foreground: /images/thumbs/ati-images/smartmockups_k06sdinl.png
  image_background: /images/thumbs/ati-images/ati.jpg

post_3:
  title: Facelift Work
  text: Some companies have been around and done a lot of work on getting their digital footprint right themselves. So sometimes working with a company I have to remember that they worked in the past on building a brand and keeping that brand going to make it amazing
  url: /portfolio/prorestoration/
  url_text: view case study
  image_foreground: /images/thumbs/prorestoration/new-website.png
  image_background: /images/thumbs/prorestoration/old-website.png

services:
  post_1_image: /images/notebook-beside-the-iphone-on-table-196644.jpg
  post_1_title: No Cookie Cutter Designs Here
  post_1_text: I work with clients on helping them come up with different forms of helping there digital footprint to be expanded. Ranging from regular web design to a detailed prototype with interactive features for testing to building their brand further.
  post_2_image: /images/coding-computer-data-depth-of-field-577585.jpg
  post_2_title: Tailored Coding made for you and yours
  post_2_text: Tailoring the website design to your development needs. I handle the part of your website that helps with your users getting to your most important parts but not skimping on the lesser details. All placed onto a CMS that will help with easy changes and updates as needed.
  post_3_image: /images/apple-devices-books-business-coffee-572056.jpg
  post_3_title: Package Deals to help you start out
  post_3_text: Now sometimes it is your first start at getting your digital footprint started and you need guidance or some assistance. I work with many on different package deals to help them get their foot in the door. From hosting to maintenance and things in between.


---

{% include about-me.html %}

<div id="showcase-work" class="container p-5 text-center">
	
	<h3>My Best Work</h3>
	
	<div class="row mt-5 d-flex justify-content-center">
	
		<div class="col-md-4 col-12 project">
			<figure style="padding: 3rem 0rem;">
				<a href="/portfolio/craftpainters/">
					<img src="/images/thumbs/craft-images/craftpainters-logo.png" class="img-fluid w-75">
				</a>
			</figure>
		</div>
		
		<div class="col-md-4 col-12 project">
			<figure style="padding: 2rem 0rem;">
				<a href="/portfolio/mls/">
					<img src="/images/thumbs/mls-images/MLS-logo.png" class="img-fluid w-75">
				</a>
			</figure>
		</div>
		
		<div class="col-md-4 col-12 project">
			<figure style="padding: 4.5rem 0rem;">
				<a href="/portfolio/fixednc/">
					<img src="/images/thumbs/fixed-nc-images/fnc-logo.webp" class="img-fluid w-50">
				</a>
			</figure>
		</div>
		
		<div class="col-md-4 col-12 project">
			<figure style="padding: 3rem 0rem;">
				<a href="/portfolio/ati">
					<img src="/images/thumbs/ati-images/logo-v1.png" class="img-fluid">
				</a>
			</figure>
		</div>
		
		<div class="col-md-4 col-12 project">
			<figure style="padding: 3rem 0rem;">
				<a href="/portfolio/prorestoration">
					<img src="/images/thumbs/prorestoration/logo.webp" class="img-fluid">
				</a>
			</figure>
		</div>
		
		<div class="col-md-4 col-12 project">
			<figure style="padding: 1.5rem 1rem;">
				<a href="/portfolio/dia-nyc/">
					<img src="/images/thumbs/dia-nyc-images/dia-logo.png" class="img-fluid w-50">
				</a>
			</figure>
		</div>
	
	</div>
	
	<div class="mx-auto mt-5">
		<a class="btn btn-primary-solid" href="/portfolio/">
			View More
		</a>
	</div>

</div>

<div class="container-fluid">

    <!-- the first post -->
    <div class="row pt-5">

        <div class="col-md-5 px-md-5">
            <h1 class="display-4 lead">{{ page.post_1['title'] }}</h1>
            <p>{{ page.post_1['text'] }}</p>

            <div class="d-none d-sm-block">
                <a class="btn btn-primary-solid" href="{{ page.post_1['url'] }}">{{ page.post_1['url_text'] }}</a>
            </div>
        </div>

        <div class="col-md-6 offset-md-1">
            <div class="bw-image-grid">
                <div class="image-foreground right">
                    <img class="img-fluid w-50 float-left" src="{{ page.post_1['image_foreground'] }}" alt="page-craft-1" loading="lazy">
                </div>
                <div class="image-background right">
                    <img class="img-fluid w-75" src="{{ page.post_1['image_background'] }}" alt="laptop-mockup-1">
                </div>
            </div>

            <!-- hidden block for button on mobile only -->
            <a class="btn btn-primary-solid d-none d-block d-sm-none" href="{{ page.post_1['url'] }}">{{ page.post_1['url_text'] }}</a>
            <!-- hidden block for button on mobile only -->

        </div>

    </div>
    <!-- the first post -->

    <!-- the second post -->
    <div class="row pt-5">

        <div class="col-md-6">
            <div class="bw-image-grid">
                <div class="image-foreground left">
                    <img class="img-fluid w-50 float-right" src="{{ page.post_2['image_foreground'] }}" alt="page-ati-1" loading="lazy">
                </div>
                <div class="image-background left">
                    <img class="img-fluid w-75" src="{{ page.post_2['image_background'] }}" alt="new version mock">
                </div>
            </div>

        </div>


        <div class="col-md-5 px-md-5 offset-md-1">
            <h1 class="display-4 lead">{{ page.post_2['title'] }}</h1>
            <p>{{ page.post_2['text'] }}</p>
            <a class="btn btn-primary-solid" href="{{ page.post_2['url'] }}">{{ page.post_2['url_text'] }}</a>
        </div>

    </div>
    <!-- the second post -->

    <!-- the third post -->
    <div class="row pt-5">

        <div class="col-md-5 px-md-5">
            <h1 class="display-4 lead">{{ page.post_3['title'] }}</h1>
            <p>{{ page.post_3['text'] }}</p>
            <div class="d-none d-sm-block">
                <a class="btn btn-primary-solid" href="{{ page.post_3['url'] }}">{{ page.post_3['url_text'] }}</a>
            </div>
        </div>

        <div class="col-md-6 offset-md-1">
            <div class="bw-image-grid">
                <div class="image-foreground">
                    <img class="img-fluid w-50" src="{{ page.post_3['image_foreground'] }}" alt="page-prorestoration-1" loading="lazy">
                </div>
                <div class="image-background right">
                    <img class="img-fluid w-75" src="{{ page.post_3['image_background'] }}" alt="previous version">
                </div>
            </div>

            <!-- hidden block for button on mobile only -->
            <a class="btn btn-primary-solid d-none d-block d-sm-none mt-5" href="{{ page.post_3['url'] }}">{{ page.post_3['url_text'] }}</a>
            <!-- hidden block for button on mobile only -->

        </div>

    </div>
    <!-- the third post -->


</div>

<!-- testimonial section -->
<div class="container-fluid bg-primary mt-5 p-5">
    <div class="container">
        <h6 class="text-center">What customers have said about me...</h6>
        <br>

        <div class="col-md-10 mr-auto ml-auto">

            <div class="row text-center">

                <div class="col-auto mx-auto">
                    <h5>4 Levels of Professionalism</h5>
                    <p>" He demonstrated a high level of quality, dependability, affordability and creativity. The design was clean and user friendly. He communicated with me so he could understand my vision for the website. He brought the vision to life with his expertise. With no hesitation I recommend Brian Whiting to get the best out of a website for you."</p>
                    <div class="client-meta">
                        <h6>Wanda Best, MA, MPA</h6>
                        <p><a href="https://www.arttransformsinc.org" target="_blank">Art Transforms Inc.</a></p>
                    </div>
                </div>

            </div>

        </div>

    </div>
</div>
<!-- testimonial section -->

<!-- services offered section -->
<div class="bg-secondary p-5">
    <h6 class="text-center">I work with clients in different ways...</h6>
    <br>

    <div class="col-md-10 mr-auto ml-auto">

        <div class="row">

            <div class="col-md-4 col-12">
                <div class="bw-image-featured-sm">
                    <img src="{{ page.services['post_1_image'] }}" alt="Photo by picjumbo.com from Pexels" class="img-fluid" loading="lazy">
                </div>
                <h5>{{ page.services['post_1_title'] }}</h5>
                <br>
                <p>{{ page.services['post_1_text'] }}</p>
            </div>

            <div class="col-md-4 col-12">
                <div class="bw-image-featured-sm">
                    <img src="{{ page.services['post_2_image'] }}" alt="Photo by Kevin Ku from Pexels" class="img-fluid" loading="lazy">
                </div>
                <h5>{{ page.services['post_2_title'] }}</h5>
                <br>
                <p>{{ page.services['post_2_text'] }}</p>
            </div>

            <div class="col-md-4 col-12">
                <div class="bw-image-featured-sm">
                    <img src="{{ page.services['post_3_image'] }}" alt="Photo by Serpstat from Pexels" class="img-fluid" loading="lazy">
                </div>
                <h5>{{ page.services['post_3_title'] }}</h5>
                <br>
                <p>{{ page.services['post_3_text'] }}</p>
            </div>

        </div>

    </div>

</div>
<!-- services offered section -->

<!-- blog showcase -->
<div class="col-10 mx-auto">

    <div class="row p-5">
        <div class="col-md-5 pt-5">
            <h6>resources</h6>
            <br>
            <p>Check out my blog for some new content that I post with updates and ideas. Sometimes you might catch a freebie or two in there as well.</p>
            <br>
            <a href="{{ site.blog_url }}" class="btn btn-secondary">
                View the Shack
            </a>
        </div>

        <div class="col-md-5 d-none d-md-block ml-auto">
            <img src="/images/black-and-white-blog-business-chocolate-261577.jpg" class="img-fluid" style="border-radius: 10px 0px 10px 0px;" alt="" loading="lazy">
        </div>
    </div>

</div>			
<!-- blog showcase -->

{% include contact-form.html %}