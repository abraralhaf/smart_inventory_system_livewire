<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\User;
use Illuminate\Support\Facades\Crypt;
use Rappasoft\LaravelLivewireTables\Views\Columns\ButtonGroupColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\LinkColumn;

class UserTable extends DataTableComponent
{
    protected $model = User::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("No", "id")
                ->sortable(),
            Column::make("Name", "name")
                ->searchable()
                ->sortable(),
            Column::make("Phone", "phone")
                ->sortable(),
            Column::make("Bagian", "bagian")
                ->sortable(),
            Column::make("Email", "email")
                ->sortable(),
            Column::make("Updated at", "updated_at")
                ->sortable(),
            ButtonGroupColumn::make('Actions')
                ->unclickable()
                ->attributes(function ($row) {
                    return [
                        'class' => 'space-x-2',
                    ];
                })
                ->buttons([
                    LinkColumn::make('Link')
                        ->title(fn ($row) => 'Detail')
                        ->location(fn ($row) => ''.Crypt::encrypt($row->id))
                        ->attributes(function ($row) {
                            return [
                                'target' => '_blank',
                                // 'wire:click.prevent' => 'modal('.$row->id.')',
                                'class' => 'btn btn-sm btn-outline-primary',
                            ];
                        }),
                ]),
        ];
    }
 
}
