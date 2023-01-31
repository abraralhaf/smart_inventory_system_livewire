<?php

namespace App\Http\Livewire\Admin\Users;

use Livewire\Component;
use Livewire\WithPagination;

class ListUsers extends Component
{
   
    protected $paginationTheme = 'bootstrap';
    
    use WithPagination;

  
    public function render()
    {
        return view('livewire.admin.users.list-users');
    }
}
