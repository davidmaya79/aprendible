 @extends('layouts.app') {{-- directiva de blade que recive el nombre de la vista que queremos utilizar como plantilla asume que las plantillas estan en las carpetas view .layouts--}}

    @section('title', 'Home'){{-- aca no necesita @endsection porque no es codigo html--}}

    @section('meta-description','Home meta description')
       
     

@section('content')
   <h1>Home</h1>
    
@endsection