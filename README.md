# Commandes nouvelle pour réduire la taille des images : 
• Pour installer le fichier, vous devez vous trouver dans cette endroit : **cd php/view/img/Store/**
• Pour installer et réduire la taille vous devez d'abord taper : **su etu** <br/>
<br/>
• Une fois le mot de passe rentré faire un **sudo apt install imagemagick**<br/>
<br/>
• Faite un **ctrl + D**<br/>
<br/>
• Vous devrez faire un **mkdir thumbs** dans le fichier d'image où vous vous situez normalement.<br/>
<br/>
• Puis taper cette commande : **mogrify  -format webp -path thumbs -thumbnail 100x100** ***.webp**<br/>
<br/>
Une fois ceci fait vous obtiendrez une taille de fichier plus abordable.
