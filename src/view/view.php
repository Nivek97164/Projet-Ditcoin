<!DOCTYPE html>
<html>
<head>
    <title>Convertisseur de Crypto-monnaie</title>
</head>
<body>
    <h1>Convertisseur de Crypto-monnaie</h1>
    <form action="controller.php" method="post">
        <label for="crypto">Sélectionnez une crypto-monnaie :</label>
        <select name="crypto" id="crypto">
            <?php foreach ($cryptoValues as $crypto => $value): ?>
                <option value="<?php echo $crypto; ?>"><?php echo $crypto; ?></option>
            <?php endforeach; ?>
        </select>
        <br><br>
        <label for="amount">Montant de la crypto-monnaie :</label>
        <input type="number" name="amount" id="amount" step="any" placeholder="Montant">
        <br><br>
        <input type="submit" value="Convertir">
    </form>
    <?php if (!empty($result)): ?>
        <p>Résultat de la conversion : <?php echo $amount; ?> <?php echo $crypto; ?> = <?php echo $result; ?> €</p>
    <?php else: ?>
        <?php if (isset($errorMessage)): ?>
            <p style="color: red;"><?php echo $errorMessage; ?></p>
        <?php endif; ?>
    <?php endif; ?>
</body>
</html>
