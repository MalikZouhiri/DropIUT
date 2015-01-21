#include <stdlib.h>
#include <stdio.h>
#include <sys/types.h>
#include <unistd.h>

int main() {
	int i, N; 
	pid_t idproc ;

	printf ("donner la valeur pour N\n");
	scanf ("%d", &N);
	for (i=0; i<N; i++) {
		idproc=fork () ;
		if (idproc==-1) {
			perror("probleme fork");
			exit(EXIT_FAILURE) ; 
		}
		else {
			printf ("A− processus %d son pere est: %d\n", getpid(), getppid());
		}
		printf ("Fin processus numero %d\n" , getpid());
		exit(EXIT_SUCCESS);
	}
}
