<h1 class="text-center mt-5">Daftar Karyawan</h1>

<div class="container">
  <a href="./welcome/addEmployee" type="button" class="btn btn-primary float-end mb-2">Tambah Karyawan</a>  
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
        foreach($datas as $row){
          $index += 1;
      ?>
      <tr>
        <th><?php echo $index  ?></th>
        <th><?php echo $row->nip  ?></th>
        <th><?php echo $row->nama  ?></th>
        <th><?php echo $row->email  ?></th>
        <th><?php echo $row->keterangan  ?></th>
        <td class="d-flex justify-content-around">
          <button class="btn btn-primary" title="Edit" href="#">Edit</i></button>
          <button class="btn btn-danger" title="Delete" href="#">Delete</button>
        </td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
</div>