<section id="plain-content" class="bg-white mt-48 mb-16 max-w-4xl mx-auto">
    <h1 class="text-5xl my-28 font-bold text-center"><?php the_title(); ?></h1>
    <div class="text-lg space-y-4"><?php the_content(); ?></div>
</section>

<script>
    const nav_hamburger = document.querySelector('.nav-hamburger');
    const custom_logo_link = document.querySelector('.custom-logo-link');

    nav_hamburger.classList.add('dark');
    custom_logo_link.classList.add('dark');
</script>