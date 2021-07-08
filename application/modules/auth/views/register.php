<main>
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6 px-0 d-none d-sm-block">
        <img src="<?= base_url(); ?>assets/images/login.jpg" alt="login image" class="login-img">
      </div>
      <div class="col-sm-6 login-section-wrapper">
        <div class="brand-wrapper">
          <img src="<?= base_url(); ?>assets/images/logo.svg" alt="logo" class="logo">
        </div>
        <div class="login-wrapper my-auto">
          <h1 class="login-title">Log in</h1>
          <form action="<?= base_url('auth/reg') ?>" method="post">
            <div class="form-group">
              <label for="email">Nama</label>
              <input type="text" name="nama" id="email" class="form-control" placeholder="Jhon kai" value="<?= set_value('nama') ?>">
              <?= form_error('nama', ' <small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="text" name="email" id="email" class="form-control" placeholder="email@example.com" value="<?= set_value('email') ?>">
              <?= form_error('email', ' <small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group mb-4">
              <label for="password">Password</label>
              <input type="password" name="password1" id="password" class="form-control" placeholder="enter your passsword"><?= form_error('password1', ' <small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group mb-4">
              <label for="password">Retype Password</label>
              <input type="password" name="password2" id="password" class="form-control" placeholder="retype your passsword">
            </div>
            <button name="submit" id="login" class="btn btn-block login-btn" type="submit">Register</button>
          </form>
          <!-- <a href="#!" class="forgot-password-link">Forgot password?</a> -->
          <p class="login-wrapper-footer-text">Do you have an account? <a href="<?= base_url('auth') ?>" class="text-reset">Login here</a></p>
        </div>
      </div>

    </div>
  </div>
</main>