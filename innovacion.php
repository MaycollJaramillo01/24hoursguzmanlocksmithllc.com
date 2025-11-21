<?php
declare(strict_types=1);

require_once __DIR__ . '/php/bootstrap.php';

$currentPage = 'innovacion';

$Hero = [
    'badge'               => 'Innovación en cerrajería',
    'title'               => 'Tecnología, rutas y experiencias visuales de nuestros proyectos',
    'subtitle'            => 'Historias de aperturas delicadas, upgrades a cerraduras inteligentes y rutas móviles optimizadas para llegar a tiempo.',
    'primary_cta_label'   => 'Ver despliegues',
    'primary_cta_href'    => '#casos',
    'secondary_cta_label' => 'Contactar ahora',
    'secondary_cta_href'  => $SiteConfig['phone_href'],
    'bullets'             => [
        ['icon' => '🚚', 'title' => 'Rutas móviles', 'text' => 'Cobertura en barrios clave y respuesta en minutos.'],
        ['icon' => '✨', 'title' => 'Efectos modernos', 'text' => 'Interacciones animadas que muestran cada proyecto.'],
        ['icon' => '🔐', 'title' => 'Alta seguridad', 'text' => 'Integración de cerraduras inteligentes y control de accesos.'],
    ],
    'floating_label'      => 'Logística optimizada',
    'floating_text'       => 'Panel de rutas y seguimiento en vivo para urgencias críticas.'
];

$Showcases = [
    [
        'title'   => 'Ruta express a zonas céntricas',
        'body'    => 'Coordinamos desplazamientos en 15 minutos para aperturas sin daños en oficinas y locales comerciales.',
        'badge'   => 'Ruta prioritaria',
        'image'   => 'assets/img/placeholder.svg',
    ],
    [
        'title'   => 'Actualización a cerraduras inteligentes',
        'body'    => 'Instalación de deadbolts digitales con controles remotos y respaldo mecánico certificado.',
        'badge'   => 'Smart upgrade',
        'image'   => 'assets/img/placeholder.svg',
    ],
    [
        'title'   => 'Programación avanzada de llaves automotrices',
        'body'    => 'Lectura de códigos y programaciones in situ para vehículos con inmovilizadores modernos.',
        'badge'   => 'Auto tech',
        'image'   => 'assets/img/placeholder.svg',
    ],
];

require_once __DIR__ . '/partials/head.php';
require_once __DIR__ . '/partials/header.php';
require_once __DIR__ . '/partials/hero.php';
?>
<section id="casos" class="container-narrow">
    <div class="max-w-3xl space-y-3 animate-fade-up">
        <p class="badge-pill">Rutas y casos destacados</p>
        <h2 class="section-title">Visualiza cómo resolvemos emergencias y mejoras programadas</h2>
        <p class="section-subtitle">Cada tarjeta combina texto claro con imágenes animadas para mostrar el antes y después de cada intervención.</p>
    </div>
    <div class="grid-auto-fit mt-8">
        <?php foreach ($Showcases as $showcase): ?>
            <article class="card-gradient relative animate-fade-up" style="animation-delay: 80ms;">
                <span class="ribbon"><?php echo e($showcase['badge']); ?></span>
                <div class="animated-image mb-4">
                    <img src="<?php echo e($showcase['image']); ?>" alt="<?php echo e($showcase['title']); ?>">
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2"><?php echo e($showcase['title']); ?></h3>
                <p class="text-gray-700"><?php echo e($showcase['body']); ?></p>
            </article>
        <?php endforeach; ?>
    </div>
</section>

<section class="container-narrow">
    <div class="grid gap-8 lg:grid-cols-2 items-center">
        <div class="animated-image animate-fade-up">
            <img src="assets/img/placeholder.svg" alt="Mapa de rutas móviles">
        </div>
        <div class="space-y-4 animate-fade-up" style="animation-delay: 80ms;">
            <p class="badge-pill">Experiencia de ruta</p>
            <h2 class="section-title">Hero visual con sombras suaves y efectos hover</h2>
            <p class="section-subtitle">Creamos un hero moderno que combina gradientes, tarjetas flotantes y animaciones de entrada para presentar los mensajes clave y la logística.</p>
            <div class="glass-card p-4 shadow-soft">
                <p class="text-gray-800 font-semibold mb-2">Detalles de estilo</p>
                <ul class="space-y-2 text-gray-700">
                    <li class="flex gap-2 items-start"><span class="text-amber-600">•</span> Gradientes combinados con orbes difuminados que iluminan el contenido.</li>
                    <li class="flex gap-2 items-start"><span class="text-amber-600">•</span> Tarjetas con efecto glassmorphism y sombras suaves para resaltar información.</li>
                    <li class="flex gap-2 items-start"><span class="text-amber-600">•</span> Animaciones <code>hover</code> y de entrada para imágenes y botones.</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<?php
require_once __DIR__ . '/partials/footer.php';
require_once __DIR__ . '/partials/scripts.php';
