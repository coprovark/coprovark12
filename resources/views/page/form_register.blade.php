@extends('layouts.main')


@section('content')
<h1 class="page-header">สมัครสมาชิก</h1>
<form>
                                <div class="form-group">
                                        <label for="name">ชื่อ-สกุล</label>
                                        <div class="form-inline" style="width:100%">
                                          <select class="form-control" name="sex" style="width:12%">
                                              <option>นาย</option>
                                              <option>นาง</option>
                                              <option>นางสาว</option>
                                          </select>
                                          <input type="text" class="form-control" name="name" placeholder="ชื่อ-สกุล"  style="width:85%">
                                        </div>
                                      </div>
                                <div class="form-group">
                                     <div class="form-inline" style="width:100%">
                                    <label>เพศ</label>
                                    <input type="radio" class="radio" name="sex1" style="width:2%">ชาย
                                    <input type="radio" class="radio" name="sex1" style="width:2%">หญิง
                                </div>          
                               
                                <div class="form-group">
                                  <label>เบอร์โทร</label>
                                  <input type="text" class="form-control" name="phone" placeholder="เบอร์โทร">
                                </div>
                               
                                <div class="form-group">
                                  <label>Email address</label>
                                  <input type="email" class="form-control" name="email" placeholder="Email">
                                 </div>
                                <div class="form-group">
                                  <label>ที่อยู่</label><br>
                                  <textarea class="form-control" rows="5" name="address"></textarea>
                                </div>
                                
                                <div class="form-group">
                                        <div class="form-inline" style="width:100%">
                                        <label>สิ่งที่ชอบ</label>
                                        <input type="radio"class="radio" name="like" value="facebook">facebook
                                        <input type="radio"class="radio" name="like" value="line">line<br>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                            <label>จังหวัด</label>
                                            <select name="province">
                                                    <option value="" selected>--------- เลือกจังหวัด ---------</option>
                                                    <option value="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
                                                    <option value="กระบี่">กระบี่ </option>
                                                    <option value="กาญจนบุรี">กาญจนบุรี </option>
                                                    <option value="กาฬสินธุ์">กาฬสินธุ์ </option>
                                                    <option value="กำแพงเพชร">กำแพงเพชร </option>
                                                    <option value="ขอนแก่น">ขอนแก่น</option>
                                                    <option value="จันทบุรี">จันทบุรี</option>
                                                    <option value="ฉะเชิงเทรา">ฉะเชิงเทรา </option>
                                                    <option value="ชัยนาท">ชัยนาท </option>
                                                    <option value="ชัยภูมิ">ชัยภูมิ </option>
                                                    <option value="ชุมพร">ชุมพร </option>
                                                    <option value="ชลบุรี">ชลบุรี </option>
                                                    <option value="เชียงใหม่">เชียงใหม่ </option>
                                                    <option value="เชียงราย">เชียงราย </option>
                                                    <option value="ตรัง">ตรัง </option>
                                                    <option value="ตราด">ตราด </option>
                                                    <option value="ตาก">ตาก </option>
                                                    <option value="นครนายก">นครนายก </option>
                                                    <option value="นครปฐม">นครปฐม </option>
                                                    <option value="นครพนม">นครพนม </option>
                                                    <option value="นครราชสีมา">นครราชสีมา </option>
                                                    <option value="นครศรีธรรมราช">นครศรีธรรมราช </option>
                                                    <option value="นครสวรรค์">นครสวรรค์ </option>
                                                    <option value="นราธิวาส">นราธิวาส </option>
                                                    <option value="น่าน">น่าน </option>
                                                    <option value="นนทบุรี">นนทบุรี </option>
                                                    <option value="บึงกาฬ">บึงกาฬ</option>
                                                    <option value="บุรีรัมย์">บุรีรัมย์</option>
                                                    <option value="ประจวบคีรีขันธ์">ประจวบคีรีขันธ์ </option>
                                                    <option value="ปทุมธานี">ปทุมธานี </option>
                                                    <option value="ปราจีนบุรี">ปราจีนบุรี </option>
                                                    <option value="ปัตตานี">ปัตตานี </option>
                                                    <option value="พะเยา">พะเยา </option>
                                                    <option value="พระนครศรีอยุธยา">พระนครศรีอยุธยา </option>
                                                    <option value="พังงา">พังงา </option>
                                                    <option value="พิจิตร">พิจิตร </option>
                                                    <option value="พิษณุโลก">พิษณุโลก </option>
                                                    <option value="เพชรบุรี">เพชรบุรี </option>
                                                    <option value="เพชรบูรณ์">เพชรบูรณ์ </option>
                                                    <option value="แพร่">แพร่ </option>
                                                    <option value="พัทลุง">พัทลุง </option>
                                                    <option value="ภูเก็ต">ภูเก็ต </option>
                                                    <option value="มหาสารคาม">มหาสารคาม </option>
                                                    <option value="มุกดาหาร">มุกดาหาร </option>
                                                    <option value="แม่ฮ่องสอน">แม่ฮ่องสอน </option>
                                                    <option value="ยโสธร">ยโสธร </option>
                                                    <option value="ยะลา">ยะลา </option>
                                                    <option value="ร้อยเอ็ด">ร้อยเอ็ด </option>
                                                    <option value="ระนอง">ระนอง </option>
                                                    <option value="ระยอง">ระยอง </option>
                                                    <option value="ราชบุรี">ราชบุรี</option>
                                                    <option value="ลพบุรี">ลพบุรี </option>
                                                    <option value="ลำปาง">ลำปาง </option>
                                                    <option value="ลำพูน">ลำพูน </option>
                                                    <option value="เลย">เลย </option>
                                                    <option value="ศรีสะเกษ">ศรีสะเกษ</option>
                                                    <option value="สกลนคร">สกลนคร</option>
                                                    <option value="สงขลา">สงขลา </option>
                                                    <option value="สมุทรสาคร">สมุทรสาคร </option>
                                                    <option value="สมุทรปราการ">สมุทรปราการ </option>
                                                    <option value="สมุทรสงคราม">สมุทรสงคราม </option>
                                                    <option value="สระแก้ว">สระแก้ว </option>
                                                    <option value="สระบุรี">สระบุรี </option>
                                                    <option value="สิงห์บุรี">สิงห์บุรี </option>
                                                    <option value="สุโขทัย">สุโขทัย </option>
                                                    <option value="สุพรรณบุรี">สุพรรณบุรี </option>
                                                    <option value="สุราษฎร์ธานี">สุราษฎร์ธานี </option>
                                                    <option value="สุรินทร์">สุรินทร์ </option>
                                                    <option value="สตูล">สตูล </option>
                                                    <option value="หนองคาย">หนองคาย </option>
                                                    <option value="หนองบัวลำภู">หนองบัวลำภู </option>
                                                    <option value="อำนาจเจริญ">อำนาจเจริญ </option>
                                                    <option value="อุดรธานี">อุดรธานี </option>
                                                    <option value="อุตรดิตถ์">อุตรดิตถ์ </option>
                                                    <option value="อุทัยธานี">อุทัยธานี </option>
                                                    <option value="อุบลราชธานี">อุบลราชธานี</option>
                                                    <option value="อ่างทอง">อ่างทอง </option>
                                                    <option value="อื่นๆ">อื่นๆ</option>
                                              </select>
                                    </div>
                                
                                    <div class="form-group">
                                            <label >User</label>
                                            <input type="text" class="form-control" name="user" placeholder="User">
                                    </div>
                                    <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" class="form-control" name="password" placeholder="password">
                                    </div>
                                    <div class="form-group">
                                            <label>RePassword</label>
                                            <input type="password" class="form-control" name="re_password" placeholder="Re-passwords">
                                    </div>
                              <center>
                                <button type="Submit" class="btn btn-success">Submit</button>
                                <button type="Clear" class="btn btn-danger">Clear</button>
                              </center>  
                              </form>

@endsection