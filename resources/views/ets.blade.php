<!DOCTYPE html>
<html>

<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <script src="lala.js"></script>
      <title>ETS Form Validation</title>
      <link rel="stylesheet" href="lala.css" />

</head>

<body>
  <ul>
  <div class="container">
    <div class="card" style="width: 40rem">
      <p>Laura Wilhelmina Theresia<br>
         Laura<br>
         5026201137</p>
      <div class="card-body">
        <h5 class=" text-center">Form Pendaftaran Kuota Internet</h5>
        <form action="https://www.friv.com/" id="validasi">

            <label for="nama" class="form-label col-3"> Nama Mahasiswa :</label>
            <div class="row haha">
              <div class="col-2"></div>
            <input type="text" class="form-control" id="nama" name="nama" style="margin: auto;"/>
            <div class="col-2"></div>
          </div>

            <label for="nrp" class="form-label col-3"> NRP Mahasiswa :</label>
            <div class="row haha">
              <div class="col-2"></div>
            <input type="nrp" class="form-control" id="nrp" name="nrp" style="margin: auto;"/>
            <div class="col-2"></div>
          </div>

            <label name="jurusan" for="jurusan" class="form-label col-3"> Jurusan :</label>
            <div class="row haha">
            <div class="col-2"></div>
            <select class="form-select" id="sel1" name="sellist1" style="margin: auto;">
              <option value="">Pilih jurusan</option>
              <option value="1">1. Sistem Informasi</option>
              <option value="2">2. Teknik Elektro</option>
              <option value="3">3. Teknik Informatika</option>
            </select>
            <div class="col-2"></div>
          </div>

            <label for="nomor" class="form-label col-3" > Nomor Handphone :</label>
            <div class="row haha">
            <div class="col-2"></div>
            <input type="nomor" class="form-control col-3" id="nomor" name="nomor" style="margin: auto;" />
            <div class="col-2"></div>

          <div class="row haha">
          <div class="col-12"></div>
          <button type="submit" class="btn btn-primary col-3">Kirim</button>
          <div class="col"></div>
          <button type="reset" class="btn-danger col-3">Reset</button>
          <div class="col"></div>

        </form>
      </div>
    </div>
  </div>
</body>

</html>
