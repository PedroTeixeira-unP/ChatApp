<?php include_once "header.php"; ?>
    <body>
        <div class="wrapper">
            <section class="form login"> 
                <header>Chat | Versao: BETA 1.2.0</header>
                <form action="#">
                    <div class="error-txt"></div>
                        <div class="field input">
                            <label>Email</label>
                            <input type="text" name="email" placeholder="email">
                        </div>
                        <div class="field input">
                            <label>Password</label>
                            <input type="password" name="password"  placeholder="Password">
                            <i class="fas fa-eye"></i>
                        </div>
                        <div class="field button">
                            <input type="submit" value="continue to chat">
                        </div>
                    
                </form>
                <div class="link">Ainda nao tem ?<a href="index.php"> Registrar agora</a></div>
            </section>
        </div>

        <script src="javascript/pass-show-hide.js"></script>
        <script src="javascript/login.js"></script>
    </body>
</html>