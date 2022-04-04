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

Son objectif est de couvrir au maximum le progamme aux niveaux tests, pour assurer une qualités logicielle maximale. 

Tests Composants : Ils pour but de vérifier les différents composants du programme / logiciel séparément afin de s’assurer que chaque élément fonctionne comme demandé

Tests d'intégration : En 3éme position dans la pyramide, ils ont pour rôle de s'assurer du bon fonctionnement des interactions et de l’interface entre les différents composants.

Tests système : En 2éme position dans la pyramide, leur but est de vérifier que le logiciel dans son ensemble répond aux exigences définies dans les spécifications.

Tests d'acceptation : Tout en haut de la pyramide, ce sont les derniers tests. Ils ont pour objectif de confirmer que le produit final correspond bien aux besoins des utilisateurs. 

## 3) Définissez l’analyse statique du code, et comment un outil comme sonar permet d’améliorer la qualité de votre produit ?

L'analyse statique du code consiste en une suite de contrôles qui sont automatisés et qui s'effectue sur le code source du prommage ou du logiciel. C'est pour cela que l'analyse statique du code garantit la cohérence des contrôles et fournit généralement feedback rapide sur  modifications les plus récentes. 

Un outil comme sonar permet d'améliorer la qualité du produit, parce qu'il recherche des erreurs et de vulnérabilités connues, telles que les fuites de mémoire ou les débordements de mémoire tampon. Un logiciels permet d'ailleurs de mettre en évidence les morceaux de codes qui ne respectent pas les normes de codages; ce qui permet bien sûr de l'améliorer par la suite.

## 4) Expliquez la règle du “boy-scout”.

La régle du "boy scoutt" peut se résumer par l'expression suivante : l'amélioration continue du code. En effet, cette règle dit qu'il faut toujours laisser le code dans un état meilleur que celui dans lequel on l' a trouvé. Il peut s'agir de seulement changer le nom d'une variable, ou changer un if. L'important est seulement qu'aprés votre rewiew du code, celui soit meilleur. 

## 5) Définissez ce qu’est la qualité dans un projet informatique.

## 6) Ecrivez les scénarios en gherkin permettant de valider la fonction suivante:
La fonction prend en paramètre une valeur numérique et :
* Si la valeur est un multiple de 3, alors la fonction retourne fizz
* Si la valeur est un multiple de 5, alors la fonction retourne buzz
* Si la valeur est un multiple de 3 et de 5, alors la fonction retourne fizzbuzz
* La valeur d’entrée dans les autres cas.
