<?php
    include("connection.php");
    if(isset($_REQUEST["btn_Submit"])){
        $adminId=$_SESSION["AdminId"];
        $CurrentPassword=$_POST["txt_currentpassword"];
        $NewPassword=$_POST["txt_Password"];
        $$NewPassword=$_POST["txt_CPassword"];
    
        $qry="SELECT * FROM tbl_adminlogin where AdminId='$adminId' and Password='$CurrentPassword'";
        $tbl=mysqli_query($con,$qry);
        $row=mysqli_fetch_array($tbl);

        $User_Password=$row["Password"];
        
        if($CurrentPassword==$User_Password){
            if($NewPassword==$$NewPassword){
                $qry="UPDATE tbl_adminlogin SET Password='$NewPassword' where AdminId=".$_SESSION["AdminId"];
                $tbl= mysqli_query($con,$qry);
                $row=mysqli_fetch_array($tbl);
                if($tbl){
                    echo "Password has been changed successfully...";
                }
                else{
                    echo "Password changing Failed...";
                }
            }
            else{
                echo "New Password and Confrim Password must be identical";
            } 
        }
        else{
            echo "Current Password is wrong";
        }
    }
?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Form Controls - Wide selection of forms controls, using the Bootstrap 4 code base, but built with React.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="Wide selection of forms controls, using the Bootstrap 4 code base, but built with React.">
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
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Form Controls - Wide selection of forms controls, using the Bootstrap 4 code base, but built with React.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="Wide selection of forms controls, using the Bootstrap 4 code base, but built with React.">
    <meta name="msapplication-tap-highlight" content="no">
<link href="./main.css" rel="stylesheet"></head>
<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="ui-theme-settings">
            <button type="button" id="TooltipDemo" class="btn-open-options btn btn-warning">
                <i class="fa fa-cog fa-w-16 fa-spin fa-2x"></i>
            </button>
           
        </div>
        
        <div class="app-main">
            <div class="app-sidebar sidebar-shadow">
                <div class="app-header__logo">
                    <div class="logo-src"></div>
                    <div class="header__pane ml-auto">
                        <div>
                            <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="app-header__mobile-menu">
                    <div>
                        <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="app-header__menu">
                    <span>
                        <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                            <span class="btn-icon-wrapper">
                                <i class="fa fa-ellipsis-v fa-w-6"></i>
                            </span>
                        </button>
                    </span>
                </div>    
                <div class="scrollbar-sidebar">
                    <div class="app-sidebar__inner">
                        
                    </div>
                </div>
            </div>
                
            <div class="app-main__outer">
                    <div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-display1 icon-gradient bg-premium-dark">
                                        </i>
                                    </div>
                                    <div>Form Controls
                                        <div class="page-title-subheading">Wide selection of forms controls, using the Bootstrap 4 code base, but built with React.
                                        </div>
                                    </div>
                                </div>
                                <div class="page-title-actions">
                                    
                                    <div class="d-inline-block dropdown">
                                       
                                    </div>
                                </div> 
                            
                            </div>
                        </div>            


            <div class="row">
                <div class="col-md-6">
                    <div class="main-card mb-3 card">
                        <div class="card-body"><h5 class="card-title">Change Password</h5>
                            <form class="" method="post">
                                <div class="position-relative form-group">
                                    <label for="exampleEmail" class="">Current Password</label>

                                    <input name="txt_currentpassword"  id="exampleCurrent Password" placeholder="Enter Current Password" type="password" class="form-control">
                                </div>

                                <div class="position-relative form-group">
                                    <label for="examplePassword" class="">New Password</label>

                                    <input name="txt_Password" id="exampleNewPassword" placeholder="Enter New password" type="password"
                                    class="form-control">
                                </div>

                                <div class="position-relative form-group">
                                    <label for="examplePassword" class="">Confrom Password</label>

                                    <input name="txt_CPassword" id="exampleConfirmPassword" placeholder="Enter Confirm password" type="password"
                                    class="form-control">
                                </div>

                                <button name="btn_Submit" class="mt-1 btn btn-primary">Save</button>

                                <!-- Footer Start -->
                                    <?php
                                        include("footer.php");
                                    ?> 
                                <!-- Footer Start -->
                            </form>
                        </div>
                    </div>
                </div> 
            </div>
    </div>
<script type="text/javascript" src="./assets/scripts/main.js"></script>
</body>
</html>