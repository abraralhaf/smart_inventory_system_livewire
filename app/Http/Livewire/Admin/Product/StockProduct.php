<?php

namespace App\Http\Livewire\Admin\Product;

use App\Models\Stock;
use Livewire\Component;
use Livewire\WithPagination;

class StockProduct extends Component
{
    public $searchTerm = null;

    use WithPagination;

    public function render()
    {
        $stokBarang = Stock::select(['stok.*', 'barang.*'])
        ->join('barang', 'stok.barang_id', '=', 'barang.id')
        ->where('no_part', 'like', '%' . $this->searchTerm . '%')
        ->orWhere('description', 'like', '%' . $this->searchTerm . '%')
        ->paginate(100);

        return view('livewire.admin.product.stock-product',[
            'stokBarang' => $stokBarang
        ]);
    }
}
