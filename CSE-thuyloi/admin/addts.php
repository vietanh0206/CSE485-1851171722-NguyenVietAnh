<?php
  $conn=mysqli_connect('localhost','root','','blog') or die ("không thể kết nối đến csdl");


  if(isset($_POST['save'])){
    $hoten = $_POST['hoten'];
    $gioitinh  = $_POST['gioitinh'];
    $ngaysinh = $_POST['ngaysinh'];
    $noisinh = $_POST['noisinh'];
    $dantoc = $_POST['dantoc'];
    $tongiao = $_POST['tongiao'];
    $namtotnghiep = $_POST['namtotnghiep'];
    $hocluc12 = $_POST['hocluc12'];
    $hanhkiem12 = $_POST['hanhkiem12'];
    $cmnd = $_POST['cmnd'];
    $ngaycap = $_POST['ngaycap'];
    $noicap = $_POST['noicap'];
    $hokhau = $_POST['hokhau'];
   $diachi=$_POST['diachi'];
    $matinh = $_POST['matinh'];
    $matruong = $_POST['matr'];
    $sdths = $_POST['sdths'];
    $sdtph = $_POST['sdtph'];
    $dtb12 = $_POST['dtk12'];
     $email = $_POST['email'];
     $nganhxt=$_POST['nganhxt'];
    
    $sql = "INSERT INTO student ( `hoten`, `gioitinh`, `ngaysinh`, `noisinh`, `ntn`, `hk12`, `hl12`, `email`, `tg`, `dt`, `cmnd`, `ngaycap`, `noicap`, `matruong`, `matinh`, `dc`, `sdt`, `sdt_ph`, `diemtk`, `hokhau`,`nganhxt`) VALUES ( '$hoten', '$gioitinh', '$ngaysinh', '$noisinh', '$namtotnghiep', '$hanhkiem12', '$hocluc12', '$email', '$tongiao', '$dantoc', '$cmnd', '$ngaycap', '$noicap', '$matruong', '$matinh', '$diachi', '$sdths', '$sdtph', '$dtb12', '$hokhau','$nganhxt')";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "Đăng ký xét tuyển thành công";
  
      }
      else {
        echo "Lỗi .{$sql}";
      }
                                
}
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
            <h3 class="bg-info text-center">THÊM THÍ SINH</h3>
            <p class="active"><?php 
                   
            ?></p>
          </div>
          <div class="card-body">
            <form class="card-body" method="POST" enctype="multipart/form-data">
              <div class="form-row">
                <div class="col-md-6 mb-3">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroupPrepend2">Họ và tên</span>
                    </div>
                    <input type="text" class="form-control" name="hoten" id="validationDefaultUsername"
                      placeholder="Nhập tên" aria-describedby="inputGroupPrepend2" required />
                  </div>
                </div>

                <div class="col-md-6 mb-3">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" name="gioitinh" id="inputGroupPrepend2">Giới tính</span>
                    </div>
                    <select name="gioitinh" class="form-control">
                      <option>Nam</option>
                      <option>Nữ</option>
                    </select>
                  </div>
                </div>
              </div>

              <div class="form-row">
                <div class="col-md-6 mb-3">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroupPrepend2">Ngày sinh</span>
                    </div>
                    <input type="date" class="form-control" name="ngaysinh" id="validationDefaultUsername"
                      placeholder="Nhập ngày sinh" aria-describedby="inputGroupPrepend2" required />
                  </div>
                </div>

                <div class="col-md-3 mb-3">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroupPrepend2">Dân tộc</span>
                    </div>
                    <input type="text" class="form-control" name="dantoc" id="validationDefaultUsername"
                      placeholder="Nhập dt" aria-describedby="inputGroupPrepend2" required />
                  </div>
                </div>

                <div class="col-md-3 mb-3">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroupPrepend2">Tôn giáo</span>
                    </div>
                    <input type="text" class="form-control" name="tongiao" id="validationDefaultUsername"
                      placeholder="Nhập tôn giáo" aria-describedby="inputGroupPrepend2" required />
                  </div>
                </div>
              </div>

              <div class="form-row">
                <div class="col-md-6 mb-3">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroupPrepend2">Nơi Sinh</span>
                    </div>
                    <select name="noisinh" class="form-control" required>
                      <option value="0">--chọn tỉnh--</option>
                      <option value="TP HCM">TP HCM</option>
                      <option value= "Hà Nội">Hà Nội</option>
                      <option value= "Hải Phòng">Hải Phòng</option>
                      <option value= "Thanh Hóa">Thanh Hóa</option>
                      <option value= "Quảng Ninh">Quảng Ninh</option>
                      <option value= "Nam Định">Nam Định</option>
                      <option value= "Hòa Bình">Hòa Bình</option>
                      <option value= "Bắc Ninh">"Bắc Ninh"</option> 
                    </select>
                  </div>
                </div>

                <div class="col-md-6 mb-3">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroupPrepend2">Năm tốt nghiệp</span>
                    </div>
                    <select name="namtotnghiep" class="form-control" required>
                      <option value="0">--chọn năm--</option>
                      <option value= "2020">2020</option>
                      <option value= "2019">2019</option>
                      <option value= "2018">2018</option>
                      <option value= "2017">2017</option>
                      <option value= "2016">2016</option>
                    </select>
                  </div>
                </div>
              </div>

              <div class="form-row">
                <div class="col-md-6 mb-3">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroupPrepend2">Học lực lớp 12</span>
                    </div>
                    <select name="hocluc12" class="form-control" required>
                      <option value="0">-chọn-</option>
                      <option value= "Giỏi">Giỏi</option>
                      <option value= "Khá">Khá</option>
                     
                    </select>
                  </div>
                </div>

                <div class="col-md-6 mb-3">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroupPrepend2">Hạnh kiểm lớp 12</span>
                    </div>
                    <select name="hanhkiem12" class="form-control" required>
                      <option value="0">-chọn-</option>
                      <option value= "Tốt">Tốt</option>
                      <option value= "Khá">Khá</option>
                       
                    </select>
                  </div>
                </div>
              </div>

              <div class="form-row">
                <div class="col-md-4 mb-3">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroupPrepend2">Số CMND/CCCD</span>
                    </div>
                    <input type="text" class="form-control" name="cmnd" id="validationDefaultUsername"
                      placeholder="Nhập CMND" aria-describedby="inputGroupPrepend2" required />
                  </div>
                </div>

                <div class="col-md-4 mb-3">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroupPrepend2">Ngày cấp</span>
                    </div>
                    <input type="date" class="form-control" name="ngaycap" id="validationDefaultUsername"
                      placeholder="Ngày cấp" aria-describedby="inputGroupPrepend2" required />
                  </div>
                </div>

                <div class="col-md-4 mb-3">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroupPrepend2">Nơi cấp</span>
                    </div>
                    <select name="noicap" class="form-control" required>
                      <option value="0">--chọn tỉnh--</option>
                      <option value="TP HCM">TP HCM</option>
                      <option value= "Hà Nội">Hà Nội</option>
                      <option value= "Hải Phòng">Hải Phòng</option>
                      <option value= "Thanh Hóa">Thanh Hóa</option>
                      <option value= "Quảng Ninh">Quảng Ninh</option>
                      <option value= "Nam Định">Nam Định</option>
                      <option value= "Hòa Bình">Hòa Bình</option>
                      <option value= "Bắc Ninh">Bắc Ninh</option> 
                    </select>
                  </div>
                </div>
              </div>

              <div class="form-row">
                <div class="col-md-12 mb-3">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroupPrepend2">Hộ khẩu thường trú</span>
                    </div>
                    <input type="text" class="form-control" name="hokhau" id="validationDefaultUsername"
                      placeholder="Nhập hộ khẩu thường trú" aria-describedby="inputGroupPrepend2" required />
                  </div>
                </div>
              </div>
              <p>
                Ghi rõ tên tỉnh (thành phố), huyện (quận) , xã (phường) , vào
                ô hộ khẩu thường trú
              </p>
               
              <br />
               
              <div class="form-row">
                <div class="col-md-12 mb-3">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroupPrepend2">Điểm tổng kết 12</span>
                    </div>
                    <input type="text" class="form-control" name="dtk12" id="validationDefaultUsername"
                      placeholder="Nhập điểm tổng kết 12" aria-describedby="inputGroupPrepend2" required />
                  </div>
                </div>
              </div>

              <div class="form-row">
                <div class="col-md-6 mb-3">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroupPrepend2">Mã trường</span>
                    </div>
                    <input type="text" class="form-control" name="matr" id="validationDefaultUsername"
                      placeholder="Mã trường" aria-describedby="inputGroupPrepend2" required />
                  </div>
                  
                </div>

                <div class="col-md-6 mb-3">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroupPrepend2">Mã tỉnh</span>
                    </div>
                    <input type="text" class="form-control" name="matinh" id="validationDefaultUsername"
                      placeholder="Mã tỉnh" aria-describedby="inputGroupPrepend2" required />
                  </div>
                  
                </div>
                </div>
                
              
              <br />
              <div class="form-row">
                <div class="col-md-12 mb-3">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroupPrepend2">Địa chỉ liên hệ</span>
                    </div>
                    <input type="text" class="form-control" name="diachi" id="validationDefaultUsername"
                      placeholder="Nhập địa chỉ" aria-describedby="inputGroupPrepend2" required />
                  </div>
                </div>
              </div>

              <div class="form-row">
                <div class="col-md-6 mb-3">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroupPrepend2">Điện thoại thí sinh</span>
                    </div>
                    <input type="text" class="form-control" name="sdths" id="validationDefaultUsername"
                      placeholder="Nhập SDT" aria-describedby="inputGroupPrepend2" required />
                  </div>
                </div>

                <div class="col-md-6 mb-3">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" name="sdtph" id="inputGroupPrepend2">Điện thoại phụ huynh</span>
                    </div>
                    <input type="text" class="form-control" name="sdtph" id="validationDefaultUsername"
                      placeholder="Nhập SDT" aria-describedby="inputGroupPrepend2" required />
                  </div>
                </div>
              </div>
              <div class="form-row">
                <div class="col-md-12 mb-3">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroupPrepend2">Email</span>
                    </div>
                    <input type="email" class="form-control" name="email" id="validationDefaultUsername"
                      placeholder="Nhập email" aria-describedby="inputGroupPrepend2" required />
                  </div>
                </div>
              </div>

              <div class="col-md-4 mb-3">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroupPrepend2">Ngành xét tuyển</span>
                    </div>
                    <select name="nganhxt" class="form-control" required>
                      <option value="0">--chọn nganh--</option>
                      <option value="Công Nghệ Thông Tin">CNTT</option>
                      <option value= "Kỹ Thuật Phần Mềm">Kỹ Thuật Phần Mềm</option>
                      <option value= "Hệ Thống Thông Tin">HTTT</option>
                      <option value= "Kinh Tế ">Kinh Tế</option>
                      <option value= "Xây Dựng">Xây Dựng</option>

                    </select>
                  </div>
                </div>
              <br />
              <br />
              <br />

               <style>
               .btn{
                 margin-left:350px;
               }
               </style>
              <button class="btn btn-primary btn-center" type="submit" name="save">
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
 