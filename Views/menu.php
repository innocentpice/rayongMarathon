<!-- Following Menu -->
<div class="ui large top fixed hidden menu">
  <div class="ui container">
    <a href="<?=URL_Path?>" class="item <?php if($this->stay == 'index'){echo 'active';}?>">หน้าแรก</a>
    <a href="<?=URL_Path?>/schedule" class="item <?php if($this->stay == 'schedule'){echo 'active';}?>">กำหนดการแข่งขัน</a>
    <a href="<?=URL_Path?>/service" class="item <?php if($this->stay == 'service'){echo 'active';}?>">การอำนวยความสะดวก</a>
    <a href="<?=URL_Path?>/memberlist" class="item <?php if($this->stay == 'memberlist'){echo 'active';}?>">รายชื่อผู้เข้าร่วมแข่งขัน</a>
    <?php if(isset($_SESSION['admin'])){?><a href="<?=URL_Path?>/admin" class="item">ตรวจสอบการชำระเงิน</a><?php }?>
    <div class="right menu">
      <div class="item">
        <?php if(isset($_SESSION['admin'])){?>
          <a href="<?=URL_Path?>/admin/logout" class="ui inverted basic button">ออกจากระบบ</a>
        <?php }?>
      </div>
    </div>
  </div>
</div>

<!-- Sidebar Menu -->
<div class="ui vertical inverted sidebar menu">
  <a href="<?=URL_Path?>" class="item <?php if($this->stay == 'index'){echo 'active';}?>">หน้าแรก</a>
  <a href="<?=URL_Path?>/schedule" class="item <?php if($this->stay == 'schedule'){echo 'active';}?>">กำหนดการแข่งขัน</a>
  <a href="<?=URL_Path?>/service" class="item <?php if($this->stay == 'service'){echo 'active';}?>">การอำนวยความสะดวก</a>
  <a href="<?=URL_Path?>/memberlist" class="item <?php if($this->stay == 'memberlist'){echo 'active';}?>">รายชื่อผู้เข้าร่วมแข่งขัน</a>
  <?php if(isset($_SESSION['admin'])){?><a href="<?=URL_Path?>/admin" class="item">ตรวจสอบการชำระเงิน</a><?php }?>
  <?php if(isset($_SESSION['admin'])){?>
    <a href="<?=URL_Path?>/admin/logout" class="item">ออกจากระบบ</a>
  <?php }?>
</div>


<!-- Page Contents -->
<div class="pusher">
  <div class="ui inverted vertical masthead center aligned segment">
    <div class="ui container">
      <div class="ui large secondary inverted pointing menu">
        <a class="toc item">
          <i class="sidebar icon"></i>
        </a>
        <a href="<?=URL_Path?>" class="item <?php if($this->stay == 'index'){echo 'active';}?>">หน้าแรก</a>
        <a href="<?=URL_Path?>/schedule" class="item <?php if($this->stay == 'schedule'){echo 'active';}?>">กำหนดการแข่งขัน</a>
        <a href="<?=URL_Path?>/service" class="item <?php if($this->stay == 'service'){echo 'active';}?>">การอำนวยความสะดวก</a>
        <a href="<?=URL_Path?>/memberlist" class="item <?php if($this->stay == 'memberlist'){echo 'active';}?>">รายชื่อผู้เข้าร่วมแข่งขัน</a>
        <?php if(isset($_SESSION['admin'])){?><a href="<?=URL_Path?>/admin" class="item">ตรวจสอบการชำระเงิน</a><?php }?>
        <div class="right item">
          <?php if(isset($_SESSION['admin'])){?>
            <a href="<?=URL_Path?>/admin/logout" class="ui inverted basic button">ออกจากระบบ</a>
          <?php }?>
        </div>
      </div>
    </div>

    <div class="ui text container">
      <h1 class="ui inverted header">
        <?=$this->headText?>
      </h1>
      <h2>24 September 2017</h2>
      <a href="<?=URL_Path?>/register" class="ui huge primary button">ลงทะเบียนเข้าร่วมแข่งขัน<i class="right arrow icon"></i></a>
    </div>

  </div>