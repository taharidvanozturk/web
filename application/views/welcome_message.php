<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	<script>
        function showSuccessMessage() {
            alert("Giriş başarılı!");
        }
    </script>
</head>

<body>


<form method="post" onsubmit="showSuccessMessage()">
    <link rel="stylesheet" type="text/css" href="assets\css\style3.css">
    <div class="row">
        <div class="col-md-6 mx-auto p-0">
            <div class="card">
                <div class="login-box">
                    <div class="login-snip">
                        <input id="tab-1" type="radio" name="tab" class="sign-in" checked onclick="toggleLoginForm()"><label for="tab-1" class="tab">Giriş</label>
                        <input id="tab-2" type="radio" name="tab" class="sign-up" onclick="location.href='kayitol.html';"><label for="tab-2" class="tab">Kayıt Ol</label>
                        <div class="login-space">
                            <div class="login">
                                <div class="group">
                                    <label for="username" class="label">Kullanıcı Adı</label>
                                    <input id="username" type="text" class="input" name="username" placeholder="Kullanıcı Adınızı Giriniz">
                                </div>
                                <div class="group">
                                    <label for="password" class="label">Şifre</label>
                                    <input id="password" type="password" class="input" data-type="password" name="password" placeholder="Şifrenizi Giriniz">
                                </div>
                                <div class="group">
                                    <input id="check" type="checkbox" class="check" checked>
                                    <label for="check" class="label"><span class="icon"></span> Oturumu Açık Tut</label>
                                </div>
                                <div class="group">
                                    <input type="submit" class="button" value="Giriş Yap">
                                </div>
                                <div class="hr"></div>
                                <div class="foot">
                                    <a href="#">Şifremi Unuttum</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

</body>

</html>
