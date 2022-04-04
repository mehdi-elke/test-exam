# Examen “Qualité et tests”


## 1) Définissez ce qu’est un test unitaire, son intérêt, ce qu’il doit contenir et comment évaluer sa qualité.
Un test unitaire est un processus qui consiste à isoler une partie de code d'un programme ou d'un logiciel pour vérifier son bon fonctionnement. 

L'interet du test unitaire était de trouver des bugs mais maintenant il doit permettre de développer des composants du logiciels ou du programme.

On dit souvent qu'un test unitaire doit contenir l'acronyme FIRST.

Fast :  Un test unitaire doit s'effectuer le plus rapidement possible. Généralement il doit ss'executer en quelques centiémes ou milliémes de secondes pour être joué le plus souvent possible par les développeurs.

Independant : On doit être en mesure d'éffectuer chaque test de manière individuelle, pour vérifier l'efficcacité du code de manière organisée. Les tests doivent etre indépendants des uns des autres. 

Repetable : Les code doivent pouvoir être joués de manière indéfini pendant la durée de vie du projet. Et le résultat des tests doit resté inchangé, si on l'exécute plusieurs fois 

Self-validating : Le test doit être en mesure de vérifier lui même la validité de son résultat

Thorough ( Approfondi en Francais ) : Les tests doivent s'appliquer à des résultats autant négatifs que positifs. 

## 2) Présentez la pyramide des tests, ses différents niveaux et son objectif.

La pyramide des tests se divise en 4 niveaux. Du plus haut au plus bas cela donne : Tests d'acceptation, tests système, tests d'intégration, tests de composants. 

Son objectif est 

Tests Composants : Ils pour but de vérifier les différents composants du programme / logiciel séparément afin de s’assurer que chaque élément fonctionne comme demandé

Tests d'intégration : 

Tests système : En 2éme position dans la pyramide, leur but est de vérifier que le système (le logiciel ou l’application dans son ensemble) répond aux exigences définies dans les spécifications.

Tests d'acceptation : Tout en haut de la pyramide, ce sont les derniers tests. Ils ont pour objectif de confirmer que le produit final correspond bien aux besoins des utilisateurs. 

## 3) Définissez l’analyse statique du code, et comment un outil comme sonar permet d’améliorer la qualité de votre produit ?

## 4) Expliquez la règle du “boy-scout”.

## 5) Définissez ce qu’est la qualité dans un projet informatique.

## 6) Ecrivez les scénarios en gherkin permettant de valider la fonction suivante:
La fonction prend en paramètre une valeur numérique et :
* Si la valeur est un multiple de 3, alors la fonction retourne fizz
* Si la valeur est un multiple de 5, alors la fonction retourne buzz
* Si la valeur est un multiple de 3 et de 5, alors la fonction retourne fizzbuzz
* La valeur d’entrée dans les autres cas.
