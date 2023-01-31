<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Simpart;

class SimpartTable extends DataTableComponent
{
    protected $model = Simpart::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Min stok", "min_stok")
                ->sortable(),
            Column::make("No1sd6pit", "no1sd6pit")
                ->sortable(),
            Column::make("No7sd10pit", "no7sd10pit")
                ->sortable(),
            Column::make("No10pit", "no10pit")
                ->sortable(),
            Column::make("Barang id", "barang_id")
                ->sortable(),
            Column::make("Created at", "created_at")
                ->sortable(),
            Column::make("Updated at", "updated_at")
                ->sortable(),
        ];
    }
}
