<?php
declare(strict_types=1);
?>
<section id="hero" role="banner" class="hero-modern relative overflow-hidden">
    <div class="hero-gradient"></div>
    <div class="hero-orb hero-orb-primary" aria-hidden="true"></div>
    <div class="hero-orb hero-orb-secondary" aria-hidden="true"></div>
    <div class="container-narrow grid gap-10 lg:grid-cols-2 lg:items-center relative z-10">
        <div class="space-y-6 animate-fade-up">
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/70 backdrop-blur shadow-soft border border-white/60 hover-lift transition-transform duration-300">
                <span class="h-2 w-2 rounded-full bg-brand-accent shadow-glow"></span>
                <span class="text-sm font-semibold text-amber-800"><?php echo e($Hero['badge']); ?></span>
            </div>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-900 leading-tight drop-shadow-sm">
                <?php echo e($Hero['title']); ?>
            </h1>
            <p class="text-lg text-gray-700 max-w-2xl">
                <?php echo e($Hero['subtitle']); ?>
            </p>
            <?php if (!empty($Hero['bullets'])): ?>
                <ul class="grid gap-3 sm:grid-cols-2">
                    <?php foreach ($Hero['bullets'] as $bullet): ?>
                        <li class="flex items-start gap-3 bg-white/70 backdrop-blur rounded-2xl p-3 shadow-soft hover-lift transition-transform duration-300">
                            <span class="mt-0.5 inline-flex h-8 w-8 items-center justify-center rounded-full bg-amber-100 text-amber-700 font-semibold shadow-inner">
                                <?php echo e($bullet['icon']); ?>
                            </span>
                            <div>
                                <p class="font-semibold text-gray-900"><?php echo e($bullet['title']); ?></p>
                                <p class="text-sm text-gray-700"><?php echo e($bullet['text']); ?></p>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
            <div class="flex flex-col sm:flex-row sm:items-center gap-3">
                <a href="<?php echo e($Hero['primary_cta_href']); ?>" class="inline-flex justify-center items-center px-6 py-3 rounded-lg text-white bg-gradient-to-r from-brand-primary to-gray-900 hover:shadow-lg hover:-translate-y-0.5 focus-ring font-semibold transition-all duration-300">
                    <?php echo e($Hero['primary_cta_label']); ?>
                </a>
                <a href="<?php echo e($Hero['secondary_cta_href']); ?>" class="inline-flex justify-center items-center px-6 py-3 rounded-lg border border-gray-200 bg-white/70 backdrop-blur text-gray-900 hover:border-gray-300 hover:-translate-y-0.5 focus-ring font-semibold transition-all duration-300">
                    <?php echo e($Hero['secondary_cta_label']); ?>
                </a>
            </div>
            <div class="flex flex-col sm:flex-row gap-4 text-sm text-gray-800" aria-label="Información de contacto">
                <div class="glass-card p-3">
                    <p class="font-semibold">Ubicación</p>
                    <span><?php echo e($SiteConfig['address']); ?></span>
                </div>
                <div class="glass-card p-3">
                    <p class="font-semibold">Contacto directo</p>
                    <a class="text-brand-primary font-medium focus-ring block" href="<?php echo e($SiteConfig['phone_href']); ?>"><?php echo e($SiteConfig['phone']); ?></a>
                    <a class="text-brand-primary font-medium focus-ring block" href="mailto:<?php echo e($SiteConfig['email']); ?>"><?php echo e($SiteConfig['email']); ?></a>
                </div>
            </div>
        </div>
        <div class="relative animate-fade-up" style="animation-delay: 120ms;">
            <div class="hero-image-wrapper">
                <div class="hero-image-glow"></div>
                <img src="<?php echo e($SiteConfig['hero_image']); ?>" alt="<?php echo e($SiteConfig['brand_name']); ?>" class="hero-image rounded-3xl shadow-2xl object-cover">
                <div class="floating-card glass-card shadow-soft">
                    <p class="text-sm text-amber-800 font-semibold"><?php echo e($Hero['floating_label'] ?? 'Atención inmediata'); ?></p>
                    <p class="text-xs text-gray-700"><?php echo e($Hero['floating_text'] ?? 'Respuestas rápidas y seguras las 24 horas.'); ?></p>
                </div>
            </div>
            <div class="hero-stat-grid">
                <div class="stat-card">
                    <p class="text-2xl font-bold text-gray-900">24/7</p>
                    <p class="text-sm text-gray-700">Disponibilidad</p>
                </div>
                <div class="stat-card">
                    <p class="text-2xl font-bold text-gray-900">+500</p>
                    <p class="text-sm text-gray-700">Servicios resueltos</p>
                </div>
                <div class="stat-card">
                    <p class="text-2xl font-bold text-gray-900">15 min</p>
                    <p class="text-sm text-gray-700">Tiempo de respuesta</p>
                </div>
            </div>
        </div>
    </div>
</section>
