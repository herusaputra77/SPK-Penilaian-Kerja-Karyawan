<div class="row">
    <div class="col-md-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Kriteria</h6>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <form action="<?= base_url('admin/kriteria/insert') ?>" method="post">
                            <div class="form-group">
                                <label for="">ID Kriteria</label>
                                <input type="text" class="form-control" name="id_kriteria" value="<?= $id ?>" readonly>

                            </div>
                            <div class="form-group">
                                <label for="">Nama Kriteria</label>
                                <input type="text" name="nm_kriteria" class="form-control">
                                <?= form_error('nm_kriteria', '<small class="text-danger pl-3">', '</small>'); ?>
                                <div class="form-group">
                                    <!-- <?php echo form_label('Sifat :', '', array('for' => 'inputSifat', 'class' => 'col-sm-2 control-label')) ?> -->
                                    <label for="inputSifat" class="mt-3 control-label">Sifat</label>
                                    <div class="col-sm-10">
                                        <label class="radio-inline">
                                            <?php echo form_radio('sifat', 'B', true) ?>Benefit
                                        </label>
                                        <label class="radio-inline">
                                            <?php echo form_radio('sifat', 'C') ?> Cost
                                        </label>

                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Bobot</label>
                                <input type="number" name="bobot" class="form-control">
                                <?= form_error('bobot', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <!-- row -->
                            <button type="submit" width="50%" class="btn btn-sm btn-primary"><i class="fas fa-plus"></i> Tambah</button>
                            <button type="reset" width="50%" class="btn btn-sm btn-warning">Reset</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>