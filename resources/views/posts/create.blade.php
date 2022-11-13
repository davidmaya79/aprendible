<x-layouts.app
    title="Crear nuevo post"
    meta-description="Formulario para crear un nuevo blog post"
>
    <h1>Create new post</h1>

    {{-- @foreach($errors->all() as $error)
        <p>{{ $error }}</p>
    @endforeach --}}
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <label>
            Title <br>
            <input name="title" type="text" value="{{ old('title') }}">
            <br>
            @error('title')
                <small style="color: red">{{ $message}} </small>
            @enderror
        </label><br>
        <label>
            Body <br>
            <textarea name="body">{{old('body')}}</textarea>
            <br>
            @error('body')
                <small style="color: red">{{ $message}} </small>
            @enderror
        </label><br>
        <button type="submit">Enviar</button>
        <br>
    </form>
    <br>
    <a href="{{ route('posts.index') }}">Regresar</a>
</x-layouts.app>