<div class="page-heading">
    <div class="page-title">
      <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
          <h3>Stok Product</h3>
          <p class="text-subtitle text-muted">Daftar product aplikasi management product.</p>
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
          <h4 class="card-title">Stok Product</h4>
        </div>
        <div class="card-body">
            {{-- <livewire:stock-table theme="bootstrap-5" /> --}}
            <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns">
                <div class="dataTable-top">
                {{-- <div class="dataTable-dropdown">
                    <select class="dataTable-selector form-select">
                        <option value="5">5</option><option value="10" selected="">10</option>
                        <option value="15">15</option><option value="20">20</option>
                        <option value="25">25</option>
                    </select>
                    <label> entries per page</label>
                </div> --}}
                <div class="dataTable-search">
                    {{-- <input class="dataTable-input" placeholder="Search..." type="text"> --}}
                </div>
                </div>
                    <div class="dataTable-container"><table class="table table-striped dataTable-table" id="table1">
                <thead>
                  <tr>
                    <th data-sortable="" style="width: 12.0305%;">
                    <a href="#" class="dataTable-sorter">Nomor SKU.</a></th>
                    <th data-sortable="" style="width: 41.2754%;">
                        <a href="#" class="dataTable-sorter">Deskripsi</a></th>
                        <th data-sortable="" style="width: 18.8772%;">
                            <a href="#" class="dataTable-sorter">Jumlah Stok</a></th>
                            <th data-sortable="" style="width: 16.4319%;">
                                <a href="#" class="dataTable-sorter">Update Terakhir</a></th>
                                <th data-sortable="" style="width: 11.3459%;">
                                    <a href="#" class="dataTable-sorter">Status</a></th>
                                </tr>
                </thead>
                <tbody>
                    @forelse($stokBarang as $item)
                    <tr>
                        <td>{{$item->no_part}}</td>
                        <td> {{$item->description}}</td>
                        <td>{{$item->stok}}</td>
                        <td> {{\Carbon\Carbon::parse($item->updated_at)->locale('id')->isoFormat('ll')}}</td>
                        <td>
                            @if($item->stok < 15)
                            <span class="badge bg-warning">Warning</span>
                            @else
                            <span class="badge bg-success">Good</span>
                            @endif
                        </td>
                    </tr>
                    @empty

                    @endforelse
                </tbody>
              </table></div><div class="dataTable-bottom"><div class="dataTable-info">Showing 1 to 10 of 26 entries</div><nav class="dataTable-pagination"><ul class="dataTable-pagination-list pagination pagination-primary"><li class="pager page-item"><a href="#" data-page="1" class="page-link">‹</a></li><li class="active page-item"><a href="#" data-page="1" class="page-link">1</a></li><li class="page-item"><a href="#" data-page="2" class="page-link">2</a></li><li class="page-item"><a href="#" data-page="3" class="page-link">3</a></li><li class="pager page-item"><a href="#" data-page="2" class="page-link">›</a></li></ul></nav></div></div>
        </div>
      </div>
    </section>
  </div>
