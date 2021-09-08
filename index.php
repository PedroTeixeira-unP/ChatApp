<?php include_once "header.php"; ?>
    <body>
        <div class="wrapper">
            <section class="form signup"> 
                <header>Chat | Versao: BETA 1.4.0</header>
                <form action="#" enctype="multipart/form-data">
                    <div class="error-txt"></div>
                    <div class="name-details">
                        <div class="field input">
                            <label>Primeiro Nome</label>
                            <input type="text" name="fname" placeholder="Primeiro Nome" required>
                        </div>
                        <div class="field input">
                            <label>Ultimo Nome</label>
                            <input type="text" name="lname" placeholder="Ultimo Nome" required>
                        </div>
                    </div>
                        <div class="field input">
                            <label>Email</label>
                            <input type="text" name="email" placeholder="email" required>
                        </div>
                        <div class="field input">
                            <label>Password</label>
                            <input type="password" name="password" placeholder="Password" required>
                            <i class="fas fa-eye"></i>
                        </div>
                        <div class="field image">
                            <label>Selecionar imagem</label>
                            <input type="file" name="image" required>
                        </div>
                        <div class="field button">
                            <input type="submit" value="continue to chat">
                        </div>
                    
                </form>
                <div class="link">Já tem conta?<a href="login.php"> Entrar agora</a></div>
          </section>
        </div>

        <script src="javascript/pass-show-hide.js"></script>
        <script src="javascript/signup.js"></script>
    </body>
</html>