<?php include('../login/session.php'); ?>
<?php require_once('ad_heading.php'); ?>


    <div class="row header-row">

    </div>

    <div class="row">
        <div class="col-sm-5">
            <div class="panel panel-info">
                <div class="panel-heading"><i class="fa fa-newspaper-o fa-1x" aria-hidden="true"></i> Insert Results For Grade Six</div>
                <div class="panel-body">
                    <form  action="insert_results6.php" method="post" enctype="multipart/form-data">

                        <div class="form-group">
                            <label for="email">Student name</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>

                        <div class="form-group">
                            <label for="email">Registration Number</label>
                            <input type="text" class="form-control" id="reg_num" name="reg_num">
                        </div>

                        <label for="email">Please fill the marks for each Subject </label>
                        <p></p>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="email">Sinhala</label>
                                    <input type="text" class="form-control" id="sinhala" name="Sinhala">
                                </div>
                                <div class="form-group">
                                    <label for="email">English</label>
                                    <input type="text" class="form-control" id="english" name="English">
                                </div>
                                <div class="form-group">
                                    <label for="email">Mathematics</label>
                                    <input type="text" class="form-control" id="maths" name="Maths">
                                </div>
                                <div class="form-group">
                                    <label for="email">Science</label>
                                    <input type="text" class="form-control" id="science" name="science">
                                </div>
                                <div class="form-group">
                                    <label for="email">History</label>
                                    <input type="text" class="form-control" id="science" name="science">
                                </div>
                                <div class="form-group">
                                    <label for="email">Health</label>
                                    <input type="text" class="form-control" id="science" name="science">
                                </div>
                                <div class="form-group">
                                    <label for="email">Religion</label>
                                    <input type="text" class="form-control" id="science" name="science">
                                </div>



                            </div>

                            <div class="col-sm-6">

                                <div class="form-group">
                                    <label for="email">Buddhism</label>
                                    <input type="text" class="form-control" id="buddhism" name="buddhism">
                                </div>
                                <div class="form-group">
                                    <label for="email">Tamil</label>
                                    <input type="text" class="form-control" id="tamil" name="tamil">
                                </div>
                            </div>
                        </div>



                        <button class="btn btn-success" id="save_grade6" name="submit">Save</button>



                    </form>
                </div>
            </div>
        </div>
    </div>
<?php require_once('ad_footer.php'); ?>