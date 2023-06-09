<header>
      <div class="container">
            <div class="row">
                  <nav class="navbar navbar-expand-lg bg-body-tertiary">
                        <div class="container-fluid">
                              <a class="navbar-brand" href="{{ route('comics.index') }}">Comics DB</a>
                              <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                                    aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                              </button>
                              <div class="collapse navbar-collapse" id="navbarNav">
                                    <ul class="navbar-nav">

                                          <li class="nav-item">
                                                <a class="nav-link" href="{{ route('comics.index') }}">Comics
                                                      Catalog</a>
                                          </li>
                                          <li class="nav-item">
                                                <a class="nav-link" href="{{ route('comics.create') }}">Add Comic</a>
                                          </li>
                                          <li class="nav-item">
                                                <a class="nav-link" href="{{ route('credits') }}">Credits</a>
                                          </li>
                                    </ul>
                              </div>
                        </div>
                  </nav>

            </div>
      </div>
</header>
