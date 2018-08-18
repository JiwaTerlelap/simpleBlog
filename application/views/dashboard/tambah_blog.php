<?php include 'layout/header.php';?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Form Blog</h1>
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
                                    <form role="form" action="<?php echo base_url()?>didie/simpan_blog" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>judul</label>
                                            <input text="text" class="form-control" name="judul">
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal upload</label>
                                            <input class="form-control" value="<?php echo date('y-m-d')?>"  name="tgl" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>isi blog</label>
                                            <textarea class="ckeditor" id="ckeditor" name="isi"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>gambar</label>
                                            <input type="file" name="gambar">
                                        </div>
                                         <div class="form-group">
                                            <input type="hidden" class="form-control" name="sp" value="<?php echo $this->session->userdata('username') ?>">
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