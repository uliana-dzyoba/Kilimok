<?php

declare(strict_types=1);

defined('KILIMOK') || exit;

/**
 * Один розмір килима та його місячна вартість за кількістю обмінів на тиждень.
 */
final readonly class MatSize
{
    /**
     * @param array<int,int> $monthlyPrice обмінів на тиждень => грн за місяць
     */
    public function __construct(
        public int $widthCm,
        public int $lengthCm,
        public array $monthlyPrice,
    ) {}

    public function label(): string
    {
        return $this->widthCm . ' × ' . $this->lengthCm;
    }

    public function priceFor(int $exchangesPerWeek): ?int
    {
        return $this->monthlyPrice[$exchangesPerWeek] ?? null;
    }
}

/**
 * Фото у галереї. Наразі — згенеровані плейсхолдери у assets/img/gallery/.
 */
final readonly class GalleryItem
{
    public function __construct(
        public string $src,
        public string $alt,
        public string $caption,
    ) {}
}

/**
 * Логотип клієнта для каруселі.
 */
final readonly class ClientLogo
{
    public function __construct(
        public string $src,
        public string $name,
    ) {}
}
