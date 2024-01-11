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
                        <h4 class="card-title">Equipe</h4>
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
                            Créer un membre
                        </button>
                    </div>
                </div>
                <div class="card-datatable table-responsive pt-0">
                    <table class="user-list-tablje table">
                        <thead class="table-light">
                            <tr>
                                <th>n°</th>
                                <th>Nom et prénom</th>
                                <th>Titre</th>
                                <th>Photo</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($teams as $team)
                            <tr>
                                <td>{{ $loop->count - $loop->iteration +1}}</td>
                                <td>{{ $team->nom }} {{ $team->prenom }}</td>
                                <td>{{ $team->titre}}</td>
                                <td>
                                    <img style="height: 40px;" src="{{asset('storage/team/'. $team->image)}}" alt="">
                                </td>
                                <th class="d-flex">
                                    <button type="submit" class="btn text-primary" data-bs-toggle="modal" data-bs-target="#inlineFormUpdate" wire:click="editTeam({{ $team->id }} )"> <img style="height: 15px; color: blue;" src="{{asset('icons/editing.png')}}" alt="Editer"></button>
                                    <a href="#" data-bs-toggle="modal" class="btn text-danger" data-bs-target="#inlineFormDelete" wire:click="deleteConfirm({{ $team->id }} )"><img style="height: 15px;" src="{{asset('icons/delete.png')}}" alt="Supprimer"></a>
                                </th>
                            </tr>
                            @endforeach
                            @if(count($teams) == 0)
                            <tr>
                                <td colspan="6" class="text-center">
                                    Aucun enregistrement
                                </td>
                            </tr>
                            @endif
                        </tbody>

                    </table>
                    {{ $teams->links() }}

                </div>
                <!-- END: Content-->
                <div class="form-modal-ex">
                    <!-- Modal -->
                    <div wire:ignore.self class="modal fade text-start" id="inlineForm" tabindex="-1" aria-labelledby="myModalLabel33" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myModalLabel33">Créer un membre de l'équipe </h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form wire:submit.prevent="createTeam">
                                    @csrf
                                    <div class="modal-body">
                                        <label>Nom: </label>
                                        <div class="mb-1">
                                            <input type="text" wire:model="nom" placeholder="Nom" class="form-control" />
                                            @error('nom') <span class="text-danger" style="color: red;"> {{ $message}} </span> @enderror
                                        </div>
                                        <label>Prénom: </label>
                                        <div class="mb-1">
                                            <input type="text" wire:model="prenom" placeholder="Prénom" class="form-control" />
                                            @error('prenom') <span class="text-danger" style="color: red;"> {{ $message}} </span> @enderror
                                        </div>
                                        <label>Titre: </label>
                                        <div class="mb-1">
                                            <input type="text" wire:model="titre" placeholder="Titre ou poste" class="form-control" />
                                            @error('titre') <span class="text-danger" style="color: red;"> {{ $message}} </span> @enderror
                                        </div>
                                        <label>Image: </label>
                                        <div class="mb-1">
                                            <input type="file" wire:model="image" placeholder="Image" accept="image/png, image/jpg, image/jpeg" class="form-control" />
                                            @error('image') <span class="text-danger" style="color: red;"> {{ $message}} </span> @enderror
                                         <div wire:loading wire:target="image">Uploading...</div>

                                         @if ($image)
                                     <img style="height: 100px;" src="{{ $image->temporaryUrl() }}" class="w-1/2">
                                     @elseif ($oldImage)
                                     <img style="height: 100px;" src="{{ asset('storage/team/'.$oldImage) }}" class="w-1/2">
                                     @endif
                                        </div>
                                        
                                        <label>Lien Facebook: </label>
                                        <div class="mb-1">
                                            <input type="text" wire:model="facebook" placeholder="Lien Facebook" class="form-control" />
                                            @error('facebook') <span class="text-danger" style="color: red;"> {{ $message}} </span> @enderror
                                        </div>
                                        <label>Lien Youtube: </label>
                                        <div class="mb-1">
                                            <input type="text" wire:model="youtube" placeholder="Lien Youtube" class="form-control" />
                                            @error('youtube') <span class="text-danger" style="color: red;"> {{ $message}} </span> @enderror
                                        </div>
                                        <label>Lien LinkedIn: </label>
                                        <div class="mb-1">
                                            <input type="text" wire:model="linkedin" placeholder="Lien LinkedIn" class="form-control" />
                                            @error('linkedin') <span class="text-danger" style="color: red;"> {{ $message}} </span> @enderror
                                        </div>
                                        <label>Détail relative au membre: </label>
                                        <div class="mb-1">
                                            <textarea wire:model="detail" class="form-control"></textarea>
                                        </div>
                                        <label>Status: </label>
                                        <div class="mb-1">
                                            <select wire:model="status" required class="form-select">
                                                <option value=""> Sélectionner un status</option>
                                                <option value="Non Actif"> Non Actif </option>
                                                <option value="Actif">Actif</option>
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
                                    <h4 class="modal-title" id="myModalLabel33">Modifier un livre </h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form wire:submit.prevent="updateTeam">
                                    @csrf
                                    <div class="modal-body">
                                        <label>Nom: </label>
                                        <div class="mb-1">
                                            <input type="text" wire:model="nom" placeholder="Nom" class="form-control" />
                                            @error('nom') <span class="text-danger" style="color: red;"> {{ $message}} </span> @enderror
                                        </div>
                                        <label>Prénom: </label>
                                        <div class="mb-1">
                                            <input type="text" wire:model="prenom" placeholder="Prénom" class="form-control" />
                                            @error('prenom') <span class="text-danger" style="color: red;"> {{ $message}} </span> @enderror
                                        </div>
                                        <label>Titre: </label>
                                        <div class="mb-1">
                                            <input type="text" wire:model="titre" placeholder="Titre ou poste" class="form-control" />
                                            @error('titre') <span class="text-danger" style="color: red;"> {{ $message}} </span> @enderror
                                        </div>
                                        <label>Image: </label> 
                                        <div class="mb-1">
                                            <input type="file" wire:model="image" placeholder="Image" accept="image/png, image/jpg, image/jpeg" class="form-control" />
                                            @error('image') <span class="text-danger" style="color: red;"> {{ $message}} </span> @enderror
                                            <div wire:loading wire:target="image">Chargement...</div>

                                        </div>
                                        <div class="mb-1">
                                            @if ($image)
                                            <img style="height: 100px;" src="{{ $image->temporaryUrl() }}" class="w-1/2">
                                            @elseif ($oldImage)
                                            <img style="height: 100px;" src="{{ asset('storage/team/'.$oldImage) }}" class="w-1/2">
                                            @endif

                                        </div>

                                        <label>Lien Facebook: </label>
                                        <div class="mb-1">
                                            <input type="text" wire:model="facebook" placeholder="Lien Facebook" class="form-control" />
                                            @error('facebook') <span class="text-danger" style="color: red;"> {{ $message}} </span> @enderror
                                        </div>
                                        <label>Lien Youtube: </label>
                                        <div class="mb-1">
                                            <input type="text" wire:model="youtube" placeholder="Lien Youtube" class="form-control" />
                                            @error('youtube') <span class="text-danger" style="color: red;"> {{ $message}} </span> @enderror
                                        </div>
                                        <label>Lien LinkedIn: </label>
                                        <div class="mb-1">
                                            <input type="text" wire:model="linkedin" placeholder="Lien LinkedIn" class="form-control" />
                                            @error('linkedin') <span class="text-danger" style="color: red;"> {{ $message}} </span> @enderror
                                        </div>
                                        <label>Détail relative au membre: </label>
                                        <div class="mb-1">
                                            <textarea wire:model="detail" class="form-control"></textarea>
                                        </div>
                                        <label>Status: </label>
                                        <div class="mb-1">
                                            <select wire:model="status" required class=" form-select">
                                                <option value=""> Sélectionner un status </option>
                                                <option value="Non Actif"> Non Actif </option>
                                                <option value="Actif">Actif</option>
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
                                    <h4 class="modal-title" id="myModalLabel33">Suppression d'un membre </h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form wire:submit.prevent="destroyTeam">
                                    @csrf
                                    <div class="modal-body">
                                        <h4 class="text-danger">Êtes-vous sûr de bien vouloir supprimer ce membre de votre équipe? </h4>

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