<?php

declare(strict_types=1);

defined('KILIMOK') || exit;

$title = $company['name'] . t(
    ' — оренда змінних брудозахисних килимів у Києві',
    ' — replaceable dirt-trapping mat rental in Kyiv',
);

$siteUrl = 'https://' . $company['site'];

$jsonLd = [
    '@context' => 'https://schema.org',
    '@type' => 'LocalBusiness',
    'name' => $company['name'],
    'description' => $company['description'],
    'url' => $siteUrl . LANG_URLS[SITE_LANG],
    'email' => $company['email'],
    'telephone' => array_map(static fn (string $p): string => substr(tel_href($p), 4), $company['phones']),
    'foundingDate' => (string) $company['since'],
    'areaServed' => $company['city'],
    'address' => [
        '@type' => 'PostalAddress',
        'streetAddress' => $company['address'],
        'addressLocality' => $company['city'],
        'postalCode' => $company['postalCode'],
        'addressCountry' => 'UA',
    ],
];

?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= e($title) ?></title>
    <meta name="description" content="<?= e($company['description']) ?>">
    <meta name="theme-color" content="#b23029">

    <meta property="og:type" content="website">
    <meta property="og:locale" content="<?= e(t('uk_UA', 'en_US')) ?>">
    <meta property="og:title" content="<?= e($title) ?>">
    <meta property="og:description" content="<?= e($company['description']) ?>">
    <meta property="og:site_name" content="<?= e($company['name']) ?>">

    <link rel="canonical" href="<?= e($siteUrl . LANG_URLS[SITE_LANG]) ?>">
    <?php foreach (LANG_URLS as $lang => $url): ?>
        <link rel="alternate" hreflang="<?= e($lang) ?>" href="<?= e($siteUrl . $url) ?>">
    <?php endforeach; ?>
    <link rel="alternate" hreflang="x-default" href="<?= e($siteUrl . LANG_URLS['uk']) ?>">

    <link rel="icon" href="<?= e(asset('assets/img/favicon.svg')) ?>" type="image/svg+xml">
    <link rel="stylesheet" href="<?= e(asset('assets/css/style.css')) ?>">

    <script type="application/ld+json">
        <?= json_encode($jsonLd, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) ?>
    </script>
</head>
