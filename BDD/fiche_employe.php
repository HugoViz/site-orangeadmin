<?php


try {
    //lien de bdd
    $bdd = new PDO('mysql:host=localhost;dbname=site', 'admin', 'admin');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //pour afficher si y a une erreur
} catch (PDOException $e) {
    echo 'Échec lors de la connexion : ' . $e->getMessage();
}
//choisir la table
$sth = $bdd->prepare('SELECT * FROM `fiche_employe`');
$sth->execute();
$employes = $sth->fetchAll();
echo json_encode($employes);


INSERT INTO `fiche_employe`(`employe_ID`, `prenom_nom`, `age`, `adresse`, `poste`, `service`, `date_de_naissance`, `tel`, `email`, `numero_secu`, `contrat`, `salaire`, `dernier_salaire`, `prochain_salaire`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10],[value-11],[value-12],[value-13],[value-14])
$ _GET ['$employe_ID'];
$ _GET ['$prenom_nom'];
$ _GET ['age'];
$ _GET ['$adresse'];
$ _GET ['$poste'];
$ _GET ['$service'];
$ _GET ['$date_de_naissance'];
$ _GET ['$tel'];
$ _GET ['$email'];
$ _GET ['$numero_secu'];
$ _GET ['$contrat'];
$ _GET ['$salaire'];
$ _GET ['$dernier_salaire'];
$ _GET ['$prochain_salaire'];

?>