<!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aprendible - @yield('title')</title>
    <meta name="description" content="@yield('meta-description', 'Default meta description')"> 
 </head>
 <body>
    {{-- app guarda todo y se manda a llamar con @extend ('layouts')--}}
 
@include('partials.navigation'){{--include es  una directiva de blade por logica asume que las carpetas estan en view utiliza un punto  --}}

@yield('content'){{--yield es una directiva de blade que permite mostrar el contenido de la vista que se extiende --}}

  
</body>
   </html>