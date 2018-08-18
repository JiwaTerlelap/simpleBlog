<?php include 'layout/header.php';?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Form qoutes</h1>
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
                                    <form role="form" action="<?php echo base_url()?>didie/simpan_qout" method="post">
                                        <div class="form-group">
                                            <label>isi qoutes</label>
                                            <textarea class="form-control" rows="3" name="isi"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-success">Submit</button>
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
<?php include 'layout/footer.php'; ?>