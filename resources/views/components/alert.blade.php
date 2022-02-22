{{-- Así se hace uso de la variable que se recibe en la clase del componente --}}
<div class="bg-{{ $color }}--100 border-l-4 border-{{ $color }}-500 text-{{ $color }}-700 p-4" role="alert">
    {{-- Se recibe el valor del slot con nombre --}}
    <p class="font-bold">{{$title}}</p>

    {{-- slot es la variable que almacena todo lo 
        que se envía entre un par de etiquetas 
        correspondientes de un componente --}}
    <p>{{$slot}}</p>
</div>
