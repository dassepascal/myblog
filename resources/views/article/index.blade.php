@extends('base')

@section('content')
<div class="container">
<h1 class="text-center ">Articles</h1>
<div class="d-flex justify-content-center">
    <a class="btn btn-info my-3" href="{{route('articles.create')}}"><i class="fas fa-plus mx-2"></i> Ajouter un nouvel article</a>
</div>
<table class="table table-hover">
    <thead>
      <tr class="table-active">
        <th scope="col">Id</th>
        <th scope="col">Nom</th>
        <th scope="col">Créer le</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($articles as $article)


      <tr>
        <th >{{ $article->id }}</th>
        <td>{{ $article->title }}</td>
        <td>{{ $article->dateformated() }}</td>
        <td class="d-flex">
            <a href="{{ route('articles.edit',$article->id) }}" class="btn btn-warning mx-3">Editer</a>
            {{-- <a href="" class="btn btn-danger mx-3">supprimer</a> --}}
            <button type="button" class="btn btn-danger" onclick="document.getElementById('modal-open-{{ $article->id }}').style.display='block'">Supprimer</button>

            {{-- creation d'un formulaire --}}
             <form action="{{ route('articles.destroy',$article->id)}}" method="POST">

                @csrf
                @method("DELETE")
                <div class="modal" id='modal-open-{{ $article->id}}'>
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">La suppression d'un element est definitive </h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" onclick="document.getElementById('modal-open-{{ $article->id }}').style.display='none'" aria-label="Close">
                            <span aria-hidden="true"></span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <p>Etes vous sur de vouloir supprimé! </p>
                        </div>
                        <div class="modal-footer">
                          <button type="submit" class="btn btn-primary">oui</button>
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="document.getElementById('modal-open-{{ $article->id }}').style.display='none'">Annuler</button>
                        </div>
                      </div>
                    </div>
                  </div>

            </form>


        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <div class="d-flex justify-content-center mt-5">
    {{ $articles->links('vendor.pagination.custom')}}
</div>
</div>
@endsection

