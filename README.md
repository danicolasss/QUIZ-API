# Utilisation de l'API

> Pour fonctionner ils est nécessaire de récupérer un token voir endpoint 5
> 
## Endpoint 1: Obtenir la liste des thèmes
**Méthode:** _GET_

**URI:** _/api/themes_

**Fonctionnalité:** Récupérer la liste de tous les thèmes disponibles dans l'application.

**Réponse:** Un objet JSON contenant la liste des thèmes, sérialisée en utilisant le groupe de sérialisation list_theme, avec un code de statut HTTP 200 (OK).

## Endpoint 2: Obtenir des questions pour un thème spécifique
**Méthode:** _GET_

**URI:** _/api/themes/{slug}/questions/{nbQuestions}_



**Fonctionnalité:** Récupérer un nombre spécifié de questions aléatoires pour un thème spécifique, en utilisant son slug comme paramètre d'URI.

**Paramètres d'URI:** 
* _{slug}_: Le slug du thème pour lequel vous souhaitez obtenir des questions. 

* _{nbQuestions}_: Le nombre de questions que vous souhaitez obtenir.

**Réponse:** Un objet JSON contenant la liste des questions récupérées, sérialisée en utilisant le groupe de sérialisation get_question, avec un code de statut HTTP 200 (OK).


## Endpoint 3: Obtenir toutes les questions
**Méthode:** _GET_

**URI:** _/api/getQuestions/_

**Fonctionnalité:** Récupérer la liste de toutes les questions disponibles dans l'application.

**Réponse:** Un objet JSON contenant la liste de toutes les questions, sérialisée en utilisant le groupe de sérialisation get_question, avec un code de statut HTTP 200 (OK).

## Endpoint 4: Permet d'ajouter une ou plusieurs questions
**Méthode:** _POST_

**URI:** _/api/addQuestions/_

**Permissions requises:** L'utilisateur doit être connecté en tant qu'administrateur (ROLE_ADMIN) pour pouvoir créer une question

**Fonctionnalité:** permet d'ajouter une ou plusieurs questions à la base de données.

**Paramètres de requête:** Un objet JSON contenant la liste de toutes les questions, sérialisée en utilisant le groupe de sérialisation get_question, avec un code de statut HTTP 200 (OK).

**Example de Json:**

![](../../quizz-V.2/quizz/json.png)

## Endpoint 5: Permet de récupérer un token pour l'authentification
**Méthode:** _POST_

**URI:** _/api/login_check/_

**Fonctionnalité:** Récupérer un token a mettre dans Authorization dans le header de la requête .

**Réponse:** Un objet JSON contenant un token, avec un code de statut HTTP 200 (OK).

**Example de Json:**

![](../../quizz-V.2/quizz/loginjson.png)
