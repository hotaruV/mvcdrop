<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once './Views/estilos.php' ?>
    <title>
        <?= $data['pages_title'] ?>
    </title>
</head>

<body>

    <section class="login">
        <h1 class="login__title">Login De Ingreso</h1>
        <div class="card">
            <form method="POST" name="formLogin" id="formLogin">
                <div class="card__form">
                    <label for="usuario" class="card__label">Email</label>
                    <input type="email" class="card__input" placeholder="Email" id="loginEmail" name="email">
                </div>
                <div class="card__form">
                    <label for="password" class="card__label">Password</label>
                    <input type="password" class="card__input" placeholder="Password" id="loginPassword" name="password">
                </div>
                <div class="card__form">
                    <button type="submit" class="card__input" id="boton_login" value="Ingresar">Ingresar</button>
                </div>
        </div>
        </form>
        </div>
    </section>
    <script>
        const base_url = '<?= Utils::base_url() ?>';
    </script>
    <?php require_once './Views/scripts.php' ?>
</body>

</html>