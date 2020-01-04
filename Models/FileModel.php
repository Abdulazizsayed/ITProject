<?php 

function getFileDestination($file){
	$fileName = $file['name'];
	$fileTmpName = $file['tmp_name'];
	$fileSize = $file['size'];
	$fileError = $file['error'];
	$fileType = $file['type'];

	$fileExt = explode('.', $fileName);	//Extension
	$fileActualExt = strtolower(end($fileExt));

	$allowed = array('jpg', 'jpeg', 'png');
	if(in_array($fileActualExt, $allowed)){
		if($fileError === 0){
			if($fileSize < 1000000){
				$fileNameNew = uniqid('', true).'.'.$fileActualExt;
				$fileDestination = '../uploadedImages/'.$fileNameNew;
				move_uploaded_file($fileTmpName, $fileDestination);
				return $fileDestination;
			}else{
				die(1);
                header("Location: http://localhost:8080/PHPWork/ITProject/Views/SignUpView.php?errorUploading=1");
            }
		}else{
			die(2);
            header("Location: http://localhost:8080/PHPWork/ITProject/Views/SignUpView.php?errorUploading=1");
		}
	}else{
		die(3);
        header("Location: http://localhost:8080/PHPWork/ITProject/Views/SignUpView.php?errorUploading=1");
	}
}

?>