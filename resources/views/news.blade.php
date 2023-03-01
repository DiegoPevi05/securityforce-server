@extends('layouts.app')

@section('content')
    <h1>SECCION NOTICIAS</h1>
    <h2>Crea una nueva Noticia:</h2>
    <form method="POST" action="{{ route('contentweb.storeNews') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="textPreview">Texto inicial mostrado</label>
            <input type="text" class="form-control @error('textPreview') is-invalid @enderror" id="textPreview" name="textPreview">
            @error('textPreview')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="title">Titulo de la noticia</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title">
            @error('title')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="body">Contenido de la Noticia</label>
            <textarea class="form-control @error('body') is-invalid @enderror" id="body" name="body"></textarea>
            @error('body')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="imageUrl">Imagen de la noticia</label>
            <input type="file" class="form-control @error('imageUrl') is-invalid @enderror" id="imageUrl" name="imageUrl">
            @error('imageUrl')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <div class="d-flex justify-content-center my-4">
          <button type="submit" class="btn btn-primary w-auto">Crear</button>
        </div>
    </form>
    <h2>Noticias:</h2>
    @foreach ($news as $new)
    <h3>Noticia Numero: {{ $new->id }}</h3>
    <form method="POST" action="{{ route('contentweb.updateNews', $new->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="textPreview">Texto inicial mostrado </label>
            <input type="text" class="form-control @error('textPreview') is-invalid @enderror" id="textPreview" name="textPreview" value="{{ old('textPreview', $new->textPreview) }}">
            @error('textPreview')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="title">Titulo de la noticia </label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $new->title) }}">
            @error('title')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="body">Contenido de la Noticia</label>
            <textarea class="form-control @error('body') is-invalid @enderror" id="body" name="body">{{ old('body', $new->body) }}</textarea>
            @error('body')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="imageUrl">Imagen de la Noticia</label>
            <input type="text" class="form-control @error('imageUrl') is-invalid @enderror" id="imageUrl" name="imageUrl" value="{{ old('imageUrl', $new->imageUrl) }}">
            @error('imageUrl')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <div class="d-flex justify-content-center my-4">
          <button type="submit" class="btn btn-primary w-auto">Actualizar</button>
        </div>
    </form>
    <form action="{{ route('contentweb.deleteNews', $new->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <div class="d-flex justify-content-center my-4">
          <button type="submit" class="btn btn-danger w-auto">Borrar</button>
        </div>
    </form>
    @endforeach
@endsection
