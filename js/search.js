(() => {
  // resources/js/search.js
  var searchForm = document.querySelector("#search-form");
  var searchInput = document.querySelector("#search-input");
  var searchResults = document.querySelector("#search-results");
  var searchResultsTemplate = document.querySelector("#search-results-template");
  var searchResultsTemplateNoResults = document.querySelector("#search-results-template-no-results");
  var searchResultsTemplateError = document.querySelector("#search-results-template-error");
  var searchResultsTemplateLoading = document.querySelector("#search-results-template-loading");
  var searchResultsTemplateNoInput = document.querySelector("#search-results-template-no-input");
  searchForm.addEventListener("submit", function(e) {
    e.preventDefault();
    const searchTerm = searchInput.value;
    if (!searchTerm) {
      searchResults.innerHTML = searchResultsTemplateNoInput.innerHTML;
      return;
    }
    searchResults.innerHTML = searchResultsTemplateLoading.innerHTML;
    fetch("/wp-json/wp/v2/product?search=" + searchTerm + "&_embed").then(function(response) {
      return response.json();
    }).then(function(results) {
      if (results.length === 0) {
        searchResults.innerHTML = searchResultsTemplateNoResults.innerHTML;
        return;
      }
      searchResults.innerHTML = searchResultsTemplate.innerHTML;
      const searchResultsList = document.querySelector("#search-results-list");
      results.forEach(function(result) {
        console.log(result);
        const thubnailUrl = result._embedded["wp:featuredmedia"]["0"].media_details.sizes.large.source_url || "https://via.placeholder.com/150";
        const searchResultsListItem = document.createElement("li");
        searchResultsListItem.innerHTML = '<a href="' + result.link + `" class="!mx-0 2xl:mt-0 2xl:translate-y-0 flex flex-col justify-center w-[33.333vw] h-[33.333vw]"><div class="card-zoom"><div class="card-zoom-image" style="background-image: url('` + thubnailUrl + `')"></div><h1 class="card-zoom-text !text-2xl">` + result.title.rendered + "</h1></div>";
        searchResultsList.appendChild(searchResultsListItem);
      });
    }).catch(function(error) {
      console.log(error);
      searchResults.innerHTML = searchResultsTemplateError.innerHTML;
    });
  });
})();
