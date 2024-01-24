 <!-- list and filter start -->
 <div class="card">
     <div class="card-body border-bottom">

         <h4 class="card-title">L'ensemble des livres des éditions PBA sont enregistrés ici.</h4>
         <div class="row">
             <div class="col-md-4 user_role"></div>
             <div class="col-md-4 user_plan"></div>
             <div class="col-md-4 user_status"></div>
         </div>
     </div>
     <div class="row">
         <div class="col-md-9 py-1">
             <div class="row">
                 <div class="col-md-6">

                     <input type="text" class="form-control" placeholder="Search" wire:model="searchTerm" wire:keyup="searchData" />
                 </div>
             </div>

         </div>
         <div class="col-md-3 py-1">

             <!-- Button trigger modal -->
             <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#inlineForm">
                 Publier un livrer
             </button>

         </div>
     </div>
     <div class="card-datatable table-responsive pt-0">
         <table class="user-list-tablje table">
             <thead class="table-light">
                 <tr>
                     <th>n°</th>
                     <th>Catégorie</th>
                     <th>Titre</th>
                     <th>Auteur</th>
                     <th>Prix réel</th>
                     <th>Prix promotionnel</th>
                     <th>Status</th>
                     <th>Image</th>
                     <th>Actions</th>
                 </tr>
             </thead>
             <tbody>
                 @foreach ($books as $book)
                 <tr>
                     <td> {{ $loop->count - $loop->iteration +1}} </td>
                     <td>{{ $book->category->libelle}}</td>
                     <td>{{ $book->title}}</td>
                     <td>{{ $book->author}}</td>
                     <td>{{ $book->real_price}}</td>
                     <td>{{ $book->promotion_price}}</td>
                     <td>{{ $book->status}}</td>
                     <td>
                         <img style="height: 40px;" src="{{asset('storage/books/'. $book->image)}}" alt="">
                     </td>
                     <td class="d-flex">
                         <button type="button" class="btn text-primary" data-bs-toggle="modal" data-bs-target="#inlineFormUpdate" wire:click="editBook({{ $book->id }} )">
                             <img style="height: 15px; color: blue;" src="{{asset('icons/editing.png')}}" alt="Editer">
                         </button>
                         <button type="button" class="btn text-primary" data-bs-toggle="modal" data-bs-target="#inlineFormDelete" wire:click="deleteBook({{ $book->id }} )">
                             <img style="height: 15px;" src="{{asset('icons/delete.png')}}" alt="Supprimer">
                         </button>
                     </td>
                 </tr>
                 @endforeach
                 @if(count($books) == 0)
                 <tr>
                     <td colspan="6" class="text-center">
                         Aucun enregistrement
                     </td>
                 </tr>
                 @endif
             </tbody>
         </table>
     </div>

     {{ $books->links() }}



     <!-- END: Content-->
     <div class="form-modal-ex">
         <!-- Modal -->
         <div wire:ignore.self class="modal fade text-start" id="inlineForm" tabindex="-1" aria-labelledby="myModalLabel33" aria-hidden="true">
             <div class="modal-dialog modal-dialog-centered modal-lg">
                 <div class="modal-content">
                     <div class="modal-header">
                         <h4 class="modal-title" id="myModalLabel33">Publier un livre </h4>
                         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                     </div>
                     <form wire:submit.prevent="createBook" enctype="multipart/form-data">
                         @csrf
                         <div class="modal-body">
                             <div class="row">
                                 <div class="col-md-6">
                                     <label>Catégorie du livre: </label>
                                     <div class="mb-1">
                                         <select wire:model="category_id" class="select2 form-select">
                                             <option value=""> Choisir une catégorie </option>
                                             @foreach( $categories as $category)
                                             <option value="{{$category->id}}">{{$category->libelle}} </option>
                                             @endforeach
                                         </select>
                                         @error('category_id') <span class="text-danger"> {{ $message}} </span> @enderror

                                     </div>
                                 </div>
                                 <div class="col-md-6">
                                     <label>Titre du livre: </label>
                                     <div class="mb-1">
                                         <input type="text" wire:model="title" placeholder="Titre" class="form-control" />
                                         @error('title') <span class="text-danger"> {{ $message}} </span> @enderror

                                     </div>
                                 </div>
                             </div>
                             <div class="row">
                                 <div class="col-md-6">
                                     <label>Auteur: </label>
                                     <div class="mb-1">
                                         <input type="text" wire:model="author" placeholder="Auteur" class="form-control" />
                                         @error('author') <span class="text-danger"> {{ $message}} </span> @enderror

                                     </div>
                                 </div>
                                 <div class="col-md-6">
                                     <label>Prix réel: </label>
                                     <div class="mb-1">
                                         <input type="text" wire:model="real_price" placeholder="Prix" class="form-control" />
                                     </div>
                                 </div>
                             </div>
                             <div class="row">
                                 <div class="col-md-6">
                                     <label>Prix promotionnel: </label>
                                     <div class="mb-1">
                                         <input type="number" wire:model="promotion_price" placeholder="Prix" class="form-control" />
                                     </div>
                                 </div>
                                 <div class="col-md-6">
                                     <label>Image: </label>
                                     <div class="mb-1">
                                         <input type="file" wire:model="image" placeholder="Type" accept="image/png, image/jpg, image/jpeg" class="form-control" />
                                         @error('image') <span class="text-danger"> {{ $message}} </span> @enderror

                                     </div>
                                     @if ($image)
                                     <div class="text-center">
                                         <div class="flex text-sm text-gray-600">
                                             <img style="height: 100px;" src="{{ $image->temporaryUrl() }}" class="h-64">
                                         </div>
                                     </div>
                                     @else

                                     @endif


                                 </div>
                             </div>
                             <div class="row">

                                 <div class="col-md-6">
                                     <label>Status : </label>
                                     <div class="mb-1">
                                         <select wire:model="status" required class=" form-select">
                                             <option value=""> Choisir un status </option>
                                             <option value="Non Actif"> Non Actif </option>
                                             <option value="Actif">Actif</option>
                                         </select>
                                         @error('status') <span class="text-danger"> {{ $message}} </span> @enderror

                                     </div>
                                 </div>
                                 <div class="col-md-6">
                                     <label>Type : </label>
                                     <div class="mb-1">
                                         <select wire:model="type" required class=" form-select">
                                            <option value=""> Choisir un type </option>
                                             <option value="Les livres"> Les livres </option>
                                             <option value="Nouveautés">Nouveautés</option>
                                             <option value="A paraître">A paraître</option>
                                             <option value="LivresHippo">LivresHippo</option>
                                         </select>
                                         @error('type') <span class="text-danger"> {{ $message}} </span> @enderror

                                     </div>
                                 </div>
                                 <div class="col-md-12">
                                     <label>Lien amazon: </label>
                                     <div class="mb-1">
                                         <textarea wire:model="amazon" class="form-control"></textarea>
                                     </div>
                                 </div>
                                 <div class="col-md-12">
                                     <label>description: </label>
                                     <div class="mb-1">
                                         <textarea wire:model="description" class="form-control"></textarea>
                                     </div>



                                 </div>
                             </div>


                         </div>
                         <div class="modal-footer">
                             <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Annuler</button>
                             <button type="submit" class="btn btn-primary">Publier</button>
                         </div>
                     </form>
                 </div>
             </div>
         </div>
         <!-- Modal -->
         <div wire:ignore.self class="modal fade text-start" id="inlineFormUpdate" tabindex="-1" aria-labelledby="myModalLabel33" aria-hidden="true">
             <div class="modal-dialog modal-dialog-centered modal-lg">
                 <div class="modal-content">
                     <div class="modal-header">
                         <h4 class="modal-title" id="myModalLabel33">Modifier le livre </h4>
                         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                     </div>
                     <form wire:submit.prevent="updateBook" enctype="multipart/form-data">
                         @csrf
                         <div class="modal-body">
                             <div class="row">
                                 <div class="col-md-6">
                                     <label>Catégorie du livre: </label>
                                     <div class="mb-1">
                                         <select wire:model="category_id" id="" required class="select2 form-select">
                                             <option value=""> Choisir une catégorie </option>
                                             @foreach( $categories as $category)
                                             <option value="{{$category->id}}">{{$category->libelle}} </option>
                                             @endforeach
                                         </select>
                                     </div>
                                 </div>
                                 <div class="col-md-6">
                                     <label>Titre du livre: </label>
                                     <div class="mb-1">
                                         <input type="text" wire:model="title" required placeholder="Titre" class="form-control" />
                                         @error('title') <span class="text-danger"> {{ $message}} </span> @enderror
                                     </div>
                                 </div>
                             </div>
                             <div class="row">
                                 <div class="col-md-6">
                                     <label>Auteur: </label>
                                     <div class="mb-1">
                                         <input type="text" wire:model="author" placeholder="Auteur" class="form-control" />
                                         @error('author') <span class="text-danger"> {{ $message}} </span> @enderror
                                     </div>
                                 </div>
                                 <div class="col-md-6">
                                     <label>Prix réel: </label>
                                     <div class="mb-1">
                                         <input type="text" wire:model="real_price" placeholder="Prix" class="form-control" />
                                     </div>
                                 </div>
                             </div>
                             <div class="row">
                                 <div class="col-md-6">
                                     <label>Prix promotionnel: </label>
                                     <div class="mb-1">
                                         <input type="number" wire:model="promotion_price" placeholder="Prix" class="form-control" />
                                     </div>
                                 </div>
                                 <div class="col-md-6">
                                     <label>Image: </label>
                                     <div class="mb-1">
                                         <input type="file" wire:model="image" accept="image/png, image/jpg, image/jpeg" placeholder="Image" class="form-control" />
                                         @error('image') <span class="text-danger"> {{ $message}} </span> @enderror
                                         <div wire:loading wire:target="image">Uploading...</div>

                                     </div>



                                     @if ($image)
                                     <img style="height: 100px;" src="{{ $image->temporaryUrl() }}" class="w-1/2">
                                     @elseif ($oldImage)
                                     <img style="height: 100px;" src="{{ asset('storage/books/'.$oldImage) }}" class="w-1/2">
                                     @endif
                                 </div>
                             </div>
                             <div class="row">

                                 <div class="col-md-6">
                                     <label>Status : </label>
                                     <div class="mb-1">
                                         <select wire:model="status" required class=" form-select">
                                             <option value="Non Actif"> Non Actif </option>
                                             <option value="Actif">Actif</option>
                                         </select>
                                         @error('status') <span class="text-danger"> {{ $message}} </span> @enderror

                                     </div>
                                 </div>
                                 <div class="col-md-6">
                                     <label>Type : </label>
                                     <div class="mb-1">
                                         <select wire:model="type" required class=" form-select">
                                             <option value="Les livres"> Les livres </option>
                                             <option value="Nouveautés">Nouveautés</option>
                                             <option value="A paraître">A paraître</option>
                                             <option value="LivresHippo">LivresHippo</option>
                                         </select>
                                         @error('type') <span class="text-danger"> {{ $message}} </span> @enderror

                                     </div>
                                 </div>
                                 <div class="col-md-12">
                                     <label>Lien amazon: </label>
                                     <div class="mb-1">
                                         <textarea wire:model="amazon" class="form-control"></textarea>
                                     </div>
                                 </div>
                                 <div class="col-md-12">
                                     <label>description: </label>
                                     <div class="mb-1">
                                         <textarea wire:model="description" class="form-control"></textarea>
                                     </div>
                                 </div>
                             </div>


                         </div>
                         <div class="modal-footer">
                             <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Annuler</button>
                             <button type="submit" class="btn btn-primary">Modifier</button>
                         </div>
                     </form>
                 </div>
             </div>
         </div>
         <div wire:ignore.self class="modal fade text-start" id="inlineFormDelete" tabindex="-1" aria-labelledby="myModalLabel33" aria-hidden="true">
             <div class="modal-dialog modal-dialog-centered">
                 <div class="modal-content">
                     <div class="modal-header">
                         <h4 class="modal-title" id="myModalLabel33">Suppression de livre </h4>
                         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                     </div>
                     <form wire:submit.prevent="destroyBook" enctype="multipart/form-data">
                         @csrf
                         <div class="modal-body">
                             <h4>Êtes-vous sûr de bien vouloir supprimer ce livre?</h4>

                         </div>
                         <div class="modal-footer">
                             <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Annuler</button>
                             <button type="submit" class="btn btn-primary">Supprimer</button>
                         </div>
                     </form>
                 </div>
             </div>
         </div>
     </div>


 </div>
 <!-- list and filter end -->