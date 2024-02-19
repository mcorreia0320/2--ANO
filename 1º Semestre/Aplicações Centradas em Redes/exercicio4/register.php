<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include('index.php') ?>

    <h2>Formulario de Registo</h2>
    <form action="exec_reg.php" method="get">
            <label for="username" style="font-weight: bolder;">Nome de Usuario:</label>
            <input type="text" name="username" id="username" placeholder= "mcorreia0320">
            <label for="nome" style="font-weight: bolder;">Nome:</label>
            <input type="text" name="nome" id="nome" placeholder= "Miguel Correia">
            <label for="morada" style="font-weight: bolder;">Morada:</label>
            <input type="text" name="morada" id="morada" placeholder= "Est. Monumental">
            <label for="email" style="font-weight: bolder;">Email:</label>
            <input type="text" name="email" id="email" placeholder= "exemplo@gmail.com">
            <div style="width: 310px; display: flex; justify-content: end;">
                <input type="submit" value="Enviar" class="btn" >
            </div>
            
    </form>
</body>
</html>

<style>
    form {
        display:flex;
        flex-direction:column;
        gap:1rem;
        width: 100%;
    }

    input {
        width: 300px;
    }
    .btn{
        width: 100px;
        padding: 0.8rem;
    }
</style>