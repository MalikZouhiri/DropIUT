#include <stdio.h>
#include <fcntl.h>
#include <unistd.h>

#define MAXPERS 3
#define TAILLE_NOM 15
#define TAILLE_ADRESSE 25

struct personne {
char nom[TAILLE_NOM];
int age;
char adresse[TAILLE_ADRESSE];
};


typedef struct personne Personne;


/* saisie des informations pour les MAXPERS personnes */
void saisiePersonnes(Personne *p) {
	int i;
	for (i=0;i<MAXPERS;i++)
	{
		printf("Entrez le nom de la %ie personne\n", i+1);
		scanf("%s",p[i].nom);
		//fflush(stdin);
		printf("Entrez l'age de la %ie personne\n", i+1);
		scanf("%d",&p[i].age);
		//fflush(stdin);
		printf("Entrez l'adresse de la %ie personne\n", i+1);
		scanf("%s",p[i].adresse);
		//fflush(stdin);
	}

}

/* sauvegarde des informations saisies dans le fichier "personne.data" */
void sauvegardePersonnes(Personne *p){
	int f = open("personne.data", O_WRONLY | O_CREAT | O_TRUNC, 777);
	write(f, p,MAXPERS*sizeof(Personne));
	close(f);
}

/* lecture du fichier "personne.data" entier */
void lecturePersonnes(Personne *p){
int f, i;
f=open("personne.data",O_RDONLY);
read (f, p, MAXPERS*sizeof(Personne));
close (f);

for (i=0; i<MAXPERS; i++) {
printf ("Personne n° %d\n\tNom: %s\n\tAge: %d\n\tAdresse: %s\n",i+1, p[i].nom, p[i].age, p[i].adresse);
}
}

/* lecture d'un enregistrement particulier (num) du fichier "personne.data" */
void lireUnePersonne(Personne *p,int num){

int f;
f=open("personne.data",O_RDONLY);
read (f, p, MAXPERS*sizeof(Personne));
close (f);

printf ("Personne n° %d\n\tNom: %s\n\tAge: %d\n\tAdresse: %s\n",num, p[num-1].nom, p[num-1].age, p[num-1].adresse);

}

/* fonctionnement du programme :
* - s'il n'y a pas d'arguments, le programme saisi les personnes et les sauvegarde
* dans le fichier avant de se terminer ;
* - si l'argument est 'a', le programme lit le fichier des personnes, l'affiche et se
* termine ; si le fichier "personne.data" n'existe pas, affichercontents of both strings are equa un message d'erreur ;
* - si l'argument est un chiffre entre 0 et MAXPERS, lire l'enregistrement correspondant
* et l'afficher, sinon erreur.
*/

int main(int argc, char *argv[]) {

Personne pers[MAXPERS];
int i;

if(argc == 1) { /* pas d'arguments */
	saisiePersonnes (pers);

	sauvegardePersonnes (pers);
}
else if(strcmp(argv[1],"a") == 0) {
	lecturePersonnes (pers);
}
else {
	lireUnePersonne (pers, atoi(argv[1]));
}
return 0;
}
