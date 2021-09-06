<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Upload;
use Livewire\WithFileUploads;

class Uploads extends Component
{
    public $title;
    public $filename;
    use WithFileUploads;
    public function fileUpload()
    {
        $validateData = $this->validate([
            'title' => 'required',
            'filename' => 'required'
        ]);

        $filename = $this->filename->store('files','public'); // storage/app/public/files/
        $validateData['filename'] = $filename;
        Upload::create($validateData);
        session()->flash('message','Upload Successfully');
        $this->emit('fileUploded');
    }

    public function render()
    {
        return view('livewire.uploads');
    }
}
