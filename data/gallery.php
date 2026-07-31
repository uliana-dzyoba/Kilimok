<?php

declare(strict_types=1);

defined('KILIMOK') || exit;

/**
 * Галерея. Наразі — плейсхолдери; щоб поставити справжні фото, замініть файли
 * в assets/img/gallery/ (співвідношення сторін 4:3) і за потреби текст нижче.
 */
return [
    new GalleryItem(
        'assets/img/gallery/mat-01.svg',
        'Брудозахисний килим перед входом у магазин',
        'Вхідна група магазину',
    ),
    new GalleryItem(
        'assets/img/gallery/mat-02.svg',
        'Килим у вестибюлі офісної будівлі',
        'Вестибюль офісу',
    ),
    new GalleryItem(
        'assets/img/gallery/mat-03.svg',
        'Два килими на плитці у холі відділення банку',
        'Відділення банку',
    ),
    new GalleryItem(
        'assets/img/gallery/mat-04.svg',
        'Килим із нанесеним логотипом замовника',
        'Килим із логотипом замовника',
    ),
    new GalleryItem(
        'assets/img/gallery/mat-05.svg',
        'Прання килимів на власній базі',
        'Прання на власній базі',
    ),
    new GalleryItem(
        'assets/img/gallery/mat-06.svg',
        'Доставка чистих килимів автомобілем компанії',
        'Доставка та обмін',
    ),
];
