"use strict";

var disqus_config = function disqus_config() {
  this.page.url = "https://www.bwhitingdesigns.com{{ page.url }}";
  this.page.identifier = "https://www.bwhitingdesigns.com{{ page.url }}";
};

(function () {
  // DON'T EDIT BELOW THIS LINE
  var d = document,
      s = d.createElement('script');
  s.src = 'https://bwhitingdesigns.disqus.com/embed.js';
  s.setAttribute('data-timestamp', +new Date());
  (d.head || d.body).appendChild(s);
})();