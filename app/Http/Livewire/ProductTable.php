<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Product;

class ProductTable extends DataTableComponent
{
    protected $model = Product::class;

    public $myParam = 'Default';
    public string $tableName = 'barang';
    public array $users1 = [];

    public function configure(): void
    {
        $this->setPrimaryKey('id')
            // ->setDebugEnabled()
           ;
    }

    public function columns(): array
    {
        return [
            Column::make("No part", "no_part")
                ->searchable()
                ->sortable(),
            Column::make("Harga", "harga")
                ->sortable(),
            Column::make("Description", "description")
            ->searchable()
                ->sortable(),
            Column::make("Created at", "updated_at")
                ->sortable(),
        ];
    }
}
