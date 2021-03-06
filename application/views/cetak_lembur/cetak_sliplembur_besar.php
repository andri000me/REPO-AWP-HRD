<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <?= form_open_multipart('CetakLembur/cetaksliplemburbesar'); ?>
    <div class="card">
        <h5 class="card-header">Form <?= $title; ?></h5>
        <div class="card-body">

            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="penempatan" class="col-md-12 col-form-label"><b>Pilih Penempatan</b></label>
                    <select name="penempatan" id="penempatan" class="form-control">
                        <option value="">Pilih Penempatan</option>
                        <?php foreach ($penempatan as $pn) : ?>
                            <option value="<?= $pn['id']; ?>">
                                <?= $pn['penempatan']; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="perusahaan_id" class="col-md-6 col-form-label"><b>Mulai Tanggal</b></label>
                    <input type="text" class="form-control" id="mulai_tanggal" name="mulai_tanggal" maxlength="16" placeholder="Mulai Tanggal" readonly='readonly'>
                </div>
                <div class="form-group col-md-6">
                    <label for="perusahaan_id" class="col-md-6 col-form-label"><b>Sampai Tanggal</b></label>
                    <input type="text" class="form-control" placeholder="Sampai Tanggal" name="sampai_tanggal" id="sampai_tanggal" maxlength="50" readonly='readonly'>
                </div>
            </div>

            <!-- Button Simpan Dan Cancel -->
            <button type="submit" formtarget="_blank" class="btn btn-primary btn-sm btn-lg btn-block">CETAK</button>
            <a class="btn btn-danger btn-lg btn-sm btn-block" href="<?= base_url('cetaklembur/sliplembur'); ?>">CANCEL</a>

        </div>
    </div>
    </form>
</div>