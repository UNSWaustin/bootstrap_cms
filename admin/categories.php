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
                        <div class="col-xs-6">
                        <?php
                         insert_categories();
                            ?>
                             <form action="" method="post">
                               <lable for="cat_title">Add Category Down</lable>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="cat_title">
                                </div>
                                 <div class="form-group">
                                    <input type="submit" class="btn btn-primary" name="submit" value="Add Category">
                                </div>
                             </form>
                                 
                        <?php  //update and include query
                            
                            if(isset($_GET['edit'])){
                                $cat_id = $_GET['edit'];
                                include "Aincludes/update_categories.php";
                            }
                        
                        ?>
                           
                         
                        </div>
                        </div>
                       <div class="col-xs-6">
                       <table class="table table-bordered table-hover">
                           <thead>
                               <tr>
                                   <th>Id</th>
                                   <th>Category Title</th>
                               </tr>
                           </thead>
                           <tbody>
                              <?php //find all categpries query
                            findAllCategories();
                            ?>
                            <?php
                            delete_categories();
                               ?>
                           </tbody>
                          </table>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
 <?php include "Aincludes/admin_footer.php"; ?>
   