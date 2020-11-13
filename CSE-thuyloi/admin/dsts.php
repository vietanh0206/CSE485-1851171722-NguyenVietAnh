<?php
$conn = mysqli_connect('localhost', 'root', '') or die("Không thể kết nối ");
mysqli_select_db($conn, 'blog') or die("Không tồn tại cơ sở dữ liệu blog");
$list = array();
$sql = "SELECT *FROM student";

$result = mysqli_query($conn, $sql);

 



 
$num = mysqli_num_rows($result);
 
 
 
   
 if (isset($_POST['search'])) {
    $s = $_POST['search'];
    $sql = "SELECT * FROM student WHERE hoten LIKE '%$s%' Order By id ASC";
}
 $result = mysqli_query($conn, $sql);

 
if ($num > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $list[] = $row;
    }
}
 
?>


<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
 
    
        <!-- /. ROW  -->
        <hr />
        <style>
            #list_data thead tr td {
                font-weight: bold;
                border-bottom: 5px solid #f00;
                text-align: center;
            }

            #list_data tr th td {
                border: 1px solid #333;
                padding: 8px 15px;
                text-align: center;

            }



            .form-inline {
                float: right;

            }

            .btn {
                width: 100px;
            }
        </style>


        <div id="content">
            <form action="" method="POST" class="form-inline" role="form">
                <div class="form-group">
                    <input type="text" class="form-control " name="search" placeholder="Bạn muốn tìm gì">
                </div>

                <!-- <input class="btn btn-primary" type="submit" value="Tìm" name="bt_tk"> -->
                <button type="submit" class="btn btn-primary">Tìm kiếm</button>
            </form> <br> <br>
            <h1 class="text-info text-center">Danh sách thí sinh đăng ký xét tuyển</h1>
            <?php
            if (!empty($list)) {
            ?>
                <table id="list_data" class="table  table-striped table-dark">
                    <thead class="thead-dark">
                        <tr>

                            <td>STT</td>
                            <td>ID</td>
                            <td>Họ và tên</td>
                            <td>Giới tính</td>
                            <td>Học lực năm lớp 12</td>
                            <td>Điểm tổng kết lớp 12</td>
                            <td>Hạnh kiểm năm lớp 12</td>
                            <td>Năm tốt nghiệp</td>
                            <td>Email</td>
                             <td>Ngành</td>
                            <td>Thao tác</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $temp = 0;
                        foreach ($list as $ts) {
                            $temp++;
                        ?>
                            <tr>

                                <th><?php echo $temp; ?></th>
                                <td><?php echo $ts['id']; ?></td>
                                <td><?php echo $ts['hoten']; ?></td>
                                <td><?php echo $ts['gioitinh']; ?></td>
                                <td><?php echo $ts['hl12']; ?></td>
                                <td><?php echo $ts['diemtk']; ?></td>
                                <td><?php echo $ts['hk12']; ?></td>
                                <td><?php echo $ts['ntn']; ?></td>
                                <td><?php echo $ts['email']; ?></td>
                                <td><?php echo $ts['nganhxt']; ?></td>
                                
                                <td> <a href="updatets.php?module=update&id=<?php echo $ts['id']; ?>" target="blank">Sửa</a>| <a href="deletets.php?module=delete&id=<?php echo $ts['id']; ?>">Xóa</a> </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>

                </table>

                
                <p class="num_row">Có <?php echo $num; ?> thí sinh đăng ký xét tuyển</p>
            <?php
            }
            ?>
            <style>
                .btn {
                    width: 200px;

                }
                .num_row{
                    color:red;
                    font-style:italic
                }

               
            </style>
            
            <a href="addts.php" target="blank">

                <input type="submit" class="btn btn-success" value=" + Thêm mới thí sinh">
            </a>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>