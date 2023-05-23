<body id="body-pd">
    <div class="space-top">
        <div class="row">
            <div class="col-md-6">
                <div class="bg-white p-5 border" data-aos="zoom-in-up" data-aos-duration="1000">
                    <div class="d-flex justify-content-between py-2">
                        <h5 class="ft-7">Tambah Data Playlist</h5>
                        <a href="<?= base_url('userBranch/playlist/video_admin') ?>"><i class="bi bi-x-lg text-black"></i></a>
                    </div>
                    <hr>
                    <form method="post" action="<?= base_url('userBranch/playlist/save_playlist') ?>">
                        <div class="mb-3">
                            <label class="form-label fw-bold" for="name">Nama Playlist<span class="text-danger">*</span></label>
                            <input type="text" id="name" name="name" class="form-control" placeholder="Playlist xx">
                            <div id="name-error" class="invalid-feedback"></div>
                        </div>
                        <button type="submit" class="btn btn-primary bg-first">Tambah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const nameInput = document.getElementById('name');
            const nameError = document.getElementById('name-error');

            nameInput.addEventListener('input', function() {
                if (nameInput.validity.valid) {
                    nameError.textContent = '';
                    nameError.className = 'invalid-feedback';
                } else {
                    nameError.textContent = 'Nama Playlist harus diisi.';
                    nameError.className = 'invalid-feedback d-block';
                }
            });
        });
    </script>
</body>