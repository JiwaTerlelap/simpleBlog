<?php include 'layout/header.php';?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Profile</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    
                                    <form role="form" action="<?php echo base_url()?>dashboard/update_profile" method="post">
                                        <?php foreach($profile as $row){?>
                                        <div class="form-group">
                                            <label>judul</label>
                                            <input type="text" class="form-control" name="judul" value="<?php echo $row->judul ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>isi profile</label>
                                            <textarea class="ckeditor" id="ckeditor" name="isi"><?php echo $row->isi ?></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-success">Submit</button>
                                        <button type="reset" class="btn btn-danger">Reset</button>
                                        <?php } ?>
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