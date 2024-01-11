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

                <div class="card">
                    <div class="card-body border-bottom">
                        <h4 class="card-title">Formations</h4>
                        <div class="row">
                            <div class="col-md-4 user_role"></div>
                            <div class="col-md-4 user_plan"></div>
                            <div class="col-md-4 user_status"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-9"></div>
                    <div class="col-md-3 py-1">

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#inlineForm">
                            Créer une formation
                        </button>
                    </div>
                </div>
                <div class="card-datatable table-responsive pt-0">
                    <table class="user-list-tablje table">
                        <thead class="table-light">
                            <tr>
                                <th>n°</th>
                                <th>Nom et prénom</th>
                                <th>Image</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($trainings as $team)
                            <tr>
                                <td>{{ $loop->count - $loop->iteration +1}}</td>
                                <td>{{ $team->titre }}</td>
                                <td>
                                         <img style="height: 40px;" src="{{asset('storage/trainings/'. $team->image)}}" alt="">
                                     </td>

                                <th class="d-flex">
                                    <button type="submit" class="btn text-primary" data-bs-toggle="modal" data-bs-target="#inlineFormUpdate" wire:click="editFormation({{ $team->id }} )"> <img style="height: 15px; color: blue;" src="{{asset('icons/editing.png')}}" alt="Editer"></button>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#inlineFormDelete" class="btn text-danger" wire:click="deleteFormation({{ $team->id }} )"><img style="height: 15px;" src="{{asset('icons/delete.png')}}" alt="Supprimer"></a>
                                </th>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- END: Content-->
                <div class="form-modal-ex">
                    <!-- Modal -->
                    <div wire:ignore.self class="modal fade text-start" id="inlineForm" tabindex="-1" aria-labelledby="myModalLabel33" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myModalLabel33">Créer une formation </h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form wire:submit.prevent="createFormation">
                                    @csrf
                                    <div class="modal-body">

                                        <label>Titre de la formation: </label>
                                        <div class="mb-1">
                                            <input type="text" wire:model="titre" placeholder="Titre de la formation" class="form-control" />
                                            @error('titre') <span class="text-danger" style="color: red;"> {{ $message}} </span> @enderror
                                        </div>
                                        <label>Auteur: </label>
                                        <div class="mb-1">
                                            <input type="text" wire:model="auteur" placeholder="Auteur" class="form-control" />
                                            @error('auteur') <span class="text-danger" style="color: red;"> {{ $message}} </span> @enderror
                                        </div>
                                        <label>Image: </label>
                                        <div class="mb-1">
                                            <input type="file" wire:model="image" placeholder="Image" accept="image/png, image/jpg, image/jpeg" class="form-control" />
                                            @error('image') <span class="text-danger" style="color: red;"> {{ $message}} </span> @enderror
                                        </div>
                                        @if ($image)
                                        <div class="text-center">
                                            <div class="flex text-sm text-gray-600">
                                                <img style="height: 100px;" src="{{ $image->temporaryUrl() }}" class="h-64">
                                            </div>
                                        </div>
                                        @else

                                        @endif
                                        <label>Description: </label>
                                        <div class="mb-1">
                                            <textarea wire:model="description" class="form-control"></textarea>
                                        </div>
                                        <label>Date début: </label>
                                        <div class="mb-1">
                                            <input type="date" wire:model="date_debut" class="form-control">
                                        </div>
                                        
                                        <label>Date fin: </label>
                                        <div class="mb-1">
                                            <input type="date" wire:model="date_fin" class="form-control">
                                        </div>
                                        

                                        <label>Status: </label>
                                        <div class="mb-1">
                                            <select wire:model="status" class="select2 form-select">
                                                <option value=""> Choisir un status </option>
                                                <option value="Actif">Actif </option>
                                                <option value="Non actif">Inactif </option>
                                            </select>
                                            @error('status') <span class="text-danger"> {{ $message}} </span> @enderror
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <!-- <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Login</button> -->
                                        <button type="submit" class="btn btn-primary">Créer</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div wire:ignore.self class="modal fade text-start" id="inlineFormUpdate" tabindex="-1" aria-labelledby="myModalLabel33" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myModalLabel33">Modifier une formation </h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form wire:submit.prevent="updateFormation">
                                    @csrf
                                    <div class="modal-body">

                                        <label>Titre de la formation: </label>
                                        <div class="mb-1">
                                            <input type="text" wire:model="titre" placeholder="Titre de la formation" class="form-control" />
                                            @error('titre') <span class="text-danger" style="color: red;"> {{ $message}} </span> @enderror
                                        </div>
                                        <label>Auteur: </label>
                                        <div class="mb-1">
                                            <input type="text" wire:model="auteur" placeholder="Auteur" class="form-control" />
                                            @error('auteur') <span class="text-danger" style="color: red;"> {{ $message}} </span> @enderror
                                        </div>
                                        <label>Image: </label>
                                        <div class="mb-1">
                                            <input type="file" wire:model="image" placeholder="Image" accept="image/png, image/jpg, image/jpeg" class="form-control" />
                                            @error('image') <span class="text-danger" style="color: red;"> {{ $message}} </span> @enderror
                                            @if ($image)
                                                     <img style="height: 100px;" src="{{ $image->temporaryUrl() }}" class="w-1/2">
                                                     @elseif ($oldImage)
                                                     <img style="height: 100px;" src="{{ asset('storage/trainings/'.$oldImage) }}" class="w-1/2">
                                          

                                        @endif
                                        </div>
                                      
                                           
                                        <label>Description: </label>
                                        <div class="mb-1">
                                            <textarea wire:model="description" class="form-control"></textarea>
                                        </div>
                                        <label>Date début: </label>
                                        <div class="mb-1">
                                            <input type="date" wire:model="date_debut" class="form-control">
                                        </div>
                                        
                                        <label>Date fin: </label>
                                        <div class="mb-1">
                                            <input type="date" wire:model="date_fin" class="form-control">
                                        </div>
                                        
                                        <label>Status: </label>
                                        <div class="mb-1">
                                            <select wire:model="status" class="select2 form-select">
                                                <option value=""> Choisir un status </option>
                                                <option value="Actif">Actif </option>
                                                <option value="Non actif">Inactif </option>
                                            </select>
                                            @error('status') <span class="text-danger"> {{ $message}} </span> @enderror
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
                                    <h4 class="modal-title" id="myModalLabel33">Suppression d'une formation </h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form wire:submit.prevent="destroyFormation">
                                    @csrf
                                    <div class="modal-body">
                                        <h4 class="text-danger">Êtes-vous sûr de bien vouloir supprimer cette formation? </h4>

                                    </div>
                                    <div class="modal-footer">
                                        <!-- <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Login</button> -->
                                        <button type="submit" class="btn btn-primary">confirmer</button>
                                    </div>
                                </form>
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