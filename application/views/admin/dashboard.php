<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?= site_url('admin/dashboard'); ?>">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title">Guru</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-cart"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?= $totalGuru; ?></h6>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">

                <div class="card-body">
                  <h5 class="card-title">Murid</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-currency-dollar"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?= $totalMurid; ?></h6>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->

            <!-- Customers Card -->
            <div class="col-xxl-4 col-xl-12">

              <div class="card info-card customers-card">

                <div class="card-body">
                  <h5 class="card-title">Mata Pelajaran</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?= $totalMapel; ?></h6>

                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Customers Card -->

            <section class="section">
              <div class="row">
                <div class="col-lg-12">

                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Tabel Data Guru</h5>

                      <!-- Tabel Guru -->
                      <table class="table datatable">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">NIP</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Tempat, tanggal lahir</th>
                            <th scope="col">No. HP</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Jenis Kelamin</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $i=1; foreach ($dataGuru as $item) { ?>
                          <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $item->nip; ?></td>
                            <td><?= $item->nama; ?></td>
                            <td><?= $item->tempat_lahir.", ".$item->tgl_lahir; ?></td>
                            <td><?= $item->no_hp; ?></td>
                            <td><?= $item->alamat; ?></td>
                            <td><?= $item->jenis_kelamin; ?></td>
                          </tr>
                          <?php } ?>
                        </tbody>
                      </table>
                      <!-- End Tabel Guru -->

                    </div>
                  </div>

                </div>
              </div>
            </section>

            <section class="section">
              <div class="row">
                <div class="col-lg-12">

                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Tabel Data Murid</h5>

                      <!-- Tabel Murid -->
                      <table class="table datatable">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">NIP</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Tempat, tanggal lahir</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Jenis Kelamin</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $i=1; foreach ($dataMurid as $item) { ?>
                          <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $item->nisn; ?></td>
                            <td><?= $item->nama_murid; ?></td>
                            <td><?= $item->tempat_lahir.", ".$item->tgl_lahir; ?></td>
                            <td><?= $item->alamat; ?></td>
                            <td><?= $item->jenis_kelamin; ?></td>
                          </tr>
                          <?php } ?>
                        </tbody>
                      </table>
                      <!-- End Tabel Murid -->

                    </div>
                  </div>

                </div>
              </div>
            </section>
          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-4">

        <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Tabel Data Mata Pelajaran</h5>

              <!-- Table with stripped rows -->
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Kode</th>
                    <th scope="col">Mata Pelajaran</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($dataMapel as $item) { ?>
                    <tr>
                      <th scope="row"><?= $item->id; ?></th>
                      <td><?= $item->mata_pelajaran; ?></td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

        </div><!-- End Right side columns -->

      </div>
    </section>

  </main><!-- End #main -->