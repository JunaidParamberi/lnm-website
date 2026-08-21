<?php

namespace App\Livewire\Public;

use App\Models\project;
use Livewire\Component;

class ProjectComponent extends Component
{

    public $projectList;
    public function render()
    {
        return view('livewire.public.project-component');
    }

    public function mount()
    {
        $this->projectList = project::orderBy('id','desc')->get();
    }

    public function projectDetails($id)
    {
        return redirect()->route('projectdetails',['id'=>$id]);
    }
}
