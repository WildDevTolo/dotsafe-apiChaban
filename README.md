# dotsafe-apiChaban

Projet symfony -> appeler et manipuler l'API des heures d'ouverture et de fermeture du pont chaban-delmas.

Ci-après, un descriptif de l'attendu :
•	Afficher une liste exhaustive des futures fermetures du pont Chaban Delmas
•	 - La liste doit être triée par ordre chronologique à compter de la date du jour
•	         - Chaque item "fermeture" de la liste doit afficher les informations suivantes :
•	* date et heure de fermeture à la circulation
•	* date et heure de réouverture à la circulation
•	        * raison de la fermeture (nom du bateau quand disponible)
•	Afficher un compteur quelque part sur la page indiquant : "Prochaine fermeture dans XJ Xh Xmin Xsec"

 Si vous souhaitez aller plus loin :
•	Mettre en place
•	- un "filtre par date" : il doit permettre de consulter les fermetures d'un jour précis
•	- un "filtre par raison" : il doit permettre de ne faire apparaitre que les fermetures concernant un bateau donné ou une maintenance

---------------------------------------------------------------------------------------------------------------------------------------
Cloner depuis le dépôt github

run composer install
run composer require symfony/webpack-encore-bundle
run yarn install
run yarn watch


