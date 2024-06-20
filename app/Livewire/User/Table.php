<?php

namespace App\Livewire\User;

use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Carbon;
use PowerComponents\LivewirePowerGrid\{
    Column,
    Footer,
    PowerGrid,
    PowerGridFields,
    PowerGridComponent
};

final class Table extends PowerGridComponent
{
    public function setUp(): array
    {
        return [
            Footer::make()
                ->showPerPage()
                ->showRecordCount(),
        ];
    }

    public function datasource(): Builder
    {
        return User::query();
    }

    public function fields(): PowerGridFields
    {
        return PowerGrid::fields()
            ->add('id')
            ->add('name')
            ->add('name_lower', fn (User $model) => strtolower(e($model->name)))
            ->add('created_at',  fn (User $model) => Carbon::parse($model->created_at)->format('d/m/Y H:i:s'));
    }

    public function columns(): array
    {
        return [
            Column::make('ID', 'id')
                ->searchable()
                ->sortable(),

            Column::make('Name', 'name')
                ->searchable()
                ->sortable(),

            Column::make('Created at', 'created_at', 'created_at')
                ->searchable(),
        ];
    }

}
