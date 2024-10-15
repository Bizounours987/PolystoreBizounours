# PolystoreBizounours
Découvrez nos charmantes petites boutiques, chacune unique en son genre, où vous trouverez des produits locaux, de l'artisanat traditionnel, et tout ce dont vous avez besoin pour profiter pleinement de la vie tropicale. Que vous soyez à la recherche de souvenirs, de produits frais, de matériel de surf, ou d'objets artisanaux, nos boutiques vous offrent un véritable voyage au cœur de la culture polynésienne.
<br/>
<br/>
## Project Structure commandes
• **git init** : Cette commande crée un nouveau dépôt Git dans le répertoire courant. Elle crée un sous-dossier caché appelé .git qui contient tous les fichiers nécessaires pour suivre les versions du projet. Après avoir exécuté cette commande, vous pouvez commencer à suivre les fichiers, faire des commits et utiliser toutes les autres fonctionnalités de Git.<br/>
<br/>
• **git status** : Cette commande est utilisée dans Git pour afficher l'état actuel du dépôt local. Elle fournit des informations sur les fichiers qui ont été modifiés, ajoutés ou supprimés, ainsi que sur les fichiers qui sont en attente d'être ajoutés à l'index (staging area) pour un prochain commit.<br/>
<br/>
• **git rm** : Cette commande est utilisée dans Git pour supprimer des fichiers du répertoire de travail et également de l'index (staging area).<br/>
<br/>
• **git add** : Ajoute des fichiers à l'index (ou zone de staging) pour les préparer à être enregistrés dans l'historique du projet lors du prochain commit. « Prépare tous les fichiers et dossiers pour être inclus dans le prochain commit. <br/>
<br/>
• **git ad . gitignore** : (à ajouter des fichiers dans Git, avec des précautions pour ignorer certains fichiers.)<br/>
<br/>
• **git commit -m "message à envoyer"** : Enregistre les changements dans l'historique de votre projet local (appelé commit). Le *-m* signifie que vous ajoutez un message descriptif pour expliquer ce que vous avez modifié ou ajouté.)<br/>
<br/>
• **git push origin main** : Est utilisée dans Git pour envoyer (ou "pousser") les modifications locales de votre branche principale (généralement appelée main) vers un dépôt distant, qui est référencé par le nom origin)<br/>
<br/>
<br/>
## Travailler sur une nouvelle branch :
• **git checkout -b <nom_branch>** : Crée une nouvelle branche nommée <nom_branch> et vous place sur cette branche immédiatement, vous permettant de commencer à y travailler sans avoir à effectuer une opération de changement de branche séparée après la création.<br/>
<br/>
• **git add .** : Ajoute tous les changements (nouveaux fichiers, modifications et suppressions) dans le répertoire de travail courant à l'index de Git, ce qui signifie que ces changements seront inclus dans le prochain commit. <br/>
<br/>
• **git commit -m "Ajout de la fonctionnalité vendor"** : Enregistre les changements dans l'historique de votre projet local (appelé commit). Le *-m* signifie que vous ajoutez un message descriptif pour expliquer ce que vous avez modifié ou ajouté. <br/>
<br/>
• **git push origin feature_vendor** : Envoie vos modifications de la branche locale feature_vendor vers le dépôt distant origin, mettant à jour ce dernier avec vos commits récents. Cela permet aux autres contributeurs d'accéder à votre travail et de collaborer sur le projet.<br/>
<br/>
--> **git push --set-upstram origin feature_vendor** : est utilisée pour pousser une branche locale vers un dépôt distant sur GitHub (ou tout autre dépôt distant) et pour établir un suivi de cette branche. Voici une définition simple des différents éléments de cette commande :<br/>
• Pousse les modifications de la branche locale ***feature_vendor*** vers le dépôt distant ***origin***.<br/>
• Crée une relation de suivi entre la branche locale et la branche distante, permettant à Git de savoir à quel dépôt et à quelle branche votre branche locale est associée pour les futures opérations de ***push*** et ***pull***.<br/>
<br/>
<br/>
## Une fois modif vendor finis : 
• **git checkout feature** :<br/>
<br/>
• **git fetch origin dev** :<br/>
<br/>
• **git rebase origin/dev** :<br/>
<br/>
<br/>

## Réinitialiser tout jusqu'à un dernier commit : 
**git reset --hard <clé_commit>** :<br/>
<br/>
**--hard pas bon (DANGEREUX)** :<br/>
<br/>
<br/>

## Récupérer modification dans dev sur ma branche : 
**git rebase origin/dev** :<br/>
<br/>
