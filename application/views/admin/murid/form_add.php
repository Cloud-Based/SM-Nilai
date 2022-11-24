<main id="main" class="main">

    <div class="pagetitle">
      <h1>Form Tambah Data</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Murid</li>
          <li class="breadcrumb-item active">Tambah</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">

        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Tambah Data Murid</h5>

              <!-- Form tambah data murid -->
              <form class="row g-3 needs-validation" method="post" action="<?= site_url('admin/murid/add_act'); ?>" novalidate>
                <div class="col-md-4">
                  <label for="validationCustom01" class="form-label">NISN</label>
                  <input type="text" class="form-control" id="validationCustom01" name="nisn" required>
                  <div class="invalid-feedback">
                    NISN tidak boleh kosong!
                  </div>
                </div>
                <div class="col-md-4">
                  <label for="validationCustom02" class="form-label">Nama</label>
                  <input type="text" class="form-control" id="validationCustom02" name="nama" required>
                  <div class="invalid-feedback">
                    Nama tidak boleh kosong!
                  </div>
                </div>
                <div class="col-md-2">
                  <label for="validationCustom03" class="form-label">Tempat Lahir</label>
                  <input type="text" class="form-control" id="validationCustom03" name="tLahir" required>
                  <div class="invalid-feedback">
                    Tempat lahir tidak boleh kosong!
                  </div>
                </div>
                <div class="col-md-2">
                  <label for="validationCustom04" class="form-label">Tanggal Lahir</label>
                  <input type="date" class="form-control" id="validationCustom04" name="tglLahir" required>
                  <div class="invalid-feedback">
                    Tangal lahir tidak boleh kosong!
                  </div>
                </div>
                <div class="col-md-4">
                  <label for="validationCustom05" class="form-label">Jenis Kelamin</label>
                  <select class="form-select" id="validationCustom05" name="jk" required>
                    <option selected disabled value="">-- Pilih --</option>
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                  </select>
                  <div class="invalid-feedback">
                    Jenis Kelamin tidak boleh kosong!
                  </div>
                </div>
                <div class="col-md-4">
                  <label for="validationCustom07" class="form-label">Alamat</label>
                  <input type="text" class="form-control" id="validationCustom07" name="alamat" required>
                  <div class="invalid-feedback">
                    Alamat tidak boleh kosong!
                  </div>
                </div>
                <div class="col-md-2">
                  <label for="validationCustom08" class="form-label">Username</label>
                  <input type="text" class="form-control" id="validationCustom08" name="username" required>
                  <div class="invalid-feedback">
                    Username tidak boleh kosong!
                  </div>
                </div>
                <div class="col-md-2">
                  <label for="validationCustom09" class="form-label">Password</label>
                  <input type="password" class="form-control" id="validationCustom09" name="pass" required>
                  <div class="invalid-feedback">
                    Password tidak boleh kosong!
                  </div>
                </div>
                <div class="col-12">
                  <button class="btn btn-primary" type="submit">Submit form</button>
                </div>
              </form><!-- End Form tambah data murid -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->