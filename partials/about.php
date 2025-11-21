<?php
declare(strict_types=1);
?>
<section id="about" class="py-12 sm:py-16">
    <div class="container-narrow grid gap-8 lg:grid-cols-3">
        <div class="lg:col-span-2 space-y-4">
            <h2 class="text-2xl sm:text-3xl font-bold text-gray-900"><?php echo e($About['section_title']); ?></h2>
            <p class="text-gray-700 font-medium"><?php echo e($About['section_subtitle']); ?></p>
            <p class="text-gray-700 leading-relaxed"><?php echo e($About['body']); ?></p>
        </div>
        <aside class="bg-gray-900 text-white rounded-2xl p-6 space-y-3">
            <h3 class="text-xl font-semibold">Contacto directo</h3>
            <div class="space-y-2 text-sm">
                <div>
                    <span class="block text-gray-300">Teléfono</span>
                    <a class="font-semibold focus-ring" href="<?php echo e($SiteConfig['phone_href']); ?>"><?php echo e($SiteConfig['phone']); ?></a>
                </div>
                <div>
                    <span class="block text-gray-300">Correo</span>
                    <a class="font-semibold focus-ring" href="mailto:<?php echo e($SiteConfig['email']); ?>"><?php echo e($SiteConfig['email']); ?></a>
                </div>
                <div>
                    <span class="block text-gray-300">Dirección</span>
                    <p class="font-semibold"><?php echo e($SiteConfig['address']); ?></p>
                </div>
            </div>
        </aside>
    </div>
</section>
