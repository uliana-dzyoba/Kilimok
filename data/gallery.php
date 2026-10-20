<?php

declare(strict_types=1);

defined('KILIMOK') || exit;

/**
 * Галерея. Фото показуються слайдами по 6 (див. sections/gallery.php): у кожному слайді
 * 1-ше та 4-те фото займають широку клітинку, тож на ці місця краще ставити горизонтальні
 * знімки. Файли — у assets/img/gallery/, довша сторона до 1600 px.
 */
return [
    // Слайд 1
    new GalleryItem('assets/img/gallery/photo-01.jpg', t(
        'Килими між антикрадіжними рамками на вході до магазину одягу',
        'Mats between anti-theft gates at the entrance to a clothing store',
    )),
    new GalleryItem('assets/img/gallery/photo-02.jpg', t(
        'Килим за скляними дверима входу до закладу ввечері',
        'Mat behind the glass entrance doors of a venue in the evening',
    )),
    new GalleryItem('assets/img/gallery/photo-03.jpg', t(
        'Килим за турнікетом на вході до супермаркету',
        'Mat behind a turnstile at a supermarket entrance',
    )),
    new GalleryItem('assets/img/gallery/photo-04.jpg', t(
        'Два довгі килими поспіль у вестибюлі',
        'Two long mats in a row in a lobby',
    )),
    new GalleryItem('assets/img/gallery/photo-05.jpg', t(
        'Килим на вході до магазину біля стелажа',
        'Mat at a store entrance next to a shelf',
    )),
    new GalleryItem('assets/img/gallery/photo-06.jpg', t(
        'Великий килим у холі на світлій плитці',
        'Large mat in a hall on light tiles',
    )),

    // Слайд 2
    new GalleryItem('assets/img/gallery/photo-07.jpg', t(
        'Килим на вході до супермаркету',
        'Mat at a supermarket entrance',
    )),
    new GalleryItem('assets/img/gallery/photo-08.jpg', t(
        'Килим між антикрадіжними рамками на вході до магазину',
        'Mat between anti-theft gates at a store entrance',
    )),
    new GalleryItem('assets/img/gallery/photo-09.jpg', t(
        'Синій килим перед скляними дверима',
        'Blue mat in front of glass doors',
    )),
    new GalleryItem('assets/img/gallery/photo-10.jpg', t(
        'Довгий килим на вході до супермаркету біля візків',
        'Long mat at a supermarket entrance next to shopping carts',
    )),
    new GalleryItem('assets/img/gallery/photo-11.jpg', t(
        'Темний килим біля вхідних дверей на сірій плитці',
        'Dark mat by the entrance doors on grey tiles',
    )),
    new GalleryItem('assets/img/gallery/photo-12.jpg', t(
        'Килим перед автоматичними дверима',
        'Mat in front of automatic doors',
    )),

    // Слайд 3
    new GalleryItem('assets/img/gallery/photo-13.jpg', t(
        'Килим на вході до магазину біля стелажів',
        'Mat at a store entrance next to shelves',
    )),
    new GalleryItem('assets/img/gallery/photo-14.jpg', t(
        'Синій килим біля відчинених дверей',
        'Blue mat by open doors',
    )),
    new GalleryItem('assets/img/gallery/photo-15.jpg', t(
        'Коричнева килимова доріжка у вузькому службовому проході',
        'Brown mat runner in a narrow service passage',
    )),
    new GalleryItem('assets/img/gallery/photo-16.jpg', t(
        'Доріжка з кількох килимів у вестибюлі',
        'Runner of several mats in a lobby',
    )),
    new GalleryItem('assets/img/gallery/photo-17.jpg', t(
        'Коричневий килим біля скляних дверей',
        'Brown mat by glass doors',
    )),
    new GalleryItem('assets/img/gallery/photo-18.jpg', t(
        'Килим перед ліфтами',
        'Mat in front of elevators',
    )),

    // Слайд 4
    new GalleryItem('assets/img/gallery/photo-19.jpg', t(
        'Килим перед сходами',
        'Mat in front of stairs',
    )),
    new GalleryItem('assets/img/gallery/photo-20.jpg', t(
        'Килим біля антикрадіжної рамки',
        'Mat next to an anti-theft gate',
    )),
    new GalleryItem('assets/img/gallery/photo-21.jpg', t(
        'Ряд килимів уздовж проходу',
        'Row of mats along a passage',
    )),
    new GalleryItem('assets/img/gallery/photo-22.jpg', t(
        'Килим біля дверей на мармуровій плитці',
        'Mat by a door on marble tiles',
    )),
    new GalleryItem('assets/img/gallery/photo-23.jpg', t(
        'Бордовий килим у коридорі',
        'Burgundy mat in a corridor',
    )),
    new GalleryItem('assets/img/gallery/photo-24.jpg', t(
        'Килим перед подвійними скляними дверима',
        'Mat in front of double glass doors',
    )),

    // Слайд 5
    new GalleryItem('assets/img/gallery/photo-25.jpg', t(
        'Килим біля скляних дверей кафе',
        'Mat by the glass doors of a café',
    )),
    new GalleryItem('assets/img/gallery/photo-26.jpg', t(
        'Килим уздовж скляної стіни на світлій плитці',
        'Mat along a glass wall on light tiles',
    )),
    new GalleryItem('assets/img/gallery/photo-27.jpg', t(
        'Килим на вході після решітки грязезахисту',
        'Mat at an entrance after a dirt-trapping grate',
    )),
    new GalleryItem('assets/img/gallery/photo-28.jpg', t(
        'Сірий килим на світлій плитці',
        'Grey mat on light tiles',
    )),
    new GalleryItem('assets/img/gallery/photo-29.jpg', t(
        'Килим біля входу на смугастій плитці',
        'Mat by an entrance on striped tiles',
    )),
    new GalleryItem('assets/img/gallery/photo-30.jpg', t(
        'Килим біля сходів на світлій плитці',
        'Mat by stairs on light tiles',
    )),

    // Слайд 6
    new GalleryItem('assets/img/gallery/photo-31.jpg', t(
        'Чорний килим біля сходів на вході',
        'Black mat by the stairs at an entrance',
    )),
    new GalleryItem('assets/img/gallery/photo-32.jpg', t(
        'Килим на вході до торгового центру',
        'Mat at a shopping mall entrance',
    )),
    new GalleryItem('assets/img/gallery/photo-33.jpg', t(
        'Коричневий килим перед автоматичними дверима',
        'Brown mat in front of automatic doors',
    )),
    new GalleryItem('assets/img/gallery/photo-34.jpg', t(
        'Синьо-сірий килим на світлій підлозі',
        'Blue-grey mat on a light floor',
    )),
    new GalleryItem('assets/img/gallery/photo-35.jpg', t(
        'Килим на вході між антикрадіжними рамками',
        'Mat at an entrance between anti-theft gates',
    )),
    new GalleryItem('assets/img/gallery/photo-36.jpg', t(
        'Килим на дерев\'яній підлозі біля скляних дверей',
        'Mat on a wooden floor by glass doors',
    )),
];
