<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta nome="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2</title>
</head>
<body>
    <?php 
        if (isset($_GET['nome']) && isset($_GET['mail']) && isset($_GET['eta'])) {
            $nome = $_GET['nome'];
            $mail = $_GET['mail'];
            $pos_at = strpos($mail, '@');
            $mailTwo = is_numeric($pos_at) && is_numeric(strpos($mail, '.', $pos_at));
            $eta = $_GET['eta'];
            if (strlen($nome) > 3 && $mailTwo && is_numeric($eta)) {
                $message = "Accesso consentito";
            } else {
                $message = "Accesso negato";
            }
        } else {
            $message = "credenziali NON inserite";
        }
    ?>
    <h1>Inserisci le credenziali</h1>
    <form action="" method="GET">
        <label for="nome">Nome</label>
        <input type="text" id="nome" nome="nome">
        <label for="mail">Mail</label>
        <input type="text" id="mail" nome="mail">
        <label for="eta">Età</label>
        <input type="number" id="eta" nome="eta">
        <button>Accedi</button>
    </form>
    <h2><?= $message ?></h2>
</body>
</html>