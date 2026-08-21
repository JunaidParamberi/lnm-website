<?php

namespace App\Livewire\Public;

use App\Models\project;
use Livewire\Component;

class ProjectDetailsComponent extends Component
{
    public $project;
    public $projectId;
    public function render()
    {
        return view('livewire.public.project-details-component');
    }

    public function mount()
    {
        $this->projectId = request()->id;
        $this->project = project::find($this->projectId);
    }
}
