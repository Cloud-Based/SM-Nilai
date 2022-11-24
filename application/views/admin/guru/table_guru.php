<main id="main" class="main">

    <div class="pagetitle">
      <h1>Data Guru</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Tabel Guru</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">

            <!-- Top Selling -->
            <div class="col-12">
              <div class="card top-selling">
                <div class="card-body pb-0">
                  <h5 class="card-title">Tabel Guru <span>| <a class="btn btn-primary" href="<?= site_url('admin/guru/formadd'); ?>">Tambah</a></span></h5>

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

                </div>

              </div>
            </div><!-- End Top Selling -->

          </div>
        </div><!-- End Left side columns -->
      </div>
    </section>

  </main><!-- End #main -->