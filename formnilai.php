<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<div class="container">
<form class="form-horizontal p-5 shadow"style="background-color:#f1f2f6;" method="GET" action="arraysiswa.php">
    <!--------->
      <div class="text-center">
        <h3 class="mb-5 text-primary text-mg">Form Nilai Siswa</h3>
      </div>
     <!--------->
      <div class="form-group row">
          <label for="namalengkap" class="col-sm-3 col-form-label"><b>Nama Lengkap</b></label>
          <div class="col-sm-7">
            <input type="text" class="form-control" name="namalengkap" required>
          </div>
        </div>
        <br>
     <!---------->
        <div class="form-group row">
          <label for="nim" class="col-sm-3 col-form-label"><b>NIM</b></label>
          <div class="col-sm-5">
            <input type="number" class="form-control" name="nim" required>
          </div>
        </div>
        <br>
     <!----------->
        <div class="form-group row">
          <label for="matakuliah" class="col-sm-3 col-form-label"><b>Mata Kuliah</b></label>
          <div class="col-sm-7">
            <select name="matakuliah" class="form-control">
              <option value="DDP">Dasar-Dasar Pemrograman</option>
              <option value="PWL">Pemrograman Web Lanjutan</option>
              <option value="BD">Basis Data</option>
            </select>
          </div>
        </div>
        <br>
     <!------------>
        <div class="form-group row">
          <label for="nilaiuts" class="col-sm-3 col-form-label"><b>Nilai UTS</b></label>
          <div class="col-sm-5">
            <input type="number" class="form-control" name="nilaiuts" required>
          </div>
        </div>
        <br>
     <!----------->   
        <div class="form-group row">
            <label for="nilaiuas" class="col-sm-3 col-form-label"><b>Nilai UAS</b></label>
            <div class="col-sm-5">
              <input type="number" class="form-control " name="nilaiuas" required>
            </div>
        </div>
        <br>
     <!----------->
        <div class="form-group row">
          <label for="nilaitugas" class="col-sm-3 col-form-label"><b>Nilai Tugas/Praktikum</b></label>
          <div class="col-sm-5">
            <input type="number" class="form-control" name="nilaitugaspraktikum" required>
          </div>
        </div>
        <br>
         <div class="text-center">
            <input class="btn btn-primary" type="submit" value="Simpan" name="proses"/>
         </div>
        </form>
    </div>
</body>
</html>