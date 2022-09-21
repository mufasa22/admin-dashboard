<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="register.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
</head>

<body>
  <section>
    <div class="container-fluid">
      <div class="col sm-12 md-12 lg-12">
        <h3 class="text-white py-3 text-center">Zalego Admin Register</h3>
      </div>
    </div>
  </section>
  <section>
    <div class="container">
      <div class="logo">
        <img src="data:image/jpeg;base64,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" alt="logo" width="50px" height="100px" />
      </div>
    </div>
  </section>
  <section>
    <div class="container py-5 lg-4 cont2">
      <div class="card">
        <div class="card-body">
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Username</label>
            <input type="username" class="form-control" id="exampleFormControlInput1" placeholder="" />
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email
            </label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="" />
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="" />
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Confirm password</label>
            <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="" />
          </div>
          <button class="btn btn-primary submit" type="button" value="submit">
            Submit
          </button>
          <p>Have account? sign in <span class="here">Here</span></p>
        </div>
      </div>
    </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>