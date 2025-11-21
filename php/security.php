<?php
declare(strict_types=1);

/**
 * Escapa valores para salida HTML.
 */
function e(?string $value): string
{
    return htmlspecialchars((string) ($value ?? ''), ENT_QUOTES, 'UTF-8');
}

function sanitize_string(?string $value): string
{
    $value = $value ?? '';
    return trim(filter_var($value, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES));
}

function sanitize_email(?string $value): string
{
    $value = $value ?? '';
    return trim(filter_var($value, FILTER_SANITIZE_EMAIL));
}

function sanitize_phone(?string $value): string
{
    $value = $value ?? '';
    $digits = preg_replace('/[^\d+]/', '', $value);
    return $digits ?? '';
}

function sanitize_textarea(?string $value): string
{
    $value = $value ?? '';
    return trim(filter_var($value, FILTER_SANITIZE_FULL_SPECIAL_CHARS));
}
