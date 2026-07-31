<?php

declare(strict_types=1);

defined('KILIMOK') || exit;

/** @var list<int> $frequencies */
$frequencies = $prices['exchangesPerWeek'];
/** @var array<int,int> $perMonth */
$perMonth = $prices['exchangesPerMonth'];

/** «12 обмінів у місяць» — з правильним відмінком, як у легенді листівки. */
$monthLabel = static function (int $freq) use ($perMonth): string {
    $count = $perMonth[$freq];

    return $count . "\u{00A0}" . plural($count, 'обмін', 'обміни', 'обмінів') . ' у місяць';
};

/** Стисла версія для карток на мобільному: «2× на тиждень · 8 обмінів/міс». */
$shortLabel = static function (int $freq) use ($perMonth): string {
    $count = $perMonth[$freq];

    return $freq . "×\u{00A0}на тиждень · " . $count . "\u{00A0}"
        . plural($count, 'обмін', 'обміни', 'обмінів') . '/міс';
};

?>
<section class="section" id="prices">
    <div class="container">
        <h2 class="section__title">Вартість послуг</h2>
        <p class="section__lead">
            Ціна вказана за місяць користування килимом залежно від кількості обмінів на тиждень.
        </p>

        <div class="table-wrap">
            <table class="pricing">
                <caption class="pricing__caption">
                    Вартість користування килимом, грн за місяць
                </caption>
                <thead>
                    <tr>
                        <th scope="col" class="pricing__corner">Розмір килима, см</th>
                        <?php foreach ($frequencies as $freq): ?>
                            <th scope="col">
                                <span class="pricing__freq"><?= e((string) $freq) ?>×&nbsp;на тиждень</span>
                                <span class="pricing__freq-note"><?= e($monthLabel($freq)) ?></span>
                            </th>
                        <?php endforeach; ?>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($prices['sizes'] as $size): ?>
                        <tr>
                            <th scope="row" class="pricing__size"><?= e($size->label()) ?></th>
                            <?php foreach ($frequencies as $freq): ?>
                                <?php $value = $size->priceFor($freq); ?>
                                <td class="pricing__cell"
                                    data-label="<?= e($shortLabel($freq)) ?>">
                                    <?= $value === null ? '—' : e(price($value)) ?>
                                </td>
                            <?php endforeach; ?>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <ul class="notes">
            <?php foreach ($prices['notes'] as $note): ?>
                <li class="notes__item"><?= e($note) ?></li>
            <?php endforeach; ?>
        </ul>

        <p class="prices__cta">
            <a class="btn btn--primary" href="<?= e(tel_href($company['phones'][0])) ?>">
                Обговорити умови: <span class="nowrap"><?= e($company['phones'][0]) ?></span>
            </a>
        </p>
    </div>
</section>
