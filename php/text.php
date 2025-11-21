<?php
declare(strict_types=1);

if (!defined('APP_INIT')) {
    http_response_code(403);
    exit('Forbidden');
}

$SiteConfig = [
    'lang'       => 'es',
    'charset'    => 'UTF-8',
    'base_url'   => 'https://ejemplo.com',
    'brand_name' => 'Construction & Cleaning Experts',
    'phone'      => '+1 555 000 0000',
    'phone_href' => 'tel:+15550000000',
    'email'      => 'info@ejemplo.com',
    'address'    => '123 Main Street, City, State',
    'logo_src'   => 'assets/img/placeholder.svg',
    'logo_alt'   => 'Construction & Cleaning Experts logo',
    'favicon'    => 'assets/img/placeholder.svg',
    'hero_image' => 'assets/img/placeholder.svg',
    'og_image'   => 'assets/img/placeholder.svg'
];

$SeoMeta = [
    'home' => [
        'title'       => 'Servicios de construcción, roofing y limpieza | Construction & Cleaning Experts',
        'description' => 'Empresa especializada en construcción, roofing y limpieza profesional para hogares y negocios. Proyectos de alta calidad, seguros y puntuales.',
        'keywords'    => 'construcción, roofing, limpieza, contractors, remodelación, mantenimiento',
        'canonical'   => 'https://ejemplo.com/'
    ]
];

$Navigation = [
    ['label' => 'Inicio',      'href' => '#hero'],
    ['label' => 'Servicios',   'href' => '#services'],
    ['label' => 'Proyectos',   'href' => '#projects'],
    ['label' => 'Testimonios', 'href' => '#testimonials'],
    ['label' => 'Contacto',    'href' => '#contact']
];

$Hero = [
    'badge'               => 'Contratistas para tu hogar y negocio',
    'title'               => 'Soluciones profesionales en construcción, roofing y limpieza',
    'subtitle'            => 'Proyectos de alta calidad, equipos certificados y acompañamiento completo desde la planificación hasta la entrega final.',
    'primary_cta_label'   => 'Solicitar cotización',
    'primary_cta_href'    => '#contact',
    'secondary_cta_label' => 'Ver servicios',
    'secondary_cta_href'  => '#services'
];

$Services = [
    'section_title'    => 'Servicios principales',
    'section_subtitle' => 'Cobertura completa para proyectos residenciales y comerciales.',
    'items'            => [
        [
            'title'       => 'Construcción y remodelación',
            'description' => 'Diseño y ejecución de proyectos de construcción y remodelación, cumpliendo normas de seguridad y calidad.',
            'icon_alt'    => 'Ícono de construcción'
        ],
        [
            'title'       => 'Roofing y reparación de techos',
            'description' => 'Instalación, reparación y mantenimiento de techos para proteger tu inversión frente a filtraciones y clima extremo.',
            'icon_alt'    => 'Ícono de roofing'
        ],
        [
            'title'       => 'Limpieza residencial y comercial',
            'description' => 'Equipos especializados en limpieza profunda para hogares, oficinas, locales y proyectos post-construcción.',
            'icon_alt'    => 'Ícono de limpieza'
        ]
    ]
];

$About = [
    'section_title'    => 'Quiénes somos',
    'section_subtitle' => 'Equipo especializado en construcción, roofing y limpieza.',
    'body'             => 'Texto descriptivo sobre la empresa, experiencia, áreas de servicio y enfoque en seguridad, calidad y comunicación.'
];

$ProcessSteps = [
    'section_title'    => 'Cómo trabajamos',
    'section_subtitle' => 'Un proceso claro y transparente para cada proyecto.',
    'items'            => [
        ['title' => '01. Evaluación y visita técnica', 'description' => 'Revisión en sitio para entender el alcance y las necesidades específicas de cada proyecto.'],
        ['title' => '02. Propuesta y planificación',   'description' => 'Entrega de propuesta detallada con cronograma, costos y materiales recomendados.'],
        ['title' => '03. Ejecución y supervisión',     'description' => 'Equipo especializado ejecuta con supervisión constante y controles de calidad.'],
        ['title' => '04. Entrega y seguimiento',       'description' => 'Cierre formal del proyecto y acompañamiento para mantenimiento o ajustes futuros.']
    ]
];

$Gallery = [
    'section_id'       => 'projects',
    'section_title'    => 'Proyectos recientes',
    'section_subtitle' => 'Ejemplos de trabajos en construcción, roofing y limpieza.',
    'items'            => [
        [
            'image'    => 'assets/img/placeholder.svg',
            'alt'      => 'Proyecto de remodelación de sala y cocina',
            'label'    => 'Remodelación interior residencial',
            'category' => 'Construcción'
        ],
        [
            'image'    => 'assets/img/placeholder.svg',
            'alt'      => 'Proyecto de reemplazo completo de techo',
            'label'    => 'Instalación de nuevo roofing',
            'category' => 'Roofing'
        ],
        [
            'image'    => 'assets/img/placeholder.svg',
            'alt'      => 'Equipo de limpieza en oficina',
            'label'    => 'Limpieza profunda de oficinas',
            'category' => 'Limpieza'
        ],
        [
            'image'    => 'assets/img/placeholder.svg',
            'alt'      => 'Equipo instalando paneles de techo',
            'label'    => 'Refuerzo estructural de techos',
            'category' => 'Roofing'
        ]
    ]
];

$ContactForm = [
    'section_title'    => 'Solicita tu cotización',
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
                'construction' => 'Construcción y remodelación',
                'roofing'      => 'Roofing y reparación de techos',
                'cleaning'     => 'Limpieza residencial y comercial',
                'other'        => 'Otro servicio'
            ]
        ],
        'message' => [
            'label'       => 'Descripción del proyecto',
            'placeholder' => 'Describe brevemente tu proyecto o necesidad'
        ]
    ],
    'submit_label' => 'Enviar solicitud'
];

$Footer = [
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
    'cta_title'             => '¿Listo para iniciar tu proyecto?',
    'cta_body'              => 'Agenda una visita técnica o recibe una propuesta personalizada para construcción, roofing o limpieza.',
    'cta_primary_label'     => 'Agendar llamada',
    'cta_primary_href'      => '#contact',
    'cta_secondary_label'   => 'Ver proyectos',
    'cta_secondary_href'    => '#projects',
    'testimonials_title'    => 'Testimonios',
    'testimonials_subtitle' => 'Clientes que confiaron en nuestros servicios especializados.',
    'no_testimonials'       => 'Aún no hay testimonios disponibles. Vuelve pronto para conocer la experiencia de nuestros clientes.',
    'contact_success'       => 'Gracias por tu mensaje. Nuestro equipo se pondrá en contacto contigo muy pronto.',
    'contact_error_validation' => 'Por favor revisa los campos obligatorios y verifica la información ingresada.',
    'contact_error_generic' => 'Ocurrió un error al enviar tu mensaje. Intenta nuevamente más tarde.',
    'nav_open'              => 'Abrir navegación',
    'nav_close'             => 'Cerrar navegación'
];
