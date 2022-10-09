<?php

namespace App\Http\Livewire;

use App\Models\Liga;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ProductLiga extends Component
{
    public $search, $liga_id;

    use WithPagination;

    public function updatingSearch() {
        $this->resetPage();
    }

    public function mount($liga_id){
        $ligaDetail = Liga::find($liga_id);

        if ($ligaDetail) {
            $this->liga_id = $ligaDetail;
        }
    }

    public function render()
    {
        if ($this->search) {
            $products = Product::where('liga_id', $this->liga_id->id)->where('name', 'like', '%' . $this->search . '%')->latest()->paginate(8);
        }else {
            $products = Product::where('liga_id', $this->liga_id->id)->paginate(8);
        }

        return view('livewire.product-index', [
            "products" => $products
        ])->layout('layouts.app');
    }
}
