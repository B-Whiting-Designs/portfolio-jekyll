---

layout: portfolio
title: Case Studies

---

<!-- content -->
<div class="content dark-content portf-wrap">
	<!--fixed-top-panel-->
    <div class="fixed-top-panel filter-panel fl-wrap">
        <div class="fixed-filter-panel_title color-bg">
            Works Filter <i class="fal fa-long-arrow-right"></i>
        </div>
        <div class="gallery-filters inline-dark-filters">
            <a href="#" class="gallery-filter  gallery-filter-active" data-filter="*">All projects</a>
            <a href="#" class="gallery-filter " data-filter=".ui_design">UI/UX Design</a>
			<a href="#" class="gallery-filter " data-filter=".web_dev">Development</a>
			<a href="#" class="gallery-filter " data-filter=".non_profit">Non Profit</a>
			<a href="#" class="gallery-filter " data-filter=".commercial">Commercial</a>
			<a href="#" class="gallery-filter " data-filter=".mockup">Mockup</a>
            <a href="#" class="gallery-filter " data-filter=".graphic_design">Graphic Design</a>
        </div>
        <div class="folio-counter">
            <div class="num-album"></div>
            <div class="all-album"></div>
        </div>
    </div>
    <!--fixed-top-panel end -->
    <!-- portfolio start -->
    <div class="gallery-items min-pad  four-column   fl-wrap  ">
        {% include gallery-filters.html %}
    </div>
<!-- portfolio end -->
</div>
