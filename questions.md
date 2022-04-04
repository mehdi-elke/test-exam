# Examen “Qualité et tests”


## 1) Définissez ce qu’est un test unitaire, son intérêt, ce qu’il doit contenir et comment évaluer sa qualité.
Un test unitaire permet de vérifier le bon fonctionnement d’une partie bien précise d’un site/d'une application, indépendamment des autres tests unitaires.
L'intérêt de créer des tests unitaire est d'améliorer la qualité du code et de faciliter la collaboration.
On peut évaluer la qualité des tests unitaire grâce aux mutations.

## 2) Présentez la pyramide des tests, ses différents niveaux et son objectif.
Il y a 4 niveaux, du plus bas au plus haut : Tests de composants, Tests d'intégration, Tests système, Tests d'acceptation.
* Les tests de composants ont pour but de tester les différents composants du logiciel séparément afin de s’assurer que chaque élément fonctionne comme spécifié
* Les tests d’intégrations sont des tests effectués entre les composants afin de s’assurer du fonctionnement des interactions et de l’interface entre les différents composants.
* Les tests système sont des test afin de vérifier que le système répond aux exigences définies dans les spécifications.
* Les tests d'acceptationn sont des test dont le but est de confirmer que le produit final correspond bien aux besoins des utilisateurs finaux.

## 3) Définissez l’analyse statique du code, et comment un outil comme sonar permet d’améliorer la qualité de votre produit ?
L'analyse statique du code consiste en une série de contrôles automatisés effectués sur le code source.
Sonar propose une synthèse des résultats de différents outils de contrôle de qualité existant et cette synthèse permet aux developpeurs d'améliorer la qualité logiciel.

## 4) Expliquez la règle du “boy-scout”.
La règle du boy-scout est de toujours laisser un camp plus propre que celui qu'on a trouvé. En code cela pourrait revenir à toujours laisser un code de meilleur qualité (plus propre) que celui de base.

## 5) Définissez ce qu’est la qualité dans un projet informatique.
La qualité dans un projet informatique est qu'un projet doit être portable, fiable, maintenable (pouvoir le mettre à jour), performant, facile d'utilisation, et fonctionnel selon les besoins des utilisateurs.

## 6) Ecrivez les scénarios en gherkin permettant de valider la fonction suivante:
La fonction prend en paramètre une valeur numérique et :
* Si la valeur est un multiple de 3, alors la fonction retourne fizz
* Si la valeur est un multiple de 5, alors la fonction retourne buzz
* Si la valeur est un multiple de 3 et de 5, alors la fonction retourne fizzbuzz
* La valeur d’entrée dans les autres cas.

Étant donné que j'ai envoyé le chiffre 3
Quand j'appuie sur "envoyer"
Alors le programme me renvoie fizz
Étant donné que j'ai envoyé le chiffre 5 
Quand j'appuie sur "envoyer"
Alors le programme me renvoie buzz
Étant donné que j'ai envoyé le chiffre 15 
Quand j'appuie sur "envoyer"
Alors le programme me renvoie fizzbuzz
Étant donné que j'ai envoyé le chiffre 2 
Quand j'appuie sur "envoyer"
Alors le programme me renvoie 2