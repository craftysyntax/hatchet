<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Location;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\Views\Filters\NumberFilter;

class LocationTable extends DataTableComponent
{
    protected $model = Location::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id')
        ->setFilterLayout('slide-down');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make('Name')
                ->sortable()
                ->searchable(),
            Column::make('Price')
                ->sortable(),
            Column::make('Offices')
                ->sortable(),
            Column::make('Tables')
                ->sortable(),
            Column::make('Sqm')
                ->sortable(),
            Column::make("Created at", "created_at")
                ->sortable()
                ->collapseOnTablet()
                ->format(function ($value) {
                    return Carbon::parse($value)->toDayDateTimeString();
                }),
            Column::make("Updated at", "updated_at")
                ->sortable()
                ->collapseOnTablet()
                ->format(function ($value) {
                    return Carbon::parse($value)->toDayDateTimeString();
                }),
        ];
    }

    public function filters(): array
    {
        return [
            NumberFilter::make('Offices')
            ->config([
                'min' => 0,
                'max' => 100,
            ])
            ->filter(function (Builder $builder, string $value) {
                $builder->where('offices', '>', $value);
            }),
            NumberFilter::make('Tables')
            ->config([
                'min' => 0,
                'max' => 1000,
            ])
            ->filter(function (Builder $builder, string $value) {
                $builder->where('tables', '>', $value);
            }),
            NumberFilter::make('Min Price')
                ->config([
                    'min' => 0,
                    'max' => 100000,
                ])
                ->filter(function (Builder $builder, string $value) {
                    $builder->where('price', '>', $value);
                }),
            NumberFilter::make('Max Price')
                ->config([
                    'min' => 0,
                    'max' => 100000,
                ])
                ->filter(function (Builder $builder, string $value) {
                    $builder->where('price', '<', $value);
                }),
            NumberFilter::make('Min Sqm')
                ->config([
                    'min' => 0,
                    'max' => 100000,
                ])
                ->filter(function (Builder $builder, string $value) {
                    $builder->where('sqm', '>', $value);
                }),
            NumberFilter::make('Max Sqm')
                ->config([
                    'min' => 0,
                    'max' => 100000,
                ])
                ->filter(function (Builder $builder, string $value) {
                    $builder->where('sqm', '<', $value);
                }),
        ];
    }
}
