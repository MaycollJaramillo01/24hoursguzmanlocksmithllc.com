<?php
declare(strict_types=1);

/**
 * @param string $page
 * @return array<string, string>
 */
function seo_get_meta(string $page): array
{
    global $SeoMeta;
    return $SeoMeta[$page] ?? [
        'title' => '',
        'description' => '',
        'keywords' => '',
        'canonical' => ''
    ];
}

/**
 * Genera datos JSON-LD para la organización y el sitio.
 *
 * @return string
 */
function seo_json_ld(): string
{
    global $SiteConfig, $SocialLinks;

    $organization = [
        '@context' => 'https://schema.org',
        '@type'    => 'Organization',
        'name'     => $SiteConfig['brand_name'] ?? '',
        'url'      => $SiteConfig['base_url'] ?? '',
        'logo'     => $SiteConfig['logo_src'] ?? '',
        'sameAs'   => array_map(static function ($link) {
            return $link['href'] ?? '';
        }, $SocialLinks ?? [])
    ];

    $website = [
        '@context' => 'https://schema.org',
        '@type'    => 'WebSite',
        'name'     => $SiteConfig['brand_name'] ?? '',
        'url'      => $SiteConfig['base_url'] ?? '',
        'potentialAction' => [
            '@type' => 'SearchAction',
            'target' => ($SiteConfig['base_url'] ?? '') . '/?s={search_term_string}',
            'query-input' => 'required name=search_term_string'
        ]
    ];

    return json_encode([$organization, $website], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
}
