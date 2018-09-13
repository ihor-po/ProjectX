<?php
    require_once 'layout/header.php';
?>
      <div class="my-3 my-md-5">
        <div class="container">
          <div class="row">
            <div class="col-lg-4">
              <div class="card card-profile">
                <div class="card-header" style="background-image: url(/uploads/photos/eberhard-grossgasteiger-311213-500.jpg);"></div>
                <div class="card-body text-center">
                  <img class="card-profile-img" src="/uploads/faces/male/16.jpg">

                  <h3 class="mb-3"><?= isset($user['name']) ? $user['name'] : null ?></h3>

                  <p class="mb-4">
                    <?= isset($user['about']) ? $user['about'] : null ?>
                  </p>

                  <button class="btn btn-outline-primary btn-sm">
                    <span class="fa fa-twitter"></span> Читать
                  </button>
                </div>
              </div>
            </div>
            <div class="col-lg-8">
              <div class="card">
                <?php include_once 'layout/feedField.php'; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
<?php
    require_once 'layout/footer.php';
?>

</body>
</html>