<main id="main" class="main">

    <div class="pagetitle">
      <h1>Data Mata Pelajaran</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Tabel Mata Pelajaran</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

            <!-- Recent Sales -->
            <div class="col-12">
              <div class="card recent-sales">

                <div class="card-body">
                  <h5 class="card-title">Tabel Data Mata Pelajaran</h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">Kode</th>
                        <th scope="col">Mata Pelajaran</th>
                        <th scope="col">Pengampu</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($dataMapel as $item) { ?>
                      <tr>
                        <th scope="row"><?= $item->id; ?></th>
                        <td><?= $item->mata_pelajaran; ?></td>
                        <td>
                        <?php foreach ($pengampu as $val) { ?>
                            <?php if ($val->id_mapel == $item->id) { ?>
                                <?php echo $val->nama.", "; ?>
                            <?php } ?>
                        <?php } ?>
                        </td>
                      </tr>
                    <?php } ?>
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Recent Sales -->

          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-4">

          <!-- Tambah mapel dan pengampu -->
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Tambah Mata Pelajaran</h5>
              <p>Form tambah mata pelajaran</p>

              <!-- Mapel -->
              <form class="row g-3 needs-validation" method="post" action="<?= site_url('admin/mapel/add_act'); ?>" novalidate>
                <div class="col-md-12">
                  <label for="validationCustom01" class="form-label">Mata Pelajaran</label>
                  <input type="text" class="form-control" id="validationCustom01" name="mapel" required>
                  <div class="invalid-feedback">
                    Mata Pelajaran tidak boleh kosong!
                  </div>
                </div>
                <div class="col-12">
                  <button class="btn btn-primary" type="submit">Submit form</button>
                </div>
              </form><!-- Mapel -->

            </div>
          </div>

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Tambah Pengampu</h5>
              <p>Form tambah guru pengampu</p>

              <!-- Pengampu -->
              <form class="row g-3 needs-validation" method="post" action="<?= site_url('admin/mapel/add_pengampu_act'); ?>" novalidate>
                <div class="col-md-6">
                  <label for="validationCustom05" class="form-label">Mata Pelajaran</label>
                  <select class="form-select" id="validationCustom05" name="mapel" required>
                    <option selected disabled value="">-- Pilih --</option>
                    <?php foreach ($dataMapel as $item) { ?>
                        <option value="<?= $item->id; ?>"><?= $item->mata_pelajaran; ?></option>
                    <?php } ?>
                  </select>
                  <div class="invalid-feedback">
                    Please select a valid state.
                  </div>
                </div>
                <div class="col-md-6">
                  <label for="validationCustom05" class="form-label">Pengampu</label>
                  <select class="form-select" id="validationCustom05" name="pengampu" required>
                    <option selected disabled value="">-- Pilih --</option>
                    <?php foreach ($dataGuru as $item) { ?>
                        <option value="<?= $item->id; ?>"><?= $item->nama; ?></option>
                    <?php } ?>
                  </select>
                  <div class="invalid-feedback">
                    Please select a valid state.
                  </div>
                </div>
                <div class="col-12">
                  <button class="btn btn-primary" type="submit">Submit form</button>
                </div>
              </form><!-- Pengampu -->

            </div>
          </div>

        </div><!-- End Right side columns -->

      </div>
    </section>

  </main><!-- End #main -->