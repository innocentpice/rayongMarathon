<?php $this->render('register/menu');?>

<div class="ui vertical masthead segment" style="margin:3em auto;">
  <div class="ui container">
    <form class="ui form" action="<?=URL_Path?>/register/step3" method="post" enctype="multipart/form-data">
      <h2 class="ui dividing header">กรอกข้อมูลลงทะเบียน</h2>
      
      <div class="field">
          <label>เลือกประเภทการแข่งขัน</label>
          <div class="ui selection dropdown">
              <input type="hidden" name="runtype">
              <i class="dropdown icon"></i>
              <div class="default text">ประเภทการแข่งขัน</div>
              <div class="menu">
                  <div class="item" data-value="Mini Marathon">รุ่น Mini Marathon ระยะทาง 11.7 กิโลเมตร ค่าสมัคร 400 บาท</div>
                  <div class="item" data-value="Fun Run">รุ่น Fun Run ระยะทาง 3 กิโลเมตร ค่าสมัคร 400 บาท</div>
              </div>
          </div>
      </div>
      
      <div class="ui section divider"></div>
      
      <div class="inline fields">
        <label>คำนำหน้าชื่อ *</label>
        <div class="field">
          <div class="ui radio checkbox">
            <input type="radio" name="title" value="นาย">
            <label>นาย</label>
          </div>
        </div>
        <div class="field">
          <div class="ui radio checkbox">
            <input type="radio" name="title" value="นาง">
            <label>นาง</label>
          </div>
        </div>
        <div class="field">
          <div class="ui radio checkbox">
            <input type="radio" name="title" value="นางสาว">
            <label>นางสาว</label>
          </div>
        </div>
      </div>
      <div class="field">
        <label>ชื่อ-นามสกุล *</label>
        <div class="two fields">
          <div class="field">
            <input type="text" name="name" placeholder="ชื่อ">
          </div>
          <div class="field">
            <input type="text" name="surname" placeholder="นามสกุล">
          </div>
        </div>
      </div>
      <div class="field">
        <label>วัน/เดือน/ปีเกิด (ค.ศ.) *</label>
        <div class="ui calendar" id="birthday">
          <div class="ui input left icon">
            <i class="calendar icon"></i>
            <input type="text" name="birthday" placeholder="Date/Time">
          </div>
        </div>
      </div>
      <div class="field">
          <label>เพศ *</label>
          <div class="ui selection dropdown">
              <input type="hidden" name="gender">
              <i class="dropdown icon"></i>
              <div class="default text">เลือกเพศ</div>
              <div class="menu">
                  <div class="item" data-value="M">ชาย</div>
                  <div class="item" data-value="F">หญิง</div>
              </div>
          </div>
      </div>
      <div class="field">
        <label>กลุ่มอายุ</label>
        <div class="field">
          <input id="age_group" type="text" name="age_group" placeholder="กลุ่มอายุ" readonly>
        </div>
      </div>
      <div class="field">
        <label>สัญชาติ</label>
        <div class="field">
          <input type="text" name="nationality" value="ไทย" readonly>
        </div>
      </div>
      <div class="field">
        <label>โทรศัพท์ *</label>
        <div class="field">
          <input type="number" name="tel" placeholder="โทรศัพท์">
        </div>
      </div>
      <div class="field">
        <label>ที่อยู่ *</label>
        <textarea name="address"></textarea>
      </div>
      <div class="field">
        <div class="four fields">
          <div class="field">
            <label>อำเภอ *</label>
            <input type="text" name="city" placeholder="อำเภอ">
          </div>
          <div class="field">
            <label>จังหวัด *</label>
            <input type="text" name="province" placeholder="จังหวัด">
          </div>
          <div class="field">
            <label>ประเทศ *</label>
            <input type="text" name="country" value="ประเทศไทย" readonly>
          </div>
          <div class="field">
            <label>รหัสไปรษณีย์ *</label>
            <input type="number" name="zip" placeholder="รหัสไปรษณีย์">
          </div>
        </div>
      </div>
      <div class="field">
        <label>ผู้ติดต่อฉุกเฉิน</label>
        <div class="two fields">
          <div class="field">
            <input type="text" name="save_name" placeholder="ชื่อ">
          </div>
          <div class="field">
            <input type="text" name="save_tel" placeholder="เบอร์โทร">
          </div>
        </div>
      </div>
      <div class="field">
          <label>ขนาดเสื้อ *</label>
          <div class="ui selection dropdown">
              <input type="hidden" name="shirt_size">
              <i class="dropdown icon"></i>
              <div class="default text">ขนาดเสื้อ</div>
              <div class="menu">
                  <div class="item" data-value="SS">SS = 34"</div>
                  <div class="item" data-value="S">S  = 36"</div>
                  <div class="item" data-value="M">M  = 38"</div>
                  <div class="item" data-value="L">L  = 40"</div>
                  <div class="item" data-value="XL">XL = 42"</div>
                  <div class="item" data-value="2XL">2XL = 44"</div>
                  <div class="item" data-value="3XL">3XL = 46"</div>
              </div>
          </div>
      </div>
      
      <div class="ui section divider"></div>
      
      <div class="field">
        <div class="two fields">
          <div class="field">
            <label>เวลาที่โอนเงิน</label>
            <input type="time" name="slip_time" placeholder="เวลาที่โอนเงิน">
          </div>
          <div class="field">
            <label>จำนวนเงิน</label>
            <input type="number" name="slip_number" placeholder="จำนวนเงิน">
          </div>
        </div>
      </div>
      
      <div class="field">
        <label>แนบไฟล์การชำระเงินค่าสมัคร *<small>ไฟล์รูป (Max 2Mb): เฉพาะใบโอนเงินเท่านั้น</small></label>
        <input type="file" name="slip_file" accept="image/*"><br>
      </div>
      
      <div class="ui section divider"></div>
      
      <div class="field">
        <label>Email *<small>แนะนำให้ใช้ Gmail เพื่อลดปัญหา Spam Maill</small></label>
        <input type="email" name="email" placeholder="Email">
      </div>
      
      <div class="ui segment">
        
        <div class="field" style="margin:3em auto;">
          <div class="ui center aligned three column grid">
            <div class="row">
              <div class="column"></div>
              <div class="column">
                <div class="field">
                  <div class="ui checkbox">
                    <input type="checkbox" id="regis" name="regis">
                    <label for="regis">ต้องการสมัครสมาชิก</label>
                  </div>
                </div>
              </div>
              <div class="column"></div>
            </div>
          </div>
        </div>
        
        <div class="field" id="regis_password" style="display:none;">
          <label>Password *</label>
          <input type="password" name="password" placeholder="Password">
        </div>
        <div class="field" id="regis_confirm" style="display:none;padding-bottom:3em;" >
          <label>Confirm - Password *</label>
          <input type="password" name="confirm" placeholder="Confirm">
        </div>
        
      </div>
      
      <div class="ui section divider"></div>
      
      <div class="ui piled segment">
        <h4 class="ui header centered">คำรับรองผู้สมัคร</h4>
        <p>
          ข้าพเจ้ารับทราบว่าการเข้าร่วมแข่งขันวิ่งซึ่งเป็นกิจกรรมที่มีความเสี่ยง ซึ่งอาจก่อให้เกิดการบาดเจ็บหรือเสียชีวิต
          ข้าพเจ้าตกลงที่จะไม่เข้าร่วมกิจกรรมหากไม่สามารถเข้าร่วมได้ด้วยเหตุผลทางการแพทย์หรือไม่ได้รับการฝึกฝน
          อย่างถูกต้อง ข้าพเจ้าตกลงที่จะปฏิบัติตามการตัดสินใจของคณะกรรมการผู้จัดการแข่งขันที่เกี่ยวเนื่องกับความ
          สามารถของข้าพเจ้าในการเข้าร่วมแข่งขัน ข้าพเจ้าขอรับรองว่าข้าพเจ้านั้นมีสุขภาพที่ดีและได้รับการฝึกฝนสำหรับ
          ระยะทางที่จะเข้าร่วมแข่งขันและถือว่าความเสี่ยงทั้งหมดที่เกี่ยวข้องกับการแข่งขันกิจกรรมซึ่งรวมถึงแต่ไม่จำกัด
          เฉพาะ การล้ม การสัมผัสกับยานพาหนะหรือผู้เข้าร่วมแข่งขันอื่นผลกระทบจากสภาพอากาศซึ่งร่วมถึงอุณหภูมิ
          ความร้อนและ/หรือความชื้นสูง   การจราจรและสภาพถนน ข้าพเจ้ารับทราบและเต็มใจรับผลกระทบความเสี่ยง
          ทั้งหมดนี้ จากการที่ได้อ่าน ทำความเข้าใจ และรับทราบข้อเท็จจริงในเอกกสารนี้ 
        </p>  
        <p>
          ข้าพเจ้าตกลงที่จะสละสิทธิ์และละเว้นในการเรียกร้องค่าเสียหาย จากทั้งคณะกรรมการผู้จัดการแข่งขัน “Rayong Together Run Mini MARATHON” รวมถึง ผู้สนับสนุนการแข่งขัน 
          หรือความไม่ระมัดระวังในส่วนของบุคคลที่กล่าวอ้างถึงข้างต้นในเอกสารนี้ ในกรณีที่กิจกรรมนี้ต้องยกเลิกทั้งหมดเลื่อนการจัดงานหรือส่วนใดส่วนหนึ่งโดยสืบเนื่องมาจากสาเหตุสุดวิสัยใดๆเหตุ
          จากธรรมชาติหรือภาวะอื่นใดก็ตามข้าพเจ้ารับทราบและยินยอมว่าจะไม่มี การคืนเงินค่าสมัครให้แก่ข้าพเจ้า ข้าพเจ้ายินดีให้สิทธิ์ผู้จัดงานในการใช้ภาพนิ่งภาพเคลื่อนไหวการบันทึกทุกรูปแบบจากการเข้าร่วมกิจกรรมสำหรับวัตถุ
          ประสงค์ที่ชอบด้วยกฏหมายโดยไม่มีการเรียกร้องค่าตอบแทนแต่อย่างใด  
        </p>
      </div>
      
      <div class="ui message">
        <div class="header">
          <small>* กรุณาตรวจสอบอีเมลล์ของท่าน เพื่อรับใบ Confirmation Payment ซึ่งอีเมลล์จะได้รับภายใน 15 วันทำการ</small>
        </div>
      </div>
      <div class="ui message">
        <div class="header">
          <small>** หลังจากยื่นใบสมัครแล้ว ไม่มีการเปลี่ยนแปลงถ่ายโอนใดๆ ทั้งสิ้นและไม่คืนเงินค่าสมัคร</small>
        </div>
      </div>
      
      <div class="field" style="margin:3em auto;">
        <div class="ui center aligned three column grid">
          <div class="row">
            <div class="column"></div>
            <div class="column">
              <div class="field">
                <div class="ui checkbox">
                  <input type="checkbox" id="confirm" name="confirm">
                  <label for="confirm">I agree to the terms and conditions</label>
                </div>
              </div>
            </div>
            <div class="column"></div>
          </div>
        </div>
      </div>
      
      <div class="field">
        <button id="regis_submit" class="fluid ui button blue disabled">ยืนยันการลงทะเบียน</button>
      </div>
    </form>
  </div>
</div>