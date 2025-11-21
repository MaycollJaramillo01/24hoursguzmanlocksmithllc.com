<?php
declare(strict_types=1);
?>
<section id="<?php echo e($Gallery['section_id']); ?>" class="py-12 sm:py-16 bg-gray-50">
    <div class="container-narrow space-y-8">
        <div class="space-y-3 text-center">
            <h2 class="text-2xl sm:text-3xl font-bold text-gray-900"><?php echo e($Gallery['section_title']); ?></h2>
            <p class="text-gray-700 max-w-2xl mx-auto"><?php echo e($Gallery['section_subtitle']); ?></p>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <?php foreach ($Gallery['items'] as $item): ?>
                <figure class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                    <img src="<?php echo e($item['image']); ?>" alt="<?php echo e($item['alt']); ?>" loading="lazy" decoding="async" class="h-48 w-full object-cover">
                    <figcaption class="p-4 space-y-1">
                        <div class="flex items-center justify-between">
                            <span class="text-sm font-semibold text-gray-900"><?php echo e($item['label']); ?></span>
                            <span class="text-xs text-gray-600 px-2 py-1 rounded-full bg-gray-100"><?php echo e($item['category']); ?></span>
                        </div>
                    </figcaption>
                </figure>
            <?php endforeach; ?>
        </div>
    </div>
</section>
