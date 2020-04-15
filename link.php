<?php

$link = mysqli_connect( 
            'localhost',  // MySQL主機名稱 
            'root',       // 使用者名稱 
            'euphonium0115',  // 密碼
            'php2020');  // 預設使用的資料庫名稱
$SQL="SELECT * FROM employee";

if($result=mysqli_query($link, $SQL)){ 
  echo "<body bgcolor=#000000 text=#ffffff>";
  echo "<center>";
  echo "<table style = border='0'#000000>";
  echo "<tr align=center bgcolor=#555555>";
  echo "<td><u><b>No</b></u></td>
        <td><b>Fname</b></td>
        <td><b>Minit</b></td>
        <td><b>Lname</b></td>
        <td><b>Bdate</b></td>
        <td><b>Address</b></td>
        <td><b>Sex</b></td>
        <td><b>Salary</b></td>";
  echo "</tr>";
	while($row=mysqli_fetch_assoc($result)){//fetch 結合陣列
		echo "<tr align=center bgcolor=#777777>";
    echo "<td>".$row['No']."</td>
          <td>".$row['Fname']."</td>
          <td>".$row['Minit']."</td>
          <td>".$row['Lname']."</td>
          <td>".$row['Bdate']."</td>
          <td>".$row['Address']."</td>
          <td>".$row['Sex']."</td>
          <td>".$row['Salary']."</td>";
	}
    echo "</tr>";
    echo "</table>";
}
else{
	echo "No data!";
};
echo "</center>";
?>