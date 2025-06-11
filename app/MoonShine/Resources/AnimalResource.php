<?php

namespace App\MoonShine\Resources;

use App\Models\Animal;
use MoonShine\Fields\ID;
use MoonShine\Fields\Text;
use MoonShine\Fields\BelongsTo;
use MoonShine\Laravel\Resources\ModelResource;

class AnimalResource extends ModelResource
{
    protected string $model = Animal::class;

    public function title(): string
    {
        return 'Zwierzęta';
    }

    public function fields(): array
    {
        return [
            ID::make()->sortable(),
            Text::make('Imię', 'name'),
            Text::make('Gatunek', 'species'),
            Text::make('Rasa', 'breed')->nullable(),
            Text::make('Data urodzenia', 'birth_date')->date()->nullable(),
            BelongsTo::make('Właściciel', 'owner', OwnerResource::class),
        ];
    }
}
