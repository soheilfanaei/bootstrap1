<?php
include("theme-header.php")
?>


<form action="sellform_actoin.php" method="POST" enctype="multipart/form-data"></br>
<form class="row g-3">
  <div class="col-md-4">
    <label for="inputState" class="form-label">قیمت محصول</label>
    <input type="text" class="form-control" id="inputCity" name="ghymat">  
  </div>
  <?php
?>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">کد محصول</label>
    <input type="text" class="form-control" id="inputEmail4" name="code_mahsol">
  </div>

  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">نام و نام خانوادگی</label>
    <input type="text" class="form-control" id="inputPassword4" name="name">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">شماره تماس</label>
    <input type="text" class="form-control" id="inputCity" name="number">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">ادرس محل زندگی  </label>
    <input type="text" class="form-control" id="inputAddress" name="address" placeholder="استان و شهر و خیابان و کوچه پلاک و طبقه">
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">ایمیل</label>
    <input type="text" class="form-control" id="inputEmail4" name="Emeil">
  </div>
  <div class="col-12">
  </div>
</br>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">ثبت سفارش</button>
  </div>
</form>

<?php
include("theme-footer.html");
?>