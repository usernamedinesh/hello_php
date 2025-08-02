<?php
$file = ("hi.txt");
/* $fp = fopen("filename", "file-mode"); */
/* $fp = fopen("hi.txt", "r");  */
/* $fp = fopen($file, "r"); //only read  */
/* echo fread($fp, filesize($file)); */

//write and ovveride the while file
$fa = fopen($file, "a");  //only append  
$fa = fopen($file, "w");  // ovveride th while file if file not exist creat it 
echo fwrite($fa, "ovveride");


echo fgets($fp); //read only first line
/* fgetss => does not read html */
echo fgets($fp); //read only second line
while($line = fgets($fp) {
    echo $line . "<br>;
}

//  read whole file  */
// echo readfile($fp); */ including file size
// echo file_get_contents($fp) // only file ocntent not file size
// file_exist(file) for checking  file or directory exist 
// unlink(file) for  deleting file
//header(location:http://google.com) => for page redirection  

//i think both code is required
//header(Content-Disposition:attachment;filename=project.zip) => set the filename for download  
//readfile("filepath") // => while file to download
//mail() => for seding mail

?>


