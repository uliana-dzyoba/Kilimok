<?php

declare(strict_types=1);

defined('KILIMOK') || exit;

/**
 * Клієнти для каруселі (групи — за видами закладів, порядок зберігається).
 * Логотипи лежать у assets/img/logos/<файл>.png — полотно 480×320 (3:2), прозорий фон,
 * логотип по центру з полями. Якщо файлу не вказано (null), показується плейсхолдер з назвою.
 * Назва клієнта — це alt логотипа, тому українські назви мають англійський варіант через t().
 */
$groups = [
    'ТРЦ' => [
        t('Блокбастер', 'Blockbuster') => 'blockbuster',
        t('Променада центр', 'Promenada Center') => 'promenada',
    ],
    'Магазини' => [
        'THRASH!ТРАШ!' => 'thrash',
        t('МегаМаркет', 'MegaMarket') => 'megamarket',
        t('Велмарт', 'Velmart') => 'velmart',
        'Karl Lagerfeld' => 'karl-lagerfeld',
        'HUGO' => 'hugo',
        'Levi’s' => 'levis',
        'Riot Division' => 'riot-division',
        t('Територія мінімальних цін', 'Territory of Minimum Prices') => 'termincin',
        'EconomClass' => 'economclass',
    ],
    'Банки' => [
        'Raiffeisen Bank' => 'raiffeisen',
        t('Банк Кредит Дніпро', 'Bank Credit Dnipro') => 'credit-dnipro',
        t('Європейський Промисловий Банк', 'European Industrial Bank') => 'europrombank',
    ],
    'Ресторани' => [
        'Lviv Croissants' => 'lviv-croissants',
        'Cafeboutique' => 'cafeboutique',
    ],
    'Мед заклади' => [
        t('Сінево', 'Synevo') => 'synevo',
        'CSD LAB' => 'csd-lab',
        t('IMD медична лабораторія', 'IMD Medical Laboratory') => 'imd',
        t('Оберіг', 'Oberig') => 'oberig',
        t('Гармонія здоров’я', 'Harmony of Health') => 'harmony-health',
        'OCHI CLINIC' => 'ochi-clinic',
        t('Файна Клініка', 'Fajna Clinic') => 'fajna-clinic',
        t('Genesis ветеринарний шпиталь', 'Genesis Veterinary Hospital') => 'genesis',
    ],
    'Автосалони' => [
        'Hyundai' => 'hyundai',
        'Toyota' => 'toyota',
    ],
    'Готелі' => [
        'Senator Hotels & Apartments' => 'senator',
    ],
    'Компанії' => [
        'Imperial Brands' => 'imperial-brands',
        'PERI' => 'peri',
        'RIM Group' => 'rim',
    ],
];

$logos = [];

foreach ($groups as $clients) {
    foreach ($clients as $name => $file) {
        $logos[] = new ClientLogo($name, $file !== null ? "assets/img/logos/{$file}.png" : null);
    }
}

return $logos;
