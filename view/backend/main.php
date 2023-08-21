<?php
if(isset($_SESSION['login'])){
?>
 <div class="rb tab">
      <h2 class="ct">請選擇所需功能</h2>
    </div>
<?php

}else{
  include "./view/backend/login.php";
}
   ?>