<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <?= form_open_multipart(''); ?>
    <div class="card">
        <h5 class="card-header">Form <?= $title; ?></h5>
        <div class="card-body">

            <!-- Menampilkan Pesan Kesalahan -->
            <?= $this->session->flashdata('message'); ?>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="label">NIK Karyawan</label>
                    <input type="hidden" class="form-control" name="id_history_training_eksternal" onkeyup="angka(this);" id="id_history_training_eksternal" readonly='readonly' value="<?= $datatrainingeksternal['id_history_training_eksternal'] ?>">
                    <input type="text" class="form-control" name="nik_karyawan" maxlength="16" onkeyup="angka(this);" id="nik_karyawan" readonly='readonly' value="<?= $datatrainingeksternal['nik_karyawan'] ?>">
                    <small class="form-text text-danger"><?php echo form_error('nik_karyawan'); ?></small>
                </div>
                <div class="form-group col-md-6">
                    <label for="label">Nama Karyawan</label>
                    <input type="text" class="form-control" name="nama_karyawan" id="nama_karyawan" readonly='readonly' value="<?= $datatrainingeksternal['nama_karyawan'] ?>">
                    <small class="form-text text-danger"><?php echo form_error('nama_karyawan'); ?></small>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="label">Dari Tanggal</label>
                    <input type="text" class="form-control" id="tanggal_awal_training_eksternal" name="tanggal_awal_training_eksternal" value="<?= $datatrainingeksternal['tanggal_awal_training_eksternal'] ?>" placeholder="YYYY-MM-DD">
                    <small class="form-text text-danger"><?php echo form_error('tanggal_awal_training_eksternal'); ?></small>
                </div>
                <div class="form-group col-md-6">
                    <label for="label">Sampai Tanggal</label>
                    <input type="text" class="form-control" id="tanggal_akhir_training_eksternal" name="tanggal_akhir_training_eksternal" value="<?= $datatrainingeksternal['tanggal_akhir_training_eksternal'] ?>" placeholder="YYYY-MM-DD">
                    <small class="form-text text-danger"><?php echo form_error('tanggal_akhir_training_eksternal'); ?></small>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="label">Institusi Penyelenggara</label>
                    <input type="text" class="form-control" id="institusi_penyelenggara_training_eksternal" name="institusi_penyelenggara_training_eksternal" value="<?= $datatrainingeksternal['institusi_penyelenggara_training_eksternal'] ?>" placeholder="Institusi Penyelenggara">
                    <small class="form-text text-danger"><?php echo form_error('institusi_penyelenggara_training_eksternal'); ?></small>
                </div>
                <div class="form-group col-md-6">
                    <label for="label">Perihal Training Eksternal</label>
                    <input type="text" class="form-control" id="perihal_training_eksternal" name="perihal_training_eksternal" value="<?= $datatrainingeksternal['perihal_training_eksternal'] ?>" placeholder="Perihal Training Eksternal">
                    <small class="form-text text-danger"><?php echo form_error('perihal_training_eksternal'); ?></small>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="label">Jam Training Eksternal</label>
                    <input type="time" class="form-control" id="jam_training_eksternal" name="jam_training_eksternal" value="<?= $datatrainingeksternal['jam_training_eksternal'] ?>" placeholder="Jam Training Eksternal">
                    <small class="form-text text-danger"><?php echo form_error('jam_training_eksternal'); ?></small>
                </div>
                <div class="form-group col-md-6">
                    <label for="label">Lokasi Training Eksternal</label>
                    <input type="text" class="form-control" id="lokasi_training_eksternal" name="lokasi_training_eksternal" value="<?= $datatrainingeksternal['lokasi_training_eksternal'] ?>" placeholder="Lokasi Training Eksternal">
                    <small class="form-text text-danger"><?php echo form_error('lokasi_training_eksternal'); ?></small>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="label">Alamat Training Eksternal</label>
                    <input type="text" class="form-control" id="alamat_training_eksternal" name="alamat_training_eksternal" value="<?= $datatrainingeksternal['alamat_training_eksternal'] ?>" placeholder="Alamat Training Eksternal">
                    <small class="form-text text-danger"><?php echo form_error('alamat_training_eksternal'); ?></small>
                </div>
                <div class="form-group col-md-6">
                    <label for="label">Nomor Surat Training Eksternal</label>
                    <input type="text" class="form-control" id="nomor_surat_training_eksternal" name="nomor_surat_training_eksternal" value="<?= $datatrainingeksternal['nomor_surat_training_eksternal'] ?>" placeholder="Nomor Surat Training Eksternal">
                    <small class="form-text text-danger"><?php echo form_error('nomor_surat_training_eksternal'); ?></small>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-12">
                    <input type="file" class="custom-file-input" id="dokumen_materi_training_eksternal" name="dokumen_materi_training_eksternal">
                    <label class="custom-file-label" id="dokumen_materi_training_eksternal" for="dokumen_materi_training_eksternal">File Dokumen ( Materi Training Eksternal ) </label>
                </div>
            </div>


            <!-- Button Simpan Dan Cancel -->
            <button type="submit" class="btn btn-primary btn-sm btn-lg btn-block">EDIT DATA TRAINING EKSTERNAL</button>
            <a class="btn btn-danger btn-lg btn-sm btn-block" href="<?= base_url('history/trainingeksternal'); ?>">CANCEL</a>

        </div>
    </div>
    </form>
</div>