<?php
    include("connection.php");

    if(!isset($_SESSION["AdminId"])){
        header("Location:login.php");
    }
    // $qry ="DELETE * FRO tbl_notification where NotiDate <="ADDDATE( NotiDate,INTERVAL 10 DAY);
    if(isset($_REQUEST["btn_Submit"])){
        $Title=$_POST["txt_tilte"];
        $Detail=$_POST["txt_detail"];
        $NotiDate=$_POST["notidate"];
        $qry="INSERT INTO tbl_notification (Title, Details,NotiDate) VALUES ('$Title','$Detail','$NotiDate')";
        mysqli_query($con,$qry);
        $msg="Done";
        // $unread_count=mysqli_num_rows($Detail);
    }
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Analytics Dashboard - This is an example dashboard created using build-in elements and components.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    <!--
    =========================================================
    * ArchitectUI HTML Theme Dashboard - v1.0.0
    =========================================================
    * Product Page: https://dashboardpack.com
    * Copyright 2019 DashboardPack (https://dashboardpack.com)
    * Licensed under MIT (https://github.com/DashboardPack/architectui-html-theme-free/blob/master/LICENSE)
    =========================================================
    * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
    -->
<link href="./main.css" rel="stylesheet"></head>
<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <!-- Header Start -->
            <?php
                include("header.php");
            ?>
        <!-- Header End  -->
               <div class="ui-theme-settings">
            <button type="button" id="TooltipDemo" class="btn-open-options btn btn-warning">
                <i class="fa fa-cog fa-w-16 fa-spin fa-2x"></i>
            </button>
            <div class="theme-settings__inner">
                <div class="scrollbar-container">
                </div>
            </div>
        </div>     
        
            <div class="app-main">
        <!-- Menu Start -->
            <?php
                include("menu.php");
            ?>
        <!-- Menu End --> 
<div class="app-main__outer">
    <div class="row ml-5  row mt-5">
        <div class="col-md-6" >
            <div class="main-card mb-3 card">
                <div class="card-body"><h5 class="card-title">Notification/Student</h5>
                    <form class="" method="post">
                    <div class="position-relative form-group">
                            <label for="exampleEmail" class="">Title</label>

                            <input name="txt_tilte" id="exampleTitle" placeholder="Enter Title" type="text" class="form-control">
                        </div>

                        <div class="position-relative form-group">
                            <label for="exampleEmail" class="">Details</label>

                            <textarea name="txt_detail" placeholder="Enter"class="form-control" ></textarea>
                        </div>

                        <div class="position-relative form-group">
                            <label for="exampleEmail" class="">Date</label>

                            <input name="notidate" id="exampleDate" placeholder="Enter Details" type="date" class="form-control">
                        </div>                
                        <button name="btn_Submit" class="mt-1 btn btn-primary">Submit</button>
                        <?php
                            if(isset($msg)){
                                echo $msg;
                            }
                        ?> 
                    </form>
                        <!-- Footer Start -->
                            <?php
                                include("footer.php");
                            ?>
                        <!-- Footer End -->
                </div>
                        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
            </div>
        </div>
    </div>
</div>      
<script type="text/javascript" src="./assets/scripts/main.js"></script>
</body>
</html>
