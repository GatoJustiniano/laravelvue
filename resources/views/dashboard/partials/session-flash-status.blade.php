@if (session('status'))
    <div id="autoCloseAlert" class="alert alert-success alert-dismissible text-center" role="alert">
        {{ session('status') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        </button>
    </div>
@endif

@if(session('info'))
    <div id="autoCloseAlert" class="alert alert-info alert-dismissible text-center">
        {{ session('info') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        </button>
    </div>        
@endif

@if(session('status'))
    <script>
        window.onload = function() {
            Swal.fire("{{ session('status') }}", {
                icon: "status",
            });
        };
    </script>     
@endif

@if(session('info'))
    <script>
        window.onload = function() {
            Swal.fire("{{ session('info') }}", {
                icon: "info",
            });
        };
    </script>     
@endif

<script>
    setTimeout(function() {
        $('#autoCloseAlert').alert('close');
    }, 5000); 
</script>