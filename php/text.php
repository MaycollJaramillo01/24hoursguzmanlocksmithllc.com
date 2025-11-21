<?php
declare(strict_types=1);

if (!defined('APP_INIT')) {
    http_response_code(403);
    exit('Forbidden');
}

$full_name  = $_SERVER['PHP_SELF'];
$name_array = explode('/', $full_name);
$count      = count($name_array);
$page_name  = $name_array[$count - 1];

if ($page_name === 'index.php') {
    $namepage = 'Home';
} elseif ($page_name === 'about.php') {
    $namepage = 'About';
} elseif ($page_name === 'services.php') {
    $namepage = 'Services';
} elseif ($page_name === 'testimonials.php') {
    $namepage = 'Testimonials';
} elseif ($page_name === 'projects.php') {
    $namepage = 'Projects';
} elseif ($page_name === 'thank-you.php') {
    $namepage = 'Thank You';
} elseif ($page_name === '404.php') {
    $namepage = 'Not Found';
} elseif ($page_name === 'contact.php') {
    $namepage = 'Contact Us';
} else {
    $namepage = ucfirst(str_replace('.php', '', $page_name));
}

$BrandColors = [
    'primary'   => '#111827',
    'secondary' => '#1f2937',
    'accent'    => '#f59e0b',
    'bg'        => '#ffffff',
    'text'      => '#111827',
];

$BrandCSSVars = sprintf(
    ':root { --brand-primary: %1$s; --brand-secondary: %2$s; --brand-accent: %3$s; --bg-body: %4$s; --text-main: %5$s; --radius-lg: 1.5rem; --section-space-y: 4rem; --max-width: 1120px; }',
    $BrandColors['primary'],
    $BrandColors['secondary'],
    $BrandColors['accent'],
    $BrandColors['bg'],
    $BrandColors['text']
);

$SiteConfig = [
    'lang'       => 'es',
    'charset'    => 'UTF-8',
    'base_url'   => 'https://24hoursguzmanlocksmithllc.com',
    'brand_name' => '24 Hours Guzman Locksmith LLC',
    'phone'      => '+1 555 000 0000',
    'phone_href' => 'tel:+15550000000',
    'email'      => 'info@24hoursguzmanlocksmithllc.com',
    'address'    => '123 Main Street, Your City, State',
    'logo_src'   => 'assets/img/placeholder.svg',
    'logo_alt'   => '24 Hours Guzman Locksmith LLC logo',
    'favicon'    => 'assets/img/placeholder.svg',
    'hero_image' => 'assets/img/placeholder.svg',
    'og_image'   => 'assets/img/placeholder.svg'
];

$SeoMeta = [
    'home' => [
        'title'       => $SiteConfig['brand_name'] . ' | ' . $namepage,
        'description' => 'Cerrajería móvil 24/7 para aperturas, cambios de cerradura y duplicados de llaves residenciales, comerciales y automotrices.',
        'keywords'    => 'cerrajero 24 horas, locksmith, apertura de puertas, cambio de cerradura, llaves de auto',
        'canonical'   => $SiteConfig['base_url'] . '/'
    ],
    'text' => [
        'title'       => $SiteConfig['brand_name'] . ' | Guías y recursos',
        'description' => 'Plantillas con textos prácticos, imágenes animadas y rutas visuales para reforzar la seguridad de tus accesos.',
        'keywords'    => 'cerrajería, tips de seguridad, guías de cerraduras, animaciones de cerrajero',
        'canonical'   => $SiteConfig['base_url'] . '/text.php'
    ],
    'innovacion' => [
        'title'       => $SiteConfig['brand_name'] . ' | Innovación y rutas móviles',
        'description' => 'Casos visuales con héroes animados, rutas de atención móvil y experiencias interactivas de cerrajería.',
        'keywords'    => 'cerrajero innovador, hero animado, rutas móviles, cerraduras inteligentes',
        'canonical'   => $SiteConfig['base_url'] . '/innovacion.php'
    ]
];

