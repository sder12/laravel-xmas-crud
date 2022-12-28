<header class="bg-success bg-opacity-25">
    <nav class="navbar navbar-expand-lg ">
        <div class="container-fluid">

            <a class="navbar-brand fw-bold" href="{{ route('home') }}">Letters for Xmas</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('letters.index') }}">Letters</a>
                    </li>

                </ul>
            </div>
        </div>

    </nav>
</header>
