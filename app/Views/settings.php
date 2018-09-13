<?php
    $isAuth = true;
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

                  <h3 class="mb-3"><?= $user['name'] ?></h3>

                  <p class="mb-4">
                    <?= $user['about'] ?>
                  </p>

                  <button class="btn btn-outline-primary btn-sm">
                    <span class="fa fa-twitter"></span> Читать
                  </button>
                </div>
              </div>
            </div>
            <div class="col-lg-8">
                <form class="card">
                  <div class="card-body">
                    <h3 class="card-title">Редактировать данные</h3>
                    <div class="row">
<!--                       <div class="col-md-5">
                        <div class="form-group">
                          <label class="form-label">Company</label>
                          <input type="text" class="form-control" disabled="" placeholder="Company" value="Creative Code Inc.">
                        </div>
                      </div> -->
                      <div class="col-sm-6 col-md-3">
                        <div class="form-group">
                          <label for="login" class="form-label">Логин</label>
                          <input type="text" class="form-control" placeholder="Логин" name="login" id="login" value="<?= $user['login'] ?>">
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-4">
                        <div class="form-group">
                          <label for="email" class="form-label">Email</label>
                          <input type="email" class="form-control" placeholder="Email" name="email" id="email" value="<?= $user['email'] ?>">
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-6">
                        <div class="form-group">
                          <label for="name" class="form-label">Имя</label>
                          <input type="text" class="form-control" placeholder="Имя" name="name" id="id" value="<?= $user['name'] ?>">
                        </div>
                      </div>
                      <!-- <div class="col-sm-6 col-md-6">
                        <div class="form-group">
                          <label class="form-label">Last Name</label>
                          <input type="text" class="form-control" placeholder="Last Name" value="Faker">
                        </div>
                      </div> -->
<!--                       <div class="col-md-12">
                        <div class="form-group">
                          <label class="form-label">Address</label>
                          <input type="text" class="form-control" placeholder="Home Address" value="Melbourne, Australia">
                        </div>
                      </div> -->
<!--                       <div class="col-sm-6 col-md-4">
                        <div class="form-group">
                          <label class="form-label">City</label>
                          <input type="text" class="form-control" placeholder="City" value="Melbourne">
                        </div>
                      </div> -->
<!--                       <div class="col-sm-6 col-md-3">
                        <div class="form-group">
                          <label class="form-label">Postal Code</label>
                          <input type="number" class="form-control" placeholder="ZIP Code">
                        </div>
                      </div> -->
<!--                       <div class="col-md-5">
                        <div class="form-group">
                          <label class="form-label">Country</label>
                          <select class="form-control custom-select">
                            <option value="">Germany</option>
                          </select>
                        </div>
                      </div> -->
                      <div class="col-md-12">
                        <div class="form-group mb-0">
                          <label class="form-label">О себе</label>
                          <textarea rows="5" class="form-control" placeholder="О себе"><?= $user['about'] ?></textarea>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer text-right">
                    <button type="submit" class="btn btn-primary">Обновить данные</button>
                  </div>
                </form>

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