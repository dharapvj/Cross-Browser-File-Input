<?php
print_r($_FILES);

$target_path = "d:/TempDown/";
$target_path = $target_path . basename( $_FILES['file0']['name']);
echo "Source=" .        $_FILES['file0']['name'] . "<br />";
echo "Target path=" .   $target_path . "<br />";
echo "Size=" .          $_FILES['file0']['size'] . "<br />";

if(move_uploaded_file($_FILES['file0']['tmp_name'], $target_path)) {
echo "The file ".  basename( $_FILES['file0']['name']).
" has been uploaded";
} else{
echo "There was an error uploading the file, please try again!";
}
?>