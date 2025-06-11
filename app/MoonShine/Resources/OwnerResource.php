<?php

namespace App\MoonShine\Resources;

use App\Models\Owner;
use MoonShine\Fields\ID;
use MoonShine\Fields\Text;
use MoonShine\Laravel\Resources\ModelResource;

class OwnerResource extends ModelResource
{
    protected string $model = Owner::class;

    public function title(): string
    {
        return 'Właściciele';
    }

    public function fields(): array
    {
        return [
            ID::make()->sortable(),
            Text::make('Imię i nazwisko', 'name'),
            Text::make('Numer telefonu', 'phone'),
        ];
    }
}
