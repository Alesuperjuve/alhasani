<div class="card">
  <div class="card-body">
    <h2 class="card-title">Data Santri</h2>
    <div class="row">
      <div class="col-12">
        <div id="order-listing_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
          <div class="row">
            <div class="col-sm-12 col-md-6"></div>
            <div class="col-sm-12 col-md-6">
              <div id="order-listing_filter" class="dataTables_filter">
                <!-- Formulir Pencarian -->
                <form action="{{ request()->url() }}" method="GET" class="mb-3">
                  <label>
                    <input type="search" id="tableSearch" class="form-control" placeholder="Cari ..." aria-controls="order-listing" value="{{ $search }}">
                  </label>
                </form>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <!-- Tentukan `viewType` berdasarkan kondisi -->
              @php
                $viewType = request()->routeIs('santri.*') ? 'SANTRI' : 'KAMAR';
              @endphp

              <!-- Sertakan `viewType` dalam include --}} -->
              @include('components.konten-tabel', ['viewType' => $viewType, 'headers' => $headers, 'rows' => $rows])
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12 col-md-5">
              <div class="dataTables_info" id="order-listing_info" role="status" aria-live="polite">
                Lihat 1 to 10 of 10 entries
              </div>
            </div>
            <div class="col-sm-12 col-md-7">
              <div class="dataTables_paginate paging_simple_numbers" id="order-listing_paginate">
                <ul class="pagination">
                  <!-- Menyisipkan Pagination dari Laravel -->
                  {{ $rows->withQueryString()->links('pagination::bootstrap-4') }}
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Fitur pencarian client-side -->
<script>
  document.getElementById('tableSearch').addEventListener('keyup', function() {
    const searchValue = this.value.toLowerCase();
    const rows = document.querySelectorAll('#order-listing_wrapper tbody tr');

    rows.forEach(row => {
      const cells = row.getElementsByTagName('td');
      let match = false;

      for (let cell of cells) {
        if (cell.textContent.toLowerCase().includes(searchValue)) {
          match = true;
          break;
        }
      }

      row.style.display = match ? '' : 'none';
    });
  });
</script>


