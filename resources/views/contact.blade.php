{{-- @extends('layouts.app') {{-- directiva de blade que recive el nombre de la vista que queremos utilizar como plantilla asume que las plantillas estan en las carpetas view .layouts--}}

{{-- @section('title', 'Contacto')
       
@section('meta-description','contacto meta description')

   @section('content')
    <h1>Contacto</h1>
   @endsection   --}}
   <x-layouts.app
   title="Contact"
   meta-description="Home meta description"
>
   <h1>Contact</h1>
</x-layouts.app>