 @extends('layouts.app') {{-- directiva de blade que recive el nombre de la vista que queremos utilizar como plantilla asume que las plantillas estan en las carpetas view .layouts--}}
 @section('title', 'About')

 @section('meta-description','about meta description'){{-- esta plantilla se utiliza para personalizar cada seccion del meta descripcion --}}
      
     

  @section('content')
   <h1>About</h1>
  @endsection
  