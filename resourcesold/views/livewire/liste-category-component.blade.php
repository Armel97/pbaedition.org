<div class="card">

    <div class="card-body border-bottom">
        @if (Session::has('success'))
        <h3 class="alert alert-success"> {{ Session::get('success') }} </h3>
        @endif
        <h4 class="card-title">Thématique</h4>
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
                Créer une thématique
            </button>
        </div>
    </div>
    <div class="card-datatable table-responsive pt-0">
        <table class="user-list-tablje table">
            <thead class="table-light">
                <tr>
                    <th>n°</th>
                    <th>Libellé</th>
                    <th>Description</th>
                    <th>Actions</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                <tr>
                    <td>{{ $loop->count - $loop->iteration +1}}</td>
                    <td>{{ $category->libelle}}</td>
                    <td>{{ $category->description}}</td>

                    <th class="d-flex">
                        <button type="submit" class="btn text-primary" data-bs-toggle="modal" data-bs-target="#inlineFormUpdate" wire:click="editCatefory({{ $category->id }} )"> <img style="height: 15px; color: blue;" src="{{asset('icons/editing.png')}}" alt="Editer"></button>
                        <a href="#" data-bs-toggle="modal" class="btn text-danger" wire:click="deleteConfirm({{ $category->id }} )"><img style="height: 15px;" src="{{asset('icons/delete.png')}}" alt="Supprimer"></a>
                    </th>
                </tr>


                @endforeach
                @if(count($categories) == 0)
                <tr>
                    <td colspan="6" class="text-center">
                        Aucun enregistrement
                    </td>
                </tr>
                @endif
            </tbody>

        </table>

    </div>

    {{ $categories->links() }}

    <!-- END: Content-->
    <div class="form-modal-ex">
        <!-- Modal -->
        <div wire:ignore.self class="modal fade text-start" id="inlineForm" tabindex="-1" aria-labelledby="myModalLabel33" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel33">Créer une catégorie de livre </h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form wire:submit.prevent="createCatefory">
                        @csrf
                        <div class="modal-body">
                            <label>Libellé: </label>
                            <div class="mb-1">
                                <input type="text" wire:model="libelle" placeholder="Titre" class="form-control" />
                                @error('libelle') <span class="text-danger" style="color: red;"> {{ $message}} </span> @enderror
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
                        <h4 class="modal-title" id="myModalLabel33">Modifier un livre </h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form wire:submit.prevent="updateCatefory">
                        @csrf
                        <div class="modal-body">
                            <label>Libellé: </label>
                            <div class="mb-1">
                                <input type="text" wire:model="libelle" placeholder="Titre" class="form-control" />
                                @error('libelle') <span class="text-danger" style="color: red;"> {{ $message}} </span> @enderror
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
                        <h4 class="modal-title" id="myModalLabel33">Modifier un livre </h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form wire:submit.prevent="destroyCatefory">
                        @csrf
                        <div class="modal-body">
                            <h4 class="text-danger">Êtes-vous sûr de bien vouloir supprimer cette catégorie? </h4>

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