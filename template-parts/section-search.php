<div class="min-h-screen bg-[#202020]">
    <form id="search-form" class="sticky top-0 w-full flex p-20 bg-black z-10">
        <input id="search-input" type="text" class="flex-grow p-6 bg-[#202020] font-theme-heading text-4xl text-white placeholder:text-white" placeholder="Search">
        <button type="submit" class="absolute right-24 p-4 self-center">
            <img src="<?php echo get_template_directory_uri(); ?>/resources/img/search.svg" alt="Search" class="w-8 h-8">
        </button>
    </form>
    <div id="search-results"></div>
</div>

<div id="search-results-template" class="hidden">
    <div class="flex flex-col items-center justify-center w-full pt-6">
        <div id="search-results-list" class="mt-8 text-white list-none flex flex-col flex-wrap lg:flex-row justify-center space-x-0 space-y-0 px-10 lg:px-0 w-3/4 mx-auto"></div>
    </div>
</div>

<div id="search-results-template-no-results" class="hidden">
    <div class="flex flex-col items-center justify-center w-full pt-6">
        <img src="<?php echo get_template_directory_uri(); ?>/resources/img/search.svg" alt="Search" class="w-24 h-24">
        <p class="mt-8 text-2xl font-theme-heading text-white">No results found</p>
    </div>
</div>

<div id="search-results-template-error" class="hidden">
    <div class="flex flex-col items-center justify-center w-full pt-6">
        <img src="<?php echo get_template_directory_uri(); ?>/resources/img/search.svg" alt="Search" class="w-24 h-24">
        <p class="mt-8 text-2xl font-theme-heading text-white">Something went wrong</p>
    </div>
</div>

<div id="search-results-template-loading" class="hidden">
    <div class="flex flex-col items-center justify-center w-full pt-6">
        <img src="<?php echo get_template_directory_uri(); ?>/resources/img/search.svg" alt="Search" class="w-24 h-24">
        <p class="mt-8 text-2xl font-theme-heading text-white">Searching...</p>
    </div>
</div>

<div id="search-results-template-no-input" class="hidden">
    <div class="flex flex-col items-center justify-center w-full pt-6">
        <img src="<?php echo get_template_directory_uri(); ?>/resources/img/search.svg" alt="Search" class="w-24 h-24">
        <p class="mt-8 text-2xl font-theme-heading text-white">Search for something</p>
    </div>
</div>