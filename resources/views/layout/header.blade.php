<div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('home') }}">Home</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active" href="{{ route('trips') }}">Trip Management</a>
                        <a class="nav-link active" href="{{ route('check_form') }}">Check For Tickets</a>
                        <a class="nav-link active" href="{{ route('details') }}">Details</a>
                    </div>
                </div>
            </div>
        </nav>
</div>
