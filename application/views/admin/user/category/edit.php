<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" />



<body id="body-pd">
    <!--=============== Course Content ===============-->
    <div class="space-top">
        <div class="row">
            <div class="col-md-6">

                <div class="bg-white p-5 border" data-aos="fade-up" data-aos-duration="700">
                    <!-- =============== Kelas Tersimpan ================= -->
                    <div class="d-flex justify-content-between py-2" data-aos="fade-up" data-aos-duration="700">
                        <h5 class="ft-7">Edit Data Kategori</h5>
                        <a href="<?= base_url('userBranch/course/class_admin') ?>"><i class="bi bi-x-lg text-black"></i></a>
                    </div>
                    <hr>
                    <form method="post" action="<?php echo base_url('userBranch/course/update_category/' . $category->id); ?>">
                        <div class="mb-3">
                            <label for="exampleInputname1" class="form-label fw-bold">Nama Kategori
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" name="name" class="form-control" id="exampleInputname1" value="<?= $category->name ?>" required>
                        </div>
                        <button type="submit" class="btn btn-primary bg-first">Edit Data</button>
                    </form>
                </div>
            </div>
        </div>


</body>