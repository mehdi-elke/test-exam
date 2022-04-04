# Examen “Qualité et tests”


## 1) Définissez ce qu’est un test unitaire, son intérêt, ce qu’il doit contenir et comment évaluer sa qualité.
Un test unitaire est une procédure permettant de vérifier le bon fonctionnement d'une partie de code.   
Le test unitaire permet de documenter le code, sécuriser la maintenance de ce code et également de trouver les potentielles erreurs rapidement.
Son fonctionnement est découpé en 4 étapes : l'initialisation, l'exercice, la vérification et la désactivation.


## 2) Présentez la pyramide des tests, ses différents niveaux et son objectif.
La pyramide des tests se décompose en 4 parties : la première, les tests des composants où l'on teste séparément les composants de l'application.
Deuxièmement nous avons les tests d'intégration, ils sont entre effectués entre les composants afin de s'assurer du bon fonctionnement des interactions entre les composants.
Troisièmement on retrouve les tests système, ceux-ci permettent de vérifier si l'application correspond aux attentes et exigences, ils peuvents être fait de manière automatisée ou manuelle.
Enfin en dernier lieu les tests d'acceptation sont présents pour confirmer le bon fonctionnement de l'application, qu'elle correspond aux besoins de l'utilisateur.rice.

## 3) Définissez l’analyse statique du code, et comment un outil comme sonar permet d’améliorer la qualité de votre produit ?
L'analyse statique du code se résume en un ensemble de tests automatisés réalisés sur le code source d'une application, cela va permettre de rechercher les erreurs et vulnérabilités "généralistes" 
possiblement présentes.
Un outil comme Sonar nous permet donc de s'assurer que notre code sera beaucoup moins soumis à des erreurs et vulnérabilités connues et ainsi maintenir la qualité de notre code.

## 4) Expliquez la règle du “boy-scout”.
La règle se définit ainsi 'laisser le code dans un meilleur état que celui dans lequel vous l’avez trouvé', elle illustre le fait que bien souvent le code est écrit
dans la précipitation en raison des délais de livraison assez serrés rendant de ce fait la qualité du code un peu moins performant.
Il serait donc intéressant d'analyser le code de ses collègues afin d'avoir un code plus propre et performant.

## 5) Définissez ce qu’est la qualité dans un projet informatique.
La qualité dans un projet informatique permet d'être réaliste dans l'estimation des charges, mettre en place une démarche adaptée au secteur visé dans le développement et
cela permet aussi de prendre en compte la réalité juridique.

## 6) Ecrivez les scénarios en gherkin permettant de valider la fonction suivante:
La fonction prend en paramètre une valeur numérique et :
* Si la valeur est un multiple de 3, alors la fonction retourne fizz
* Si la valeur est un multiple de 5, alors la fonction retourne buzz
* Si la valeur est un multiple de 3 et de 5, alors la fonction retourne fizzbuzz
* La valeur d’entrée dans les autres cas.

Étant donné que la valeur que mon paramètre est un multiple de 3
Quand il passe à la validation
Alors ma fonction retourne fizz.

Étant donné que la valeur que mon paramètre est un multiple de 5
Quand il passe à la validation
Alors ma fonction retourne buzz.

Étant donné que la valeur que mon paramètre est un multiple de 3 et de 5
Quand il passe à la validation
Alors ma fonction retourne fizzbuzz.

Étant donné que la valeur que mon paramètre n'est ni un multiple de 5 ni un multiple de 3
Quand il passe à la validation
Alors ma fonction retourne la valeur d'entrée.