<div class="container">
    <h3 class="text-center mt-5 mb-3">Tambah Karyawan</h3>
    
    <div class="row">
      <div class="col-md-6 mx-auto">

        <div class="card">
          <div class="card-body">
            <form action="" method="post">
            
              <?php if(validation_errors()) {?>
                <div class="alert alert-danger" role="alert">
                  <?php echo validation_errors(); ?>
                </div>
              <?php } ?>
              <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input placeholder="Masukan Nama" type="text" class="form-control" name="nama" id="nama">
              </div>
              <div class="mb-3">
                <label for="nip" class="form-label">NIP</label>
                <input placeholder="Masukan NIP" type="number" class="form-control" name="nip" id="nip">
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input placeholder="Masukan Email" type="email" class="form-control" name="email" id="email">
              </div>
              <div class="mb-3">
                <label for="keterangan" class="form-label">Keterangan</label>
                <input placeholder="Masukan Keterangan" type="text" class="form-control" name="keterangan" id="keterangan">
              </div>
              <button type="submit" class="float-end btn btn-primary">Tambah</button>

            </form>
            
          </div>
        </div>

      </div>
    </div>
</div>