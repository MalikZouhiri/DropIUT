#include <stdio.h>
#include <stdlib.h>
#include <string.h>
#include <sys/stat.h>

int main(int argc, char *argv[]) {
  /* la structure "stat" permet de r�cup�rer les informations contenues dans
	  les ent�tes (i-noeud) de fichier. Elle se trouve dans le fichier 
	  "/usr/include/bits/stat.h"
struct stat {
   unsigned short st_dev;   // identifiant du p�riph�rique contenant le fichier
   unsigned short __pad1;
	unsigned long st_ino;    // i-noeud associ� au fichier.
	unsigned short st_mode;  // mode du fichier (type et droit d'acc�s).
	unsigned short st_nlink; // nombre de liens absolus vers le fichier.
	unsigned short st_uid;   // identifiant de l'utilisateur proprietaire
	unsigned short st_gid;   // identifiant du groupe
	...
	unsigned long st_size;   // taille du fichier en octets
	unsigned long st_blksize;// taille des blocs sur le peripherique
	unsigned long st_blocks; // nombre de blocs alloues
	__time_t st_atime;       // date du dernier acc�s.
	__time_t st_mtime;       // date de la derni�re modification
	__time_t st_ctime;       // date du dernier changement de status
};
*/
  struct stat st;
  char* path;
  int rep;
  /* controle des parametres d'appel */
  if(argc != 2) {
	 printf("erreur de syntaxe d'appel.\n");
	 exit(1);
  }
  /* recuperation du nom du repertoire */
  path = (char*)malloc(strlen(argv[1]) +1);
  strcpy(path,argv[1]);
  /* recuperation des infos du i_noeud par stat */
  rep = stat(path,&st);
  if(rep == 0) {
	 printf("%s : ino = %d\ttaille = %d\t",path,st.st_ino,st.st_size);
	 if(S_ISDIR(st.st_mode)) printf(" DIRECTORY ");
	 if(S_ISREG(st.st_mode)) printf(" FICHIER ");
	 if(S_ISLNK(st.st_mode)) printf(" LIEN ");
	 printf("owner = %d\tgrpe = %d\n",st.st_uid,st.st_gid);
  }
  else {
	 perror("erreur de stat");
	 exit(2);
  }
  /* liberation memoire */
  free(path);
}