$Navigation = [
    ['label' => 'Inicio',      'href' => '/index.php#hero'],
    ['label' => 'Servicios',   'href' => '/index.php#services'],
    ['label' => 'Proceso',     'href' => '/index.php#process'],
    ['label' => 'Proyectos',   'href' => '/index.php#projects'],
    ['label' => 'Guías',       'href' => '/text.php'],
    ['label' => 'Innovación',  'href' => '/innovacion.php'],
    ['label' => 'Testimonios', 'href' => '/index.php#testimonials'],
    ['label' => 'Contacto',    'href' => '/index.php#contact']
];

$UI = [
    'skip_link_label'     => 'Saltar al contenido principal',
    'contact_card_title'  => 'Contacto directo',
    'contact_phone_label' => 'Teléfono',
    'contact_email_label' => 'Correo',
    'contact_address'     => 'Dirección',
    'social_title'        => 'Redes sociales',
    'links_title'         => 'Enlaces',
    'copyright_notice'    => 'Todos los derechos reservados.',
];

$Hero = [
    'badge'               => 'Cerrajería móvil 24/7',
    'title'               => 'Aperturas y cambios de cerradura rápidos y seguros',
    'subtitle'            => 'Respondemos en minutos para solucionar urgencias residenciales, comerciales y automotrices con técnicos certificados.',
    'primary_cta_label'   => 'Llamar ahora',
    'primary_cta_href'    => $SiteConfig['phone_href'],
    'secondary_cta_label' => 'Solicitar servicio',
    'secondary_cta_href'  => '#contact'
];

$Services = [
    'section_title'    => 'Servicios principales',
    'section_subtitle' => 'Cerrajería confiable para hogares, negocios y vehículos.',
    'items'            => [
        [
            'title'       => 'Apertura de puertas 24/7',
            'description' => 'Atención de emergencias para puertas residenciales y comerciales sin dañar cerraduras ni marcos.',
            'icon_alt'    => 'Ícono de apertura de puertas'
        ],
        [
            'title'       => 'Cambio y reparación de cerraduras',
            'description' => 'Instalación, mantenimiento y rekey de cerraduras de alta seguridad para proteger tus espacios.',
            'icon_alt'    => 'Ícono de cerraduras'
        ],
        [
            'title'       => 'Automotive locksmith',
            'description' => 'Programación y duplicado de llaves, apertura de autos y reparación de cilindros de encendido.',
            'icon_alt'    => 'Ícono de cerrajería automotriz'
        ]
    ]
];

$About = [
    'section_title'    => 'Quiénes somos',
    'section_subtitle' => 'Cerrajeros locales de confianza, disponibles todo el día.',
    'body'             => 'Atendemos urgencias y servicios programados con herramientas profesionales, protocolos seguros y precios transparentes.'
];

$ProcessSteps = [
    'section_title'    => 'Cómo trabajamos',
    'section_subtitle' => 'Un proceso claro y transparente para cada servicio.',
    'items'            => [
        ['title' => 'Diagnóstico inmediato', 'description' => 'Confirmamos el tipo de cerradura y la situación para definir la solución más rápida.'],
        ['title' => 'Presupuesto transparente',   'description' => 'Compartimos el costo antes de empezar para que decidas con total confianza.'],
        ['title' => 'Trabajo seguro y limpio',     'description' => 'Usamos técnicas sin daños y componentes certificados para prolongar la vida de tus cerraduras.'],
        ['title' => 'Entrega y asesoría',       'description' => 'Probamos cada acceso contigo y dejamos recomendaciones de seguridad y mantenimiento.']
    ]
];

