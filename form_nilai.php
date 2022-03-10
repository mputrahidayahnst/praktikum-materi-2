<div  class="container">
  <div class="py-5 text-lelf">
    <h2>Form Nilai Siswa</h2>
  </div>
    <form method="POST" action="form_nilai.php"> 
     <div class="form-group row">
      <label for="nama_lengkap" class="col-4 col-form-label">Nama Lengkap</label> 
        <div class="col-8">
         <input id="nama_lengkap" name="nama_lengkap" placeholder="nama lengkap" type="text" class="form-control">
        </div>
    </div>
      <div class="form-group row">
       <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
      <div class="col-8">
      <select id="matkul" name="matkul" class="custom-select">
        <option value="DDP">Dasar- dasar Pemograman</option>
        <option value="BDI">Basis Data I</option>
        <option value="WEB1">Pemograman Web</option>
      </select>
      </div>
      </div>
      <div class="form-group row">
       <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label> 
        <div class="col-8">
          <input id="nilai_uts" name="nilai_uts" placeholder="Nilai UTS" type="text" class="form-control">
      </div>
     </div>
      <div class="form-group row">
        <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label> 
          <div class="col-8">
           <input id="nilai_uas" name="nilai_uas" placeholder="Nilai UAS" type="text" class="form-control">
        </div>
      </div>
    <div class="form-group row">
      <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas</label> 
        <div class="col-8">
          <input id="nilai_tugas" name="nilai_tugas" placeholder="Nilai Tugas" type="text" class="form-control">
        </div>
    </div> 
    <div class="form-group row">
      <div class="offset-4 col-8">
        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
</form>
<?php 
  $nama_lengkap = isset ($_POST['nama_lengkap']) ? $_POST['nama_lengkap'] : '';
  $matkul = isset ($_POST['matkul']) ? $_POST['matkul'] : '';
  $nilai_uts = isset ($_POST['nilai_uts']) ? $_POST['nilai_uts'] : '';
  $nilai_uas = isset ($_POST['nilai_uas']) ? $_POST['nilai_uas'] : '';
  $nilai_tugas = isset ($_POST['nilai_tugas']) ? $_POST['nilai_tugas'] : '';

//penggunaan if..else

 if($nilai_tugas > 50){
        echo "lulus";
    }else{
        echo "tidak lulus";
    }


//penggunaan if..elseif

  if($nilai_uas = 100){
        $nilai_uas = "A";
    }elseif($nilai_uas > 80){
        $nilai_uas = "B";
    }elseif ($nilai_uas > 60){
        $nilai_uas = "C";
    }elseif($nilai_uas > 40){
      $nilai_uas = "D";
    }elseif($nilai_uas > 20){
      $nilai_uas = "E";
    }


//penggunaan switch case

 switch ($nilai_uts) {
   case 'A':
     $info = "Sangat Memuaskan";
     break;
    case 'B':
      $info = "Memuaskan";
      break;
    case 'C':
      $info = "Cukup";
      break;
    case 'D':
      $info = "Kurang";
      break;
    case 'E':
      $info = "Sangat Kurang";
      break;
 }

  echo 'Nama Lengkap : '.$nama_lengkap;
  echo '<br/>Mata Kuliah : '.$matkul;
  echo '<br/>Nilai UTS : '.$info;
  echo '<br/>Nilai UAS : '.$nilai_uas;
  echo '<br/>Nilai Tugas : '.$nilai_uas;