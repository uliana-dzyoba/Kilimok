<?php

declare(strict_types=1);

defined('KILIMOK') || exit;

/**
 * Контактні та загальні дані компанії
 */
return [
    'name' => t('Килимок', 'Kilimok'),
    'tagline' => t('оренда килимів', 'mat rental'),
    'since' => 2006,
    'city' => t('Київ', 'Kyiv'),
    'address' => t('вул. Нижньоюрківська, 31-а', '31-a Nyzhnioiurkivska St.'),
    'addressFull' => t('м. Київ, вул. Нижньоюрківська, 31-а', '31-a Nyzhnioiurkivska St., Kyiv'),
    'postalCode' => '04080',
    'phones' => [
        '(067) 961-62-49',
        '(067) 506-48-35',
    ],
    /** Номер, до якого прив'язані Viber і Telegram. */
    'messengerPhone' => '(067) 961-62-49',
    'email' => 'odzyoba@ukr.net',
    'site' => 'kilimok.com.ua',
    'mapUrl' => 'https://maps.google.com/?q=' . rawurlencode('Київ, вул. Нижньоюрківська, 31-а'),
    'description' => t(
        'Оренда змінних брудозахисних килимів для входів у магазини, банки, '
            . 'ресторани, готелі та офіси. Прання, доставка й регулярна заміна килимів у Києві.',
        'Rental of replaceable dirt-trapping mats for the entrances of shops, banks, '
            . 'restaurants, hotels and offices. Washing, delivery and regular mat replacement in Kyiv.',
    ),
];
