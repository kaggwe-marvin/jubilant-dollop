// gallery.js
document.addEventListener("DOMContentLoaded", function () {
  // Handle click on paging links
  var pagingLinks = document.querySelectorAll(".tm-paging-link");
  pagingLinks.forEach(function (link) {
    link.addEventListener("click", function (e) {
      e.preventDefault();

      var page = this.textContent.toLowerCase();
      var galleryPages = document.querySelectorAll(".tm-gallery-page");
      galleryPages.forEach(function (page) {
        page.classList.add("hidden");
      });
      document
        .querySelector("#tm-gallery-page-" + page)
        .classList.remove("hidden");

      pagingLinks.forEach(function (link) {
        link.classList.remove("active");
      });
      this.classList.add("active");
    });
  });
});
