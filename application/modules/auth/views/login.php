<main>
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6 login-section-wrapper">
        <div class="brand-wrapper">
          <img src="<?= base_url() ?>assets/images/logo.svg" alt="logo" class="logo">
        </div>
        <div class="login-wrapper my-auto">
          <h1 class="login-title">Log in</h1>
          <?= $this->session->flashdata('pesan'); ?>
          <form action="<?= base_url('auth') ?>" method="post">
            <div class="form-group">
              <label for="email">Email</label>
              <input type="text" name="email" id="email" class="form-control" placeholder="email@example.com">
              <?= form_error('email', ' <small class="text-danger">', '</small>'); ?>
            </div>
            <div class="form-group mb-4">
              <label for="password">Password</label>
              <input type="password" name="password" id="password" class="form-control" placeholder="enter your passsword">
              <?= form_error('password', ' <small class="text-danger ">', '</small>'); ?>
            </div>
            <button name="submit" id="login" class="btn btn-block login-btn" type="submit">Login</button>
          </form>
          <!-- <a href="#!" class="forgot-password-link">Forgot password?</a> -->
          <p class="login-wrapper-footer-text">Don't have an account? <a href="<?= base_url('auth/reg') ?>" class="text-reset">Register here</a></p>
        </div>
      </div>
      <div class="col-sm-6 px-0 d-none d-sm-block">
        <img src="<?= base_url(); ?>assets/images/login.jpg" alt="login image" class="login-img">
      </div>
    </div>
  </div>
</main>