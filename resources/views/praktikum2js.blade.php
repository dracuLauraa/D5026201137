<!DOCTYPE html>
<html lang="en">
  <head>
      <style>
          .card {
    background-color: #c1f3f5 !important;
}

.container {
    padding: 2% 5% !important;
}

@media (min-width:900px) {
    .container {
        padding: 5% 25% !important;
    }
}

label {
    color: #380a5e !important;
}

.card-header {
    font-size: 2rem !important;
    background: #decded !important;
}

.btn-primary {
    background-color: #c2a1dd !important;
    border: none !important;
    color: #303030 !important;
}

.btn-primary:focus {
     background-color: #313031 !important;
    border: none !important;
    color: #2b2929 !important;
}

.btn-primary:hover {
    background-color: transparent !important;
    color: #502179 !important;
    border: 2px solid #ae96c2 !important;
}
          </style>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />

    <title>Praktikum Form Validation</title>
  </head>
  <body>
    <div class="container">
      <div class="card">
        <div class="card-header text-center">JavaScript Form Validation</div>
        <div class="card-body">
         <form id="validation" class="row g-3">
  <div class="col-12">
    <label  class="form-label">Full Name</label>
    <input type="text" class="form-control" id="name" name="name">
  </div>
  <div class="col-12">
    <label  class="form-label">Username(6-8 Characters)</label>
    <input type="text" class="form-control" id="usename" name="username">
  </div>
  <div class="col-12">
    <label  class="form-label">Email</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="ex: laura@gmail.com">
  </div>
   <div class="col-12">
    <label  class="form-label">State</label>
    <select id="state" name="state" class="form-select">
      <option value="">Choose...</option>
      <option value="1">Indonesia</option>
      <option value="2">Singapore</option>
      <option value="3">China</option>
      <option value="4">Japan</option>
      <option value="5">Nederland</option>
    </select>
  </div>
  <div class="col-12">
    <label  class="form-label">Address</label>
    <input type="text" class="form-control" name="Address">
  </div>
  <div class="col-12">
    <label  class="form-label">Zip Code</label>
    <input type="text" class="form-control" id="zip" name="zip" >
  </div>

  <div class="col-12">
    <button type="submit" class="my-4 form-control btn btn-primary">Check Form</button>
  </div>
</form>
        </div>
      </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>

    <!-- JQuery -->
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
    <script src="/js/jquery.js"></script>
    <!--Sweet Alert-->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
