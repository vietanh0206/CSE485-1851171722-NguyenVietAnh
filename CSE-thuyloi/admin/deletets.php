<?php
$conn = mysqli_connect('localhost', 'root', '') or die("Không thể kết nối ");
mysqli_select_db($conn, 'blog') or die("Không tồn tại cơ sở dữ liệu tlu");
$id = $_GET['id'];
$sql = "DELETE FROM student WHERE id ='$id'";
if(mysqli_query($conn,$sql)) 
{
    header("location:dsts.php");
}
?>