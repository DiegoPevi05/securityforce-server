@extends('layouts.app')

@section('content')
    <h1>ENCABEZADO DE LA PAGINA</h1>
    <form method="POST" action="{{ route('contentweb.updateHero', $hero->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="writeword">Palabra del Logo</label>
            <input type="text" class="form-control @error('writeword') is-invalid @enderror" id="writeword" name="writeword" value="{{ $hero->writeword }}">
            @error('writeword')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="header">Encabezado</label>
            <input type="text" class="form-control @error('header') is-invalid @enderror" id="header" name="header" value="{{ $hero->header }}">
            @error('header')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="phone">Titulo</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ $hero->title }}">
            @error('title')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="subtitle">Subtitulo</label>
            <input type="text" class="form-control @error('subtitle') is-invalid @enderror" id="subtitle" name="subtitle" value="{{  $hero->subtitle }}">
            @error('subtitle')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="brochureUrl">Url del Brochure</label>
            <input type="text" class="form-control @error('brochureUrl') is-invalid @enderror" id="brochureUrl" name="brochureUrl" value="{{  $hero->brochureUrl) }}">
            @error('brochureUrl')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <div class="d-flex justify-content-center my-4">
          <button type="submit" class="btn btn-primary w-auto">Actualizar</button>
        </div>
    </form>
    <divider/>
    <h1>SECCION NOSOTROS</h1>
    <form method="POST" action="{{ route('contentweb.updateUs', $us->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Titulo de Seccion Nosotros</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ $us->title }}">
            @error('title')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="content">Contenido seccion Nosotros</label>
            <input type="text" class="form-control @error('content') is-invalid @enderror" id="content" name="content" value="{{  $us->content }}">
            @error('content')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="imageUrl">Url Imagen seccion Nosotros</label>
            <input type="file" class="form-control @error('imageUrl') is-invalid @enderror" id="imageUrl" name="imageUrl">
            @error('imageUrl')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <div class="d-flex justify-content-center my-4">
          <button type="submit" class="btn btn-primary w-auto">Actualizar</button>
        </div>
    </form>
    <divider/>
    <h1>SECCION INDUSTRIAS</h1>
    @foreach ($industries as $industry)
    <h2>Seccion Industria Numero {{ $industry->id }}</h2>
    <form method="POST" action="{{ route('contentweb.updateIndustry', $industry->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Titulo de una de las secciones Industrias</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{  $industry->title }}">
            @error('title')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="subtitle">Subtitulo de una de las secciones Industrias</label>
            <input type="text" class="form-control @error('subtitle') is-invalid @enderror" id="subtitle" name="subtitle" value="{{ $industry->title }}">
            @error('subtitle')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="content">Contenido de una de las secciones Industrias</label>
            <input type="text" class="form-control @error('content') is-invalid @enderror" id="content" name="content" value="{{ $industry->content }}">
            @error('content')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="pretitle">Pre Titulo de una de las secciones Industrias</label>
            <input type="text" class="form-control @error('pretitle') is-invalid @enderror" id="pretitle" name="pretitle" value="{{  $industry->pretitle }}">
            @error('pretitle')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="subpretitle">Sub-PreTitulo de una de las secciones industrias</label>
            <input type="text" class="form-control @error('subpretitle') is-invalid @enderror" id="subpretitle" name="subpretitle" value="{{  $industry->subpretitle }}">
            @error('subpretitle')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="imageUrl">Url Imagen de una de las secciones industrias</label>
            <input type="file" class="form-control @error('imageUrl') is-invalid @enderror" id="imageUrl" name="imageUrl">
            @error('imageUrl')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <div class="d-flex justify-content-center my-4">
          <button type="submit" class="btn btn-primary w-auto">Actualizar</button>
        </div>
    </form>
    @endforeach
    <divider/>
    <h1>SECCION FAQs</h1>
    <h2>Crea una nueva pregunta:</h2>
    <form method="POST" action="{{ route('contentweb.storeFaqs') }}">
        @csrf
        <div class="form-group">
            <label for="question">Pregunta a Responder</label>
            <input type="text" class="form-control @error('question') is-invalid @enderror" id="question" name="question">
            @error('question')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="answer">Contenido de la pregunta</label>
            <textarea class="form-control @error('answer') is-invalid @enderror" id="answer" name="answer"></textarea>
            @error('answer')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <div class="d-flex justify-content-center my-4">
          <button type="submit" class="btn btn-primary w-auto">Crear</button>
        </div>
    </form>
    <h2>Preguntas:</h2>
    @foreach ($faqs as $faq)
    <h3>Pregunta Numero: {{ $faq->id }}</h3>
    <form method="POST" action="{{ route('contentweb.updateFaqs', $faq->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="question">Pregunta a Responder</label>
            <input type="text" class="form-control @error('question') is-invalid @enderror" id="question" name="question" value="{{ $faq->question }}">
            @error('question')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="answer">Contenido de la pregunta</label>
            <textarea class="form-control @error('answer') is-invalid @enderror" id="answer" name="answer">{{ $faq->answer }}</textarea>
            @error('answer')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <div class="d-flex justify-content-center my-4">
          <button type="submit" class="btn btn-primary w-auto">Actualizar</button>
        </div>
    </form>
    <form action="{{ route('contentweb.deleteFaqs', $faq->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <div class="d-flex justify-content-center my-4">
          <button type="submit" class="btn btn-danger w-auto">Borrar</button>
        </div>
    </form>
    @endforeach
    <divider/>
    <h1>SECCION RAZONES</h1>
    <form method="POST" action="{{ route('contentweb.updateReasons', $reasons->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Titulo de Seccion</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ $reasons->title }}">
            @error('title')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="description">Contenido de la Seccion</label>
            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description">{{  $reasons->description }}</textarea>
            @error('description')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="reason1">Razon 1</label>
            <input type="text" class="form-control @error('reason1') is-invalid @enderror" id="reason1" name="reason1" value="{{ $reasons->reason1 }}">
            @error('reason1')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="reason2">Razon 2</label>
            <input type="text" class="form-control @error('reason2') is-invalid @enderror" id="reason2" name="reason2" value="{{ $reasons->reason2 }}">
            @error('reason2')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="reason3">Razon 3</label>
            <input type="text" class="form-control @error('reason3') is-invalid @enderror" id="reason3" name="reason3" value="{{ $reasons->reason3 }}">
            @error('reason3')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="reason4">Razon 4</label>
            <input type="text" class="form-control @error('reason4') is-invalid @enderror" id="reason4" name="reason4" value="{{ $reasons->reason4 }}">
            @error('reason4')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="reason5">Razon 5</label>
            <input type="text" class="form-control @error('reason5') is-invalid @enderror" id="reason5" name="reason5" value="{{ $reasons->reason5 }}">
            @error('reason5')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="reason6">Razon 6</label>
            <input type="text" class="form-control @error('reason6') is-invalid @enderror" id="reason6" name="reason6" value="{{ $reasons->reason6 }}">
            @error('reason6')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="reason7">Razon 7</label>
            <input type="text" class="form-control @error('reason7') is-invalid @enderror" id="reason7" name="reason7" value="{{ $reasons->reason7 }}">
            @error('reason7')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="reason8">Razon 8</label>
            <input type="text" class="form-control @error('reason8') is-invalid @enderror" id="reason8" name="reason8" value="{{  $reasons->reason8 }}">
            @error('reason8')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <div class="d-flex justify-content-center my-4">
          <button type="submit" class="btn btn-primary w-auto">Actualizar</button>
        </div>
    </form>
    <divider/>
    <h1>SECCION CONTACTO</h1>
    <form method="POST" action="{{ route('contentweb.updateContact', $contact->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="contact_subtitle">Sub-Titulo de Contacto</label>
            <textarea class="form-control @error('contact_subtitle') is-invalid @enderror" id="contact_subtitle" name="contact_subtitle">{{  $contact->title }}</textarea>
            @error('contact_subtitle')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="presencia">Lugares de Presencia (Ingresa Separados por coma)</label>
            <input type="text" class="form-control @error('presencia') is-invalid @enderror" id="presencia" name="presencia" value="{{  $contact->presencia }}">
            @error('presencia')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="phone1">Telefono Fijo</label>
            <input type="text" class="form-control @error('phone1') is-invalid @enderror" id="phone1" name="phone1" value="{{ $contact->phone1 }}">
            @error('phone1')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="mobile1">Telefono movil 1</label>
            <input type="text" class="form-control @error('mobile1') is-invalid @enderror" id="mobile1" name="mobile1" value="{{ $contact->mobile1 }}">
            @error('mobile1')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="mobile2">Telefono movil 2</label>
            <input type="text" class="form-control @error('mobile2') is-invalid @enderror" id="mobile2" name="mobile2" value="{{ $contact->mobile2 }}">
            @error('mobile2')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="website">Sitio web</label>
            <input type="text" class="form-control @error('website') is-invalid @enderror" id="website" name="website" value="{{ $contact->website }}">
            @error('website')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="facebook">Facebook</label>
            <input type="text" class="form-control @error('facebook') is-invalid @enderror" id="facebook" name="facebook" value="{{ $contact->facebook }}">
            @error('facebook')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="email">Correo Electronico</label>
            <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ $contact->email }}">
            @error('email')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ $contact->email }}">
            @error('email')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="instagram">Instagram</label>
            <input type="text" class="form-control @error('instagram') is-invalid @enderror" id="instagram" name="instagram" value="{{ $contact->instagram }}">
            @error('instagram')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="tiktok">TikTok</label>
            <input type="text" class="form-control @error('tiktok') is-invalid @enderror" id="tiktok" name="tiktok" value="{{  $contact->tiktok }}">
            @error('tiktok')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <div class="d-flex justify-content-center my-4">
          <button type="submit" class="btn btn-primary w-auto">Actualizar</button>
        </div>
    </form>
@endsection
