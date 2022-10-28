
<h1 class="text-center mt-5">Daftar Karyawan</h1>

<div class="container">
  <div class="row">
    <div class="col-md-6 mx-auto">
      <?php if($this->session->flashdata('flash')): ?>
        <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
          Data Berhasil <strong><?php echo $this->session->flashdata('flash') ?></strong>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      <?php endif ?>
    </div>
  </div>
  <a href="<?php echo base_url('employee/add') ?>" type="button" class="btn btn-primary float-end mb-2">Tambah Karyawan</a>  
  <table class="table table-dark table-striped">
    <thead class="text-center">
      <tr>
        <th scope="col">#</th>
        <th scope="col">NIP</th>
        <th scope="col">Nama</th>
        <th scope="col">Email</th>
        <th scope="col">Keterangan</th>
        <th scope="col">Handle</th>
      </tr>
    </thead>
    <tbody class="text-center">
      <?php 
        $index = 0;
        foreach($employee as $row){
          $index += 1;
      ?>
      <tr>
        <th><?php echo $index  ?></th>
        <th><?php echo $row->nip  ?></th>
        <th><?php echo $row->nama  ?></th>
        <th><?php echo $row->email  ?></th>
        <th><?php echo $row->keterangan  ?></th>
        <td class="d-flex justify-content-around">
          <a class="btn btn-primary" href="<?php echo base_url('employee/edit/'.$row->nip) ?>">Edit</button>
          <a class="btn btn-danger" href="<?php echo base_url('employee/delete/'.$row->nip)?>">Delete</a>
        </td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
</div>