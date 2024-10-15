# PolystoreBizounours
Découvrez nos charmantes petites boutiques, chacune unique en son genre, où vous trouverez des produits locaux, de l'artisanat traditionnel, et tout ce dont vous avez besoin pour profiter pleinement de la vie tropicale. Que vous soyez à la recherche de souvenirs, de produits frais, de matériel de surf, ou d'objets artisanaux, nos boutiques vous offrent un véritable voyage au cœur de la culture polynésienne.

## Project Structure commandes
• **git init** : (initialiser une nouvelle branche)<br/>
• **git status** : (afficher le status de votre branch)<br/>
• **git rm** : (fichier à enlever)<br/>
<br/>
• **git status** : afficher le status de votre branch<br/>
• **git add** : Ajoute des fichiers à l'index (ou zone de staging) pour les préparer à être enregistrés dans l'historique du projet lors du prochain commit. « Prépare tous les fichiers et dossiers pour être inclus dans le prochain commit. »<br/>
• **git ad . gitignore** : (à ajouter des fichiers dans Git, avec des précautions pour ignorer certains fichiers.)<br/>
• **git commit -m "message à envoyer"** : Enregistre les changements dans l'historique de votre projet local (appelé commit). Le *-m* signifie que vous ajoutez un message descriptif pour expliquer ce que vous avez modifié ou ajouté.)<br/>
<br/>
• **git push origin main** : Est utilisée dans Git pour envoyer (ou "pousser") les modifications locales de votre branche principale (généralement appelée main) vers un dépôt distant, qui est référencé par le nom origin)<br/>
<br/>

## Travailler sur une nouvelle branch :
• **git checkout -b <nom_branch>** : Crée une nouvelle branche nommée <nom_branch> et vous place sur cette branche immédiatement, vous permettant de commencer à y travailler sans avoir à effectuer une opération de changement de branche séparée après la création.<br/>
• **git add .** : Ajoute tous les changements (nouveaux fichiers, modifications et suppressions) dans le répertoire de travail courant à l'index de Git, ce qui signifie que ces changements seront inclus dans le prochain commit. <br/>
• **git commit -m "Ajout de la fonctionnalité vendor"** : Enregistre les changements dans l'historique de votre projet local (appelé commit). Le *-m* signifie que vous ajoutez un message descriptif pour expliquer ce que vous avez modifié ou ajouté. <br/>
• **git push origin feature_vendor** : Envoie vos modifications de la branche locale feature_vendor vers le dépôt distant origin, mettant à jour ce dernier avec vos commits récents. Cela permet aux autres contributeurs d'accéder à votre travail et de collaborer sur le projet.<br/>
--> **git push --set-upstram origin feature_vendor** : est utilisée pour pousser une branche locale vers un dépôt distant sur GitHub (ou tout autre dépôt distant) et pour établir un suivi de cette branche. Voici une définition simple des différents éléments de cette commande :
• Pousse les modifications de la branche locale ***feature_vendor*** vers le dépôt distant ***origin***.
• Crée une relation de suivi entre la branche locale et la branche distante, permettant à Git de savoir à quel dépôt et à quelle branche votre branche locale est associée pour les futures opérations de ***push*** et ***pull***.
<br/>
<br/>

## Une fois modif vendor finis : 
• **git checkout feature**
• **git fetch origin dev**
• **git rebase origin/dev**
<br/>
<br/>

## Réinitialiser tout jusqu'à un dernier commit : 
**git reset --hard <clé_commit>**
**--hard pas bon (DANGEREUX)**
<br/>
<br/>

## Récupérer modification dans dev sur ma branche : 
git rebase origin/dev
