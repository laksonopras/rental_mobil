<!-- <!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    </head>
    <body>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0D6EFD" fill-opacity="1" d="M0,192L26.7,186.7C53.3,181,107,171,160,170.7C213.3,171,267,181,320,197.3C373.3,213,427,235,480,240C533.3,245,587,235,640,213.3C693.3,192,747,160,800,170.7C853.3,181,907,235,960,266.7C1013.3,299,1067,309,1120,309.3C1173.3,309,1227,299,1280,266.7C1333.3,235,1387,181,1413,154.7L1440,128L1440,0L1413.3,0C1386.7,0,1333,0,1280,0C1226.7,0,1173,0,1120,0C1066.7,0,1013,0,960,0C906.7,0,853,0,800,0C746.7,0,693,0,640,0C586.7,0,533,0,480,0C426.7,0,373,0,320,0C266.7,0,213,0,160,0C106.7,0,53,0,27,0L0,0Z"></path></svg>
        <div class="container position-absolute translate-middle start-50 top-50">
            <div class="card p-5 shadow p-3 mb-5 bg-white rounded d-flex justify-content-center">
                <h1>Login</h1>
                <form class="mt-5" action="/login" method="POST">
                    @csrf
                    <table style="width: 100%">
                        <tbody>
                            <tr>
                                <td style="width: 25%"><label for="inputEmail" class="form-label">Username</label></td>
                                <td>
                                    <input type="email" class="form-control my-1 @error('email') is-invalid @enderror" id="inputEmail" placeholder="email" name="email" required>
                                    @error('email')
                                        <div id="emailHelp" class="form-text">{{ $message }}</div>
                                    @enderror
                                </td>
                            </tr>
                            <tr>
                                <td ><label for="inputPassword" class="form-label">Email address</label></td>
                                <td>
                                    <input type="password" class="form-control my-1 @error('password') is-invalid @enderror" id="inputPassword" placeholder="password" name="password" required>
                                    @error('password')
                                        <div id="passwordHelp" class="form-text">{{ $message }}</div>
                                    @enderror
                                </td>
                            </tr>
                        </tbody>
                    </table>    
                    <div class="my-3 form-check">
                        <input type="checkbox" class="form-check-input" id="notRobotCheck" required>
                        <label class="form-check-label" for="notRobotCheck">I'm not robot</label>
                        <div class="invalid-feedback">
                            You must agree before submitting.
                          </div>
                    </div>
                    <p class="mt-3">Belum punya akun? <a href="/register">daftar di sini!</a></p>
                    <button type="submit" class="btn btn-primary my-2 d-flex ms-auto">Login</button>
                </form>
            </div>
            <p class="mt-2 text-center"><a href="/">Masuk Sebagai Tamu</a></p>
        </div>
    </body>
</html> -->

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Login</title>

    <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="favicon.png">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
</head>
<body>
    <div class="site-wrap d-md-flex align-items-stretch">
        <div class="bg-img" style="background-image: url('images/Car-1.png')"></div>
        <div class="form-wrap">
            <div class="form-inner">
                <h1 class="title text-center mb-4">Good to see you!</h1>
                <p class="caption mb-1">Please enter your login details to sign in.</p>

                <form action="/login" method="POST" class="pt-3">
                    @csrf
                    <div class="form-floating">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="inputEmail" placeholder="info@example.com" name="email" required>
                        @error('email')
                                        <div id="emailHelp" class="form-text">{{ $message }}</div>
                                    @enderror
                        <label for="inputEmail">Email Address</label>
                    </div>

                    <div class="form-floating">
                        <span class="password-show-toggle js-password-show-toggle"><span class="uil"></span></span>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="inputPassword" placeholder="Password" name="password" required>
                        @error('password')
                                        <div id="passwordHelp" class="form-text">{{ $message }}</div>
                                    @enderror
                        <label for="inputPassword">Password</label>
                    </div>

                    <div class="d-flex justify-content-between">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="notRobotCheck" required>
                            <label for="notRobotCheck" class="form-check-label">I'm not robot</label>
                            <div class="invalid-feedback">
                            You must agree before submitting.
                          </div>
                        </div>
                        <div><a href="#">Forgot password?</a></div>
                    </div>
                    
                    <div class="d-grid mb-4">
                        <button type="submit" class="btn btn-primary">Log in</button>
                    </div>

                    <div class="mb-4">Don’t have an account? <a href="/register">Sign up</a></div>

                    <div class="social-account-wrap">
                        <h4 class="mb-4"><span>or continue with</span></h4>
                        <ul class="list-unstyled social-account d-flex justify-content-between">
                            <li><a href="#"><img src="images/icon-google.svg" alt="Google logo"></a></li>
                            <li><a href="#"><img src="images/icon-facebook.svg" alt="Facebook logo"></a></li>
                            <li><a href="#"><img src="images/icon-apple.svg" alt="Apple logo"></a></li>
                            <li><a href="#"><img src="images/icon-twitter.svg" alt="Twitter logo"></a></li>
                        </ul>
                        <h4 class="mb-4"><a href="/"><span>Login as a guest</span></a></h4>
                    </div>

                    


                </form>
            </div>
        </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="js/custom.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>

    </body>
</html>
