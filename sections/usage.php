<?php

declare(strict_types=1);

defined('KILIMOK') || exit;

$places = [
    t('входи в будівлі, магазини, ресторани, кав’ярні', 'entrances to buildings, shops, restaurants and cafés'),
    t('готелі і офіси', 'hotels and offices'),
    t('аптеки, лабораторії, клініки', 'pharmacies, laboratories, clinics'),
    t('сходові клітини в офісних будівлях та ліфти', 'staircases and elevators in office buildings'),
    t('гардеробні, примірочні', 'cloakrooms, fitting rooms'),
    t('місця у виробничих цехах', 'areas in production workshops'),
];

?>
<section class="section section--muted" id="usage">
    <div class="container">
        <h2 class="section__title">
            <?= e(t('До типових місць використання килимів відносяться', 'Typical places to use mats')) ?>
        </h2>
        <ul class="checklist">
            <?php foreach ($places as $place): ?>
                <li class="checklist__item"><?= e($place) ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>
