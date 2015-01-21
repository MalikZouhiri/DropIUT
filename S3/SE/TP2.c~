#include <stdio.h>
#include <stdlib.h>
#include <string.h>
#include <sys/stat.h>
#include <dirent.h>

int fileStat(char * path);

int lsRec(char *pathDir);


// /home/etudiants/etud13/ajaubour/Test
int main (int argc, char *argv[])
{
	char* path;
	
	/* controle des parametres d'appel */
	if (argc != 2)
	{
		printf("erreur de syntaxe d'appel. \n");
		exit(EXIT_FAILURE);
	}
	
	/* recuperation du nom du repertoire */
	path = (char *)malloc(strlen(argv[1]) +1);
	strcpy(path, argv[1]);

	lsRec(path);
	
	free(path);
	
	exit (EXIT_SUCCESS);
}

int fileStat(char * path){
        struct stat st;
	int rep;
	/* recuperation des infos du i_noeud par stat */
	rep = stat(path,&st);
	if (rep == 0)
	{
		printf("ino = %d\ntaille = %d\n", st.st_ino, st.st_size);
		printf("owner = %d\ngrpe = %d\n", st.st_uid, st.st_gid);
		if (S_ISDIR(st.st_mode)) printf("DIRECTORY \n\n");
		if (S_ISREG(st.st_mode)) printf("FICHIER \n\n");
		if (S_ISLNK(st.st_mode)) printf("LIEN \n\n");
		if (S_ISDIR(st.st_mode)) lsRec(path);
	}
	else
	{
		perror(" erreur de stat");
		exit (EXIT_FAILURE);
	}

}

int lsRec(char *pathDir){

	DIR* dir;
        struct dirent* dirdata; 
        // ouverture du répertoire et contrôle d'existence ******
	dir = opendir(pathDir);
	if (dir == NULL)
	{
		perror("erreur opendir");
		exit (EXIT_FAILURE);
	}
	else
	{
		//Pour éviter les . et ..
		dirdata = readdir(dir);
		dirdata = readdir(dir);
	}

	/* lecture des donnees du repertoire */ // **************
	while ((dirdata = readdir(dir)) != NULL)
	{
		printf("nom = %s\n",dirdata->d_name);	
		
		char * path_file=malloc(strlen(pathDir)+1+strlen(dirdata->d_name));
		strcpy(path_file, pathDir);
		strcpy(path_file+strlen(pathDir), "/");
		strcpy(path_file+strlen(pathDir)+1, dirdata->d_name);		

                //printf("***%s***\n", path_file);
		fileStat(path_file);
			
	
	}
       closedir(dir);

}
