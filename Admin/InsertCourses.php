<?php
    include("connection.php");
    
    if(isset($_REQUEST["btn_Submit"])){
        $Cname=$_POST["course_name"];
        $Fees=$_POST["txt_fee"];
        $Duration=$_POST["txt_duration"];
        $Description=$_POST["txt_description"];
        
        $uploadFile=$_FILES["fu_Photo"] ["name"];
        $temp_name=$_FILES["fu_Photo"] ["tmp_name"];
        $Path="../images/course/".$uploadFile;
        $dbPath="images/course/".$uploadFile;
    
        move_uploaded_file($temp_name,$Path);

        $qry="INSERT INTO tbl_course (CourseName,Fees,Duration,Description,PhotoUrl) VALUES ('$Cname','$Fees','$Duration','$Description', '$dbPath')";
        echo $qry;
        mysqli_query($con,$qry);
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
                <div class="card-body"><h5 class="card-title">Courses</h5>
                    <form class="" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <div class="row">
                            <div class="col">
                                <input type="text" name="course_name" class="form-control" placeholder="Course name" aria-label="Course name">
                            </div>
                            <div class="col">
                                <input type="text" name="txt_fee" class="form-control" placeholder="Fees" aria-label="Fees">
                            </div>
                        </div>
                        </div>
                        
                        <div class="row">
                            <div class="col">
                                <input type="text" name="txt_duration" class="form-control" placeholder="Duration" aria-label="Duration">
                            </div>
                            <div class="col">
                                <input type="text" name="txt_description" class="form-control" placeholder="Description" aria-label="Description">
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <label for="formFile" class="form-label"></label>
                            <input class="form-control" type="file" name="fu_Photo" id="formFile">
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
