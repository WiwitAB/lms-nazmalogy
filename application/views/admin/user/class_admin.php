<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" />

<?php
if ($this->session->flashdata('success_add') != '') {
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
} else if ($this->session->flashdata('success_update') != '') {
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
} else if ($this->session->flashdata('success_delete') != '') {
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
        <!-- =============== Tabel Tag ================= -->
        <div class="mt-5 mb-1 p-2 d-flex justify-content-between" data-aos="fade-up" data-aos-duration="700">
            <h5 class="ft-7">Data Kursus</h5>
            <a href="<?= site_url('userBranch/course/add_course') ?>"><button class="btn btn-success">+ Tambah </button></a>

        </div>

        <div class="bg-white p-5 border" data-aos="fade-up" data-aos-duration="700">

            <table id="example" class="table display">
                <thead>
                    <tr">
                        <th class="text-center" scope="col">No</th>
                        <th class="text-center" scope="col">Judul Kursus</th>
                        <th class="text-center" scope="col">Cover</th>
                        <th class="text-center" scope="col">Kategori</th>
                        <th class="text-center" scope="col">Aksi</th>
                        </tr>
                </thead>

                <tbody>

                    <?php
                    $no = 1;
                    foreach ($course as $data) { ?>
                        <tr>
                            <td width="5%" class="text-center"><?= $no++ ?></td>
                            <td width="30%"><?= $data->title ?></td>
                            <td width="25%"><img class="w-100" src="<?= base_url('assets/images/admin/course/' . $data->cover) ?>"></td>
                            <td width="20%">
                                <div class="d-flex gap-2 flex-wrap">
                                    <?php
                                    $category = explode(',', $data->category);
                                    foreach ($category as $kat) {
                                        echo "
                                    <button class='btn btn-warning'>" . $kat . "</button>" . '<br>';
                                    }
                                    ?>
                                </div>

                            </td>
                            <td width="20%">
                                <div class="d-flex gap-2 justify-content-center">
                                    <?php echo anchor('userBranch/course/edit_course/' . $data->id, "<button class='btn btn-primary bg-first'>Edit</button>"); ?>
                                    <button onclick="return confirm('Do you want delete this record')" class="btn btn-danger text-white"> <?php echo anchor('userBranch/course/delete_course/' . $data->id, "<span class='text-white'>Hapus</span>"); ?>
                                </div>
                            </td>
                        </tr>
                    <?php } ?>


                </tbody>
            </table>
        </div>
        <!-- =============== Tabel Kategori ================= -->
        <div class="mt-5 mb-1 p-2 d-flex justify-content-between" data-aos="fade-up" data-aos-duration="700">
            <h5 class="ft-7">Data Kategori</h5>
            <a href="<?= site_url('userBranch/course/add_category') ?>"><button class="btn btn-success">+ Tambah </button></a>

        </div>

        <div class="bg-white p-5 border" data-aos="fade-up" data-aos-duration="700">
            <table id="example2" class="table display">
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
                    foreach ($categories as $row) {
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


    </div>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
        $(document).ready(function() {
            $('#example2').DataTable();
        });
    </script>
    <!--=============== Footer Tab and Desktop ===============-->
    <footer class="p-0 mt-5">
        <div class="d-flex justify-content-center">
            <p class="mt-3 ft-7">NaZMa Office &copy 2023
            </p>
        </div>
    </footer>

</body>