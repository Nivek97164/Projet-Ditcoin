<?php
include 'model/model.php';

// Définir l'URL de l'API et la clé API
$apiUrl = 'https://api.coingecko.com/api/v3/simple/price?ids=bitcoin,ethereum&vs_currencies=eur';
$apiKey = 'VOTRE_CLE_API';

// Instancier le modèle
$model = new CryptoConverterModel();

// Définir un tableau vide pour stocker les valeurs des crypto-monnaies
$cryptoValues = array();

// Récupérer les valeurs de toutes les crypto-monnaies
$cryptoValues = $model->getAllCryptoValues();

// Vérifier si la récupération des valeurs a réussi
if ($cryptoValues === false) {
    $errorMessage = "Impossible de récupérer les valeurs des crypto-monnaies. Veuillez réessayer plus tard.";
} else {
    // Vérifier si le formulaire a été soumis
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Récupérer la crypto-monnaie sélectionnée
        $crypto = $_POST['crypto'];

        // Récupérer la quantité de crypto-monnaie entrée par l'utilisateur
        $amount = $_POST['amount'];

        // Vérifier si la crypto-monnaie sélectionnée existe
        if (array_key_exists($crypto, $cryptoValues)) {
            // Récupérer la valeur de la crypto-monnaie sélectionnée
            $cryptoValue = $cryptoValues[$crypto]['eur'];

            // Calculer le résultat de la conversion
            $result = $amount * $cryptoValue;
        } else {
            $errorMessage = "La crypto-monnaie sélectionnée n'existe pas.";
        }
    }
}

// Inclure la vue pour afficher la page
include 'view/view.php';
?>
