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
                        <h4 class="card-title">Gestion de nos distributeurs</h4>
                        <div class="row">
                            <div class="col-md-4 user_role"></div>
                            <div class="col-md-4 user_plan"></div>
                            <div class="col-md-4 user_status"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-9"></div>
                        <div class="col-md-3 py-1">

                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#inlineForm">
                                Créer un distributeur
                            </button>
                        </div>
                    </div>
                    <div class="card-datatable table-responsive pt-0">
                        <table class="user-list-tablje table">
                            <thead class="table-light">
                                <tr>
                                    <th>n°</th>
                                    <th>Pays</th>
                                    <th>Numéro</th>
                                    <th>Description</th>
                                    <th>Actions</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($distributeurs as $category)
                                <tr>
                                    <td>{{ $loop->count - $loop->iteration +1}}</td>
                                    <td>{{ $category->country}}</td>
                                    <td>{{ $category->phone}}</td>
                                    <td>{{ $category->description}}</td>

                                    <th class="d-flex">
                                        <button type="submit" class="btn text-primary" data-bs-toggle="modal" data-bs-target="#inlineFormUpdate" wire:click="editCatefory({{ $category->id }} )"> <img style="height: 15px; color: blue;" src="{{asset('icons/editing.png')}}" alt="Editer"></button>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#inlineFormDelete"  class="btn text-danger" wire:click="deleteConfirm({{ $category->id }})"><img style="height: 15px;" src="{{asset('icons/delete.png')}}" alt="Supprimer"></a>
                                    </th>
                                </tr>
                                @endforeach

                            </tbody>

                        </table>

                    </div>

                    {{ $distributeurs->links() }}

                    <!-- END: Content-->
                    <div class="form-modal-ex">
                        <!-- Modal -->
                        <div wire:ignore.self class="modal fade text-start" id="inlineForm" tabindex="-1" aria-labelledby="myModalLabel33" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="myModalLabel33">Créer un distributeur </h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form wire:submit.prevent="createCatefory">
                                        @csrf
                                        <div class="modal-body">
                                            <label>Pays: </label>
                                            <div class="mb-1">
                                                <input type="text" wire:model="country" placeholder="Titre" class="form-control" />
                                                @error('country') <span class="text-danger" style="color: red;"> {{ $message}} </span> @enderror
                                            </div>
                                            <label>Numéro: </label>
                                            <div class="mb-1">
                                                <input type="text" wire:model="phone" placeholder="Numéro de téléphone" class="form-control" />
                                                @error('phone') <span class="text-danger" style="color: red;"> {{ $message}} </span> @enderror
                                            </div>
                                            <label>description: </label>
                                            <div class="mb-1">
                                                <textarea wire:model="description" class="form-control"></textarea>
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
                                        <h4 class="modal-title" id="myModalLabel33">Modifier un distributeur </h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form wire:submit.prevent="updateCatefory">
                                        @csrf
                                        <div class="modal-body">
                                            <label>Pays: </label>
                                            <div class="mb-1">
                                                <input type="text" wire:model="country" placeholder="Pays" class="form-control" />
                                                @error('country') <span class="text-danger" style="color: red;"> {{ $message}} </span> @enderror
                                            </div>
                                            <label>Numéro: </label>
                                            <div class="mb-1">
                                                <input type="text" wire:model="phone" placeholder="Numéro de téléphone" class="form-control" />
                                                @error('phone') <span class="text-danger" style="color: red;"> {{ $message}} </span> @enderror
                                            </div>
                                            <label>description: </label>
                                            <div class="mb-1">
                                                <textarea wire:model="description" class="form-control"></textarea>
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
                                        <h4 class="modal-title" id="myModalLabel33">Supprimer un distributeur </h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form wire:submit.prevent="destroyCatefory">
                                        @csrf
                                        <div class="modal-body">
                                            <h4 class="text-danger">Êtes-vous sûr de bien vouloir supprimer ce distributeur? </h4>
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


                </div>
            </section>
            <!-- users list ends -->

        </div>
    </div>
</div>