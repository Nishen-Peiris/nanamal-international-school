<?php include('../login/session.php'); ?>
<?php require_once('ad_heading.php'); ?>


<div class="container">

    <div class="col-sm-12">
        <div class="grid_10">
            <div class="box round first">
                <h2>News</h2>
                <div class="block">
                    <center><i class="fa fa-newspaper-o fa-2x" aria-hidden="true"></i><a href="news.php" ><span class="panel-heading"> Manage News</span></a></center><br>
                    <ul class="action_list">
                        <li><i class="fa fa-plus fa-1x" aria-hidden="true"></i><a href="news.php"> <span class="panel-sub-heading">Add News</span></a></li>
                        <li><i class="fa fa-eye" aria-hidden="true"></i></i><a href="view_news.php"> <span class="panel-sub-heading">View News</span></a></li>

                    </ul>





                </div>

            </div>
        </div>

        <div class="grid_10">
            <div class="box round first">
                <h2>Staff Members</h2>
                <div class="block">
                    <center><i class="fa fa-users fa-2x" aria-hidden="true"></i><a href="staff.php"><span class="panel-heading">  Manage Staff Members</span></a></center>
                </div>
                <ul class="action_list">
                    <li><i class="fa fa-plus fa-1x" aria-hidden="true"></i><a href="staff.php"> <span class="panel-sub-heading">Add Member</span></a></li>
                    <li><i class="fa fa-eye" aria-hidden="true"></i></i><a href="view_staff.php"> <span class="panel-sub-heading">View Members</span></a></li>

                </ul>

            </div>
        </div>

        <div class="grid_10">
            <div class="box round first">
                <h2>Results</h2>
                <div class="block">
                    <center><i class="fa fa-clipboard fa-2x" aria-hidden="true"></i><a href="enter_results.php"><span class="panel-heading">  Manage Results</span></a></center>
                </div>
                <ul class="action_list">
                    <li><i class="fa fa-plus fa-1x" aria-hidden="true"></i><a href="enter_results.php"> <span class="panel-sub-heading">Add Results</span></a></li>
                    <li><i class="fa fa-eye" aria-hidden="true"></i></i><a href="view_results.php"> <span class="panel-sub-heading">View Results</span></a></li>
                </ul>

            </div>
        </div>
    </div>

</div>

<?php require_once('ad_footer.php'); ?>



