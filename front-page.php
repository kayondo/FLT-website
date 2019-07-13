<?php get_header(); ?>

<!--slider-->
<div class="slider">
    <!-- Slideshow Items-->
    <div class="slides">

        <!--msacco-->
        <div class="slide-item">
            <figure class="item-image-container">
                <img class="item-image" src="<?php echo get_template_directory_uri(); ?>/images/banner-image-blue.jpg" alt=""/>
            </figure>
            <div class="content-container">
                <div class="container z-50 item-header">
                    <div class="w-full md:w-3/5">
                        <h1 class="heading-1 mb-10 leading-tight font-normal">Convenient, Reliable
                            & Cheapest <span class="chunky light font-medium">Way to Grow</span>
                            <span class="chunky light font-medium">Savings</span>, Access Credit
                            & make Payments</h1>
                        <p class="mt-12">
                            <a href="<?php echo get_site_url(); ?>/msacco"
                               class="shadow-lg text-lg rounded-full px-6 py-3 bg-orange-400 text-red-900">More About
                                MSACCO</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!--savings Plus-->
        <div class="slide-item">
            <figure class="item-image-container">
                <img class="item-image" src="<?php echo get_template_directory_uri(); ?>/images/banner-image.jpg" alt="savings plus"/>
            </figure>
            <div class="content-container">
                <div class="container z-50 item-header">
                    <div class="w-full md:w-3/5">
                        <h1 class="heading-1 mb-10 leading-tight font-normal">Extraordinary Organisational
                            Efficiency <span class="chunky light font-medium">Improved Risk</span> <span
                                    class="chunky light font-medium">Management</span> &
                            <span class="chunky light font-medium">additional income</span></h1>
                        <p class="mt-12">
                            <a href="<?php echo get_site_url(); ?>/savings-plus"
                               class="shadow-lg text-lg rounded-full px-6 py-3 bg-orange-400 text-red-900">More About
                                SavingsPlus</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="slide-controls">
        <div class="container">
            <ul class="w-full flex justify-end">
                <li class="control" data-index="0"></li>
                <li class="control" data-index="1"></li>
            </ul>
            <div class="w-full mt-auto text-center py-4 md:py-10">
                <a href="#products" class="text-white text-4xl opacity-50 hover:text-5xl">
                    <span class="fe fe-arrow-down"></span>
                    <!-- <img id="point-to-products" src="<?php echo get_template_directory_uri(); ?>/feather/feather/arrow-down.svg" alt="down-ward-arrow"> -->
                </a>
            </div>
        </div>
    </div>
</div>

<!--products-->
<section class="products section" id="products">
    <div class="container flex flex-wrap">
        <div class="pr-6 w-full md:w-1/2 flex flex-col flex-no-wrap">
            <div class="mb-6">
                <img src="<?php echo get_template_directory_uri(); ?>/svg/m-sacco-logo.svg" alt="m-sacco logo" class="h-10 md:h-16">
                <h2 class="hidden">M-SACCO</h2>
            </div>
            <p class="mb-4 font-medium text-gray-700">For SACCO Members and MFI Customers, we provide the most
                convenient, reliable,
                and cheapest way to grow personal savings, access to credit and make payments.</p>
            <p class="mb-4">MSACCO is the most convenient and effective solution for SACCOs and Microfinance to provide
                mobile
                financial services to its members and customers respectively. With MSACCO, members can make deposits and
                withdraw money from their respective accounts.</p>
            <p class="mt-auto"><a href="products/msacco.html" class="chunky">more Details..</a></p>
        </div>
        <div class="mt-16 md:mt-0 md:pl-6 w-full md:w-1/2 flex flex-col flex-no-wrap">
            <div class="mb-6">
                <img src="<?php echo get_template_directory_uri(); ?>/svg/savingsplus-logo.svg" alt="savings plus logo" class="h-10 md:h-16">
                <h2 class="hidden">SAVINGS PLUS</h2>
            </div>
            <p class="mb-4 font-medium text-gray-700">For SACCOs and Microfinance Institutions, we provide a combination
                of extraordinary organisational efficiency, improved Risk Management & additional income through our
                hosted MSACCO Mobile Banking Switch and SAVINGS PLUS Core Banking system.</p>
            <p class="mb-4">Savings Plus© is a Core Banking software that manages banking operations for Savings and
                Credit
                Co-Operatives (SACCOS), Microfinance (MFIs), Village Banks, Wholesale Microfinance Institutions of any
                size.
            </p>
            <p class="mt-auto"><a href="products/savingsplus.html" class="chunky">more Details..</a></p>
        </div>
    </div>
</section>

