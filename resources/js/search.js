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

// Handle search form submit
searchForm.addEventListener('submit', function (e) {

    // Prevent form from submitting
    e.preventDefault();

    // Get the search term
    const searchTerm = searchInput.value;

    // If there is no search term, show the no input template
    if (!searchTerm) {
        searchResults.innerHTML = searchResultsTemplateNoInput.innerHTML;
        return;
    }

    // Show the loading template
    searchResults.innerHTML = searchResultsTemplateLoading.innerHTML;

    // Fetch the search results
    fetch('/wp-json/wp/v2/product?search=' + searchTerm + '&_embed')
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
                const thubnailUrl = result._embedded['wp:featuredmedia']['0'].media_details.sizes.large.source_url || 'https://via.placeholder.com/150';
                const searchResultsListItem = document.createElement('li');
                searchResultsListItem.innerHTML =  '<a href="' + result.link + '" class="!mx-0 2xl:mt-0 2xl:translate-y-0 flex flex-col justify-center w-[33.333vw] h-[33.333vw]"><div class="card-zoom"><div class="card-zoom-image" style="background-image: url(\'' + thubnailUrl + '\')"></div><h1 class="card-zoom-text !text-2xl">' + result.title.rendered + '</h1></div>';
                searchResultsList.appendChild(searchResultsListItem);
            });
        })
        .catch(function (error) {
            console.log(error);
            // If there is an error, show the error template
            searchResults.innerHTML = searchResultsTemplateError.innerHTML;
        });
});

// Close the search results when the X button is pressed
const searchResultsClose = document.querySelector('#search-results-close');
searchResultsClose.addEventListener('click', function (e) {
    e.preventDefault();
    // If there is a referrer, return to it
    if (document.referrer) {
        window.location.href = document.referrer;
    } else {
        // Otherwise, go to the homepage
        window.location.href = '/';
    }
});