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
				$fileDestination = '../uplodedImages/'.$fileNameNew;
				move_uploaded_file($fileTmpName, $fileDestination);
				return $fileDestination;
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