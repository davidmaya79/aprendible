<nav> 
<ul>
    <li><a href="{{ route('home') }}">Home</a></li>{{-- las plantillas blade se imprime codigo php  --}}
    <li><a href="{{ route('posts.index') }}">Blog</a></li>
    <li><a href="{{ route('about') }}">About</a></li>
    <li><a href="{{ route('contact') }}">Contact</a></li>
  </ul>
</nav>