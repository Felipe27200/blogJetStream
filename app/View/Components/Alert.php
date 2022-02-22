<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Alert extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    // Propiedad para almacenar un color
    // Esta propiedad puede ser accedida por el componente
    public $colorRecibido;
    
    public function __construct($colorRecibido = "red")
    {
        //
        $this->colorRecibido = $colorRecibido;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */

    //  Método que se encarga de renderizar el contenido de la vista
    public function render()
    {
        // return view('components.alert', ['color' => $this->color]);
        $color = $this->colorRecibido;

        return view('components.alert', compact('color'));
    }
}
