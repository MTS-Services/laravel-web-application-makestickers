<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FileUpload extends Component
{
    public $name;
    public $type;
    public $existingFile;
    public $maxSize;
    /**
     * Create a new component instance.
     */
    public function __construct($name, $type, $existingFile = null, $maxSize = 10)
    {
        $this->name = $name;
        $this->type = $type;
        $this->existingFile = $existingFile;
        $this->maxSize = $maxSize;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.file-upload');
    }
}
