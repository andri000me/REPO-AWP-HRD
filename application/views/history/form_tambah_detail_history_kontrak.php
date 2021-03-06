<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <form action="<?= base_url('history/aksitambahdetailkontrak'); ?>" method="post">
        <div class="card">
            <h5 class="card-header">Form <?= $title; ?></h5>
            <div class="card-body">

                <!-- Menampilkan Pesan Kesalahan -->
                <?= $this->session->flashdata('message'); ?>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="label">NIK Karyawan</label>
                        <input type="text" class="form-control" id="nik_karyawan" name="nik_karyawan" value="<?= $karyawan['nik_karyawan']; ?>" readonly='readonly' placeholder="NIK Karyawan">
                        <small class="form-text text-danger"><?php echo form_error('nik_karyawan'); ?></small>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="label">Nama Karyawan</label>
                        <input type="text" class="form-control" id="nama_karyawan" name="nama_karyawan" value="<?= $karyawan['nama_karyawan']; ?>" readonly='readonly' placeholder="Nama Karyawan">
                        <small class="form-text text-danger"><?php echo form_error('nama_karyawan'); ?></small>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="label">Tanggal Awal Kontrak</label>
                        <input type="text" class="form-control" id="tanggal_awal_kontrak" name="tanggal_awal_kontrak" value="<?= set_value('tanggal_awal_kontrak'); ?>" placeholder="YYYY-MM-DD">
                        <small class="form-text text-danger"><?php echo form_error('tanggal_awal_kontrak'); ?></small>

                    </div>
                    <div class="form-group col-md-6">
                        <label for="label">Tanggal Akhir Kontrak</label>
                        <input type="text" class="form-control" id="tanggal_akhir_kontrak" name="tanggal_akhir_kontrak" value="<?= set_value('tanggal_akhir_kontrak'); ?>" placeholder="YYYY-MM-DD">
                        <small class="form-text text-danger"><?php echo form_error('tanggal_akhir_kontrak'); ?></small>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="label">Status Kontrak</label>
                        <select name="status_kontrak_kerja" id="status_kontrak_kerja" class="selectpicker" data-width="100%" data-live-search="true" required>
                            <option value="">Pilih Status Kontrak</option>
                            <option value="PKWT">PKWT</option>
                            <option value="PKWTT">PKWTT</option>
                            <option value="Outsourcing">Outsourcing</option>
                        </select>
                        <small class="form-text text-danger"><?php echo form_error('status_kontrak_kerja'); ?></small>
                    </div>
                </div>

                <!-- Button Simpan Dan Cancel formtarget="_blank" -->
                <button type="submit" class="btn btn-primary btn-sm btn-lg btn-block">TAMBAH DATA KONTRAK</button>
                <a class="btn btn-danger btn-lg btn-sm btn-block" href="<?= base_url('history/kontrak'); ?>">CANCEL</a>

            </div>
        </div>
    </form>
</div>