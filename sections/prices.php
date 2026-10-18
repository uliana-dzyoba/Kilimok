<?php

declare(strict_types=1);

defined('KILIMOK') || exit;

/** @var list<int> $frequencies обмінів у місяць */
$frequencies = $prices['exchangesPerMonth'];
/** @var array<int,string> $freqLabel */
$freqLabel = $prices['frequencyLabel'];

/** «12 обмінів у місяць» — з правильним відмінком. */
$monthLabel = static function (int $count): string {
    return $count . "\u{00A0}" . plural($count, 'обмін', 'обміни', 'обмінів') . ' у місяць';
};

/** Стисла версія для карток на мобільному: «2× на тиждень · 8 обмінів/міс». */
$shortLabel = static function (int $count) use ($freqLabel): string {
    return $freqLabel[$count] . ' · ' . $count . "\u{00A0}"
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
                        <?php foreach ($frequencies as $count): ?>
                            <th scope="col">
                                <span class="pricing__freq"><?= e($freqLabel[$count]) ?></span>
                                <span class="pricing__freq-note"><?= e($monthLabel($count)) ?></span>
                            </th>
                        <?php endforeach; ?>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($prices['sizes'] as $size): ?>
                        <tr>
                            <th scope="row" class="pricing__size"><?= e($size->label()) ?></th>
                            <?php foreach ($frequencies as $count): ?>
                                <?php $value = $size->priceFor($count); ?>
                                <td class="pricing__cell"
                                    data-label="<?= e($shortLabel($count)) ?>">
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
            <span class="btn btn--primary">Замовити послугу:</span>
            <?php foreach ($company['phones'] as $phone): ?>
                <a class="btn btn--primary" href="<?= e(tel_href($phone)) ?>">
                    <span class="nowrap"><?= e($phone) ?></span>
                </a>
            <?php endforeach; ?>
        </p>
    </div>
</section>
