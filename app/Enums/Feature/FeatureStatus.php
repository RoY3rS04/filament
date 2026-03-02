<?php

namespace App\Enums\Feature;

use BackedEnum;
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
use Illuminate\Contracts\Support\Htmlable;

enum FeatureStatus: string implements HasLabel, HasColor, HasIcon
{
    case Proposed = 'Proposed';
    case Planned = 'Planned';
    case InProgress = 'In Progress';
    case Completed = 'Completed';
    case Cancelled = 'Cancelled';

    public function getColor(): string|array|null
    {
        // TODO: Implement getColor() method.
    }

    public function getIcon(): string|BackedEnum|Htmlable|null
    {
        // TODO: Implement getIcon() method.
    }

    public function getLabel(): string|Htmlable|null
    {
        return $this->value;
    }
}
