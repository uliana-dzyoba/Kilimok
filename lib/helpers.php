<?php

declare(strict_types=1);

defined('KILIMOK') || exit;

/** Екранування для HTML-контексту. */
function e(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

/** Шлях до статичного файлу з міткою версії, щоб оминути кеш браузера. */
function asset(string $path): string
{
    $relative = '/' . ltrim($path, '/');
    $absolute = SITE_ROOT . $relative;
    $version = is_file($absolute) ? (string) filemtime($absolute) : SITE_VERSION;

    return $relative . '?v=' . $version;
}

/** «(044) 331-58-25» => «tel:+380443315825» */
function tel_href(string $phone): string
{
    $digits = preg_replace('/\D+/', '', $phone) ?? '';

    if (str_starts_with($digits, '0')) {
        $digits = '38' . $digits;
    }

    return 'tel:+' . $digits;
}

/**
 * Українське відмінювання числівників: plural(4, 'обмін', 'обміни', 'обмінів').
 */
function plural(int $n, string $one, string $few, string $many): string
{
    $mod100 = abs($n) % 100;
    $mod10 = $mod100 % 10;

    if ($mod100 >= 11 && $mod100 <= 14) {
        return $many;
    }

    return match (true) {
        $mod10 === 1 => $one,
        $mod10 >= 2 && $mod10 <= 4 => $few,
        default => $many,
    };
}

/** «1100» => «1 100 грн» — нерозривний пробіл, як у прайсі листівки. */
function price(int $uah): string
{
    return number_format($uah, 0, ',', "\u{00A0}") . "\u{00A0}грн";
}
