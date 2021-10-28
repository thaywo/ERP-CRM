<section class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <nav class="navbar navbar-expand-md navbar-light bg-light mb-2">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#page_menu" aria-controls="page_menu" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="page_menu">
          <ul class="navbar-nav">

            {{ $slot }}

          </ul>
        </div>
      </nav>
    </div>
  </div>
</section>
