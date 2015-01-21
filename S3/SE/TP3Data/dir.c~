#include <stdio.h>
#include <stdlib.h>
#include <string.h>
#include <dirent.h>
/* #include <sys/dir.h> */

int main(int argc, char *argv[]) {
  /* la structure DIR permet de récupérer des informations sur un répertoire */
  DIR* dir;

  /* la structure "dirent" contient des informations sur un élément du 
	  répertoire (le détail d'une entrée de répertoire, c'est-à-dire le 
	  "i-noeud" du fichier et son nom). La structure "dirent" se trouve dans 
	  le fichier "/usr/include/bits/dirent.h".

struct dirent {
#ifndef __USE_FILE_OFFSET64
   __ino_t d_ino;
	__off_t d_off;
#else
   __ino64_t d_ino;
	__off64_t d_off;
#endif
   ...
	char d_name[256];
}; */
  struct dirent* dirdata;
  char* path;
  /* controle des parametres d'appel */
  if(argc != 2) {
	 printf("erreur de syntaxe d'appel.\n");
	 exit(1);
  }
  /* recuperation du nom du repertoire */
  path = (char*)malloc(strlen(argv[1]) +1);
  strcpy(path,argv[1]);
  /* ouverture du repertoire et controle d'existence */
  dir = opendir(path);
  if(dir == NULL) {
	 perror("erreur opendir");
	 exit(0);
  }
  /* lecture des donnees du repertoire */
  while((dirdata = readdir(dir)) != NULL) {
	 printf("%s : N ino = %d\tNom = %s\n",path,dirdata->d_ino,dirdata->d_name);
  }
  /* liberation memoire */
  free(path);
  /* fermeture du repertoire ouvert */
  closedir(dir);
}
