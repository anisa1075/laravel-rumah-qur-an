<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="/css/login1.css">
    <title>Signin</title>
</head>

<body>
    <div class="container">
        <div class="signin-signup">
            <form action="{{ route('login') }}" class="sign-in-form" method="POST">
                @csrf
                <h2 class="title">Sign In</h2>

                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="email" placeholder="Email" name="email"
                        class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">
                </div>
                @error('email')
                    <div id="emailHelp" class="form-text text-danger error invalid-feedback" role="alert" style="color: red; padding-right: 5px">{{ $message }}</div>
                @enderror

                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" class="form-control @error('password') is-invalid @enderror"
                        value="{{ old('password') }}" placeholder="Password" name="password">
                </div>
                @error('password')
                    <div id="emailHelp" class="form-text error invalid-feedback" role="alert" style="color: red">{{ $message }}
                    </div>
                @enderror

                <input type="submit" value="Login" class="btn">
                <p class="social-text">Or Sign In with social platform</p>
                <div class="social-media">
                    <a href="" class="social-icon">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="" class="social-icon">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="" class="social-icon">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="" class="social-icon">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
                <p class="account-text">Quotes Hadits For You : <b><a href="#" id="sign-up-btn2">Quotes</a></b></p>
            </form>
            <form action="" class="sign-up-form">
                <h2 class="title">"Al-Qur'an"</h2>
                <div class="" style="text-align: center">
                    <i><p>"Bacalah Al-Quran karena ia akan datang sebagai pemberi syafaat bagi para penghafalnya pada hari kiamat." <br> (H.R. Muslim)</p></i><br>
                </div>
                <div class="" style="text-align: center">
                    <i><p>"Barangsiapa membaca satu huruf dari kitab Allah, maka dibalas satu kebaikan dan satu kebaikan dilipatgandakan menjadi sepuluh." <br> (H.R. At-Tirmidzi)</p></i>
                </div>
                {{-- <div class="input-field">
                    <i class="fas fa-envelope"></i>
                    <input type="text" placeholder="Email">
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Password">
                </div> --}}
                {{-- <input type="submit" value="Sign Up" class="btn" name="" id=""> --}}
                <b><p class="social-text" style="padding-top: 5px">Social Media Rumah Qur'an Qu</p></b>
                <div class="social-media">
                    <a href="" class="social-icon">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="" class="social-icon">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="" class="social-icon">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="" class="social-icon">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
                <p class="account-text">Already have an account? <a href="#" id="sign-in-btn2">Sign In</a></p>
            </form>
        </div>
        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h4>🌸 Quotes Hadits RQQ 🌸</h4>
                    <p>Quotes Hadits for you ^ ^ </p>
                    <button class="btn" id="sign-in-btn">Login</button>
                </div>
                <img src="/img/logo/quotes.png" alt="" width="80%" class="image">
            </div>
            <div class="panel right-panel">
                <div class="content" style="padding-top: 8px">
                    <h3 style="padding-top: 8px"><br><br>Asalamu'alaikum</h3>
                    <p style="font-family: Arial, Helvetica, sans-serif">Hai Sahabat Qur'an, Ingin menjadi bagian resmi santri Rumah Qur'an Qu? Silahkan Hubungi Admin untuk dibuatkan akun dashboard melalui Whatsapp disini ya! <br><br>
                        <strong style="margin-top: 4px"><a href="https://wa.me/6285267794627" target='blank'>Hubungi Admin</a></strong>
                    </p>
                    <button class="btn" id="sign-up-btn">Quotes</button>
                </div>
                <img src="/img/logo/login2.png" alt="" class="image">
            </div>
        </div>
    </div>
    <script src="/js/app.js"></script>
</body>

</html>
