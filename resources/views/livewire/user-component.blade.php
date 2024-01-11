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
                        <h4 class="card-title">Utilisateurs</h4>
                        <p>Ces utilisateurs ont le droit de gérer les différents modules du système.</p>
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
                            Créer un utilisateur
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
                                <th>Contact</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($teams as $team)
                            <tr>
                                <td>{{ $loop->count - $loop->iteration +1}}</td>
                                <td>{{ $team->fullname }}</td>
                                <td>{{ $team->title}}</td>
                                <td>{{ $team->contact}}</td>
                                <td>{{ $team->email}}</td>
                                <td>{{ $team->status}}</td>
                              
                                <th class="d-flex">
                                    <button type="submit" class="btn text-primary" data-bs-toggle="modal" data-bs-target="#inlineFormUpdate" wire:click="editTeam({{ $team->id }} )"> <img style="height: 15px; color: blue;" src="{{asset('icons/editing.png')}}" alt="Editer"></button>
                                    <!-- <a href="#" data-bs-toggle="modal" class="btn text-danger" data-bs-target="#inlineFormDelete" wire:click="deleteConfirm({{ $team->id }} )"><img style="height: 15px;" src="{{asset('icons/delete.png')}}" alt="Supprimer"></a> -->
                                    <a href="#" data-bs-toggle="modal" class="btn text-danger" data-bs-target="#inlineFormSuspend" wire:click="deleteConfirm({{ $team->id }} )"><img style="height: 15px;" src="{{asset('icons/suspend.jpg')}}" alt="Supprimer"></a>
                                </th>
                            </tr>
                            @endforeach
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
                                    <h4 class="modal-title" id="myModalLabel33">Créer un utilisateur du système </h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form wire:submit.prevent="createUser">
                                    @csrf
                                    <div class="modal-body">
                                        <label>Nom et prénom: </label>
                                        <div class="mb-1">
                                            <input type="text" wire:model="fullname" placeholder="Nom" class="form-control" />
                                            @error('fullname') <span class="text-danger" style="color: red;"> {{ $message}} </span> @enderror
                                        </div>
                                       
                                        <label>Titre: </label>
                                        <div class="mb-1">
                                            <input type="text" wire:model="title" placeholder="Titre ou poste" class="form-control" />
                                            @error('title') <span class="text-danger" style="color: red;"> {{ $message}} </span> @enderror
                                        </div>
                                        <div class="mb-1">
                                            <label class="form-label">Email</label>
                                            <input type="text" class="form-control dt-email" placeholder="john.doe@example.com" wire:model="email" />
                                            @error('email') <span class="text-danger" style="color: red;"> {{ $message}} </span> @enderror

                                        </div>
                                        <div class="mb-1">
                                            <label class="form-label">Contact</label>
                                            <input type="text" class="form-control dt-contact" placeholder="+ (229) 97-00-00-00" wire:model="contact" />
                                            @error('contact') <span class="text-danger" style="color: red;"> {{ $message}} </span> @enderror

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
                                        <label>Nom et prénom: </label>
                                        <div class="mb-1">
                                            <input type="text" wire:model="fullname" placeholder="Nom" class="form-control" />
                                            @error('fullname') <span class="text-danger" style="color: red;"> {{ $message}} </span> @enderror
                                        </div>
                                       
                                        <label>Titre: </label>
                                        <div class="mb-1">
                                            <input type="text" wire:model="title" placeholder="Titre ou poste" class="form-control" />
                                            @error('title') <span class="text-danger" style="color: red;"> {{ $message}} </span> @enderror
                                        </div>
                                        <div class="mb-1">
                                            <label class="form-label">Email</label>
                                            <input type="text" class="form-control dt-email" placeholder="john.doe@example.com" wire:model="email" />
                                            @error('email') <span class="text-danger" style="color: red;"> {{ $message}} </span> @enderror

                                        </div>
                                        <div class="mb-1">
                                            <label class="form-label">Contact</label>
                                            <input type="text" class="form-control dt-contact" placeholder="+ (229) 97-00-00-00" wire:model="contact" />
                                            @error('contact') <span class="text-danger" style="color: red;"> {{ $message}} </span> @enderror

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
                    <div wire:ignore.self class="modal fade text-start" id="inlineFormSuspend" tabindex="-1" aria-labelledby="myModalLabel33" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myModalLabel33">Suspension d'un utilisateur </h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form wire:submit.prevent="suspendTeam">
                                    @csrf
                                    <div class="modal-body">
                                        <h4 class="text-danger">Êtes-vous sûr de bien vouloir suspendre cet utilisateur? </h4>

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