$Gallery = [
    'section_id'       => 'projects',
    'section_title'    => 'Proyectos recientes',
    'section_subtitle' => 'Casos resueltos de aperturas, cambios de cerradura y cerrajería automotriz.',
    'items'            => [
        [
            'image'    => 'assets/img/placeholder.svg',
            'alt'      => 'Cambio de cerradura en puerta principal',
            'label'    => 'Rekey residencial completo',
            'category' => 'Hogar'
        ],
        [
            'image'    => 'assets/img/placeholder.svg',
            'alt'      => 'Instalación de cerradura inteligente',
            'label'    => 'Upgrade a cerradura digital',
            'category' => 'Comercial'
        ],
        [
            'image'    => 'assets/img/placeholder.svg',
            'alt'      => 'Cerrajero programando llave de auto',
            'label'    => 'Programación de llave con chip',
            'category' => 'Automotriz'
        ],
        [
            'image'    => 'assets/img/placeholder.svg',
            'alt'      => 'Reparación de cerradura comercial',
            'label'    => 'Mantenimiento de barras antipánico',
            'category' => 'Comercial'
        ]
    ]
];

$ContactForm = [
    'section_title'    => 'Solicita tu servicio',
    'section_subtitle' => 'Cuéntanos qué necesitas y coordinamos una visita o llamada.',
    'action'           => 'php/contact-handler.php',
    'method'           => 'post',
    'fields'           => [
        'name' => [
            'label'       => 'Nombre completo',
            'placeholder' => 'Ingresa tu nombre completo'
        ],
        'email' => [
            'label'       => 'Correo electrónico',
            'placeholder' => 'Ingresa tu correo'
        ],
        'phone' => [
            'label'       => 'Teléfono',
            'placeholder' => 'Ingresa tu número de contacto'
        ],
        'service' => [
            'label'       => 'Servicio de interés',
            'placeholder' => 'Selecciona un servicio',
            'options'     => [
                'emergency'  => 'Emergencia 24/7',
                'residential' => 'Cerrajería residencial',
                'commercial'  => 'Cerrajería comercial',
                'automotive'  => 'Cerrajería automotriz',
                'other'       => 'Otro servicio'
            ]
        ],
        'message' => [
            'label'       => 'Descripción del servicio',
            'placeholder' => 'Describe brevemente tu solicitud o necesidad'
        ]
    ],
    'submit_label' => 'Enviar solicitud'
];

$Footer = [
    'social_title' => 'Redes sociales',
    'links_title'  => 'Enlaces',
    'copyright'    => 'Todos los derechos reservados.',
    'legal_links' => [
        ['label' => 'Aviso legal', 'href' => '#'],
        ['label' => 'Política de privacidad', 'href' => '#']
    ]
];

$SocialLinks = [
    ['label' => 'Facebook', 'href' => 'https://facebook.com', 'aria' => 'Facebook oficial'],
    ['label' => 'LinkedIn', 'href' => 'https://linkedin.com', 'aria' => 'Perfil en LinkedIn'],
    ['label' => 'Instagram', 'href' => 'https://instagram.com', 'aria' => 'Instagram de la empresa']
];

$Messages = [
    'cta_title'             => '¿Listo para recuperar el acceso?',
    'cta_body'              => 'Llámanos para aperturas, cambios de cerradura, duplicado de llaves y soluciones de seguridad confiables.',
    'cta_primary_label'     => 'Hablar con un cerrajero',
    'cta_primary_href'      => $SiteConfig['phone_href'],
    'cta_secondary_label'   => 'Ver servicios',
    'cta_secondary_href'    => '#services',
    'testimonials_title'    => 'Testimonios',
    'testimonials_subtitle' => 'Clientes que confiaron en nuestros servicios especializados.',
    'no_testimonials'       => 'Aún no hay testimonios disponibles. Vuelve pronto para conocer la experiencia de nuestros clientes.',
    'contact_success'       => 'Gracias por tu mensaje. Nuestro equipo se pondrá en contacto contigo muy pronto.',
    'contact_error_validation' => 'Por favor revisa los campos obligatorios y verifica la información ingresada.',
    'contact_error_generic' => 'Ocurrió un error al enviar tu mensaje. Intenta nuevamente más tarde.',
    'nav_open'              => 'Abrir navegación',
    'nav_close'             => 'Cerrar navegación',
    'contact_email_subject' => 'Nueva solicitud de contacto'
];
