<?php

require 'connecttodb.php';  

if(isset($_POST['word'])){
 //echo $_POST['word'];
$word=$_POST['word']; //grabbing the value typed in the text box and storing in the variable.

if(!empty($word)){
 if(strlen($word)>55){
   echo 'Max length exceeded';
 }else{
 	$query="SELECT `words` FROM `wordstable`WHERE `words`='$word'";
 	$query_run= mysql_query($query);
    $query_num_rows=mysql_num_rows($query_run);
    if($query_num_rows==1){
    // check if the word already exists.
      echo 'Word '.$word.' already exists';
    }else{
    // if not insert into the table.
     $insert_query="INSERT INTO `wordstable` VALUES(' ','".mysql_real_escape_string($word)."',1)";
     if($insert_queryrun=mysql_query($insert_query)){
      echo 'Word '.$word.' is added to the collection';
     }else{
      echo 'Unable to add the word'.$word;
     }
    }
  }
}else{
  echo 'This field cannot be empty';
}
// end of the isset block 
}

?>

<form method="POST" action="main.php">
Enter the words to store them in DB:<br> <input type="text" name="word" maxlength="55" value="<?php if(isset($word)){echo $word;} ?>"><br><br>
 <input type="submit" value="Add Word">
 </form>
