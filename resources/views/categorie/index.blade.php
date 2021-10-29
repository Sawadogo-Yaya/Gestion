@extends('layouts.master')
@section('contenu')
  
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Les Catégories</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">Liste des catégories</li>
            </ol>
          </div>
        </div>
      </div>
   
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            
           <div class="card card-primary card-outline">
              <div class="card-body">
                <h5 class="card-title">liste des catégorie</h5><br>

               <table class="table table-bordered datatable" >
                   <thead>
                        <tr>
                              <th>#Sl</th>
                              <th>Nom</th>
                              <th>Action</th>
                        </tr>
                   </thead>
                   <tbody>
                          @if('categories')
                          @foreach($categories as $key=> $categorie)
                          <tr>
                               <td>{{++$key}}</td>
                               <td>{{$categorie->nom ?? ''}}</td>
                                <a href="{{route('categorie.editer', $categorie->id)}}" class="btn btn-sm btn-info"></a>
                          </tr>
                          @endforeach
                          @endif
                   </tbody>
               </table>
              </div>
            </div><!
        </div>
        
      </div>
    </div>
 </div>
  </div>
@endsection