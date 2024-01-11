<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
  @include('includes.head')
  @livewireStyles


  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="">

  <!-- BEGIN: Header-->
  @include('includes.header')
  <!-- END: Header-->


  <!-- BEGIN: Main Menu-->
  @include('includes.sidebar')
  <!-- END: Main Menu-->

  @yield('content')


  <div class="sidenav-overlay"></div>
  <div class="drag-target"></div>

  <!-- BEGIN: Footer-->
  @include('includes.footer')
  <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
  <!-- END: Footer-->
  @livewireScripts



  <script>
    window.addEventListener('postUpdated', postId => {
      $('#inlineFormUpdate').modal('hide')
    });

    window.addEventListener('deleteElement', postId => {
      $('#inlineFormDelete').modal('hide')
    });
    window.addEventListener('postCreated', postId => {
      $('#inlineForm').modal('hide')
    });
    window.addEventListener('swal:modal', event => {
      swal({
        title: event.detail[0].message,
        text: event.detail[0].text,
        icon: event.detail[0].type,
      });
    });

    window.addEventListener('swal:confirm', event => {
      swal({
          title: event.detail[0].message,
          text: event.detail[0].text,
          icon: event.detail[0].type,
          
          buttons: true,
          dangerMode: true,
          cancelButtonText: 'eeeeeee',
          
        })
        .then((willDelete) => {
          
          if (willDelete) {
            Livewire.dispatch('deleteIt', { id: event.detail[0].id })

          }
        });
    });
  </script>

  @include('includes.scripts')
</body>
<!-- END: Body-->

</html>