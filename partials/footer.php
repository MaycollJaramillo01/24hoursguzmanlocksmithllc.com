<?php
declare(strict_types=1);
?>
</main>
<footer class="bg-gray-900 text-white py-10">
    <div class="container-narrow grid gap-8 md:grid-cols-3">
        <div class="space-y-2">
            <h2 class="text-xl font-semibold"><?php echo e($SiteConfig['brand_name']); ?></h2>
            <p class="text-sm text-gray-300"><?php echo e($SiteConfig['address']); ?></p>
            <a class="block text-sm font-semibold text-white focus-ring" href="<?php echo e($SiteConfig['phone_href']); ?>"><?php echo e($SiteConfig['phone']); ?></a>
            <a class="block text-sm font-semibold text-white focus-ring" href="mailto:<?php echo e($SiteConfig['email']); ?>"><?php echo e($SiteConfig['email']); ?></a>
        </div>
        <div>
            <h3 class="text-lg font-semibold mb-3">Redes sociales</h3>
            <ul class="space-y-2">
                <?php foreach ($SocialLinks as $link): ?>
                    <li>
                        <a class="text-sm text-gray-300 hover:text-white focus-ring" href="<?php echo e($link['href']); ?>" target="_blank" rel="noreferrer noopener" aria-label="<?php echo e($link['aria']); ?>">
                            <?php echo e($link['label']); ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div>
            <h3 class="text-lg font-semibold mb-3">Enlaces</h3>
            <ul class="space-y-2">
                <?php foreach ($Footer['legal_links'] as $link): ?>
                    <li>
                        <a class="text-sm text-gray-300 hover:text-white focus-ring" href="<?php echo e($link['href']); ?>">
                            <?php echo e($link['label']); ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
    <div class="mt-8 border-t border-gray-800 pt-4 text-center text-sm text-gray-400">
        &copy; <?php echo date('Y'); ?> <?php echo e($SiteConfig['brand_name']); ?>. Todos los derechos reservados.
    </div>
</footer>
