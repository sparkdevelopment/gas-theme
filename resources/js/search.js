// Use WordPress API to search for products
// and display results in a list

// Get the search form
const searchForm = document.querySelector('#search-form');

// Get the search input
const searchInput = document.querySelector('#search-input');

// Get the search results container
const searchResults = document.querySelector('#search-results');

// Get the search results template
const searchResultsTemplate = document.querySelector('#search-results-template');
const searchResultsTemplateNoResults = document.querySelector('#search-results-template-no-results');
const searchResultsTemplateError = document.querySelector('#search-results-template-error');
const searchResultsTemplateLoading = document.querySelector('#search-results-template-loading');
const searchResultsTemplateNoInput = document.querySelector('#search-results-template-no-input');

// Prevent form submission on Enter key
searchForm.addEventListener('submit', function (e) {
    e.preventDefault();
});

// Monitor the search input for changes
searchInput.addEventListener('input', function (e) {

    // Get the search term
    const searchTerm = e.target.value;

    // If there is no search term, show the no input template
    if (!searchTerm) {
        searchResults.innerHTML = searchResultsTemplateNoInput.innerHTML;
        return;
    }

    // If the string is 2 letters or less, show the no input template
    if (searchTerm.length <= 2) {
        searchResults.innerHTML = searchResultsTemplateNoInput.innerHTML;
        return;
    }

    // Show the loading template
    searchResults.innerHTML = searchResultsTemplateLoading.innerHTML;

    // Fetch the search results
    fetch('/wp-json/wp/v2/product?search=' + searchTerm + '&_embed&per_page=96')
        .then(function (response) {
            return response.json();
        })
        .then(function (results) {
            // If there are no results, show the no results template
            if (results.length === 0) {
                searchResults.innerHTML = searchResultsTemplateNoResults.innerHTML;
                return;
            }

            // If there are results, render them to the page
            searchResults.innerHTML = searchResultsTemplate.innerHTML;
            const searchResultsList = document.querySelector('#search-results-list');
            results.forEach(function (result) {
                // Get the thumbnail url
                if (result._embedded && result._embedded['wp:featuredmedia'] && result._embedded['wp:featuredmedia']['0'] && result._embedded['wp:featuredmedia']['0'].media_details && result._embedded['wp:featuredmedia']['0'].media_details.sizes && result._embedded['wp:featuredmedia']['0'].media_details.sizes.large && result._embedded['wp:featuredmedia']['0'].media_details.sizes.large.source_url) {
                    var thubnailUrl = result._embedded['wp:featuredmedia']['0'].media_details.sizes.large.source_url;
                } else {
                    var thubnailUrl = '';
                }
                const searchResultsListItem = document.createElement('li');
            searchResultsListItem.innerHTML =  '<a href="' + result.link + '" class="!mx-0 2xl:mt-0 2xl:translate-y-0 flex flex-col justify-center w-full aspect-square sm:w-[50vw] md:w-[25vw] sm:h-[50vw] md:h-[25vw]"><div class="card-zoom"><div class="card-zoom-image" style="background-image: url(\'' + thubnailUrl + '\')"></div><h1 class="card-zoom-text !text-2xl md:!text-2xl 2xl:!text-4xl">' + result.title.rendered + '</h1></div>';
                searchResultsList.appendChild(searchResultsListItem);
            });
        })
        .catch(function (error) {
            console.log(error);
            // If there is an error, show the error template
            searchResults.innerHTML = searchResultsTemplateError.innerHTML;
        });
});