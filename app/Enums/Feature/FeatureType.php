<?php

namespace App\Enums\Feature;

use App\Enums\Traits\UseValueAsLabel;
use BackedEnum;
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
use Illuminate\Contracts\Support\Htmlable;

enum FeatureType: string implements HasLabel, HasColor, HasIcon
{
    use UseValueAsLabel;

    case Feature = 'Feature';
    case Bug = 'Bug';

    public function getColor(): string|array|null
    {
        return match ($this) {
            self::Feature => 'info',
            self::Bug => 'warning',
        };
    }

    public function getIcon(): string|BackedEnum|Htmlable|null
    {
        return match ($this) {
            self::Feature => 'heroicon-o-star',
            self::Bug => 'heroicon-o-bug-ant',
        };
    }
}
