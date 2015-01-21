#include <stdio.h> 
#include <unistd.h>
#include <stdlib.h> 

int main(){ 
	pid_t idpr; 
	int nbFils=0; 

	while (1){
		while (getc(stdin) != '\n');
		idproc= fork ();
		if (idpr==−1) {
			perror ("echec du fork"); 
			exit (EXIT FAILURE) ;
		}
		if (idpr==0) {
			execlp ("xterm", "xterm", NULL); 
			perror ("erreur exec");
			exit (EXIT FAILURE) ;
￼￼￼￼￼￼￼￼} 
 		nbFils++;
	}
	exit(EXIT_SUCCESS);
}