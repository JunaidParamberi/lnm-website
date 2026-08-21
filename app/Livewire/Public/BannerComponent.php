<?php

namespace App\Livewire\Public;

use App\Models\banner;
use Livewire\Component;

class BannerComponent extends Component
{
    public $bannerList;
    public function render()
    {
        return view('livewire.public.banner-component');
    }

    public function mount(){
        $this->bannerList=banner::orderBy('order','asc')->get();
    }
}
