@if (session()->has('success'))
    <div id="alert" class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    <script>
        $("document").ready(function() {

            setTimeout(function() {
                $('#alert').fadeOut('slow');
            }, 5000); // <-- time in milliseconds




        });
    </script>
@endif
