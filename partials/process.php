<?php
declare(strict_types=1);
?>
<section id="process" class="py-12 sm:py-16 bg-gray-900 text-white">
    <div class="container-narrow space-y-8">
        <div class="space-y-3 text-center">
            <h2 class="text-2xl sm:text-3xl font-bold"><?php echo e($ProcessSteps['section_title']); ?></h2>
            <p class="text-gray-200 max-w-2xl mx-auto"><?php echo e($ProcessSteps['section_subtitle']); ?></p>
        </div>
        <ol class="grid grid-cols-1 md:grid-cols-2 gap-6" aria-label="Pasos del proceso">
            <?php foreach ($ProcessSteps['items'] as $index => $step): ?>
                <li class="p-6 bg-gray-800 rounded-2xl border border-gray-700 space-y-2">
                    <div class="flex items-center gap-3">
                        <span class="h-10 w-10 inline-flex items-center justify-center rounded-full bg-amber-500 text-gray-900 font-bold">
                            <?php echo e(str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT)); ?>
                        </span>
                        <h3 class="text-xl font-semibold"><?php echo e($step['title']); ?></h3>
                    </div>
                    <p class="text-gray-200 leading-relaxed"><?php echo e($step['description']); ?></p>
                </li>
            <?php endforeach; ?>
        </ol>
    </div>
</section>
