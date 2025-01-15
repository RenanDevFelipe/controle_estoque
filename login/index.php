<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/login.css?v=3">
    <link rel="stylesheet" href="../style/index.css?v=1">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Control Z - Login</title>
</head>
<body>
    <section class="login-container">
        <div class="container-form-login">
            <div class="logo-form-login">
                <div class="logo-login">
                    <img src="../upload/gerenciamento-de-projetos.png" alt="">

                    <p>Control Z</p>
                </div>

                <div class="title-login">
                    <span>Login</span>
                </div>

                <div class="span-login">
                    <p>Ainda não conhece a DevoTech?</p>
                    <a href="">Conhecer agora</a>
                </div>
            </div>

            <div class="form-login">
                <form id="formLogin">
                    <div class="box">
                        <label for="">Email Address</label>
                        <input type="email" name="email" id="email">
                    </div>
                    <div class="box">
                        <label for="">Password</label>
                        <input type="password" name="senha" id="senha">
                    </div>

                    <div class="show-password">
                        <input type="checkbox" name="" id="">
                        <label for="">Show Password</label>
                    </div>

                    <div class="button-login">
                        <button class="LoginButton">
                            <p class="loginP">Log In</p>
                            <div class="loading"></div>
                        </button>
                        
                    </div>
                </form>

                <div class="forgot-password">
                    <a href="">Esqueceu sua Senha?</a>
                </div>

                <div class="copy-login">
                    <p>Copyright © 2025 DevoTech, LLC. DevoTech™ is a trademark of DevoTech, LLC.</p>
                </div>
            </div>
        </div>

        <div class="container-img-login">
            
        </div>
    </section>
</body>
<script src="script/login.js"></script>
</html>