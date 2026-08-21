<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\sitemap;

class SitemapComponent extends Component
{
    public $sitemaps;
    public function render()
    {
        return view('livewire.sitemap-component');
    }

    public function mount(){
        $this->sitemaps = sitemap::all();
    }

    public function toggle($id){
        $sitemap = sitemap::find($id);
        $sitemap->is_active = !$sitemap->is_active;
        $sitemap->save();
        $this->sitemaps = sitemap::all();
    }
}
