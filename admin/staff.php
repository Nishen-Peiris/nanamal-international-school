<?php include('../login/session.php'); ?>
<?php require_once('ad_heading.php'); ?>


    <div class="container">
        <div class="col-sm-3">

            <div class="side_box">
                <div class="box sidemenu">
                    <div class="block" id="section-menu">
                        <ul class="section menu">
                            <li><a class="menuitem">News</a>
                                <ul class="submenu">
                                    <li><a href="news.php">Add News</a> </li>
                                    <li><a href="view_news.php">View News</a> </li>

                                </ul>
                            </li>
                            <li><a class="menuitem">Staff Members</a>
                                <ul class="submenu">
                                    <li><a href="staff.php">Add Members</a> </li>
                                    <li><a href="view_staff.php">View Members</a> </li>
                                </ul>
                            </li>
                            <li><a class="menuitem">Results</a>
                                <ul class="submenu">
                                    <li><a href="enter_results.php">Add Results</a> </li>
                                    <li><a href="view_results.php">View Results</a> </li>
                                </ul>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-9">

                <div class="panel panel-info">
                    <div class="panel-heading"><i class="fa fa-newspaper-o fa-1x" aria-hidden="true"></i> Add Staff Member</div>
                    <div class="panel-body">
                        <form  action="insert_member.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="inputEmail3" class="control-label">Avatar</label><br>
                                <img  alt="choose image" height="200" width="200"><br>
                                <input type="file"  name="fileField" id="fileField" value="Add Image"><br>

                            </div>

                            <div class="form-group">
                                <label for="email">Member name</label>
                                <input type="text" class="form-control" id="name" name="name">
                            </div>


                            <div class="form-group">
                                <label for="email">Details</label>
                                <textarea class="form-control" id="details"  name="details"></textarea>
                            </div>


                            <button class="btn btn-success" id="saveBtn">Add Member</button>



                        </form>
                    </div>
                </div>
           
        </div>
    </div>

<?php require_once('ad_footer.php'); ?>