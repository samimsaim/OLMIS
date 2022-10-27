<?php
/**
*
*/
class UsersController extends MY_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('usersModel');
	}

    public function index($message = null, $type = null,$result="کاربران")
	{
		$user=$this->usersModel->getuser();
		$this->load->view('include/header.inc.php',array('result'=>$result));
		$this->load->view('Users',array("user"=>$user,'Message' => $message, 'Type' => $type));
		$this->load->view('include/footer.inc.php');
	}

    public function test()
	{
		$result=$this->usersModel->setpriv();
		if($result){
			redirect('UsersController/privelage');
		}else{
			echo "not";
		}
	}
function aprove(){
        $id=$_GET['id'];
        $data=$this->usersModel->search_user($id);
        foreach($data as $row){
            $data=array(
                'name'=>$row->name,
                'last_name'=>$row->last_name,
                'email'=>$row->email,
                'phone'=>$row->phone,
                'gender'=>$row->username,
                'position'=>$row->position,
                'privilege'=>$row->privilege,
                'password'=>sha1($row->password),
                'aprove'=>1,
            );
        }
        $result=$this->usersModel->updateAprove($id,$data);
        if($result){
            redirect('usersController/index');
        }
    }
    function disaprove(){
        $id=$_GET['id'];
        $data=$this->usersModel->search_user($id);
        foreach($data as $row){
            $data=array(
                'name'=>$row->name,
                'last_name'=>$row->last_name,
                'email'=>$row->email,
                'phone'=>$row->phone,
                'gender'=>$row->username,
                'position'=>$row->position,
                'privilege'=>$row->privilege,
                'password'=>sha1($row->password),
                'aprove'=>0,
            );
        }
        $result=$this->usersModel->updateAprove($id,$data);
        if($result){
            redirect('usersController/index');
        }
    }
    public function userDetails($data="معلومات کاربر"){
        $id=$_GET['id'];
        $result=$this->usersModel->search_user($id);
        $this->load->view('include/header.inc.php',array('result'=>$data));
        $this->load->view('userDetails',array('userDetails'=>$result));
        $this->load->view('include/footer.inc.php');
    }

	public function addUser($result="اضافه نمودن کاربر"){
	$this->load->view('include/header.inc.php',array('result'=>$result));
	$this->load->view('addUser');
	$this->load->view('include/footer.inc.php');
    }

    public function checkAddUser(){
        $error_name = $error_lname = $error_pos = $error_email = $error_privilege = $error_username = $error_pass = $error_c_pass =  $error_phone = '';
        $error = false;
        if (isset($_POST['addUser'])) {
            // -------------- Form validation -----------------
            if (empty($_POST['name'])) {
                $error_name = 'لطفاً اسم خود را وارد نماید';
                $error = true;
            }
            if (empty($_POST['last_name'])) {
                $error_lname = 'لطفاً تخلص خود را وارد نماید!';
                $error = true;
            }
            if (empty($_POST['position'])) {
                $error_pos = 'لطفاً مقام خود را درج نماید!';
                $error = true;
            }
            if (empty($_POST['email'])) {
                $error_email = 'لطفاً آدرس ایمل خود را درج نماید';
                $error = true;
            }
            if (empty($_POST['phone_no'])) {
                $error_phone = 'لطفاً شماره تیلفون خود را وارد نماید!';
                $error = true;
            }
            if (empty($_POST['privilege'])) {
                $error_privilege = 'لطفاً محدودیت کاربر را انتخاب نماید';
                $error = true;
            }

            if (empty($_POST['username'])) {
                $error_username = 'لطفاً اسم کاربری خود را درج نماید!';
                $error = true;
            }

            if (empty($_POST['password'])) {
                $error_pass = 'لطفاً رمز عبور خود را وارد نماید!';
                $error = true;
            }
            if (empty($_POST['confirm_password'])) {
                $error_c_pass = 'لطفاً رمز عبور خود را تائید نماید!';
                $error = true;
            } else {
                if ($_POST['password'] != $_POST['confirm_password']) {
                    $error_c_pass = 'رمز عبور شما یکسان نیستند!';
                    $error = true;
                }
            }
            $fields_data = array(
                'name' => $_POST['name'],
                'last_name' => $_POST['last_name'],
                'position' => $_POST['position'],
                'email' => $_POST['email'],
                'phone'=>$_POST['phone_no'],
                'privilege'=> $_POST['privilege'],
                'username'=> $_POST['username'],
                'password' => sha1($_POST['password']),

            );
            UsersController::insertUser($fields_data);
        } else {
            $this->load->view('include/header.inc.php');
            $this->load->view('addUser', array(
                'error_name' => $error_name,
                'error_lname' => $error_lname,
                'error_pos' => $error_pos,
                'error_email'=>$error_email,
                'error_privilege'=>$error_privilege,
                'error_phone'=>$error_phone,
                'error_username'=>$error_username,
                'error_pass' => $error_pass,
                'error_c_pass' => $error_c_pass,
                'Field_data' => $_POST
            ));
            $this->load->view('include/footer.inc.php');
        }
    }

    function insertUser($data){
        $result = $this->usersModel->insertUser($data);
        if ($result) {
            UsersController::index("کاربر مورد نظر شما موفقانه اضافه گردید!", 'success');
        } else {
            UsersController::index("کاربر مورد نظر شما متاسفانه اضافه نگردید. لطفاً دوباره کوشش نماید!", 'failed');
        }
    }

    function updateUser($data="ویرایش کاربر"){
        $userId = $_GET['id'];
        $result = $this->usersModel->search_user($userId);
        $this->load->view('include/header.inc.php',array('result'=>$data));
        $this->load->view('editUser',array('user'=>$result));
        $this->load->view('include/footer.inc.php');
    }

    function checkEditUser(){
        $error_name = $error_lname = $error_pos = $error_email = $error_privilege = $error_username = $error_pass = $error_c_pass =  $error_phone = $error_old_pass ='';
        $error = false;
        if (isset($_POST['editUser'])) {
            // -------------- Form validation -----------------
            if (empty($_POST['name'])) {
                $error_name = 'لطفاً اسم خود را وارد نماید';
                $error = true;
            }
            if (empty($_POST['last_name'])) {
                $error_lname = 'لطفاً تخلص خود را وارد نماید!';
                $error = true;
            }
            if (empty($_POST['position'])) {
                $error_pos = 'لطفاً مقام خود را درج نماید!';
                $error = true;
            }
            if (empty($_POST['email'])) {
                $error_email = 'لطفاً آدرس ایمل خود را درج نماید';
                $error = true;
            }
            if (empty($_POST['phone_no'])) {
                $error_phone = 'لطفاً شماره تیلفون خود را وارد نماید!';
                $error = true;
            }
            if (empty($_POST['privilege'])) {
                $error_privilege = 'لطفاً محدودیت کاربر را انتخاب نماید';
                $error = true;
            }
            if (empty($_POST['username'])) {
                $error_username = 'لطفاً اسم کاربری خود را درج نماید!';
                $error = true;
            }

            $result = $this->usersModel->search_user($_POST['user_id']);
            if (empty($_POST['old_password'])) {
                $error_pass = 'لطفاً رمز عبور قبلی خود را وارد نماید';
                $error = true;
            }else{
                foreach($result as $row){
                    if(sha1($_POST['old_password']) != $row->password){
                        $error_old_pass = 'رمز عبور شما اشتباه است!';
                        $error = true;
                    }
                }
            }
            if (empty($_POST['password'])) {
                $error_pass = 'لطفاً رمز عبور خود را وارد نماید!';
                $error = true;
            }
            if (empty($_POST['confirm_password'])) {
                $error_c_pass = 'لطفاً رمز عبور خود را تائید نماید!';
                $error = true;
            } else {
                if ($_POST['password'] != $_POST['confirm_password']) {
                    $error_c_pass = 'رمز عبور شما یکسان نیستند!';
                    $error = true;
                }
            }

        }
        if (!$error) {
            $fields_data = array(
                'name' => $_POST['name'],
                'last_name' => $_POST['last_name'],
                'position' => $_POST['position'],
                'email' => $_POST['email'],
                'phone'=>$_POST['phone_no'],
                'privilege'=> $_POST['privilege'],
                'username'=> $_POST['username'],
                'password' => sha1($_POST['password']),
            );
        //    $userId = $_POST['user_id'];
          //  if (isset($_FILES["photo"]) and $_FILES["photo"]["error"] == UPLOAD_ERR_OK) {
            //    $destination = "C:/xampp/htdocs/library/admin/assets/img/users/";
            //    if (!empty($_FILES["photo"]) and $_FILES["photo"]["error"] == UPLOAD_ERR_OK)
              //      move_uploaded_file($_FILES['photo']['tmp_name'], $destination .($_FILES['photo']['name']) .date('his'). "." . substr($_FILES['photo']['type'], 6, 5));
              //  $image = "assets/img/users/" .($_FILES['photo']['name']) .date('his'). "." . substr($_FILES['photo']['type'], 6, 5);
              //  $fields_data['image'] = $image;
              //  $photo_url =(isset($_POST['photo_path']))? $_POST['photo_path'] : null;
            //    if($photo_url !=null)
              //      unlink($photo_url);
          //  }else{
          //      array_pop($fields_data);
        //    }
            UsersController::editUser($fields_data,$userId);
        } else {
            $result = $this->usersModel->search_user($_POST['user_id']);
            $this->load->view('include/header.inc.php');
            $this->load->view('editUser', array('user'=>$result,
                'error_name' => $error_name,
                'error_lname' => $error_lname,
                'error_pos' => $error_pos,
                'error_email'=>$error_email,
                'error_privilege'=>$error_privilege,
                'error_phone'=>$error_phone,
                'error_username'=>$error_username,
                'error_old_pass'=>$error_old_pass,
                'error_pass' => $error_pass,
                'error_c_pass' => $error_c_pass,
                'Field_data' => $_POST
            ));
            $this->load->view('include/footer.inc.php');
        }
    }

    function editUser($data,$userId){
        $result = $this->usersModel->update_user($data,$userId);
        if ($result) {
            UsersController::index("کاربر مورد نظر شما موفقانه ویرایش شد!", 'success');
        } else {
            UsersController::index("کابر مورد نظر شما متاسفانه ویرایش نشد!", 'failed');
        }
    }

    public function delete_user(){
        $id=$_GET['id'];
        $delete = $this->usersModel->search_user($id);
        foreach($delete as $row){
            if(!empty($row->image)) {
                unlink($row->image);
            }
        }
        $result = $this->usersModel->delete_user($id);
        if($result){
            UsersController::index("کاربر مورد نظر شما موفقانه حذف شد!", 'success');
        }else{
            UsersController::index("کاربر مورد نظر شما متاسفانه حذف نشد. لطفاً دوباره کوشش نماید!", 'failed');
        }
    }

	public function privilege(){
		$userPriv=$this->usersModel->getPrivilege();
		$this->load->view('include/header.inc.php');
		$this->load->view('usersPrivelage',array('user'=>$userPriv));
		$this->load->view('include/footer.inc.php');
	}

    public function addPrivilege(){
        $result=$this->usersModel->addPrivilege();
        if($result){
            redirect('usersController/privilege');
        }else{
            echo "not";
        }
    }

	public function updatePrivilege()
	{	$id=$_GET['id'];
		$priv=$this->usersModel->get_privelage($id);
		$this->load->view('include/header.inc.php');
		$this->load->view('editPrivilege', array('priv'=>$priv));
		$this->load->view('include/footer.inc.php');

	}

	public function editPrivilege(){
		$id=$_POST['priv_id'];
		$this->usersModel->editPrivilege($id);
		 redirect('usersController/privilege');
	}

	public function deletePrivilege(){
		$id=$_GET['id'];
		$this->usersModel->deletePrivilege($id);
		redirect('usersController/privilege');
	}
    function aboutUs(){
        $data=$this->usersModel->getAbout();
        $this->load->view('include/header.inc.php');
        $this->load->view('aboutUs', array('data'=>$data));
        $this->load->view('include/footer.inc.php');
    }
}
?>
