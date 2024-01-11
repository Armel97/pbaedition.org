@extends('layouts.layout')

@section('content')

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
                        @if (Session::has('success'))
                        <h3 class="alert alert-success"> {{ Session::get('success') }} </h3>
                        @endif
                        <h4 class="card-title">Rechercher et filtrer</h4>
                        <div class="row">
                            <div class="col-md-4 user_role"></div>
                            <div class="col-md-4 user_plan"></div>
                            <div class="col-md-4 user_status"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-9"></div>
                        <div class="col-md-3 py-1">
                            <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modals-slide-in">
                                Ajouter un utilisateur
                            </button>
                        </div>
                    </div>
                    <div class="card-datatable table-responsive pt-0">
                        <table class="user-list-tablje table">
                            <thead class="table-light">
                                <tr>
                                    <th></th>
                                    <th>Nom</th>
                                    <th>Contact</th>
                                    <th>Titre</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                <tr>
                                    <td></td>
                                    <td>{{ $user->fullname}}</td>
                                    <td>{{ $user->contact}}</td>
                                    <td>{{ $user->title}}</td>
                                    <td>{{ $user->email}}</td>
                                    <td>{{ $user->status}}</td>
                                    <td>
                                    <form action="{{ route('delete-category', $user->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn text-danger" onclick="return confirm('Etes-vous sûr bien vouloir désactiver ce compte ?')">Désactiver</button>
                                        </form>
                                        
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- Modal to add new user starts-->
                    <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in">
                        <div class="modal-dialog">
                            <form class=" modal-content pt-0" action="/add-user" method="POST">
                                @csrf
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">×</button>
                                <div class="modal-header mb-1">
                                    <h5 class="modal-title" id="exampleModalLabel">Ajouter un utilisateur</h5>
                                </div>
                                <div class="modal-body flex-grow-1">
                                    <div class="mb-1">
                                        <label class="form-label" for="basic-icon-default-fullname">Nom et prénoms</label>
                                        <input type="text" class="form-control dt-full-name" id="basic-icon-default-fullname" placeholder="John Doe" name="fullname" />
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="basic-icon-default-uname">Titre</label>
                                        <input type="text" id="basic-icon-default-uname" class="form-control dt-uname" placeholder="Web Developer" name="title" />
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="basic-icon-default-email">Email</label>
                                        <input type="text" id="basic-icon-default-email" class="form-control dt-email" placeholder="john.doe@example.com" name="email" />
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="basic-icon-default-contact">Contact</label>
                                        <input type="text" id="basic-icon-default-contact" class="form-control dt-contact" placeholder="+1 (609) 933-44-22" name="contact" />
                                    </div>

                                    <button type="submit" class="btn btn-primary me-1">Créer</button>
                                    <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal">Annuler</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Modal to add new user Ends-->
                </div>
                <!-- list and filter end -->
            </section>
            <!-- users list ends -->

        </div>
    </div>
</div>
<!-- END: Content-->



@stop