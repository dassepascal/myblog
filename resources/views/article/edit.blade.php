@extends('base')

@section('content')
<div class="container">

    <h1 class="text-center ">Editer cet article</h1>
    <form action="{{ route('articles.update',$article->id) }}" method="POST">
        @method("PUT")
        @csrf
        <div class="col-12">
            <div class="form-group">
                <label> Titre</label>
                <input type="text" value="{{ $article->title }}" name="title" class=" form-control @error('title') is-invalid

                @enderror " placeholder="titre de votre article ">
                @error('title')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label>Sous-titre</label>
                <input type="text" value="{{ $article->subtitle }}" name="subtitle" class=" form-control @error('title') is-invalid

                @enderror " placeholder="sous-titre de votre article ">
                @error('subtitle')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

            </div>
            <small class="form-text text-muted">Decrivez le contenu de votre article</small>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label>Contenu</label>
                <textarea name="content" id="tinymce-editor" class="form-control w-100  @error('title') is-invalid

                @enderror">{{ $article->content}} </textarea>
                @error('content')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <script>
                tinymce.init({
                    selector: '#tinymce-editor',

                });
            </script>
        </div>
        <div class="d-flex  justify-content-center mb-5">
            <button type="submit" class="btn btn-primary">Modifier l'article</button>
        </div>
    </form>

</div>
@endsection
