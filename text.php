<?php
declare(strict_types=1);

require_once __DIR__ . '/php/bootstrap.php';

$currentPage = 'text';

$Hero = [
    'badge'               => 'Guías y recursos',
    'title'               => 'Textos prácticos para reforzar la seguridad de tu hogar o negocio',
    'subtitle'            => 'Artículos breves y claros sobre mantenimiento de cerraduras, protocolos de emergencia y consejos para prevenir riesgos.',
    'primary_cta_label'   => 'Explorar artículos',
    'primary_cta_href'    => '#contenidos',
    'secondary_cta_label' => 'Hablar con un experto',
    'secondary_cta_href'  => $SiteConfig['phone_href'],
    'bullets'             => [
        ['icon' => '🛠️', 'title' => 'Guías rápidas', 'text' => 'Pasos claros para reaccionar ante emergencias.'],
        ['icon' => '🔒', 'title' => 'Prevención', 'text' => 'Checklist para puertas, llaves y sistemas inteligentes.'],
        ['icon' => '🚘', 'title' => 'Automotriz', 'text' => 'Consejos para llaves con chip y cierres centralizados.'],
        ['icon' => '🏢', 'title' => 'Comercial', 'text' => 'Rutinas de seguridad para acceso de personal y clientes.'],
    ],
    'floating_label'      => 'Actualizado semanalmente',
    'floating_text'       => 'Seleccionamos tips accionables para mantener tus accesos seguros.'
];

$Articles = [
    [
        'title'       => 'Cómo actuar si pierdes tus llaves',
        'summary'     => 'Pasos inmediatos para minimizar riesgos, desde el bloqueo de copias hasta el reemplazo rápido.',
        'tag'         => 'Emergencia',
        'image'       => 'assets/img/placeholder.svg',
        'cta_label'   => 'Leer más',
        'cta_href'    => '#',
    ],
    [
        'title'       => 'Mantenimiento de cerraduras en temporada de lluvia',
        'summary'     => 'Limpieza, lubricación y ajustes preventivos para evitar atascos y corrosión.',
        'tag'         => 'Mantenimiento',
        'image'       => 'assets/img/placeholder.svg',
        'cta_label'   => 'Ver recomendaciones',
        'cta_href'    => '#',
    ],
    [
        'title'       => 'Guía rápida para llaves con chip',
        'summary'     => 'Qué hacer si tu llave deja de programar, cómo evitar daños y cuándo llamar a un técnico.',
        'tag'         => 'Automotriz',
        'image'       => 'assets/img/placeholder.svg',
        'cta_label'   => 'Revisar guía',
        'cta_href'    => '#',
    ],
];

require_once __DIR__ . '/partials/head.php';
require_once __DIR__ . '/partials/header.php';
require_once __DIR__ . '/partials/hero.php';
?>
<section id="contenidos" class="container-narrow">
    <div class="max-w-3xl space-y-4 animate-fade-up">
        <p class="badge-pill">Lecturas de 3 minutos</p>
        <h2 class="section-title">Aprende a blindar tus accesos con acciones simples</h2>
        <p class="section-subtitle">Seleccionamos las dudas más frecuentes de nuestros clientes y las convertimos en explicaciones claras, con imágenes que ilustran cada paso.</p>
    </div>
    <div class="grid-auto-fit mt-8">
        <?php foreach ($Articles as $article): ?>
            <article class="card-gradient relative animate-fade-up" style="animation-delay: 80ms;">
                <span class="ribbon"><?php echo e($article['tag']); ?></span>
                <div class="animated-image mb-4">
                    <img src="<?php echo e($article['image']); ?>" alt="<?php echo e($article['title']); ?>">
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2"><?php echo e($article['title']); ?></h3>
                <p class="text-gray-700 mb-4"><?php echo e($article['summary']); ?></p>
                <a href="<?php echo e($article['cta_href']); ?>" class="inline-flex items-center gap-2 text-brand-primary font-semibold focus-ring">
                    <?php echo e($article['cta_label']); ?>
                    <span aria-hidden="true">→</span>
                </a>
            </article>
        <?php endforeach; ?>
    </div>
</section>

<section class="container-narrow">
    <div class="grid gap-8 lg:grid-cols-2 items-center">
        <div class="space-y-4 animate-fade-up">
            <p class="badge-pill">Historias ilustradas</p>
            <h2 class="section-title">Imágenes animadas que muestran cada intervención</h2>
            <p class="section-subtitle">Observa cómo trabajamos en aperturas, rekey de cerraduras y programación de llaves inteligentes. Cada tarjeta incluye un pequeño micro-relato de la situación.</p>
            <ul class="space-y-3 text-gray-800">
                <li class="flex gap-3 items-start"><span class="text-amber-600">•</span> Hover en las imágenes para ver el efecto de luz y elevación.</li>
                <li class="flex gap-3 items-start"><span class="text-amber-600">•</span> Aprende qué herramientas usamos en cada paso.</li>
                <li class="flex gap-3 items-start"><span class="text-amber-600">•</span> Guarda las mini guías para tus protocolos internos.</li>
            </ul>
        </div>
        <div class="grid-auto-fit animate-fade-up" style="animation-delay: 100ms;">
            <div class="animated-image">
                <img src="assets/img/placeholder.svg" alt="Cambio de cerradura ilustrado">
            </div>
            <div class="animated-image">
                <img src="assets/img/placeholder.svg" alt="Programación de llave con chip">
            </div>
            <div class="animated-image">
                <img src="assets/img/placeholder.svg" alt="Apertura segura de puerta principal">
            </div>
        </div>
    </div>
</section>

<?php
require_once __DIR__ . '/partials/footer.php';
require_once __DIR__ . '/partials/scripts.php';
