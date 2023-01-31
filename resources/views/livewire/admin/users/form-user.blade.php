<div class="page-heading">
    <div class="page-title">
      <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
          <h3>Form User</h3>
          <p class="text-subtitle text-muted">Daftar pengguna aplikasi management product.</p>
        </div>
        <div class="col-12 col-md-6 order-md-2 order-first">
          <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="{{route('admin.listusers')}}">User</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  Form
                </li>
              </ol>
          </nav>
        </div>
      </div>
    </div>

    <section id="multiple-column-form">
        <div class="row match-height">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Multiple Column</h4>
              </div>
              <div class="card-content">
                <div class="card-body">
                  <form class="form" data-parsley-validate="" novalidate="">
                    <div class="row">
                      <div class="col-md-6 col-12">
                        <div class="form-group mandatory">
                          <label for="first-name-column" class="form-label">Nama</label>
                          <input wire:model.defer="state.name" type="text" id="first-name-column" class="form-control" placeholder="Nama" name="fname-column" data-parsley-required="true">
                        </div>
                      </div>
                      <div class="col-md-6 col-12">
                        <div class="form-group mandatory">
                          <label for="last-name-column" class="form-label">Email</label>
                          <input wire:model.defer="state.email" type="text" id="last-name-column" class="form-control" placeholder="Email" name="email-column" data-parsley-required="true">
                        </div>
                      </div>
                   
                      <div class="col-md-3 col-12 my-2">
                        <div class="form-group mandatory">
                          <label for="city-column" class="form-label">Password</label>
                          <input wire:model.defer="state.password"type="password" id="city-column" class="form-control" placeholder="Password" name="password" data-parsley-required="true">
                        </div>
                      </div>
                      <div class="col-md-3 col-12 my-2">
                        <div class="form-group mandatory">
                          <label for="country-floating" class="form-label">Confirmation Password</label>
                          <input wire:model.defer="state.password_confirmation"type="password" id="country-floating" class="form-control" name="country-floating" placeholder="Password Confirmation" data-parsley-required="true">
                        </div>
                      </div>
                      <div class="col-md-3 col-12 my-2">
                        <div class="form-group">
                          <label for="position-column" class="form-label">Position</label>
                          <input wire:model.defer="state.bagian" type="text" id="position-column" class="form-control" name="position-column" placeholder="Position" data-parsley-required="true">
                        </div>
                      </div>
                      <div class="col-md-3 col-12 my-2">
                        <div class="form-group">
                          <label for="telphone-column" class="form-label">Nomor Telphone</label>
                          <input wire:model.defer="state.phone" type="text" id="telphone-column" class="form-control" name="telphone-column" placeholder="Telphone" data-parsley-required="true">
                        </div>
                      </div>
                      <div class="col-12 d-flex justify-content-end">
                        <div class="form-group">
                          <div class="form-check mandatory">
                            <input type="checkbox" id="checkbox5" class="form-check-input" checked="" data-parsley-required="true" data-parsley-error-message="You have to accept our terms and conditions to proceed." data-parsley-multiple="checkbox5">
                            <label for="checkbox5" class="form-check-label form-label">I accept these terms and conditions.</label>
                          </div>
                         
                        </div>
                      </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <p>Pastikan semua data informasi yang kalian masukkan benar</p>
                      </div>
                    <div class="row">
                      <div class="col-12 d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary me-1 mb-1">
                          Submit
                        </button>
                        <button type="reset" class="btn btn-light-secondary me-1 mb-1">
                          Reset
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </section>

  </div>
