<?php
include './inc/db.php';
include './inc/form.php';

$sql = 'SELECT * FROM users ORDER BY RAND() LIMIT 1';
$result = mysqli_query($conn, $sql);
$users = mysqli_fetch_all($result, MYSQLI_ASSOC);



mysqli_free_result($result);
mysqli_close($conn);

?>


<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>YASEER FALH</title>
</head>
<body>


    
<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
    <img  src="images/yasir-icon.png" alt="">
    
      <h1 class="display-4 fw-normal">اربح مع ياسر </h1>
      <p class="lead fw-normal">باقي علئ فتح التسجيل.</p>
      <h3 id="countdown"></h3>
      <a class="btn btn-outline-secondary" href="#">للسحب علئ تذكرة سفر</a>
      <br>

      <h3> لدخول السحب اتبع مايلي:</h3>
      <ul class="list-group list-group-flush">
  <li class="list-group-item">تابع البث االمباشر علئ صفحتي علئ التويتش بالتاريخ المذكور اعلاه </li>
  <li class="list-group-item">سأقوم ببث مباشر لمدة ساعه عباره عن اسلة واجوبه حره للجميع </li>
  <li class="list-group-item">خلال فترة الساعه سيتم فتح صفحة التسجيل هنا حيث ستقوم بتسجيل ايميلك واسمك </li>
  <li class="list-group-item">بنهاية البث سيتم اختيار اسم واحد من قاعدة البيانات بشكل عشوائي </li>
  <li class="list-group-item">الرابح سيحصل علئ تذكره سفر الئ مكه </li>
</ul>

    </div>

  </div>

  
<div class="container">
  

<div class="position-relative  text-center">
    <div class="col-md-5 p-lg-5 mx-auto my-5">

<form  action="<?php $_SERVER['PHP_SELF']?>" method="POST">
    <h3>الرجاء الدخل معلوماتك </h3>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">الاسم الاول </label>
    <input type="text" name="firstName" class="form-control" id="exampleInputEmail1" value="<?php echo $firstName ?>" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text error"><?php echo $errors['firstNameError']?></div>
  </div>
  
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">الاسم الاخير</label>
    <input type="text" name="lastName"  class="form-control" id="exampleInputEmail1" value="<?php echo $lastName ?>" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text error"> <?php echo $errors['lastNameError']?> </div>
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">البريد الالكتروني</label>
    <input type="text" name="email" class="form-control" id="exampleInputEmail1" value="<?php echo $email ?>" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text error"> <?php echo $errors['emailError']?></div>
 

  
  <button type="submit" name="submit" class="btn btn-primary">ارسال المعلومات</button>
</form>
</div>
</div>


</div>
</div>


<div class="loader-con">
<div id="loader">
	<canvas id="circularLoader" width="200" height="200"></canvas>
</div>
</div>


<!-- Button trigger modal -->
<div class="d-grid gap-2 col-3 mx-auto my-5" >
<button type="button" id="winner" class="btn btn-primary " >
اختيار الرابح  
</button>
</div>
<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
      
        <h5 class="modal-title" id="modalLabel">الرابج في المسابقه</h5>
        
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <?php foreach($users as $user):?>
        <h1 class=" display-3 text-center modal-title" id="modalLabel"><?php   echo htmlspecialchars($user['firstName']). ' ' .  htmlspecialchars($user['lastName']) ?></h1>
        <?php endforeach; ?>
      </div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>

<!--
<div id="cards" class="row mb-5 pb-5">






    <div class="col-sm-6">
    <div class="card my-z bg-light">
    <div class="card-body">
      <h5 class="card-title"></h5>
  <p calss="tsxt"> <?php echo htmlspecialchars($user['email'])?> </p>
</div>
</div>
</div>

</div>
    1-->  
<script src="./js/bootstrap.bundle.min.js" ></script>
<script src="./js/loade.js"></script>
<script src="./js/cdn.jsdelivr.net_npm_js-confetti@latest_dist_js-confetti.browser.js"></script>
    <script src="./js/script.js"></script>
    
</body>
</html>

