<?php

namespace App\Enums;

enum SubCategoryStatus:string
{
    case PUBLISHED = 'Pubished';

    case DRAFT = 'Draft';

    case PENDING = 'Pending';

    public static function getValues(): array
    {
        return array_column(SubCategoryStatus::cases(), 'value');
    }

    public static function getKeyValues():array
    {
        return array_column(SubCategoryStatus::cases(), 'value', 'key');
    }
}