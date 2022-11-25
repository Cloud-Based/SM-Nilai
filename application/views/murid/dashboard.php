<main id="main" class="main">

    <div class="pagetitle">
      <h1>Nilai</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Tabel Nilai</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Nilai Mata Pelajaran</h5>

              <!-- Table with stripped rows -->
              <table class="table" id="tabelNilai">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Kode</th>
                      <th scope="col">Mata Pelajaran</th>
                      <th scope="col">Nilai</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php $i=1; foreach ($dataNilaiById as $item) { ?>
                    <tr>
                      <th scope="row"><?= $i++; ?></th>
                      <td class="col-2"><?= $item->id_mapel; ?></td>
                      <td class="col-6"><?= $item->mata_pelajaran; ?></td>
                      <td class="col-4"><?= $item->nilai; ?></td>
                    </tr>
                  <?php } ?>
                </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->