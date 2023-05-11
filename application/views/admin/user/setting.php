<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" />

<?php
if ($this->session->flashdata('success_update_user') != '') {
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
} else if ($this->session->flashdata('success_delete_user') != '') {
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
        <div class="mt-5 mb-1 p-2 d-flex justify-content-lg-start" data-aos="fade-up" data-aos-duration="700">
            <h5 class="ft-7">Pengaturan Akun</h5>
        </div>

        <div class="bg-white p-5 border" data-aos="fade-up" data-aos-duration="700">
            <table id="example" class="table display">
                <thead>
                    <tr">
                        <th class="text-center" scope="col">No</th>
                        <th class="text-center" scope="col">Nama Lengkap</th>
                        <th class="text-center" scope="col">Email</th>
                        <th class="text-center" scope="col">Role</th>
                        <th class="text-center" scope="col">Aksi</th>
                        </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($users as $row) {
                    ?>
                        <tr>
                            <td class="text-center"><?php echo $no++ ?></td>
                            <td><?php echo $row->name; ?></td>
                            <td><?php echo $row->email; ?></td>
                            <td><?php echo $row->roles_name; ?></td>
                            <td>
                                <div class="d-flex gap-2 justify-content-center">
                                    <?php echo anchor('userBranch/user/edit_user/' . $row->id, "<button class='btn btn-primary bg-first'>Edit</button>"); ?>
                                    <button onclick="return confirm('Do you want delete this record')" class="btn btn-danger text-white"> <?php echo anchor('userBranch/user/delete_user/' . $row->id, "<span class='text-white'>Hapus</span>"); ?>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
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