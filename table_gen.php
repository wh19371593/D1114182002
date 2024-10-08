<?php
   $row_num = $_GET['row_num'];
   $col_num = $_GET['col_num'];
   $gender = $_GET['gender'];
   $dept = $_GET['dept'];
   $msg = $_GET['message'];
   echo '輸入大小:'.$row_num.'列'.$col_num.'行';
   echo '性別'.$gender.'。';
   echo '科系'.$dept.'。';
   echo '留言'.$msg.'。';
   echo'<table border=\"1\">';
   for($i = 0; $i < $row_num; $i++) 
   {
    echo '<tr>';
    for($j = 0; $j < $col_num; $j++)
    {
        echo '<td>'.($i+1).'列'.($j+1).'行'.'</td>';
    }
    echo '<tr>';
   }
   echo '</table>';
?>