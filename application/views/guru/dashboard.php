<main id="main" class="main">

    <div class="pagetitle">
      <h1>Data Penilaian Murid</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Tabel Penilaian</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Datatables</h5>

              <!-- Table with stripped rows -->
              <form class="row g-3" method="post" action="<?= site_url('dashboard/act_nilai'); ?>">
                <input type="hidden" value="gu8035" name="idGuru">
                <div class="col-md-2">
                  <label for="validationCustom05" class="form-label">Mata Pelajaran</label>
                  <select class="form-select" name="mapelNilai" id="mataPelajaran" required>
                    <option selected disabled value="">-- Pilih --</option>
                    <?php foreach ($dataMapelByIdGuru as $item) { ?>
                      <option value="<?= $item->id_guru_mapel; ?>"><?= $item->mata_pelajaran; ?></option>
                    <?php } ?>
                  </select>
                  <div class="invalid-feedback">
                    Mata pelajaran tidak boleh kosong!
                  </div>
                </div>
                <table class="table datatable">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">NISN</th>
                      <th scope="col">Nama</th>
                      <th scope="col">Nilai</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i=1; foreach ($dataNilaiMurid as $item) { ?>
                    <tr>
                      <th scope="row"><?= $i++; ?></th>
                      <td class="col-4"><?= $item->nisn; ?></td>
                      <td class="col-6"><?= $item->nama_murid; ?></td>
                      <td>
                        <div class="col-4">
                          <input type="hidden" value="<?= $item->id_murid; ?>" name="idMurid[]">
                          <input type="text" class="form-control" name="nilai[]" value="<?= $item->nilai; ?>">
                        </div>
                      </td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
                <div class="col-2">
                  <button class="btn btn-primary" type="submit">Submit Penilaian</button>
                </div>
              </form>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->