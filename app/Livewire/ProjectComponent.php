<?php

namespace App\Livewire;

use App\Models\project;
use Livewire\Component;
use Livewire\WithFileUploads;

class ProjectComponent extends Component
{

    use WithFileUploads;
    public $title;
    public $year;
    public $image;
    public $location;
    public $description;
    public $short_description;
    public $projects;
    public $updateId;

    public $updateMode = 0;
    public function render()
    {
        return view('livewire.project-component',[
            'projects' => project::orderBy('id','desc')->get()
        ]);
    }

    public function mount()
    {
        $this->projects = project::orderBy('id','desc')->get();
    }

    public function store()
    {
        $this->updateMode = 0;
        $this->validate([
            'title' => 'required',
            'year' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'location' => 'required',
            'description' => 'required',
            'short_description' => 'required',
        ]);

        $imageName= $this->image->store('projects','public');

        $project = new project();
        $project->title = $this->title;
        $project->year = $this->year;
        $project->image = $imageName;
        $project->location = $this->location;
        $project->description = $this->description;
        $project->short_description = $this->short_description;
        $project->save();

        session()->flash('message', 'Project created successfully.');
        $this->title = '';
        $this->year = '';
        $this->image = '';
        $this->location = '';
        $this->description = '';
        $this->short_description = '';
        $this->projects = project::orderBy('id','desc')->get();
    }

    public function delete($id)
    {
        project::destroy($id);
        session()->flash('message', 'Project deleted successfully.');
        $this->projects = project::orderBy('id','desc')->get();
    }

    public function edit($id)
    {
        $project = project::find($id);
        $this->title = $project->title;
        $this->year = $project->year;
        $this->location = $project->location;
        $this->description = $project->description;
        $this->short_description = $project->short_description;
        $this->updateMode = 1;
        $this->updateId = $id;
    }

    public function update()
    {
        $this->validate([
            'title' => 'required',
            'year' => 'required',
            'location' => 'required',
            'description' => 'required',
            'short_description' => 'required',
        ]);

        $project = project::find($this->updateId);
        $project->title = $this->title;
        $project->year = $this->year;
        $project->location = $this->location;
        $project->description = $this->description;
        $project->short_description = $this->short_description;
        if($this->image){
            $this->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $imageName= $this->image->store('projects','public');
            $project->image = $imageName;
        }
        $project->save();
        session()->flash('message', 'Project updated successfully.');
        $this->updateMode = 0;
        $this->title = '';
        $this->year = '';
        $this->image = '';
        $this->location = '';
        $this->description = '';
        $this->short_description = '';
        $this->projects = project::orderBy('id','desc')->get();
    }
}
