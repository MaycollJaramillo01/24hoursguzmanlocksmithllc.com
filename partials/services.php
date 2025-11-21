<?php
declare(strict_types=1);
?>
<section id="services" class="py-12 sm:py-16">
    <div class="container-narrow space-y-8">
        <div class="space-y-3 text-center">
            <h2 class="text-2xl sm:text-3xl font-bold text-gray-900"><?php echo e($Services['section_title']); ?></h2>
            <p class="text-gray-700 max-w-2xl mx-auto"><?php echo e($Services['section_subtitle']); ?></p>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php foreach ($Services['items'] as $service): ?>
                <article class="p-6 bg-white rounded-2xl shadow-sm border border-gray-100 flex flex-col gap-4">
                    <div class="flex items-center gap-3">
                        <span class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-amber-100 text-amber-800 text-lg font-semibold">•</span>
                        <h3 class="text-xl font-semibold text-gray-900"><?php echo e($service['title']); ?></h3>
                    </div>
                    <p class="text-gray-700 leading-relaxed"><?php echo e($service['description']); ?></p>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>
