<section>

    <div class="container">
        <h2>Program Studi</h2>
        <form action="<?php echo site_url('Program_Studi/save') ?>">
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Kode</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control-plaintext" name="kode" id="kode" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Program Studi</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama" name="nama" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Ketua</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="ketua" name="ketua" required>
                </div>
            </div>
            <button type="submit" class="btn btn-succses"> simpan </button>
        </form>