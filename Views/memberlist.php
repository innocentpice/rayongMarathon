  <?php $this->render('menu');?>
  
  <div class="ui vertical stripe segment">
    <div class="ui text container center aligned">
      
      <div class="ui buttons">
        <a href="<?=URL_Path?>/memberlist?gender=M" class="ui positive button">ชาย</a>
        <div class="or"></div>
        <a href="<?=URL_Path?>/memberlist?gender=F" class="ui positive button">หญิง</a>
      </div>
      
      <h2 class="ui horizontal divider header"></h2>
      
      <div id="context1">
        <h3 class="ui header center aligned">รุ่น Mini Marathon ระยะทาง 11.7 กิโลเมตร</h3>
        <div class="ui top attached tabular menu">
          <a class="item active" data-tab="M19">รุ่น 19 ปี</a>
          <a class="item" data-tab="M20">รุ่น 20 ปี</a>
          <a class="item" data-tab="M30">รุ่น 30 ปี</a>
          <a class="item" data-tab="M40">รุ่น 40 ปี</a>
          <a class="item" data-tab="M50">รุ่น 50 ปี</a>
          <a class="item" data-tab="M60">รุ่น 60 ปี</a>
        </div>
        <div class="ui bottom attached tab segment active" data-tab="M19">
          <table class="ui stackable single line table selectable small">
            <thead>
              <tr class="center aligned">
                <th>หมายเลขลำดับ</th>
                <th>ชื่อ-นามสกุล</th>
              </tr>
            </thead>
            <tbody>
              
              <?php if(empty($this->memberM[19])){
                echo '<tr class="center aligned"><td colspan="2">ยังไม่มีผู้เข้าแข่งขัน</td></tr>';
              }else{foreach($this->memberM[19] as $member){?>
                <tr class="center aligned">
                  <td><?=$member['sex'].$member['age_group'].'-'.str_pad($member['BOOK_ID'], 4, "0", STR_PAD_LEFT)?></td>
                  <td><?=$member['title'].$member['name'].' '.$member['surname']?></td>
                </tr>
              <?php }}?>
              
            </tbody>
          </table>
        </div>
        <?php for($i=20;$i<=60;$i+=10){?>
          <div class="ui bottom attached tab segment" data-tab="M<?=$i?>">
            <table class="ui stackable single line table selectable small">
              <thead>
                <tr class="center aligned">
                  <th>หมายเลขลำดับ</th>
                  <th>ชื่อ-นามสกุล</th>
                </tr>
              </thead>
              <tbody>
                <?php if(empty($this->memberM[$i])){
                  echo '<tr class="center aligned"><td colspan="2">ยังไม่มีผู้เข้าแข่งขัน</td></tr>';
                }else{foreach($this->memberM[$i] as $member){?>
                  <tr class="center aligned">
                    <td><?=$member['sex'].$member['age_group'].'-'.str_pad($member['BOOK_ID'], 4, "0", STR_PAD_LEFT)?></td>
                    <td><?=$member['title'].$member['name'].' '.$member['surname']?></td>
                  </tr>
                <?php }}?>
              </tbody>
            </table>
          </div>
        <?php }?>
      </div>
      
      <h2 class="ui horizontal divider header"></h2>
      
      <div id="context2">
        
        <h3 class="ui header center aligned">รุ่น Fun Run ะยะทาง 3 กิโลเมตร</h3>
        
        <div class="ui top attached tabular menu">
          <a class="item active" data-tab="F19">รุ่น 19 ปี</a>
          <a class="item" data-tab="F20">รุ่น 20 ปี</a>
          <a class="item" data-tab="F30">รุ่น 30 ปี</a>
          <a class="item" data-tab="F40">รุ่น 40 ปี</a>
          <a class="item" data-tab="F50">รุ่น 50 ปี</a>
          <a class="item" data-tab="F60">รุ่น 60 ปี</a>
        </div>
        <div class="ui bottom attached tab segment active" data-tab="F19">
          <table class="ui stackable single line table selectable small">
            <thead>
              <tr class="center aligned">
                <th>หมายเลขลำดับ</th>
                <th>ชื่อ-นามสกุล</th>
              </tr>
            </thead>
            <tbody>
              <?php if(empty($this->memberF[19])){
                echo '<tr class="center aligned"><td colspan="2">ยังไม่มีผู้เข้าแข่งขัน</td></tr>';
              }else{foreach($this->memberF[19] as $member){?>
                <tr class="center aligned">
                  <td><?=$member['sex'].$member['age_group'].'-'.str_pad($member['BOOK_ID'], 4, "0", STR_PAD_LEFT)?></td>
                  <td><?=$member['title'].$member['name'].' '.$member['surname']?></td>
                </tr>
              <?php }}?>
            </tbody>
          </table>
        </div>
        
        <?php for($i=20;$i<=60;$i+=10){?>
          <div class="ui bottom attached tab segment" data-tab="F<?=$i?>">
            <table class="ui stackable single line table selectable small">
              <thead>
                <tr class="center aligned">
                  <th>หมายเลขลำดับ</th>
                  <th>ชื่อ-นามสกุล</th>
                </tr>
              </thead>
              <tbody>
                <?php if(empty($this->memberF[$i])){
                  echo '<tr class="center aligned"><td colspan="2">ยังไม่มีผู้เข้าแข่งขัน</td></tr>';
                }else{foreach($this->memberF[$i] as $member){?>
                  <tr class="center aligned">
                    <td><?=$member['sex'].$member['age_group'].'-'.str_pad($member['BOOK_ID'], 4, "0", STR_PAD_LEFT)?></td>
                    <td><?=$member['title'].$member['name'].' '.$member['surname']?></td>
                  </tr>
                <?php }}?>
              </tbody>
            </table>
          </div>
        <?php }?>
      </div>
        
      </div>
    </div>
  </div>
  
  <div class="ui inverted vertical footer segment">
    <div class="ui container">
      <div class="ui stackable inverted divided equal height stackable grid">
        <div class="six wide column">
          <h4 class="ui inverted header">ติดต่อสอบถาม</h4>
          <div class="ui inverted link list">
            <span class="item">คุณธำนุรักษ์ เวียนขุนทด (พี่โป้ง) โทร. 089-750-2610</span>
            <span class="item">คุณสายฝน เวียนขุนทด (พี่ฝน) โทร. 086-822-8904</span>
            <span class="item">คุณอรุชา ฟ้าประทานชัย (พี่จิ๊บ) โทร. 095-665-5649</span>
            <span class="item">คุณพีรวัส ตั้งจิตเอื้อบุญ (พี่อุ้ย) โทร. 081-590-2407</span>
            <span class="item">FACEBOOK : www.facebook.com/YECRAYONG</span>
            <span class="item">LINE : @yec.ry</span>
          </div>
        </div>
        <div class="seven wide column">
          <h4 class="ui inverted header">การชำระเงิน</h4>
          <ul>
            <li>โอนเงินผ่าน บัญชีกระแสรายวัน</li>
            <li>ธนาคารกสิกรไทย 497 100 9859</li>
            <li>ชื่อบัญชี กลุ่มนักธุรกิจรุ่นใหม่ หอการค้าจังหวัดระยอง (YEC)</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
