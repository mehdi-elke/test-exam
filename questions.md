# Examen “Qualité et tests”


## 1) Définissez ce qu’est un test unitaire, son intérêt, ce qu’il doit contenir et comment évaluer sa qualité.
## Un test unitaire est un moyen simple de vérifier qu'une portion de code fonctionne correctement. Il doit être indépendant, rapide et de qualité. Pour évaluer sa qualité nous utilisons la couverture de code.


## 2) Présentez la pyramide des tests, ses différents niveaux et son objectif.
## Il y a plusieurs types de niveau de tests, celle-ci sont présentez dans la pyramide des tests le premier niveau correspond aux tests de composants, qui permettent de tester des composants l'un après l'autre ce qui permet de s'assurer que tout les composants fonctionne correctement. Ensuite nous avons les tests d'intégration qui permettent de s'assurer du bon fonctionnement des intéractions entres plusieurs composants. Puis nous avons les tests système au dessus, ces tests permettent de vérifier le bon fontionnement système défini dans des spécifications données. Puis pour finir il y a les tests d'acceptation, ce sont les tout derniers tests qui vérifie si le produit correspond à la demande et au besoin des utilisateurs.


## 3) Définissez l’analyse statique du code, et comment un outil comme sonar permet d’améliorer la qualité de votre produit ?
## L'analyse statique du code est une méthode qui permet d'évaluer du code sans exécuter de programme. L'utilisation d'un outil comme sonar permet d'améliorer la qualité et la sécurité du produit final avec l'analyse statique du code source avant exécution d'un programme.

## 4) Expliquez la règle du “boy-scout”.
## La règle du "boy-scout" consiste à laisser son environnement de travail/test toujours propre pour la prochaine personne.

## 5) Définissez ce qu’est la qualité dans un projet informatique.
## La qualité dans un projet permet d'évaluer/de tester le produit final afin d'assurer son bon fonctionnement, utiliser des méthodes agiles, vérifier la sécurité, faire des tests.

## 6) Ecrivez les scénarios en gherkin permettant de valider la fonction suivante:
La fonction prend en paramètre une valeur numérique et :
* Si la valeur est un multiple de 3, alors la fonction retourne fizz
* Si la valeur est un multiple de 5, alors la fonction retourne buzz
* Si la valeur est un multiple de 3 et de 5, alors la fonction retourne fizzbuzz
* La valeur d’entrée dans les autres cas.


## Etant donné que j'ai insérer dans ma fonction une valeur 
## Quand celui-ci est un multiple de 3
## Alors je récupère "fizz"


## Etant donné que j'ai insérer dans ma fonction une valeur 
## Quand celui-ci est un multiple de 5
## Alors je récupère "buzz"

## Etant donné que j'ai insérer dans ma fonction une valeur 
## Quand celui-ci est un multiple de 3 ET de 5
## Alors je récupère "fizzbuzz"