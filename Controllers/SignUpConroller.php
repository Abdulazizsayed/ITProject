<?php 

if(isset($_POST['submit'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];

	$file = $_FILES['file'];

	$fileName = $_FILES['file']['name'];
	$fileTmpName = $_FILES['file']['tmp_name'];
	$fileSize = $_FILES['file']['size'];
	$fileError = $_FILES['file']['error'];
	$fileType = $_FILES['file']['type'];

	$fileExt = explode('.', $fileName);	//Extension
	$fileActualExt = strtolower(end($fileExt));

	$allowed = array('jpg', 'jpeg', 'png');
	if(in_array($fileActualExt, $allowed)){
		if($fileError === 0){
			if($fileSize < 1000000){
				$fileNameNew = uniqid('', true).'.'.$fileActualExt;
				$fileDestination = '../uplodedImages'.$fileNameNew;
				move_uploaded_file($fileTmpName, $fileDestination);
				echo "helloWrold";
				header("Location: SignUpView.php");
			}else{
				echo "<span class='error'>Your file is too big!</span>";
			}
		}else{
			echo "<span class='error'>there is an error uploading your file!</span>";
		}
	}else{
		echo "<span class='error'>You cannot upload files of this type!</span>";
	}
}
?>