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
                @livewire('liste-books-component')

               
            </section>
            <!-- users list ends -->

        </div>
    </div>
</div>



<!-- END: Content-->
<div class="form-modal-ex">

    
</div>


@stop