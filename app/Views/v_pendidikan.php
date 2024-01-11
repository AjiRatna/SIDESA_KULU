<div class="col-sm-12">
    <div class="card">
        <div class="card-header">
            <div class="card-tittle"><i class="fa fa-table"></i>Data <?= $judul ?></div>
        </div>
        <div class="card-body">
            <?php 
            if (session()->get('insert')) {
                echo'<div class="alert-danger">';
                echo session()->get('insert');
                echo '</div>';
            }?>
            <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#add">
        <i class="fas fa-plus"></i>Tambah
        </button>
        <br>
        <br>
        <table class="table table-bordered-bd-success table-head-bg-success">
            <thead>
                <tr class="text-center">
                    <th width="50px">#</th>
                    <th scope="col">Pendidikan</th>
                    <th width="100px">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                foreach($pendidikan as $key =>$p) { ?>
            <tr>
                    <td><?= $no++?></td>
                    <td><?= $p['pendidikan']?></td>
                    <td class="text-center">
                        <button class="btn btn-warning btn-xs" ata-toggle="modal" data-target="#edit <?= $p['id_pendidikan']?>"><i class="fa fa-pencil-alt"></i></button>
                        <button class="btn btn-danger btn-xs" ata-toggle="modal" data-target="#delete <?= $p['id_pendidikan']?>"><i class="fa fa-trash"></i></button>
                    </td>
            </tr> 
            <?php } ?>
            </tbody>
        </table>

        </div>
    </div>
</div>



<!-- Modal add-->
<div class="modal fade" id="add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah <?= $judul?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php
      echo form_open('Pendidikan/InsertData')
       ?>
      <div class="modal-body">
        
      <div class="form-group">
        <label>Pendidikan</label>
            <input name="pendidikan" class="form-control" placeholder="Pendidikan" required>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>

      <?php echo form_close() ?>
    </div>
  </div>
</div>


<?php
    foreach($pendidikan as $key =>$p) { ?>
<!-- Modal edit-->
<div class="modal fade" id="edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah <?= $judul?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php
      echo form_open('Pendidikan/InsertData')
       ?>
      <div class="modal-body">
        
      <div class="form-group">
        <label>Pendidikan</label>
            <input name="pendidikan" class="form-control" placeholder="Pendidikan" required>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>

      <?php echo form_close() ?>
    </div>
  </div>
</div>


           
<?php } ?>