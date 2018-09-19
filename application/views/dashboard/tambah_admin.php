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
                                    <form role="form" action="<?php echo base_url()?>dashboard/simpan_admin" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input text="text" class="form-control" name="Username">
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" class="form-control"  name="Password">
                                        </div>
                                         <div class="form-group">
                                            <label>umur</label>
                                            <input  type="number" class="form-control"  name="umur">
                                        </div>
                                        <div class="form-group">
                                            <label>Status</label>
                                             <select class="form-control" name="Status">
                                                 <option value="Aktif">Aktif</option>
                                                 <option value="Tidak aktif">Tidak aktif</option>
                                             </select>
                                        </div>
                                        <div class="form-group">
                                            <label>foto</label>
                                            <input type="file" name="gambar">
                                        </div>
                                        <button type="submit" class="btn btn-success">Submit </button>
                                        <button type="reset" class="btn btn-danger">Reset</button>
                                    </form>
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