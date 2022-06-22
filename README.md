<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

 Paramètres d’URL et Controller
Objectifs:

Créer des contrôleurs
Créer des routes
Utiliser les paramètres d'URL
 

Sujet:

Pour cet atelier, vous pouvez reprendre le projet Laravel utilisé précédement. Commencez par créer les routes nécessaires pour la gestion de factures:

- Afficher les factures

- Créer une facture

- Modifier une facture

- Supprimer une facture

 

Chaque route devra appeler un methode définie dans un contrôleur. Certaines méthodes devront respecter ces contraintes:

- Dans la méthode "éditer une facture", renvoyer un tableau à 2 entrées avec l’id de la facture et un message indiquant “la facture <ID> a été modifiée”

- Dans la méthode "supprimer une facture", renvoyer un tableau à 2 entrées avec l’id de la facture et un message indiquant “la facture <ID> a été supprimée”

 

Pour tester les routes, il vous devrez utiliser un client HTTP comme Postman.
