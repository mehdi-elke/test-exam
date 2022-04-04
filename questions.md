# Examen “Qualité et tests”


## 1) Définissez ce qu’est un test unitaire, son intérêt, ce qu’il doit contenir et comment évaluer sa qualité.
Un test unitaire permet de vérifier le bon fonctionnement d'une méthode. Il permet d'assurer le code d'une application ou d'un programme.
Les test unitaire doivent être rapide, indépendant, jouer avec le même jeux de test, vérifier lui même le résultat automatiquement et présent.
 On évalue sa qualité de manière à ce qu'il soit utilisé sur chaque méthode de l'application pour éviter des coûts conséquents. cela permet la bonne intégrité de la solution.


## 2) Présentez la pyramide des tests, ses différents niveaux et son objectif.
La pyramide des tests. nous allons commencer du plus bas au plus haut
Les tests de composants permettent de tester les multitudes composant de l'application tout en les séparant pour assurer chaque fonction. Ceci sont des test unitaires
Les tests d'intégration s'effectue entre composant pour un bon fonctionnement
Les tests système permettent de vérifer le système pour vérifier la solution directement.
Les tests d'acceptation permettent de vérifier que la solution final correspond bien au besoin des utilisateurs 

## 3) Définissez l’analyse statique du code, et comment un outil comme sonar permet d’améliorer la qualité de votre produit ?
L'analyse statique du code sont des méthodes permettant de comprendre le comportement d'un programme quand il s'execute sans l'exécuter.
Sonar permet de respect les normes d'écriture du code, de réaliser des test, d'éviter la duplication de code, de checker de potentielles vulnérabilités.

## 4) Expliquez la règle du “boy-scout”.
La règle du boy-scout qui est : " Toujours laisser le campement plus propre que l'on ne l'a trouvé."
Permet de nous dire qu'il est important pour nous de nettoyer le plus souvent nos système ou solution pour le rendre meilleur

## 5) Définissez ce qu’est la qualité dans un projet informatique.
La qualité permet de réaliser l'appel de beaucoup de concepts permettant la gestion d'un projet de manière à l'améliorer
Cela permet de réduire pas mal de problèmes dont les coûts, les délais, les risques etc...

## 6) Ecrivez les scénarios en gherkin permettant de valider la fonction suivante:
La fonction prend en paramètre une valeur numérique et :
* Si la valeur est un multiple de 3, alors la fonction retourne fizz
    Etant donné le nombre est un multiple de 3
    Quand nous execution la fonction fizzbuzz
    Alors nous récupérons "fizz"
* Si la valeur est un multiple de 5, alors la fonction retourne buzz
    Etant donné le nombre est un multiple de 5
    Quand nous execution la fonction fizzbuzz
    Alors nous récupérons "buzz"
* Si la valeur est un multiple de 3 et de 5, alors la fonction retourne fizzbuzz
    Etant donné le nombre est un multiple de 5 et 3
    Quand nous execution la fonction fizzbuzz
    Alors nous récupérons "fizzbuzz"
* La valeur d’entrée dans les autres cas.
Si la valeur est un multiple de 3 et de 5, alors la fonction retourne fizzbuzz
    Etant donné le nombre est égal à une chaine de caractère
    Quand nous execution la fonction fizzbuzz
    Alors l'utilisateur doit re saisir une valeur différente
