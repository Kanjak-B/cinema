<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Card extends Component
{
    public $id;
    public $image;
    public $title;
    public $date;
    public $tiketprice;

    public function __construct($id, $title, $date, $image, $tiketprice)
    {
        $this->id = $id;
        $this->title = $title;
        $this->date = $date;
        $this->image = $image;
        $this->tiketprice = $tiketprice;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card');
    }
}
