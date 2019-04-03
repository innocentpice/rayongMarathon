    <div class="ui large top fixed menu">
      <div class="ui container">
        <a href="<?=URL_Path?>" class="item">หน้าแรก</a>
        <a href="<?=URL_Path?>/schedule" class="item">กำหนดการแข่งขัน</a>
        <a href="<?=URL_Path?>/service" class="item">การอำนวยความสะดวก</a>
        <a href="<?=URL_Path?>/memberlist" class="item">รายชื่อผู้เข้าร่วมแข่งขัน</a>
        <a href="<?=URL_Path?>/admin" class="active item">ตรวจสอบการชำระเงิน</a>
        <div class="right menu">
          <div class="item">
            <a href="<?=URL_Path?>/admin/logout" class="ui button">ออกจากระบบ</a>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Sidebar Menu -->
    <div class="ui vertical inverted sidebar menu">
      <a href="<?=URL_Path?>" class="item">หน้าแรก</a>
      <a href="<?=URL_Path?>/schedule" class="item">กำหนดการแข่งขัน</a>
      <a href="<?=URL_Path?>/service" class="item">การอำนวยความสะดวก</a>
      <a href="<?=URL_Path?>/memberlist" class="item">รายชื่อผู้เข้าร่วมแข่งขัน</a>
      <a href="<?=URL_Path?>/admin" class="active item">ตรวจสอบการชำระเงิน</a>
      <a href="<?=URL_Path?>/admin/logout" class="item">ออกจากระบบ</a>
    </div>
    
    <div class="ui container">
      <div class="ui large secondary pointing menu">
        <a class="toc item">
          <i class="sidebar icon"></i>
        </a>
      </div>
    </div>
    
    
    
    <div class="ui vertical masthead segment" style="margin:3em auto;">
        <h2 class="ui header center aligned">รายชื่อผู้แจ้งชำระเงิน <div class="ui red horizontal label">ใหม่</div></h2>
        <table class="ui stackable single line table selectable small">
          <thead>
            <tr class="center aligned">
                <th>ลำดับที่</th>
                <th>ประเภทการแข่งขัน</th>
                <th>ชื่อ-สกุล</th>
                <th>เพศ</th>
                <th>รุ่นอายุ</th>
                <th>โทรศัพท์</th>
                <th>ที่อยู่</th>
                <th>ผู้ติดต่อฉุกเฉิน</th>
                <th>ขนาดเสื้อ</th>
                <th>การโอนเงิน</th>
                <th>Email*</th>
                <th>การจัดการ</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($this->task as $result){?>
            <tr class="center aligned">
                <?php
                    
                    for($i=0;$i<=21;$i++){
                        if($i==2){
                            echo '<td>'.$result[$i];$i++;
                            echo $result[$i].' ';$i++;
                            echo $result[$i].'</td>';
                        }else if($i==5 || $i==8){
                            
                        }else if($i==10){
                            echo '<td>'.$result[$i].'<br> อ.';$i++;
                            echo $result[$i].' จ.';$i++;
                            echo $result[$i].'<br> ';$i++;
                            echo $result[$i].' ';$i++;
                            echo $result[$i].'</td>';
                        }else if($i==15){
                            echo '<td>'.$result[$i].' <strong>';$i++;
                            echo $result[$i].'</strong></td>';
                        }else if($i==18){
                            echo '<td>TIME[ '.$result[$i].' ] NUM[ ';$i++;
                            echo $result[$i].' ] ';$i++;
                            echo '<a target="_blank" href="'.URL_Path.'/api/viewSlip/'.$result[21].'">หลักฐาน</a></td>';
                        }else{
                            echo '<td>'.$result[$i].'</td>';
                        }
                    }
                    
                ?>
                <td>
                    <a href="<?=URL_Path?>/admin/memberpass/<?=$result['email']?>" class="ui primary button">ผ่านการตรวจสอบ</a>
                    <a href="<?=URL_Path?>/admin/memberfail/<?=$result['email']?>" class="ui negative button">ไม่ผ่านการตรวจสอบ</a>
                </td>
            </tr>
            <?php }?>
          </tbody>
        </table>
    </div>