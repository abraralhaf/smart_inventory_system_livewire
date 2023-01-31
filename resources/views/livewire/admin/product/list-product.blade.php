<div class="page-heading">
    <div class="page-title">
      <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
          <h3>Product </h3>
          <p class="text-subtitle text-muted">Daftar pengguna aplikasi management product.</p>
        </div>
        <div class="col-12 col-md-6 order-md-2 order-first">
          <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item active">
                Users
              </li>
              {{-- <li class="breadcrumb-item active" aria-current="page">
                Layout Default
              </li> --}}
            </ol>
          </nav>
        </div>
      </div>
    </div>
    <section class="section">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">List Product</h4>
        </div>
        <div class="card-body">
            <livewire:product-table theme="bootstrap-5" />
        </div>
      </div>
    </section>
  </div>
