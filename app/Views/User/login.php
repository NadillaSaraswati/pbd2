<!-- Font Awesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
<!-- MDB -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.1.0/mdb.min.css" rel="stylesheet" />

<!-- MDB -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.1.0/mdb.min.js"></script>

<section class="vh-100" style="background-color: #fd7e14;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="https://i.pinimg.com/564x/f0/12/d4/f012d4fdfb836e74bf051187e7dfca3f.jpg" alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <?php
                //pesan validasi eror
                $errors = session()->getFlashdata('errors');
                if (!empty($errors)) { ?>
                  <div class="alert alert-danger" role="alert">
                    <ul>
                      <?php foreach ($errors as $error) : ?>
                        <li><?= esc($error) ?></li>
                      <?php endforeach ?>
                    </ul>
                  </div>
                <?php } ?>
                <?php
                if (session()->getFlashdata('pesan')) {
                  echo '<div class = "alert alert-success" role="alert">';
                  echo session()-> getFlashdata('pesan');
                  echo'</div>'; 
                }
                ?>

                <?php
                echo form_open('auth/cek_login');
                ?>

                <div class="d-flex align-items-center mb-3 pb-1">
                  <i class="fa fa-book fa-2x me-3" style="color: #ff6219;"></i>
                  <span class="h1 fw-bold mb-0">SIPUS</span>
                </div>

                <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Selamat Datang pada Sistem Informasi SIPUS</h5>

                <div class="form-outline mb-4">
                  <input name="nama_user" id="form2Example17" class="form-control form-control-lg" />
                  <label class="form-label" for="form2Example17">Username</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="password" name="pass_user" id="form2Example27" class="form-control form-control-lg" />
                  <label class="form-label" for="form2Example27">Password</label>
                </div>

                <div class="pt-1 mb-4">
                  <button class="btn btn-dark btn-lg btn-block" type="submit">Login</button>
                </div>


                <?php echo form_close(); ?>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
    window.setTimeout(function() {
      $(".alert").fadeTo(500, 0).slideUp(500, function() {
        $(this).remove();
      });
    }, 3000)
  </script>
</section>