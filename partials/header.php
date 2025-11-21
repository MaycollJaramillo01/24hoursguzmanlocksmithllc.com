<?php
declare(strict_types=1);
?>
<header class="sticky top-0 z-40 bg-white/90 backdrop-blur border-b border-gray-100">
    <a class="skip-link sr-only focus:not-sr-only focus:absolute focus:top-4 focus:left-4 focus:ring-2 focus:ring-brand-accent focus:bg-white focus:px-4 focus:py-2" href="#main-content">
        Saltar al contenido principal
    </a>
    <div class="container-narrow flex items-center justify-between py-3">
        <div class="flex items-center gap-3">
            <img src="<?php echo e($SiteConfig['logo_src']); ?>" alt="<?php echo e($SiteConfig['logo_alt']); ?>" class="h-12 w-auto">
            <span class="font-semibold text-lg text-gray-900"><?php echo e($SiteConfig['brand_name']); ?></span>
        </div>
        <button
            type="button"
            class="md:hidden inline-flex items-center gap-2 px-3 py-2 border border-gray-300 rounded-lg text-sm focus-ring"
            aria-expanded="false"
            aria-controls="primary-menu"
            data-js="nav-toggle"
            data-open-label="<?php echo e($Messages['nav_open']); ?>"
            data-close-label="<?php echo e($Messages['nav_close']); ?>"
        >
            <span class="nav-toggle-label"><?php echo e($Messages['nav_open']); ?></span>
            <span aria-hidden="true" class="h-0.5 w-5 bg-gray-800 block"></span>
        </button>
        <nav class="hidden md:flex" aria-label="Primary">
            <ul class="flex items-center gap-6">
                <?php foreach ($Navigation as $item): ?>
                    <li>
                        <a href="<?php echo e($item['href']); ?>" class="text-sm font-medium text-gray-700 hover:text-gray-900 focus-ring">
                            <?php echo e($item['label']); ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </nav>
    </div>
    <nav id="primary-menu" class="mobile-nav hidden md:hidden border-t border-gray-100" aria-label="Primary">
        <ul class="flex flex-col gap-2 px-4 py-3" data-js="nav-menu">
            <?php foreach ($Navigation as $item): ?>
                <li>
                    <a href="<?php echo e($item['href']); ?>" class="block px-3 py-2 rounded-lg text-gray-800 hover:bg-gray-100 focus-ring">
                        <?php echo e($item['label']); ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </nav>
</header>
<main id="main-content" class="min-h-screen">