<!--services-->
<section class="services blue-gradient section" id="services">
    <div class="container">
        <h2 class="heading-2 w-full mb-10">What we do</h2>
        <div class="flex">
            <div class="w-1/2 mr-6 flex flex-col flex-no-wrap">
                <div class="rounded-full h-24 w-24 mb-4 flex items-center orange-gradient justify-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/svg/icons/manager.svg" alt="manager icon" width="60" class="w-12">
                </div>
                <div class="mb-4">
                    <h4 class="font-medium text-white text-lg mb-4">3rd Party SACCO Administration</h4>
                    <p>SACCOs whose members would prefer an independent professional team running the operations of
                        their SACCO, can now have peace of mind. Our team of accountants and banking experts ensure that
                        all SACCO
                        members are served efficiently by automating certain processes so that members can now serve
                        themselves
                        over the internet without having to come to the banking hall.</p>
                </div>
            </div>
            <div class="w-1/2 ml-6 flex flex-col flex-no-wrap">
                <div class="rounded-full h-24 w-24 mb-4 flex items-center orange-gradient justify-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/svg/icons/repair-tools-cross.svg" alt="manager icon" width="60" class="w-12">
                </div>
                <div class="mb-4">
                    <h4 class="font-medium text-white text-lg mb-4">ICT Solutions</h4>
                    <p>In order to offer holistic solutions, FLT has established partnerships with leading IT brands
                        including
                        HP, DELL, VMWARE, CISCO, INTEL and others.</p>
                    <p class="mb-4">For all our solutions and products, we have manufacturer’s authorisation to sell,
                        and we
                        give a
                        minimum
                        of 12 months warranty. These warranty services can be accessed across the world.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!--news and events-->
<section class="section" id="newsEvents">
<div class="container">
        <div>
            <div class="flex justify-between items-end mb-2">
                <h2 class="heading-2 text-brand-orange">News & Events</h2>
                <a href="<?php echo get_site_url(); ?>/news">more news...</a>
            </div>
            <div class="flex flex-wrap -mx-3">
<?php

$args = array(
    'post_type' => 'post',
    'posts_per_page' => 3,
);

$newsposts = new WP_Query($args);

while ($newsposts->have_posts()){
    $newsposts->the_post();
?>
    <article class="w-full md:w-1/3 p-3 flex">
                    <a href="<?php the_permalink(); ?>" class="rounded-xl shadow bg-white hover:shadow-lg flex flex-col flex-no-wrap">
                        <figure class="h-64 w-full rounded-t-xl">
                            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>"
                                 alt="" width="291" class="w-full h-64 object-cover rounded-t-xl">
                        </figure>
                        <h5 class="font-medium text-lg leading-tight text-gray-800 p-5">
                            <?php the_title(); ?></h5>
                        <p class="p-5 pt-0 text-gray-500"><?php the_time('F j, Y'); ?></p>
                    </a>
                </article>
            
            <?php 
            }
                wp_reset_query(); ?>
             </div>
        </div>
        <div id="clients-partners" class="mt-16">
            <div class="w-full md:w-2/5">
                <h2 class="heading-2 text-brand-orange mb-2">Trusted By</h2>
                <p>Voluptas qui odit dolor laborum rerum. Aut dicta eos molestiae voluptatem architecto non.
                    Exercitationem aut aut laudantium quam fugiat.</p>
            </div>
            <div class="w-full flex flex-wrap mt-2 items-center logos">
                <a href="http://pepsi-cola.co.ug" class="h-12 mr-16 mt-6 logo-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/clients/pepsi-logo.png" class="h-12" alt="">
                </a>
                <a href="https://smile.co.ug/" class="h-12 mr-16 mt-6 logo-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/clients/smiles-logo.png" class="h-12" alt="">
                </a>
                <a href="https://ug.equitybankgroup.com" class="h-12 mr-16 mt-6 logo-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/clients/equity-bank-logo.png" class="h-12" alt="">
                </a>
                <a href="https://trobank.com/" class="h-12 mr-16 mt-6 logo-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/clients/tropical-bank-logo.png" class="h-12" alt="">
                </a>
                <a href="https://www.ubauganda.com/" class="h-12 mr-16 mt-6 logo-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/clients/UBA-logo.png" class="h-12" alt="">
                </a>
            </div>

        </div>

        <div class="mt-20">
            <div class="w-full md:w-2/5">
                <h2 class="heading-2 text-brand-orange mb-2">Our Partners</h2>
                <p>Voluptas qui odit dolor laborum rerum. Aut dicta eos molestiae voluptatem architecto non.
                    Exercitationem aut aut laudantium quam fugiat.
                </p>
            </div>
            <div class="w-full flex flex-wrap mt-2 items-center logos">
                <a href="http://fsduganda.or.ug"
                   target="_blank"
                   class="h-10 md:h-12 mr-10 md:mr-16 mt-6 logo-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/partners/fsdu-Logo.png" class="h-10 md:h-12" alt="">
                </a>
                <a href="https://www.mastercard.us/en-us.html"
                   target="_blank"
                   class="h-10 md:h-12 mr-10 md:mr-16 mt-6 logo-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/partners/master-card-fund-for-rural.png" class="h-10 md:h-12" alt="">
                </a>
                <a href="https://www.ukaiddirect.org"
                   target="_blank"
                   class="h-10 md:h-12 mr-10 md:mr-16 mt-6 logo-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/partners/ukaid-logo.png" class="h-10 md:h-12" alt="">
                </a>
                <a href="https://www.mtn.co.ug/en/Pages/default.aspx"
                   target="_blank"
                   class="h-10 md:h-12 mr-10 md:mr-16 mt-6 logo-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/partners/mtn-logo.png" class="h-10 md:h-12" alt="">
                </a>
            </div>
        </div>

    </div>
</section>

<!--footer-->
<?php get_footer(); ?>