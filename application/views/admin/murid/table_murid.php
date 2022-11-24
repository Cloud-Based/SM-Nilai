<main id="main" class="main">

    <div class="pagetitle">
      <h1>Data Murid</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Tabel Murid</li>
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
                  <h5 class="card-title">Tabel Murid <span>| <a class="btn btn-primary" href="<?= site_url('admin/murid/formadd'); ?>">Tambah</a></span></h5>

                  <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">NISN</th>
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

                </div>

              </div>
            </div><!-- End Top Selling -->

          </div>
        </div><!-- End Left side columns -->
      </div>
    </section>

  </main><!-- End #main -->