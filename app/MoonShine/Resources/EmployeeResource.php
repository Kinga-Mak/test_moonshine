<?php

namespace App\MoonShine\Resources;

use App\Models\Employee;
use MoonShine\Fields\ID;
use MoonShine\Fields\Text;
use MoonShine\Laravel\Resources\ModelResource;

class EmployeeResource extends ModelResource
{
    protected string $model = Employee::class;

    public function title(): string
    {
        return 'Pracownicy';
    }

    public function fields(): array
    {
        return [
            ID::make()->sortable(),
            Text::make('Imię', 'name'),
            Text::make('Nazwisko', 'surname'),
            Text::make('Email', 'email'),
            Text::make('Numer telefonu', 'phone'),
            Text::make('Stanowisko', 'position'),
            // itd.
        ];
    }
}
