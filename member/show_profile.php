<?php 
$sql = "SELECT * FROM tbl_member WHERE member_id=$member_id";
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
$row = mysqli_fetch_array($result);
?>
<div class="col-md-12">

<form  name="register" action="member_form_edit_db.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
  <div class="form-group">
    <div class="col-sm-2">  </div>
    <div class="col-sm-12" align="center">
      <h4> แก้ไขข้อมูลส่วนตัว </h4><hr>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-2" align="">  </div>
    <div class="col-md-12" align="left">
    <center><img src="../m_img/<?php echo $row['m_img'];?>" width="200px"></center>
    </div>
  </div>


  <div class="form-group">
    <div class="col-sm-2" align=""> Username :</div>
    <div class="col-md-12" align="left">
      <input  name="m_user"  value="<?php echo $row['m_user'];?>" type="text" required class="form-control" />  
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-2" align=""> Password :</div>
    <div class="col-sm-12" align="left">
      <input  name="m_pass" value="<?php echo $row['m_pass'];?>" type="password" required class="form-control" id="m_pass"/>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2" align=""> ชื่อ-สกุล :</div>
    <div class="col-sm-12" align="left">
      <input  name="m_name" value="<?php echo $row['m_name'];?>"  type="text" required class="form-control" id="m_name" placeholder="ภาษาอังกฤษหรือภาษาไทย" />
    </div>
  </div>
  
  
  <div class="form-group">
    <div class="col-sm-3" align=""> อีเมล : </div>
    <div class="col-sm-12" align="left">
      <input  name="m_email" value="<?php echo $row['m_email'];?>"  type="email" class="form-control" id="m_email" required  placeholder="name@hotmail.com"/>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2" align=""> เบอร์โทรศัพท์ : </div>
    <div class="col-sm-12" align="left">
      <input  name="m_tel" type="text" value="<?php echo $row['m_tel'];?>"  class="form-control" id="m_tel" required  placeholder="ตัวเลขเท่านั้น" maxlength="10" pattern="^[0-9]+$" title="ตัวเลขเท่านั้น" />
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-2" align=""> ที่อยู่ : </div>
    &nbsp;&nbsp;&nbsp;<font color="red">** หมายเหตุ: กรุณากรอกที่อยู่จริง ** </font>
    <div class="col-sm-12" align="left">
      <textarea name="m_address" class="form-control" id="m_address" required><?php echo $row['m_address'];?></textarea>
    </div>
  </div>
    <div class="form-group">   
          <div class="col-sm-12">
            รูปภาพ :
            <input type="file" name="m_img" id="card_img" class="form-control" /><br>
           
          </div>
      
        </div>
  <div class="form-group">
    <div class="col-sm-2"> </div>
    <div class="col-sm-12" align="center">
    <input type="hidden" name="m_img2" value="<?php echo $row['m_img'];?>">
      <input type="hidden" name="member_id" value="<?php echo $member_id; ?>" />
      <button type="submit" class="btn btn-success" id="btn"><span class="glyphicon glyphicon-saved"></span> แก้ไขข้อมูลส่วนตัว  
      </button> <a href="index.php" type="button" class="btn btn-danger" id="btn"><span class="glyphicon glyphicon-saved"></span> ยกเลิก  </a>
    </div>
    
  </div>


</form>
</div> 