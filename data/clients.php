<?php

declare(strict_types=1);

defined('KILIMOK') || exit;

/**
 * Клієнти для каруселі (групи — за видами закладів, порядок зберігається).
 * Логотипи лежать у assets/img/logos/<файл>.png — полотно 480×320 (3:2), прозорий фон,
 * логотип по центру з полями. Якщо файлу не вказано (null), показується плейсхолдер з назвою.
 */
$groups = [
    'ТРЦ' => [
        'Блокбастер' => 'blockbuster',
        'Променада центр' => 'promenada',
    ],
    'Магазини' => [
        'THRASH!ТРАШ!' => 'thrash',
        'МегаМаркет' => 'megamarket',
        'Велмарт' => 'velmart',
        'Karl Lagerfeld' => 'karl-lagerfeld',
        'HUGO' => 'hugo',
        'Levi’s' => 'levis',
        'Riot Division' => 'riot-division',
        'Територія мінімальних цін' => 'termincin',
        'EconomClass' => 'economclass',
    ],
    'Банки' => [
        'Raiffeisen Bank' => 'raiffeisen',
        'Банк Кредит Дніпро' => 'credit-dnipro',
        'Європейський Промисловий Банк' => 'europrombank',
    ],
    'Ресторани' => [
        'Lviv Croissants' => 'lviv-croissants',
        'Cafeboutique' => 'cafeboutique',
    ],
    'Мед заклади' => [
        'Сінево' => 'synevo',
        'CSD LAB' => 'csd-lab',
        'IMD медична лабораторія' => 'imd',
        'Оберіг' => 'oberig',
        'Гармонія здоров’я' => 'harmony-health',
        'OCHI CLINIC' => 'ochi-clinic',
        'Файна Клініка' => 'fajna-clinic',
        'Genesis ветеринарний шпиталь' => 'genesis',
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
