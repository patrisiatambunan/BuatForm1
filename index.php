<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>FORM TAMBAH PASIEN</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body class="bg-gradient-info">
  <div class="header">
    <div class="header-left">Sistem Informasi Klinik</div>
    <div class="header-right">
      <ul>
        <li>Home</li>
        <li class="selected">Pasien</li>
        <li>Dokter</li>
      </ul>
    </div>
  </div>
<!-- <div class="container"> -->
<!-- <div class="card-body p-0">
<div class="row">
  <div class="col-lg">
  <div class="main">
    <div class="pasien-form">
      <div class="form-title">Form Tambah Pasien</div> -->

<!-- <div class="row mt-3">
	<div class="col-md-6">
		<div class="card">
			<div class="card-header">
					Form Tambah User
				</div>
        <div class="card-body"> -->
      
  <div class="main">
    <div class="pasien-form">
      <div class="form-title">Form Tambah Pasien</div>
      <form method="post" action="">
      <div class= "col-sm-12 text-center">
      <div class="alert alert-danger alert-dismissible fade show -content-center align-content-center" role="alert">
       Field dengan tanda (*) wajib diisi.</div>
      </div>
        <!-- <div class="form-item">Field dengan (*) wajib diisi</div> -->

        <div class="form-item"><label for = "no_rk">No Rekam Medis* </label></div> 
        <input type="text" name="no_rk" id = "no_rk" required>

        <div class="form-item"><label for = "name">Nama*</label></div> 
        <input type="text" name="name" id ="name" required>

        <div class="form-item">Jenis Kelamin*</div>
        <input type="radio" id="pria" name="gender" value="pria"><label for="pria">Pria</label>
        <input type="radio" id="wanita" name="gender" value="wanita"><label for="pria">Wanita</label>
        

        <div class="form-item"><label for ="age">Umur*</label></div>
        <input type="text" name="age" id="age" required>
          
        <div class="form-item"><label for = "no_hp">Nomor Handphone*</label></div>
        <input type="text" name="no_hp" id="no_hp" required >
  
        <div class="form-item"><label for = "address">Alamat</label></div>
        <textarea name="body" id="address"></textarea> 

        <div class="form-item">Poli</div>
        <?php 
          $types = array('Poli Umum', 'Poli Gigi');
         ?>
        <!-- Write the <select> tag below -->
        <select class="form-control" name="poli">
          <option value="unselected">Pilih Poli</option>
           <?php
             foreach ($types as $type) {
              echo "<option value='{$type}'>{$type}</option>";
             }
           ?>
        
        </select>   
        
        <!-- <button type="submit" class="btn btn-success btn-user btn-block">
          Submit
        </button> -->
        <input type="submit" value="Submit" name="submit">
      </form>
    </div>
  </div>
  
</body>
</html>
