<form class="w-full h-1/4 lg:h-1/3 flex p-12 lg:p-24 bg-black z-10">
	<div class="text-white z-10 absolute right-3 lg:right-6 top-3 lg:top-6">
		<div id="search-results-close" class="cursor-pointer">
			<svg class="w-6 lg:w-8 h-6 lg:h-8 z-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
				<g stroke="none" stroke-width="1" fill="currentColor" fill-rule="evenodd">
					<g id="icon-x">
						<path d="M24 20.188l-8.315-8.209 8.2-8.282-3.697-3.697-8.212 8.318-8.31-8.203-3.666 3.666 8.321 8.24-8.206 8.313 3.666 3.666 8.237-8.318 8.285 8.203z" />
					</g>
				</g>
			</svg>
		</div>
	</div>
	<input id="search-input" type="text" class="flex-grow p-4 bg-[#202020] font-theme-heading text-2xl lg:text-4xl text-white placeholder:text-white" placeholder="Search">
	<button type="submit" class="absolute right-12 lg:right-24 p-4 self-center">
		<img src="<?php echo get_template_directory_uri(); ?>/resources/img/search.svg" alt="Search" class="w-8 h-8">
	</button>
</form>
<div id="search-results" class="h-3/4 lg:h-2/3 overflow-y-scroll"></div>

<div id="search-results-template" class="hidden">
	<div class="flex flex-col items-center justify-center w-full">
		<div id="search-results-list" class="text-white list-none flex flex-row flex-wrap justify-center space-x-0 space-y-0 mx-auto"></div>
	</div>
</div>

<div id="search-results-template-no-results" class="hidden">
	<div class="flex flex-col items-center justify-center w-full">
		<img src="<?php echo get_template_directory_uri(); ?>/resources/img/search.svg" alt="Search" class="w-24 h-24">
		<p class="mt-8 text-2xl font-theme-heading text-white">No results found</p>
	</div>
</div>

<div id="search-results-template-error" class="hidden">
	<div class="flex flex-col items-center justify-center w-full">
		<img src="<?php echo get_template_directory_uri(); ?>/resources/img/search.svg" alt="Search" class="w-24 h-24">
		<p class="mt-8 text-2xl font-theme-heading text-white">Something went wrong</p>
	</div>
</div>

<div id="search-results-template-loading" class="hidden">
	<div class="flex flex-col items-center justify-center w-full">
		<img src="<?php echo get_template_directory_uri(); ?>/resources/img/search.svg" alt="Search" class="w-24 h-24">
		<p class="mt-8 text-2xl font-theme-heading text-white">Searching...</p>
	</div>
</div>

<div id="search-results-template-no-input" class="hidden">
	<div class="flex flex-col items-center justify-center w-full">
		<img src="<?php echo get_template_directory_uri(); ?>/resources/img/search.svg" alt="Search" class="w-24 h-24">
		<p class="mt-8 text-2xl font-theme-heading text-white">Search for something</p>
	</div>
</div>
