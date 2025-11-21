<?php
declare(strict_types=1);
?>
<section class="py-12 sm:py-16">
    <div class="container-narrow bg-brand-primary text-white rounded-3xl px-8 py-10 flex flex-col lg:flex-row lg:items-center lg:justify-between gap-6">
        <div class="space-y-3 max-w-2xl">
            <h2 class="text-2xl sm:text-3xl font-bold"><?php echo e($Messages['cta_title']); ?></h2>
            <p class="text-white/90 leading-relaxed"><?php echo e($Messages['cta_body']); ?></p>
        </div>
        <div class="flex flex-col sm:flex-row sm:items-center gap-3">
            <a href="<?php echo e($Messages['cta_primary_href']); ?>" class="inline-flex justify-center items-center px-6 py-3 rounded-lg bg-white text-brand-primary font-semibold hover:bg-gray-100 focus-ring">
                <?php echo e($Messages['cta_primary_label']); ?>
            </a>
            <a href="<?php echo e($Messages['cta_secondary_href']); ?>" class="inline-flex justify-center items-center px-6 py-3 rounded-lg border border-white text-white font-semibold hover:bg-white/10 focus-ring">
                <?php echo e($Messages['cta_secondary_label']); ?>
            </a>
        </div>
    </div>
</section>
