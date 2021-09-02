<?php
    include("connection.php");

    if(isset($_REQUEST["id"])){
        $qry="DELETE FROM tbl_notification where NotiId=".$_REQUEST["id"];
        mysqli_query($con,$qry);
    }

    if(isset($_REQUEST["sid"])){
        $Sid=$_REQUEST["sid"];
        if($_REQUEST["status"]== 1)
            $Status=0;
        else
            $Status=1;
        
        $qry="UPDATE tbl_notification SET NotiStatus=$Status where NotiId=".$Sid;
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
                // include("header.php");
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
        <div class="col-md-10" >
            <div class="main-card mb-3 card">
                <div class="card-body"><h5 class="card-title">Course</h5>
                    <table class="mb-0 table">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Title</th>
                            <th>Details</th>
                            <th>Date</th>
                            <th></th>
                            <th></th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <?php
                            $qry="SELECT * FROM tbl_notification";
                            $tbl=mysqli_query($con,$qry);
                            while($row=mysqli_fetch_array($tbl)){
                        ?>
                        <tbody>
                            <td><?php echo $row["NotiId"];?></td>
                            <td><?php echo $row["Title"];?></td>
                            <td><?php echo $row["Details"];?></td>
                            <td><?php echo $row["NotiDate"];?></td>
                            <td><a href='Viewstudentnoti.php?id=<?php echo $row["NotiId"];?>'>Delete</a></td>
                            <td><a href='EditStudentNoti.php?idi=<?php echo $row["NotiId"];?>'>Edit</a></td>
                            <td>
                                <a href='Viewstudentnoti.php?sid=<?php echo $row["NotiId"];?>&status=<?php echo $row["NotiStatus"];?>'>
                                    <?php
                                    if($row["NotiStatus"]=='1'){
                                        echo "Disable";
                                    }
                                    else{
                                        echo "Enable";
                                        }
                                    ?>
                                </a>
                            </td>
                            
                        </tbody>
                        <?php
                            }
                        ?>
                    </table>
                </div>
            </div>  
        </div>
    </div>
</div>
                              
<script type="text/javascript" src="./assets/scripts/main.js"></script>
</body>
</html>
