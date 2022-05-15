<!doctype html>
<html lang="pt-br">
    <head>
        <title>Edi Cursos</title>
        <meta charset="utf-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">        
    </head>
    <body>
        <header>
            <h1>Contato</h1>
        </header>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="sobre.html">Sobre</a></li>
                <li><a href="#">Contato</a></li>
                <li><a href="https://www.youtube.com/channel/UC4loFPi-jXiUTAiTp8JqQMg" target="_blank">Canal do YouTube</a></li>
            </ul>
        </nav>
        <div class="row">
            <form action =" ./CSS/formularioemail.php" method="$_POST" class="card">
                <label for="nome">Primeiro Nome:</label>
                <input type="text" id="nome" required minlength="2" maxlength="25">
                <span></span>
            
                <label for="email">Endereço de Email:</label>
                <input type="email" id="email" required maxlength="50">
                <span></span>
            
                <label for="msg">Mensagem:</label>
                <textarea name="messagem" id="msg" required></textarea>
                <span></span>
            
                <button type="submit">Enviar mensagem</button>
            </form>
        </div>
        <footer>
            <dl>
                <dt>E-mail</dt>
                <dd>email@mail.com</dd>
                <br/>
                <dt>Telefone</dt>
                <dd>(46) 9 9999-9999</dd>
            </dl>

            <p>EdiCursos</p>
        </footer>
    </body>
</html>