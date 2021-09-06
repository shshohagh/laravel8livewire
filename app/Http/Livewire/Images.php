<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Image;

class Images extends Component
{
    public $images = [];
    public $image;
    use WithFileUploads;
    public function uploadImages()
    {
        foreach($this->images as $key->$image){
            $this->images[$key] = $image->store('images','public');
        }
        $this->images = json_encode($this->images);
        Image::create(['filename'=>$this->images]);
        session()->flash('message','Images successfully uploded');
        $this->emit('imagesUploded');
    }
    public function render()
    {
        return view('livewire.images');
    }
}
