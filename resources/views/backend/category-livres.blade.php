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
                @livewire('liste-category-component')

                <!-- list and filter end -->
            </section>
            <!-- users list ends -->

        </div>
    </div>
</div>




@stop