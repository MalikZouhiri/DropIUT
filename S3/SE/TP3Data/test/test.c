#include <stdio.h>
#include <sys/dir.h>
#include <sys/stat.h>

void lire_dir(char* chem) {
DIR* dir;
struct direct* dirdet;
struct stat st;
char tmp[256];
int rep;
int erreur;

	dir = opendir(chem);
	/* on saute . et .. */
	dirdet = readdir(dir);
	dirdet = readdir(dir);
	while((dirdet = readdir(dir)) != NULL) {
		printf("%s : N ino = %d\tNom = %s\t",chem,dirdet->d_ino,dirdet->d_name);
		printf("  offset = %d  ",telldir(dir));
		// ou l'on utilise "chdir()"
		strcpy(tmp,chem);
		strcat(tmp,"/");
		strcat(tmp,dirdet->d_name);
		rep = stat(tmp,&st);
		if(rep == 0) {
		  if(S_ISLNK(st.st_mode)) printf("  LIEN\n");		 
		  if(S_ISDIR(st.st_mode)) {
				printf("  DIRECTORY\n");
				lire_dir(tmp);
				}
		  if(S_ISREG(st.st_mode)) printf("  FICHIER\n");

			}
		}
	closedir(dir);
}

main(int argc, char *argv[]) {
lire_dir(argv[1]);
}
