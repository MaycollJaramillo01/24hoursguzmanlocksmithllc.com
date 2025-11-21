<?php
declare(strict_types=1);

$meta = seo_get_meta($currentPage);
?>
<!DOCTYPE html>
<html lang="<?php echo e($SiteConfig['lang'] ?? 'es'); ?>">
<head>
    <meta charset="<?php echo e($SiteConfig['charset'] ?? 'UTF-8'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo e($meta['title'] ?? ''); ?></title>
    <?php if (!empty($meta['description'])): ?>
        <meta name="description" content="<?php echo e($meta['description']); ?>">
    <?php endif; ?>
    <?php if (!empty($meta['keywords'])): ?>
        <meta name="keywords" content="<?php echo e($meta['keywords']); ?>">
    <?php endif; ?>
    <?php if (!empty($meta['canonical'])): ?>
        <link rel="canonical" href="<?php echo e($meta['canonical']); ?>">
    <?php endif; ?>
    <meta property="og:title" content="<?php echo e($meta['title'] ?? ''); ?>">
    <meta property="og:description" content="<?php echo e($meta['description'] ?? ''); ?>">
    <meta property="og:image" content="<?php echo e($SiteConfig['og_image'] ?? ''); ?>">
    <meta property="og:url" content="<?php echo e($meta['canonical'] ?? $SiteConfig['base_url'] ?? ''); ?>">
    <meta property="og:type" content="website">
    <link rel="icon" href="<?php echo e($SiteConfig['favicon'] ?? 'assets/img/placeholder.svg'); ?>">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              brand: {
                primary: 'var(--brand-primary)',
                secondary: 'var(--brand-secondary)',
                accent: 'var(--brand-accent)'
              }
            },
            fontFamily: {
              heading: ['system-ui', 'sans-serif'],
              body: ['system-ui', 'sans-serif']
            }
          }
        }
      }
    </script>
    <link rel="stylesheet" href="assets/css/custom.css">
    <script type="application/ld+json">
<?php echo seo_json_ld(); ?>
    </script>
</head>
<body class="antialiased bg-white text-gray-900">
