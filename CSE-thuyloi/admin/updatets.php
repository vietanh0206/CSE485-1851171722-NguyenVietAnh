<?php
$id = $_GET['id'];
$conn = mysqli_connect('localhost', 'root', '') or die("Không thể kết nối ");
mysqli_select_db($conn, 'blog') or die("Không tồn tại cơ sở dữ liệu blog");


if (isset($_POST['bt_update'])) {
    $error = array();

    $alert = array();

    
    if (empty($_POST['nganhxt'])) {
        $error['nganhxt'] = "Bạn chưa chọn ngành xét tuyển";
    } else {
        $nganhxt = $_POST['nganhxt'];
    }

    if (empty($error)) {
        $sql = "UPDATE student SET nganhxt = '$nganhxt' WHERE id = '$id'" ;
        if (mysqli_query($conn, $sql)) {
            $alert['success'] = 'Sửa dữ liệu thành công';
         header("location:dsts.php"); 

        } else {
            echo mysqli_error($error);
        }
    }
}
$sql= "SELECT *FROM student WHERE id = '$id'";
$result = mysqli_query($conn,$sql);
$item = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/bootstrap.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Form</title>
</head>
<style>

  .active{
       color:red;
       text-align:center;
  }

</style>
<body class="bg-dark">
  <!--Chuyển màu nền cho body -->
  <div class="container">
    <div class="row">
      <div class="col-lg-9 m-auto">
        <!--Căn ra giữa -->
        <div class="card mt-5">
          <!-- form Xuống dưới -->
          <div class="card-title">
            <h3 class="bg-info text-center">HỒ SƠ ĐĂNG KÝ XÉT TUYỂN HỌC BẠ</h3>
            
          </div>
           <form action="" method="POST">
            
        
               
              <div class="col-md-4 mb-3">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroupPrepend2">Ngành xét tuyển</span>
                    </div>
                    <select id="hi" name="nganhxt" class="form-control" required>
                      <option  value="0">--chọn nganh--</option>
                      <option <?php if(isset($item['nganhxt'])&& $item['nganhxt']=='Công Nghệ Thông Tin') echo "selected ='selected'" ; ?> value="Công Nghệ Thông Tin">CNTT</option>
                      <option <?php if(isset($item['nganhxt'])&& $item['nganhxt']=='Kỹ Thuật Phần Mềm') echo "selected ='selected'" ; ?> value= "Kỹ Thuật Phần Mềm">Kỹ Thuật Phần Mềm</option>
                      <option  <?php if(isset($item['nganhxt'])&& $item['nganhxt']=='Hệ Thống Thông Tin') echo "selected ='selected'" ; ?> value= "Hệ Thống Thông Tin">HTTT</option>
                      <option <?php if(isset($item['nganhxt'])&& $item['nganhxt']=='Kinh Tế') echo "selected ='selected'" ; ?> value= "Kinh Tế ">Kinh Tế</option>
                      <option <?php if(isset($item['nganhxt'])&& $item['nganhxt']=='Xây Dựng') echo "selected ='selected'" ; ?> value= "Xây Dựng">Xây Dựng</option>
                        
                    </select>
                    <?php
            if (!empty($error["nganhxt"])) {
            ?>
             <p><?php echo $error['nganhxt']; ?> </p>
         <?php
            }
            ?>
                  </div>
                </div>
              <br />
              <br />
              <br />

               
              <button class="btn btn-primary btn-center" type="submit" name="bt_update">
                Lưu lại
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
 



 