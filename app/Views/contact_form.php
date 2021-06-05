<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Codeigniter form validace</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <style>
    .container {
      max-width: 550px;
    }
  </style>
</head>

<body>
  <div class="container mt-5">
         
    <?php $validation = \Config\Services::validation(); ?>

    <form method="post" action="<?php echo base_url('/submit-form') ?>">
      <div class="form-group">
        <label>Jméno</label>
        <input type="text" name="name" class="form-control">

        <!-- Error -->
        <?php if($validation->getError('name')) {?>
            <div class='alert alert-danger mt-2'>
              <?= $error = $validation->getError('name'); ?>
            </div>
        <?php }?>
      </div>
       

      <div class="form-group">
        <label>Email</label>
        <input type="text" name="email" class="form-control">

        <!-- Error -->
        <?php if($validation->getError('email')) {?>
            <div class='alert alert-danger mt-2'>
              <?= $error = $validation->getError('email'); ?>
            </div>
        <?php }?>
      </div>

      <div class="form-group">
        <label>Telefon</label>
        <input type="text" name="phone" class="form-control">

        <!-- Error -->
        <?php if($validation->getError('phone')) {?>
            <div class='alert alert-danger mt-2'>
              <?= $error = $validation->getError('phone'); ?>
            </div>
        <?php }?>
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-success btn-block">Uložit</button>
      </div>
    </form>

  </div>
</body>

</html>