<?php get_header(); ?>

<!-- banner -->
<div class="blue-gradient  h-64 -mb-16">
    <div class="container pt-32">
        <h1 class="heading-2">News & Events</h1>
    </div>
</div>

<div class="container pb-16">
    <div class="flex flex-wrap -mx-3">
    
    <?php
    while (have_posts())
    {
        the_post();
        ?>

        <?php if ( is_sticky() ) : ?>

        <article class="w-full md:w-2/3 p-3 flex">
            <a href="<?php the_permalink(); ?>"
               class="rounded-xl shadow bg-white hover:shadow-lg flex">
                <figure class="h-full w-1/2 rounded-l-xl">
                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>"
                         alt="" width="1024"
                         class="w-full h-full object-cover rounded-l-xl">
                </figure>
                <div class="w-1/2 p-5 flex flex-col flex-no-wrap h-full">
                    <h5 class="font-medium text-xl leading-tight text-gray-800 mb-6">
                    <?php the_title(); ?></h5>
                    <p class="text-gray-600"><?php the_excerpt(); ?>
                    </p>
                    <p class="mt-auto text-gray-500 w-full"><?php the_time('F j, Y'); ?></p>
                </div>
            </a>
        </article>

         <?php else : ?>
         
         <article class="w-full md:w-1/3 p-3 flex">
            <a href="<?php the_permalink(); ?>"
               class="rounded-xl shadow bg-white hover:shadow-lg flex flex-col flex-no-wrap">
                <figure class="h-64 w-full rounded-t-xl">
                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>"
                         alt="" width="1024"
                         class="w-full h-64 object-cover rounded-t-xl">
                </figure>
                <h5 class="font-medium text-lg leading-tight text-gray-800 p-5">
                <?php the_title(); ?></h5>
                <p class="p-5 pt-0 text-gray-500"><?php the_time('F j, Y'); ?></p>
            </a>
        </article>

 	    <?php endif; ?>
    <?php 
    }
    wp_reset_query(); ?>

    </div>
</div>

<?php get_footer(); ?>