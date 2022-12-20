<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Quixlab - Bootstrap Admin Dashboard Template by Themefisher.com</title>
    <!-- Favicon icon -->
    <link rel="icon" type="../image/png" sizes="16x16" href="../images/favicon.png">
    <!-- Custom Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">

</head>

<body>


    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
    <?php include_once "../subpage/logonav.php" ?>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <?php include_once "../subpage/header.php" ?>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <?php include_once "../subpage/sidebar.php" ?>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title">
                                    <h4>Table User</h4>
                                    <a href="../view/creat_user.php" type="button" class="btn mb-1 btn-primary">create user</a>
                                </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#id</th>
                                                <th>Name</th>
                                                <th>username</th>
                                                <th>phan quyen</th>
                                                <th>ngaytao</th>
                                                <th>edit</th>
                                                <th>delete</th>
                                            
                                            </tr>
                                        </thead>


                                        <tbody>
                                                <?php include "../Controller/productcontroller.php";  
                                                $usercontroller = new usercontroller(); 
                                                $data=$usercontroller->getAllusercontroller();
                                                foreach($data as $key ){
                                                    echo '<form action="../Controller/usercontroller.php" method="post">';
                                                    echo '<tr>';
                                                    echo '<th>'. $key["iduser"].'</th>';
                                                    echo '<td>'.$key["fullname"].'</td>';
                                                    echo '<td >'.$key["username"].'</td>';
                                                    echo '<td >'.$key["admin"].'</td>';
                                                    echo '<td >'.$key["ngaytao"].'</td>';
                                                    echo'<td class="col-lg-2" >'. '<button type="submit" value='.$key["iduser"].' name="edit" class="btn mb-1 btn-primary"  >'."edit".'</button>'.'</td>';
                                                    echo'<td class="col-lg-2">'. '<button type="submit" value='.$key["iduser"].' name="delete" class="btn mb-1 btn-danger">'."delete".'</button>'.'</td>';
                                                    echo '</tr>' ;
                                                    echo'</form>';

                                                 //echo  '<td> $key["tenuser"] </td>';
                                                }
                                                ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                   
                
                </div>
            </div>
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
        
        
        <!--**********************************
            Footer start
        ***********************************-->
       <?php include_once "../subpage/footer.php" ?>
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    
    <script src="../plugins/common/common.min.js"></script>
    <script src="../js/custom.min.js"></script>
    <script src="../js/settings.js"></script>
    <script src="../js/gleek.js"></script>
    <script src="../js/styleSwitcher.js"></script>

</body>

</html>