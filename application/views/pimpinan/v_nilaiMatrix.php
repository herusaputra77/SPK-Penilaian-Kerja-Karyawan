  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Matrix</h1>

  <!-- DataTales Example -->
  <div class="card mb-3 col-md-6">
      <div class="card-body">
          <div class="row">
              <h5>Nama Alternatif : </h5>
              <h5><?= $alternatif['nm_user'] ?></h5>
          </div>
      </div>
  </div>
  <div class="card shadow mb-4">
      <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Kriteria</h6>
      </div>
      <div class="card-body">
          <form action="<?= base_url('pimpinan/alternatif/nilai_matrix') ?>" method="post">
              <input type="hidden" name="id_alternatif" value="<?= $alternatif['id_alternatif'] ?>">
              <table class="table table-hover table-striped">
                  <thead>
                      <tr>
                          <th width="300px" style="text-align: center;">Kriteria</th>
                          <th colspan="11" style="text-align: center;">Nilai</th>
                      </tr>
                  </thead>
                  <tbody>

                      <tr>

                          <td><label for=""><?= $kriteria['0']['nm_kriteria'] ?></label> <input type="hidden" name="id_kriteria1" value="<?= $kriteria['0']['id_kriteria'] ?>"></td>
                          <?php foreach ($nilai as $n) { ?>
                              <td><input type="radio" name="nilai_matrix1" value="<?= $n ?>" <?php if ($nilai_matrix) {
                                                                                                    foreach ($nilai_matrix as $nm) {
                                                                                                        if ($nm['id_alternatif'] == $alternatif['id_alternatif']) {
                                                                                                            if ($nm['id_kriteria'] == 'K001') {
                                                                                                                if ($nm['nilai'] == $n) { ?> checked="" <?php
                                                                                                                                                    }
                                                                                                                                                }
                                                                                                                                            }
                                                                                                                                        }
                                                                                                                                    }
                                                                                                                                                        ?>> <?= $n ?></td>
                          <?php } ?>
                      </tr>
                      <tr>
                          <td><label for=""><?= $kriteria['1']['nm_kriteria'] ?></label> <input type="hidden" name="id_kriteria2" value="<?= $kriteria['1']['id_kriteria'] ?>"></td>
                          <?php foreach ($nilai as $n) { ?>
                              <td><input type="radio" name="nilai_matrix2" <?php if ($nilai_matrix) {
                                                                                foreach ($nilai_matrix as $nm) {
                                                                                    if ($nm['id_alternatif'] == $alternatif['id_alternatif']) {
                                                                                        if ($nm['id_kriteria'] == 'K002') {
                                                                                            if ($nm['nilai'] == $n) { ?> checked="" <?php
                                                                                                                                }
                                                                                                                            }
                                                                                                                        }
                                                                                                                    }
                                                                                                                }
                                                                                                                                    ?> value="<?= $n ?>"> <?= $n ?></td>
                          <?php } ?>
                      </tr>
                      <tr>
                          <td><label for=""><?= $kriteria['2']['nm_kriteria'] ?></label> <input type="hidden" name="id_kriteria3" value="<?= $kriteria['2']['id_kriteria'] ?>"></td>
                          <?php foreach ($nilai as $n) { ?>
                              <td><input type="radio" name="nilai_matrix3" <?php if ($nilai_matrix) {
                                                                                foreach ($nilai_matrix as $nm) {
                                                                                    if ($nm['id_alternatif'] == $alternatif['id_alternatif']) {
                                                                                        if ($nm['id_kriteria'] == 'K003') {
                                                                                            if ($nm['nilai'] == $n) { ?> checked="" <?php
                                                                                                                                }
                                                                                                                            }
                                                                                                                        }
                                                                                                                    }
                                                                                                                }
                                                                                                                                    ?> value="<?= $n ?>"> <?= $n ?></td>
                          <?php } ?>
                      </tr>
                      <tr>
                          <td><label for=""><?= $kriteria['3']['nm_kriteria'] ?></label> <input type="hidden" name="id_kriteria4" value="<?= $kriteria['3']['id_kriteria'] ?>"></td>
                          <?php foreach ($nilai as $n) { ?>
                              <td><input type="radio" name="nilai_matrix4" <?php if ($nilai_matrix) {
                                                                                foreach ($nilai_matrix as $nm) {
                                                                                    if ($nm['id_alternatif'] == $alternatif['id_alternatif']) {
                                                                                        if ($nm['id_kriteria'] == 'K004') {
                                                                                            if ($nm['nilai'] == $n) { ?> checked="" <?php
                                                                                                                                }
                                                                                                                            }
                                                                                                                        }
                                                                                                                    }
                                                                                                                }
                                                                                                                                    ?> value="<?= $n ?>"> <?= $n ?></td>
                          <?php } ?>
                      </tr>
                      <tr>
                          <td><label for=""><?= $kriteria['4']['nm_kriteria'] ?></label> <input type="hidden" name="id_kriteria5" value="<?= $kriteria['4']['id_kriteria'] ?>"></td>
                          <?php foreach ($nilai as $n) { ?>
                              <td><input type="radio" name="nilai_matrix5" <?php if ($nilai_matrix) {
                                                                                foreach ($nilai_matrix as $nm) {
                                                                                    if ($nm['id_alternatif'] == $alternatif['id_alternatif']) {
                                                                                        if ($nm['id_kriteria'] == 'K005') {
                                                                                            if ($nm['nilai'] == $n) { ?> checked="" <?php
                                                                                                                                }
                                                                                                                            }
                                                                                                                        }
                                                                                                                    }
                                                                                                                }
                                                                                                                                    ?>value="<?= $n ?>"> <?= $n ?></td>
                          <?php } ?>
                      </tr>
                      <tr>
                          <td><label for=""><?= $kriteria['5']['nm_kriteria'] ?></label> <input type="hidden" name="id_kriteria6" value="<?= $kriteria['5']['id_kriteria'] ?>"></td>
                          <?php foreach ($nilai as $n) { ?>
                              <td><input type="radio" name="nilai_matrix6" <?php if ($nilai_matrix) {
                                                                                foreach ($nilai_matrix as $nm) {
                                                                                    if ($nm['id_alternatif'] == $alternatif['id_alternatif']) {
                                                                                        if ($nm['id_kriteria'] == 'K006') {
                                                                                            if ($nm['nilai'] == $n) { ?> checked="" <?php
                                                                                                                                }
                                                                                                                            }
                                                                                                                        }
                                                                                                                    }
                                                                                                                }
                                                                                                                                    ?> value="<?= $n ?>"> <?= $n ?></td>
                          <?php } ?>
                      </tr>
                      <tr>
                          <td><label for=""><?= $kriteria['6']['nm_kriteria'] ?></label> <input type="hidden" name="id_kriteria7" value="<?= $kriteria['6']['id_kriteria'] ?>"></td>
                          <?php foreach ($nilai as $n) { ?>
                              <td><input type="radio" name="nilai_matrix7" <?php if ($nilai_matrix) {
                                                                                foreach ($nilai_matrix as $nm) {
                                                                                    if ($nm['id_alternatif'] == $alternatif['id_alternatif']) {
                                                                                        if ($nm['id_kriteria'] == 'K007') {
                                                                                            if ($nm['nilai'] == $n) { ?> checked="" <?php
                                                                                                                                }
                                                                                                                            }
                                                                                                                        }
                                                                                                                    }
                                                                                                                }
                                                                                                                                    ?> value="<?= $n ?>"> <?= $n ?></td>
                          <?php } ?>
                      </tr>


                  </tbody>
              </table>
              <button type="submit" class="btn btn-sm btn-primary">Ubah</button>
              <a href="<?= base_url('admin/alternatif') ?>" class="btn btn-sm btn-success">Kembali</a>
          </form>
      </div>
  </div>