<?php

declare(strict_types=1);

defined('KILIMOK') || exit;

/**
 * Один розмір килима та його місячна вартість за кількістю обмінів на місяць.
 */
final readonly class MatSize
{
    /**
     * @param array<int,int> $monthlyPrice обмінів на місяць => грн за місяць
     */
    public function __construct(
        public int $widthCm,
        public int $lengthCm,
        public array $monthlyPrice,
        public ?string $altLabel = null,
    ) {}

    public function label(): string
    {
        $base = $this->widthCm . ' × ' . $this->lengthCm;

        return $this->altLabel === null ? $base : $base . ' (' . $this->altLabel . ')';
    }

    public function priceFor(int $exchangesPerMonth): ?int
    {
        return $this->monthlyPrice[$exchangesPerMonth] ?? null;
    }
}

/**
 * Фото у галереї (assets/img/gallery/).
 */
final readonly class GalleryItem
{
    public function __construct(
        public string $src,
        public string $alt,
    ) {}
}

/**
 * Логотип клієнта для каруселі.
 */
final readonly class ClientLogo
{
    /**
     * @param ?string $src шлях до логотипа; null — показується плейсхолдер з назвою
     */
    public function __construct(
        public string $name,
        public ?string $src = null,
    ) {}
}
