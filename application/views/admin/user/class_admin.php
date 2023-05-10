<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" />

<?php
if ($this->session->flashdata('success_add_category') != '') {
    echo "
      <script>
      Swal.fire({
          toast: true,
          position: 'top-right',
          iconColor: 'white',
          customClass: {
              popup: 'colored-toast',
          },
          showConfirmButton: false,
          timer: 3000,
          timerProgressBar: true,
          icon: 'success',
          title: 'Tambah Data Sukses',
      })    
      </script>
      ";
} else if ($this->session->flashdata('success_update_category') != '') {
    echo "
      <script>
      Swal.fire({
          toast: true,
          position: 'top-right',
          iconColor: 'white',
          customClass: {
              popup: 'colored-toast',
          },
          showConfirmButton: false,
          timer: 3000,
          timerProgressBar: true,
          icon: 'success',
          title: 'Update Data Sukses',
      })    
      </script>
      ";
} else if ($this->session->flashdata('success_delete_category') != '') {
    echo "
      <script>
      Swal.fire({
          toast: true,
          position: 'top-right',
          iconColor: 'white',
          customClass: {
              popup: 'colored-toast',
          },
          showConfirmButton: false,
          timer: 3000,
          timerProgressBar: true,
          icon: 'success',
          title: 'Hapus Data Sukses',
      })    
      </script>
      ";
}
?>

<body id="body-pd">
    <!--=============== Course Content ===============-->
    <div class="space-top">

        <!-- =============== Kelas Tersimpan ================= -->
        <div class="mt-5 mb-1 p-2 d-flex justify-content-between" data-aos="fade-up" data-aos-duration="700">
            <h5 class="ft-7">Data Kategori</h5>
            <a href="<?= site_url('userBranch/course/add_category') ?>"><button class="btn btn-success">+ Tambah </button></a>

        </div>

        <div class="bg-white p-5" data-aos="fade-up" data-aos-duration="700">
            <table id="example" class="table display">
                <thead>
                    <tr">
                        <th class="text-center" scope="col">No</th>
                        <th class="text-center" scope="col">Nama Kategori</th>
                        <th class="text-center" scope="col">Aksi</th>
                        </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($category as $row) {
                    ?>
                        <tr>
                            <td class="text-center"><?php echo $no++ ?></td>
                            <td><?php echo $row->name; ?></td>
                            <td>
                                <div class="d-flex gap-2 justify-content-center">
                                    <?php echo anchor('userBranch/course/edit_category/' . $row->id, "<button class='btn btn-primary bg-first'>Edit</button>"); ?>
                                    <button onclick="return confirm('Do you want delete this record')" class="btn btn-danger text-white"> <?php echo anchor('userBranch/course/delete_category/' . $row->id, "<span class='text-white'>Hapus</span>"); ?>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data Pengguna</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form>
                        <?php foreach ($user as $u) { ?>
                            <form action="" method="post">
                                <input type="hidden" name="id" value="<?php echo $u->id ?>">
                                <input type="text" name="nama" value="<?php echo $u->name ?>">
                            </form>
                        <?php } ?>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary bg-first"><?php echo anchor('userBranch/user/delete_user/' . $row->id, "<span class='text-white'>Edit Data</span>"); ?></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
    <!--=============== Footer Tab and Desktop ===============-->
    <!-- <footer class="p-0">
        <div class="d-flex justify-content-center">
            <p class="mt-3 ft-7">NaZMa Office &copy 2023
            </p>
        </div>
    </footer> -->

</body>