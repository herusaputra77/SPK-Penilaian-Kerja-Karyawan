<div class="row">
    <div class="col-md-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Tambah Alternatif</h6>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <form action="<?= base_url('admin/alternatif/insert') ?>" method="post">
                            <div class="form-group">
                                <label for="">ID Alternatif</label>
                                <input type="text" class="form-control" name="id_alternatif" value="<?= $id ?>" readonly>

                            </div>
                            <div class="form-group">
                                <label for="">Alternatif</label>
                                <!-- <input type="text" name="alternatif" class="form-control"> -->
                                <select name="id_user" id="user" class="form-control">
                                    <option value="">
                                        <--Pilih Alternatif-->
                                    </option>
                                    <?php foreach ($karyawan as $k) { ?>
                                        <option value="<?= $k['id_user'] ?>"><?= $k['nm_user'] ?></option>
                                    <?php } ?>
                                </select>
                                <?= form_error('id_user', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="col-md-6">
                                <label for="">Biodata Karyawan</label>
                                <div id="result_tunggu">
                                    <p style="color:red">* Belum Ada Hasil</p>
                                </div>
                                <div id="result"></div>
                            </div>
                            <div class="form-group">
                                <label for="">Keterangan</label>
                                <input type="text" name="keterangan" class="form-control">
                                <?= form_error('keterangan', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <button type="submit" width="50%" class="btn btn-sm btn-primary"><i class="fas fa-plus"></i> Tambah</button>
                            <button type="reset" width="50%" class="btn btn-sm btn-warning">Reset</button>
                    </div>
                    <!-- row -->

                    </form>
                </div>

            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $("#user").change(function() {
            var id = $(this).val();
            $.ajax({
                type: "POST",
                url: "<?= base_url('admin/alternatif/get_karyawan'); ?>",
                data: {
                    id: id
                },
                success: function(html) {
                    $('#result').html(html);
                    $('#result_tunggu').html('');

                }
            });
        });
    });
</script>