# Examen “Qualité et tests”


## 1) Définissez ce qu’est un test unitaire, son intérêt, ce qu’il doit contenir et comment évaluer sa qualité.
* Un test unitaire est une technique permettant de vérifier le bon fonctionnement d'une partie (fonctionnalité) d'une application/site web
* L'interet du test unitaire n'est plus de trouver un/des bugs, mais de permettre de développer des composants qui se conforment à une spécification.
* Les test unitaires doivent avoir les 5 caractéristiques suivantes :
    * **F**ast : Un test unitaire doit être en mesure d'être joué rapidement, pour que les développeur puissent les lancé tranquillement.
    * **I**ndependant : On doit pouvoir réaliser un test séparement des autres il doivetn être exécuter individuellement ou en série mais avec les mêmes résultats. Given, When, Then.
    * **R**epetable : les test doivent être joué sans limites, cependant ils doivent avoir tous le mêmes résultats.
    * **S**elf-validating : Les résultat doivent être vérifier par le test, de plus ils ne doivent pas être douteux c'est soit un sucess ou un echec.
    * **T**imely/Thorough : Cela veux dire que les test doivent se faire lors que nous codons, et nous devons faire des test plus large pour avoir des sucess et des échecs.

## 2) Présentez la pyramide des tests, ses différents niveaux et son objectif.
* Dans la pyramide des tests il y a 3 palier le premier donc le plus bas est **Les tests unitaires**, ensuite le palier du dessus **Les tests d'intégration**, pour ensuite finir avec **les tests d'acceptation**.
* Cela veux dire que (1er palier), on investit beaucoup de test unitaires pour tester largement, ce qui nous fournit une base solide de la pyramide.
* (2éme palier), ce sont des tests effectués entre les composants dans le but de s'assurer du bon fonctionnement.
* (3éme pallier), ces tests sont des tests finaux dans le but de valider ce test (ils sont fait manuellement)

## 3) Définissez l’analyse statique du code, et comment un outil comme sonar permet d’améliorer la qualité de votre produit ?
* Cette technique permet de détecter des violations par rapports à des règles et des bonnes pratiques. Cette méthode est permet l'automatisation et la possibilité d'avertir le développeur des failles.
* Sonar car il permet de formater le code automatiquement, mais aussi car c'est le plus connu, et il permet également de mesurer la qualité de notre projet de plusieurs façons

## 4) Expliquez la règle du “boy-scout”.
* Le boy-scout consiste a laisser un camp plus propre que celui que nous avons trouvé, au niveau code on peux traduire ça par laisser un code plus propre (de meilleure qualité) que celui que nous avons pris/trouvé/fait de base.

## 5) Définissez ce qu’est la qualité dans un projet informatique.
* Pour moi la qualité d'un projet informatique , c'est que le projet doit être maintenable, fiable, efficace, performant, et surtout fonctionnel.


## 6) Ecrivez les scénarios en gherkin permettant de valider la fonction suivante:
La fonction prend en paramètre une valeur numérique et :
* Si la valeur est un multiple de 3, alors la fonction retourne fizz
* Si la valeur est un multiple de 5, alors la fonction retourne buzz
* Si la valeur est un multiple de 3 et de 5, alors la fonction retourne fizzbuzz
* La valeur d’entrée dans les autres cas.

* Puisque j'ai envoyé le chiffre 3
* Quand j'appuie sur "submit"
* Alors le programme me renvoie fizz
* Puisque j'ai envoyé le chiffre 5 
* Quand j'appuie sur "submit"
* Alors le programme me renvoie buzz
* Puisque j'ai envoyé le chiffre 15 
* Quand j'appuie sur "submit"
* Alors le programme me renvoie fizzbuzz
* Puisque j'ai envoyé le chiffre 2 
* Quand j'appuie sur "submit"
* Alors le programme me renvoie 2