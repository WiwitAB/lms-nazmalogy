<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>


<body id="body-pd">
    <!--=============== Course Content ===============-->
    <div class="space-top">
        <div class="row pb-5">
            <div class="col-md-6">

                <div class="bg-white p-5 border" data-aos="fade-up" data-aos-duration="700">
                    <!-- =============== Kelas Tersimpan ================= -->
                    <div class="d-flex justify-content-between py-2" data-aos="fade-up" data-aos-duration="700">
                        <h5 class="ft-7">Buat Video</h5>
                        <a href="<?= base_url('userBranch/playlist/video_admin') ?>"><i class="bi bi-x-lg text-black"></i></a>
                    </div>
                    <hr>
                    <form method="post" action="<?= base_url('userBranch/playlist/save_video') ?>?>">
                        <div class="mb-3">
                            <label for="exampleInputname1" class="form-label fw-bold">Judul Video
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" name="title" class="form-control" id="exampleInputname1" placeholder="Title Video" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputname1" class="form-label fw-bold">Link Embed Youtube
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" name="link" class="form-control" id="exampleInputname1" placeholder="www.example.com" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputname1" class="form-label fw-bold">Durasi (Menit)
                                <span class="text-danger">*</span>
                            </label>
                            <input type="number" placeholder="3" name="duration" class="form-control" id="exampleInputname1" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputname1" class="form-label fw-bold">Playlist
                                <span class="text-danger">*</span>
                            </label>
                            <select id="mySelect" class="form-select" aria-label="Default select example" aria-required="true" name="id_playlist">
                                <?php foreach ($playlists as $data) { ?>
                                    <option value="<?= $data->id ?>"><?= $data->name ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary bg-first">Edit Data</button>
                    </form>
                </div>
            </div>
        </div>


</body>
<script>
    $(document).ready(function() {
        $('#mySelect').select2();
    });
</script>