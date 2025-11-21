<?php
declare(strict_types=1);
$testimonials = load_testimonials();
?>
<section id="testimonials" class="py-12 sm:py-16">
    <div class="container-narrow space-y-8">
        <div class="space-y-3 text-center">
            <h2 class="text-2xl sm:text-3xl font-bold text-gray-900"><?php echo e($Messages['testimonials_title']); ?></h2>
            <p class="text-gray-700 max-w-2xl mx-auto"><?php echo e($Messages['testimonials_subtitle']); ?></p>
        </div>
        <?php if (empty($testimonials)): ?>
            <p class="text-center text-gray-700"><?php echo e($Messages['no_testimonials']); ?></p>
        <?php else: ?>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <?php foreach ($testimonials as $testimonial): ?>
                    <article class="p-6 bg-white rounded-2xl shadow-sm border border-gray-100 space-y-3">
                        <p class="text-gray-700 leading-relaxed"><?php echo e($testimonial['message'] ?? ''); ?></p>
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="font-semibold text-gray-900"><?php echo e($testimonial['name'] ?? ''); ?></p>
                                <p class="text-sm text-gray-600"><?php echo e($testimonial['role'] ?? ''); ?></p>
                            </div>
                            <?php if (isset($testimonial['rating'])): ?>
                                <span class="text-sm font-semibold text-amber-600" aria-label="<?php echo e($testimonial['rating']); ?> out of 5 stars">
                                    <?php echo e($testimonial['rating']); ?>/5
                                </span>
                            <?php endif; ?>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>
