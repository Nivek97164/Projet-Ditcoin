<?php
class CryptoConverterModel {
    private $cryptoValues;

    // Méthode pour définir les valeurs des crypto-monnaies
    public function setCryptoValues($values) {
        $this->cryptoValues = $values;
    }

    // Méthode pour récupérer les valeurs des crypto-monnaies
    public function getCryptoValues() {
        return $this->cryptoValues;
    }

    // Méthode pour récupérer les valeurs de toutes les crypto-monnaies à partir de l'API
    public function getAllCryptoValues() {
        global $apiUrl, $apiKey;

        // Créer une requête HTTP avec la clé API
        $options = array(
            'http' => array(
                'header'  => "Authorization: Bearer $apiKey",
                'method'  => 'GET',
            ),
        );
        $context  = stream_context_create($options);
        $response = file_get_contents($apiUrl, false, $context);

        // Décoder la réponse JSON
        $cryptoData = json_decode($response, true);

        // Vérifier si la réponse a réussi
        if ($cryptoData) {
            $this->setCryptoValues($cryptoData); // Définir les valeurs des crypto-monnaies
            return $cryptoData;
        } else {
            return false;
        }
    }
}
?>
