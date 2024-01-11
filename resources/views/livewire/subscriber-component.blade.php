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

                         <h4 class="card-title">L'ensemble des abonnés des éditions PBA sont enregistrées ici.</h4>
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
                                 Enregistrer un abonné 
                             </button>

                         </div>
                     </div>
                     <div class="card-datatable table-responsive pt-0">
                         <table class="user-list-tablje table">
                             <thead class="table-light">
                                 <tr>
                                     <th>n°</th>
                                     <th>Email</th>
                                     <th>Status</th>
                                     <th>Actions</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 @foreach ($subscribers as $book)
                                 <tr>
                                     <td> {{ $loop->count - $loop->iteration +1}} </td>
                                     <td>{{ $book->email}}</td>
                                     <td>{{ $book->status}}</td>
                                     
                                     <td class="d-flex">
                                         <button type="button" class="btn text-primary" data-bs-toggle="modal" data-bs-target="#inlineFormUpdate" wire:click="editEvent({{ $book->id }} )">
                                             <img style="height: 15px; color: blue;" src="{{asset('icons/editing.png')}}" alt="Editer">
                                         </button>
                                         <button type="button" class="btn text-primary" data-bs-toggle="modal" data-bs-target="#inlineFormDelete" wire:click="deleteSubscriber({{ $book->id }} )">
                                             <img style="height: 15px;" src="{{asset('icons/delete.png')}}" alt="Supprimer">
                                         </button>
                                     </td>
                                 </tr>
                                 @endforeach
                                 @if(!$subscribers)
                                 <tr>
                                     <td colspan="6" class="text-center">
                                         Aucun enregistrement
                                     </td>
                                 </tr>
                                 @endif
                             </tbody>
                         </table>
                     </div>

                     {{ $subscribers->links() }}



                     <!-- END: Content-->
                     <div class="form-modal-ex">
                         <!-- Modal -->
                         <div wire:ignore.self class="modal fade text-start" id="inlineForm" tabindex="-1" aria-labelledby="myModalLabel33" aria-hidden="true">
                             <div class="modal-dialog modal-dialog-centered modal-lg">
                                 <div class="modal-content">
                                     <div class="modal-header">
                                         <h4 class="modal-title" id="myModalLabel33">Enregistrer un abonné </h4>
                                         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                     </div>
                                     <form wire:submit.prevent="createSubscriber" enctype="multipart/form-data">
                                         @csrf
                                         <div class="modal-body">
                                             <div class="row">
                                                 <div class="col-md-12">
                                                     <label>Email de l'abonné: </label>
                                                     <div class="mb-1">
                                                         <input type="text" wire:model="email" placeholder="Email de l'abonné" class="form-control" />
                                                         @error('email') <span class="text-danger"> {{ $message}} </span> @enderror

                                                     </div>
                                                 </div>
                                       
                                             </div>
                                             
                                            
                                             <div class="row">

                                                 <div class="col-md-12">
                                                     <label>Status : </label>
                                                     <div class="mb-1">
                                                         <select wire:model="status" required class=" form-select">
                                                         <option value=""> Sélectionner un status </option>
                                                             <option value="Non Actif"> Non Actif </option>
                                                             <option value="Actif">Actif</option>
                                                         </select>
                                                         @error('status') <span class="text-danger"> {{ $message}} </span> @enderror

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
                                         <h4 class="modal-title" id="myModalLabel33">Modifier un évènement </h4>
                                         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                     </div>
                                     <form wire:submit.prevent="updateBook" enctype="multipart/form-data">
                                         @csrf
                                         <div class="modal-body">
                                             <div class="row">
                                                 <div class="col-md-12">
                                                     <label>Email de l'abonné: </label>
                                                     <div class="mb-1">
                                                         <input type="text" wire:model="email" required placeholder="Email" class="form-control" />
                                                         @error('email') <span class="text-danger"> {{ $message}} </span> @enderror
                                                     </div>
                                                 </div>
                                                 
                                             </div>
                                            
                                             <div class="row">
                                            
                                                 <div class="col-md-12">
                                                     <label>Status : </label>
                                                     <div class="mb-1">
                                                         <select wire:model="status" required class=" form-select">
                                                             <option value=""> Sélectionner un status </option>
                                                             <option value="Non Actif"> Non Actif </option>
                                                             <option value="Actif">Actif</option>
                                                         </select>
                                                         @error('status') <span class="text-danger"> {{ $message}} </span> @enderror

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
                                         <h4 class="modal-title" id="myModalLabel33">Suppression d'un abonné </h4>
                                         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                     </div>
                                     <form wire:submit.prevent="destroySubscriber" enctype="multipart/form-data">
                                         @csrf
                                         <div class="modal-body">
                                             <h4>Êtes-vous sûr de bien vouloir supprimer cet abonné?</h4>

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