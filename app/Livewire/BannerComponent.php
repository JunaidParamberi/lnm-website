<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\banner;

class BannerComponent extends Component
{

    use WithFileUploads;

    public $title;
    public $content;
    public $image;
    public $banners;
    public $updateMode = 0;   // 0 means create, 1 means update
    public $updateId;
    public $type;

    public function render()
    {
        return view('livewire.banner-component');
    }

    public function mount()
    {
        $this->banners = banner::orderBy('order', 'asc')->get();
    }



    public function store()
    {
        $this->updateMode = 0;
        $this->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'required|max:13048',
        ]);


        $imageName= $this->image->store('banners','public');


        $banner = new banner();
        $banner->title = $this->title;
        $banner->content = $this->content;
        $banner->type=$this->type;
        $banner->image = $imageName;
        $banner->save();

        session()->flash('message', 'Banner created successfully.');
        $this->banners = banner::orderBy('order', 'asc')->get();
        $this->title = '';
        $this->content = '';
        $this->image = '';


    }

    public function delete($id)
    {
        $banner = banner::find($id);
        $banner->delete();
        session()->flash('message', 'Banner deleted successfully.');
        $this->banners = banner::orderBy('order', 'asc')->get();
    }

    public function edit($id)
    {

        $this->updateMode = 1;
        $this->updateId = $id;
        $banner = banner::find($id);

        $this->type=$banner->type;
        $this->title = $banner->title;
        $this->content = $banner->content;
    }

    public function update()
    {
        $this->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $banner = banner::find($this->updateId);
        $banner->title = $this->title;
        $banner->content = $this->content;

        $banner->type=$this->type;
        if($this->image)
        {
            $this->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $imageName= $this->image->store('banners','public');
            $banner->image = $imageName;
        }
        $banner->save();

        session()->flash('message', 'Banner updated successfully.');
      $this->banners = banner::orderBy('order', 'asc')->get();
        $this->title = '';
        $this->content = '';
        $this->image = '';
        $this->updateMode = 0;
    }



    public function updateOrder($order)
{
    foreach ($order as $index => $id) {
        $banner = banner::find($id);
        if ($banner) {
            $banner->update(['order' => $index + 1]);
        }
    }

    session()->flash('message', 'Banners reordered successfully.');
}


}
