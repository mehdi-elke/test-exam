# Examen “Qualité et tests”


## 1) Définissez ce qu’est un test unitaire, son intérêt, ce qu’il doit contenir et comment évaluer sa qualité.

Un test unitaire est un test executé afin de s'assurer que le logiciel réagisse comme il faut par rapport au code écrit, qu'il 
obtienne les bonnes réponses venant d'APIs, 

## 2) Présentez la pyramide des tests, ses différents niveaux et son objectif.

- Tests unitaires : Vérifier que le logiciel fonctionne correctement 
- Tests d'intégration : S'assurer que les échanges entre les interfaces se font correctements
- Tests fonctionnels : S'assurer que le logiciel respecte les contraintes spécifiées
- Tests de sécurité : S'assurer que le logiciel respecte bien les normes de sécurités

## 3) Définissez l’analyse statique du code, et comment un outil comme sonar permet d’améliorer la qualité de votre produit ?

L'analyse statique de code permet d'analyser et de montrer les différents problèmes d'un code source.
Des outils comme Qodana ou SonarCloud permet de mettre en surface les erreurs, les alertes et des améliorations du code afin
qu'il respecte des normes de nommage, ou un pattern de code bien défini.

## 4) Expliquez la règle du “boy-scout”.

La regle du "boy-scout" se définit comme une amélioration permanente du code au fil du temps,
par d'autres personnes, qui corrigent, re-rédigent le code afin de le rendre plus efficient, pratique, lisible, etc...

## 5) Définissez ce qu’est la qualité dans un projet informatique.

La qualité dans un projet informatique vient en majeure partie de sa structure et de son architecture.
En passant par des design pattern, des pattern d'architecture (MVC par exemple), par un code qui n'est pas redondant 
dans le projet, ou encore un code bien documenté... Tout cela permet notamment à une personne étrangère au projet 
de pouvoir le comprendre aisaiement et de pouvoir travailler dessus sans passer 3 heures à comprendre comment le code fonctionne
Tout cela montre la qualité d'un projet informatique.

## 6) Ecrivez les scénarios en gherkin permettant de valider la fonction suivante:
La fonction prend en paramètre une valeur numérique et :
* Si la valeur est un multiple de 3, alors la fonction retourne fizz
* Si la valeur est un multiple de 5, alors la fonction retourne buzz
* Si la valeur est un multiple de 3 et de 5, alors la fonction retourne fizzbuzz
* La valeur d’entrée dans les autres cas.


Etant donné que l'utilisateur rentre un chiffre
Quand la valeur est un multiple de 3
Alors Fizz

Etant donné que l'utilisateur rentre un chiffre
Quand la valeur est un multiple de 5
Alors Buzz

Etant donné que l'utilisateur rentre un chiffre
Quand la valeur est un multiple de 3 et de 5
Alors FizzBuzz

Etant donné que l'utilisateur rentre un chiffre
Quand la valeur n'est ni un multiple de 3 ni de 5
Alors Valeur d'entrée
