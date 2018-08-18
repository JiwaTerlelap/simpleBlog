<?php include 'layout/header.php';?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tambah Admin</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <?php foreach($admin as $row){?>
                                    <form role="form" action="<?php echo base_url()?>didie/update_admin" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input text="text" class="form-control" name="Username" value="<?php echo $row->username?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input type="hidden" class="form-control" name="id" value="<?php echo $row->id?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" class="form-control"  name="Password" value="<?php echo $row->password?>">
                                        </div>
                                         <div class="form-group">
                                            <label>umur</label>
                                            <input  type="number" class="form-control"  name="umur" value="<?php echo $row->umur?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Status</label>
                                             <select class="form-control" name="Status">
                                                 <option <?php if($row->status == 'Aktif'){ echo "selected";}?> value="Aktif">Aktif</option>
                                                 <option <?php if($row->status == 'Tidak aktif'){ echo "selected";}?> value="Tidak aktif">Tidak aktif</option>
                                             </select>
                                        </div>
                                        <div class="form-group">
                                            <label>foto</label>
                                            <br>
                                            <img src="<?php echo base_url()?>assets/foto/admin/<?php echo $row->foto ?>" width="100px">
                                             <br>
                                            <br>
                                            <input type="file" name="gambar">
                                        </div>
                                        <button type="submit" class="btn btn-success">Submit </button>
                                        <button type="reset" class="btn btn-danger">Reset</button>
                                    </form>
                                    <?php } ?>
                                </div>
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
<?php include 'layout/footer.php';?>