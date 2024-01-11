 <!-- BEGIN: Content-->
 <div class="app-content content ">
     <div class="content-overlay"></div>
     <div class="header-navbar-shadow"></div>
     <div class="content-wrapper container-xxl p-0">
         <div class="content-header row">
         </div>
         <div class="content-body">

             <!-- users list start -->
             <section class="app-user-list">
                 <!-- list and filter start -->
                 <div class="card">
                     <div class="card-body border-bottom">

                         <h4 class="card-title">L'ensemble des vidéos des éditions PBA sont enregistrées ici.</h4>
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
                                 Publier une vidéo
                             </button>

                         </div>
                     </div>
                     <div class="card-datatable table-responsive pt-0">
                         <table class="user-list-tablje table">
                             <thead class="table-light">
                                 <tr>
                                     <th>n°</th>
                                     <th>Titre</th>
                                     <th>Status</th>
                                     <th>Vidéo</th>
                                     <th>Actions</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 @foreach ($videos as $book)
                                 <tr>
                                     <td> {{ $loop->count - $loop->iteration +1 }} </td>
                                     <td> {{ $book->titre }}</td>
                                     <td> {{ $book->status }} </td>
                                     <td>
                                         <img style="height: 40px;" src="{{asset('storage/galerie/'.$book->image)}}" alt="">
                                     </td>
                                     <td class="d-flex">
                                         <button type="button" class="btn text-primary" data-bs-toggle="modal" data-bs-target="#inlineFormUpdate" wire:click="editVideo({{ $book->id }} )">
                                             <img style="height: 15px; color: blue;" src="{{asset('icons/editing.png')}}" alt="Editer">
                                         </button>
                                         <button type="button" class="btn text-primary" data-bs-toggle="modal" data-bs-target="#inlineFormDelete" wire:click="deleteVideo({{ $book->id }} )">
                                             <img style="height: 15px;" src="{{asset('icons/delete.png')}}" alt="Supprimer">
                                         </button>
                                     </td>
                                 </tr>
                                 @endforeach
                                 @if(!$videos)
                                 <tr>
                                     <td colspan="6" class="text-center">
                                         Aucun enregistrement
                                     </td>
                                 </tr>
                                 @endif
                             </tbody>
                         </table>
                     </div>

                     {{ $videos->links() }}



                     <!-- END: Content-->
                     <div class="form-modal-ex">
                         <!-- Modal -->
                         <div wire:ignore.self class="modal fade text-start" id="inlineForm" tabindex="-1" aria-labelledby="myModalLabel33" aria-hidden="true">
                             <div class="modal-dialog modal-dialog-centered modal-lg">
                                 <div class="modal-content">
                                     <div class="modal-header">
                                         <h4 class="modal-title" id="myModalLabel33">Publier une vidéo </h4>
                                         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                     </div>
                                     <form wire:submit.prevent="createVideo" enctype="multipart/form-data">
                                         @csrf
                                         <div class="modal-body">
                                             <div class="row">
                                                 <div class="col-md-6">
                                                     <label>Titre de la vidéo: </label>
                                                     <div class="mb-1">
                                                         <input type="text" wire:model="titre" placeholder="Titre" class="form-control" />
                                                         @error('titre') <span class="text-danger"> {{ $message}} </span> @enderror

                                                     </div>
                                                 </div>

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

                                             </div>


                                             <div class="row">
                                                 <div class="col-md-12">
                                                     <label>Lien youtube de la vidéo: </label>
                                                     <div class="mb-1">
                                                         <input type="text" wire:model="youtube" placeholder="Lien youtube" class="form-control" />
                                                         @error('youtube') <span class="text-danger"> {{ $message}} </span> @enderror

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
                                         <h4 class="modal-title" id="myModalLabel33">Modifier la galerie </h4>
                                         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                     </div>
                                     <form wire:submit.prevent="updateVideo" enctype="multipart/form-data">
                                         @csrf
                                         <div class="modal-body">
                                             <div class="row">

                                                 <div class="col-md-6">
                                                     <label>Titre: </label>
                                                     <div class="mb-1">
                                                         <input type="text" wire:model="titre" required placeholder="Titre" class="form-control" />
                                                         @error('titre') <span class="text-danger"> {{ $message}} </span> @enderror
                                                     </div>
                                                 </div>
                                                 
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
                                             </div>

                                             <div class="row">
                                             <div class="col-md-12">
                                                     <label>Lien youtube de la vidéo: </label>
                                                     <div class="mb-1">
                                                         <input type="text" wire:model="youtube" placeholder="Lien youtube" class="form-control" />
                                                         @error('youtube') <span class="text-danger"> {{ $message}} </span> @enderror

                                                     </div>
                                                 </div>


                                             </div>
                                             <div class="row">


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
                                     <form wire:submit.prevent="destroyVideo" enctype="multipart/form-data">
                                         @csrf
                                         <div class="modal-body">
                                             <h4>Êtes-vous sûr de bien vouloir supprimer cette vidéo?</h4>

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
             </section>
             <!-- users list ends -->

         </div>
     </div>
 </div>