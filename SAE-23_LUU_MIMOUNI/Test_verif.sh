#!/bin/bash
 # BY BADR MIMOUNI 

#Vérification de la présence des logiciels
if which libreoffice >/dev/null
then
	echo "Libre Office est installé"
else
	echo "Libre Office  n'est pas installé"
fi

if which gedit >/dev/null
then
	echo "Gedit est installé"
else
	echo"Gedit n'est pas installé"
fi

if which eclipse >/dev/null
then
	echo "Eclipse est installé"
else
	echo "Eclipse n'est pas installé"
fi

if which acroread >/dev/null
then
	echo "Acrobat Reader 9 est installé"
else
	echo "Acrobat Reader 9 n'est pas installé"
fi

if which ganttproject >/dev/null
then
	echo "Gantt est bien installé"
else
	echo "Gantt n'est pas installé"
fi

if which java >/dev/null
then
	echo "Java est bien installé"
else
	echo "Java n'est pas installé"
fi

if which asciidoc >/dev/null
then
	echo "Asciidoc est bien installé"
else
	echo "Asciidoc n'est pas installé"
fi

#Fin de la vérification de la présence des logiciels

#Vérification de la présence de tout les utilisateurs
# BY BADR
liste='aA bB cC dD eE fF gG hH iI jJ kK lL mM nN oO pP qQ rR sS tT'
for var in $liste
do
	if grep $var /etc/passwd >/dev/null
	then
		echo "L'utilisateur $var est présent"
	else
		echo "L'utilisateur $var n'est pas présent"
	fi
done

#Fin de la présence de tout les utilisateurs

#Verification de la présence des groupes
# By Badr

liste2='VM Etudiants'
for var in $liste2
do
	if grep $var /etc/group >/dev/null
	then
		echo "Le groupe $var est présent"
	else
		echo "Le groupe $var n'est pas présent"
	fi
done

#Fin de la vérification de la présence des groupes 

#Vérification des allias

liste3='fr inst'
for var in $liste3
do
	if grep $var ~/.bashrc >/dev/null
	then
		echo "L'allias $var est présent"
	else
		echo "L'allias $var n'est pas présent"
	fi
done

#Fin de la vérification des allias


