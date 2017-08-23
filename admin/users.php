<?php include "Aincludes/admin_header.php";  ?>
    <div id="wrapper">
       <?php include "Aincludes/admin_navigation.php"; ?>
        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome to Admin
                            <small>User</small>
                        </h1>
 
                     <?php
                        if(isset($_GET['source'])){
                            $source = $_GET['source'];
                            
                        } else {
                            $source='';
                            
                        }
                        switch($source){
                                case 'add_users';
                                include "Aincludes/add_users.php";
                                break;
                                
                                case 'edit_users';
                                include "Aincludes/admin_edit_users.php";
                                break;
                                
                                case '200';
                                echo "NICE";
                                break;
                                
                                default;
                                include "Aincludes/view_all_users.php";
                                break;
                        }
                        
                     
                        
                        ?>
                          
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
 <?php include "Aincludes/admin_footer.php";?>
   