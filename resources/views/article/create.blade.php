@extends('base')

@section('content')
<div class="container">

    <h1 class="text-center ">Poster un nouvel article</h1>
    <form action="{{ route('articles.store') }}" method="POST">
        @csrf
        <div class="col-12">
            <div class="form-group">
                <label> Titre</label>
                <input type="text" name="title" class=" form-control @error('title') is-invalid

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
                <input type="text" name="subtitle" class=" form-control @error('title') is-invalid

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

                @enderror" ></textarea>
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
            <button type="submit" class="btn btn-primary">Poster un article</button>
        </div>
    </form>

</div>
@endsection
