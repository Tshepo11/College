

password pre_match
<?

if (!preg_match('/^(?=.*\d)(?=.*[A-Za-z])(?=.*[!@#$%])[0-9A-Za-z!@#$%]{6,15}$/', $form_state['values']['pass'])) {
    form_set_error('pass', t('Password must contain 6 characters of letters, numbers and at least one special character.'));
}
?>


password 
<?php
 
public function checkPassword($pwd, &$errors) {
    $errors_init = $errors;

    if (strlen($pwd) < 8) {
        $errors[] = "Password too short!";
    }

    if (!preg_match("#[0-9]+#", $pwd)) {
        $errors[] = "Password must include at least one number!";
    }

    if (!preg_match("#[a-zA-Z]+#", $pwd)) {
        $errors[] = "Password must include at least one letter!";
    }     

    return ($errors == $errors_init);
}
 ?>
 

 upload pdf

 <?
 
 $allowedExts = array("pdf", "doc", "docx"); 
$extension = end(explode(".", $_FILES["file"]["name"]));

if ( ( ($_FILES["file"]["type"] == "application/msword") || ($_FILES["file"]["type"] == "text/pdf") ) 
&& ($_FILES["file"]["size"] < 20000) && in_array($extension, $allowedExts))
{      
 move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" . $_FILES["file"]["name"]); 
}
else
{
echo "Invalid file."
}
 ?>
 
 
 display pdf files
 <?
 <html>
<head>
<style type="text/css">
#myiframe {width:600px; height:100%;} 
</style>
</head>
<body>
<div id="scroller">
<iframe name="myiframe" id="myiframe" src="xml.pdf">
</div>
</body>
</html>
 
 ?>
 
 
 play music files
 <?
 
 $type = $this->get_mime_type($this->filename);
header("Content-type: " . $type);

...

private function get_mime_type($filename) {

    $fileext = substr(strrchr($filename, '.'), 1);

    if (empty($fileext)) {
        return (false);
    }

    $regex = "/^([\w\+\-\.\/]+)\s+(\w+\s)*($fileext)/i";
    $lines = file("mime.types", FILE_IGNORE_NEW_LINES);

    foreach ($lines as $line) {
        if (substr($line, 0, 1) == '#') {
            continue; // skip comments
        }

        if (!preg_match($regex, $line, $matches)) {
            continue; // no match to the extension
        }

        return ($matches[1]);
    }
    return ("application/data");  // no match at all, revert to something that will work
}
 ?>
 
 
 
 
 
 