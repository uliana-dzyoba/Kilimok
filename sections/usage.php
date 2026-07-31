<?php

declare(strict_types=1);

defined('KILIMOK') || exit;

$places = [
    'входи в будівлі, магазини, ресторани',
    'готелі і офіси',
    'коридори',
    'сходові клітини в офісних будівлях та ліфти',
    'місця з постійною вологістю (мийки, їдальні)',
    'біля автоматів-розподільників кави, чаю',
    'місця у виробничих цехах',
];

?>
<section class="section section--muted" id="usage">
    <div class="container">
        <h2 class="section__title">До типових місць використання килимів відносяться</h2>
        <ul class="checklist">
            <?php foreach ($places as $place): ?>
                <li class="checklist__item"><?= e($place) ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>
