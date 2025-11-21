<?php
declare(strict_types=1);

/**
 * @return array<int, array<string, mixed>>
 */
function load_testimonials(): array
{
    $file = __DIR__ . '/../data/testimonials.json';
    if (!is_readable($file)) {
        return [];
    }

    $json = file_get_contents($file);
    if ($json === false || trim($json) === '') {
        return [];
    }

    try {
        $data = json_decode($json, true, 512, JSON_THROW_ON_ERROR);
        return is_array($data) ? $data : [];
    } catch (Throwable $e) {
        return [];
    }
}

/**
 * @param array<string, mixed> $testimonial
 */
function save_testimonial(array $testimonial): bool
{
    $required = ['name', 'message', 'rating', 'date'];
    foreach ($required as $field) {
        if (!isset($testimonial[$field]) || $testimonial[$field] === '') {
            return false;
        }
    }

    $file = __DIR__ . '/../data/testimonials.json';
    $existing = load_testimonials();
    $existing[] = $testimonial;

    $json = json_encode($existing, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    if ($json === false) {
        return false;
    }

    return file_put_contents($file, $json, LOCK_EX) !== false;
}
