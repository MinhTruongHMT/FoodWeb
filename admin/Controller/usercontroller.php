<?php
include_once '../utils/MySQLUtils.php';
include_once '../model/User.php';



 //$usercontroller =new usercontroller(); 
// if(isset($_POST)&& !empty($_POST)){
   

//     $username = $_POST['contact_txt_username'];
//     $password = $_POST['contact_txt_password'];
//     $submit =$_POST['submit'];
    
    
//     var_dump($_POST);
    
//     if($submit == 'register'){
//     $name=$_POST['name'];
//     $username = $_POST['email'];
//     $password = $_POST['password'];
     
//     $user=new User("",$name,$username,$password);
//     $usercontroller->insertUsercontroller($user);
//     // echo"$user->getusername()";
//         // header("Location:../page-register.html");
//     }else if($username=='admin' && $password == 'admin')
//     {
       
//         // $data = $user->getAllUser();
//         $data=$usercontroller->getAllusercontroller();
//         var_dump($data);
        

//         // var_dump($usercontroller->getUsercontroller($user));
        
//         // $conn->disconnectDB();
//         // header("Location: ../view/index.php");
//         exit;
        
//     }
//      else {
         
//         // header("Location:../view/page-login.html");
//          echo "<script type='text/javascript'>alert('dang nhap sai ');</script>";
          
//          exit;
//     }

//     }
if(isset($_POST)&& !empty($_POST)){
if(isset($_POST['delete']))
{
    $usercontroller =new usercontroller();
        $id=$_POST['delete'];
   $user=new User($id,"","","","","","","");
  $usercontroller->deleteUserController($user);
  header("Location: ../view/table-basic.php");
  die;
}
if(isset($_POST['edit']))
{
    $usercontroller =new usercontroller();
        $id=$_POST['edit'];
        echo "$id";
   $user=new User($id,"","","","","","","");
  $data= $usercontroller->getUsercontroller($user);
 
  include_once "../view/edit_user.php";
//   header("Location: ../view/table-basic.php");
  die;
}
$actionUser = $_POST['chucnang']; 
$usercontroller =new usercontroller();



switch ($actionUser) {
    case 'login':
    
    $username = $_POST['contact_txt_username'];
    $password = $_POST['contact_txt_password'];
    $data = $usercontroller->getAllusercontroller();
    foreach($data as $valuse)
    {
        
       
        if($valuse['username'] == $username && md5($valuse['password'] == $password)){
            header("Location: ../view/index.php");
            
             exit;
        }
        
        
        
    
    
    }
    header("Location: ../view/page-login.php");
       
        break;

        case 'register':
            
            //         $date = getdate();
            // $date_now = "$date['mday'].$date['mon'].$date['year']";
            // $name=$_POST['name'];
            date_default_timezone_set('Asia/Ho_Chi_Minh');
            $today = date('y-m-d h:i:s');
            $name=$_POST['name'];
    $username = $_POST['email'];
    $password = $_POST['password'];
    $user=new User("",$name,$username,$password,$today,0,"","");
    $usercontroller->insertUsercontroller($user);
    header("Location: ../view/");
            break;
            case 'edit1':
                $userid = $_POST['iduser'];
                $fullname = $_POST['fullname'];
                $username = $_POST['username'];
                $password = $_POST['password'];
                $diachi = $_POST['diachi'];
                $sdt = $_POST['sdt'];
                $admin = $_POST['admin'];
                 $user=new User( $userid,$fullname, $username,$password,"",$admin,$sdt,$diachi);
                $usercontroller->updateUsercontroller($user);
                header("Location: ../view/table-basic.php");

    
                break;
    //         $date = getdate();
    //         $date_now = "$date['mday']"."$date['mon']"."$date['year']";
    
    // $username = $_POST['email'];
    // $password = $_POST['password'];
    // $user=new User("",$name,$username,$password,$date_now,"0","","");
    // $usercontroller->insertUsercontroller($user);
    // break;
    case 'create':
        date_default_timezone_set('Asia/Ho_Chi_Minh');
            $today = date('y-m-d h:i:s');
        $userid = $_POST['iduser'];
                $fullname = $_POST['fullname'];
                $username = $_POST['username'];
                $password = $_POST['password'];
                $diachi = $_POST['diachi'];
                $sdt = $_POST['sdt'];
                $admin = $_POST['admin'];
                $user=new User( $userid,$fullname, $username,$password,$today,$admin,$sdt,$diachi);
                $usercontroller->insertUsercontroller($user);
                header("Location: ../view/table-basic.php");
        break;
    default:
        # code...
        break;
}
}

class usercontroller{
   
    public function insertUsercontroller($user){
        $user->insertUser();
    }
    public function getUsercontroller($user){
        return ($user->getUser());
    }
    public function getAllusercontroller(){
        $user=new User("","","","","","","","");
        return( $user->getAllUser());
    }
    public function updateUsercontroller($user){
        $user->upDateUser();
    }
    public function deleteUserController($user){
        $user->deleteUser();
    }
}
