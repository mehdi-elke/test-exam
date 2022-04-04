# Examen “Qualité et tests”


## 1) Définissez ce qu’est un test unitaire, son intérêt, ce qu’il doit contenir et comment évaluer sa qualité.

Le test unitaire est une procédure qui permet de vérifier le bon fonctionnement d'un logiciel, de ses fonctions et des résultats qu'il renvoie.
Son intérêt est de trouver les erreurs, sécuriser la maintenance et documenter le code.
Le test unitaire contient une unité qui est l'élément le plus petit identifiable d'une application.
On évalue la qualité des tests unitaires sur leur taux de coverage, c'est-à-dire s'ils couvrent toutes les unités (plus petits éléments d'une application).

## 2) Présentez la pyramide des tests, ses différents niveaux et son objectif.

Il y a différents niveaux : tests de composants, tests d'intégration, tests système et tests d'acception.
Les tests de composants est de tester chaque composant de l'application pour vérifier leurs fonctionnalités.
Les tests d'intégration s'assurent des intéractions entre les différents composants.
Les tests système sont ceux qui vont vérifier que le système renvoie bien le bon résultat.
Les tests d'acceptation sont là pour confirmer que l'application correspond bien aux besoins des utilisateurs.

## 3) Définissez l’analyse statique du code, et comment un outil comme sonar permet d’améliorer la qualité de votre produit ?

L'analyse statique permet de détecter les violations par rapports aux règles de bonnes pratiques selon le langage/framework employé.
Sonar permet de détecter toutes les règles qui sont enfreintes et montrent les corrections à apporter avec une explication, ou alors pourquoi telle pratique n'est pas bonne. Cela permet au développeur d'avoir une application optimisée.

## 4) Expliquez la règle du “boy-scout”.

Le terme boy-scout est utilisé pour désigner la pratique de toujours laisser un code plus propre que lorsqu'on l'a consulté. 
Cela permet d'avoir un code plus propre, plus affiné et toujours compréhensible pour les développeurs suivants.

## 5) Définissez ce qu’est la qualité dans un projet informatique.

La qualité d'un projet informatique se base sur la qualité des tests unitaires pour s'assurer que chaque fonction est opérationnelle, puis que chaque composants fonctionnent bien entre eux. Puis de la bonne pratique des langages/frameworks utilisés, pour avoir un code lisible et qui suit les normes, ce qui permettra un d'appliquer le clean code. Ensuite, de permettre aux prochains développeurs de comprendre le code, de pouvoir le réutiliser. Puis, d'avoir un code documenté, qui permet de savoir à quoi correspond telle ou telle fonction.

## 6) Ecrivez les scénarios en gherkin permettant de valider la fonction suivante:
La fonction prend en paramètre une valeur numérique et :
* Si la valeur est un multiple de 3, alors la fonction retourne fizz
* Si la valeur est un multiple de 5, alors la fonction retourne buzz
* Si la valeur est un multiple de 3 et de 5, alors la fonction retourne fizzbuzz
* La valeur d’entrée dans les autres cas.

Étant donné que j'ai envoyé le chiffre 15
Quand j'appuie sur "envoyer"
Alors le programme me renvoie la valeur "fizzbuzz"

Étant donné que j'ai envoyé le chiffre 3
Quand j'appuie sur "envoyer"
Alors le programme me renvoie la valeur "fizz"

Étant donné que j'ai envoyé le chiffre 5
Quand j'appuie sur "envoyer"
Alors le programme me renvoie "buzz"

Étant donné que j'ai envoyé le chiffre 2 
Quand j'appuie sur "envoyer"
Alors le programme me renvoie 2