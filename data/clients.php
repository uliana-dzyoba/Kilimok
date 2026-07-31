<?php

declare(strict_types=1);

defined('KILIMOK') || exit;

/**
 * Логотипи клієнтів для каруселі. Наразі — 12 нейтральних плейсхолдерів.
 * Щоб поставити справжні: покладіть SVG/PNG у assets/img/logos/ (пропорції ~3:2,
 * логотип по центру з полями) і замініть шлях та назву нижче.
 */
$logos = [];

for ($i = 1; $i <= 12; $i++) {
    $logos[] = new ClientLogo(
        sprintf('assets/img/logos/client-%02d.svg', $i),
        'Клієнт ' . $i,
    );
}

return $logos;
