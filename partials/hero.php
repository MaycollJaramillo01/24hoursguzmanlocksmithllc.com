<?php
declare(strict_types=1);
?>
<section id="hero" role="banner" class="bg-gradient-to-b from-white to-gray-50 py-12 sm:py-16">
    <div class="container-narrow grid gap-10 lg:grid-cols-2 lg:items-center">
        <div class="space-y-6">
            <span class="inline-flex items-center px-3 py-1 rounded-full bg-amber-100 text-amber-800 text-sm font-medium">
                <?php echo e($Hero['badge']); ?>
            </span>
            <h1 class="text-3xl sm:text-4xl font-bold text-gray-900 leading-tight">
                <?php echo e($Hero['title']); ?>
            </h1>
            <p class="text-lg text-gray-700">
                <?php echo e($Hero['subtitle']); ?>
            </p>
            <div class="flex flex-col sm:flex-row sm:items-center gap-3">
                <a href="<?php echo e($Hero['primary_cta_href']); ?>" class="inline-flex justify-center items-center px-6 py-3 rounded-lg text-white bg-brand-primary hover:bg-gray-900 focus-ring font-semibold">
                    <?php echo e($Hero['primary_cta_label']); ?>
                </a>
                <a href="<?php echo e($Hero['secondary_cta_href']); ?>" class="inline-flex justify-center items-center px-6 py-3 rounded-lg border border-gray-300 text-gray-900 hover:border-gray-400 focus-ring font-semibold">
                    <?php echo e($Hero['secondary_cta_label']); ?>
                </a>
            </div>
            <div class="flex flex-col gap-1 text-sm text-gray-700" aria-label="Información de contacto">
                <span><?php echo e($SiteConfig['address']); ?></span>
                <a class="text-brand-primary font-medium focus-ring" href="<?php echo e($SiteConfig['phone_href']); ?>"><?php echo e($SiteConfig['phone']); ?></a>
                <a class="text-brand-primary font-medium focus-ring" href="mailto:<?php echo e($SiteConfig['email']); ?>"><?php echo e($SiteConfig['email']); ?></a>
            </div>
        </div>
        <div class="relative">
            <img src="<?php echo e($SiteConfig['hero_image']); ?>" alt="<?php echo e($SiteConfig['brand_name']); ?>" class="w-full h-full object-cover rounded-2xl shadow-lg">
        </div>
    </div>
</section>
