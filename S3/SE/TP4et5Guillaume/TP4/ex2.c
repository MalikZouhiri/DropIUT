#include <stdlib.h>
#include <stdio.h>
#include <sys/types.h>
#include <unistd.h>

int main() {
	int variable; 
	pid_t idproc; 
	variable=5;

	idproc = fork(); 
	if( idproc == -1) {
		perror("echec fork"); 
		exit(EXIT_FAILURE);
	}
	if (idproc == 0) {
		printf("fils avant, variable = %d, idproc = %d\n", variable, idproc);
		variable = 24;
		sleep(4);
		printf("fils apres, variable = %d, idproc = %d\n", variable, idproc);
	}
	else {
		printf("pere avant, variable = %d, idproc = %d\n", variable, idproc);
		variable = 12;
		sleep(10);
		printf("pere apres, variable = %d, idproc = %d\n", variable, idproc);
		wait(NULL);
	}
	exit(EXIT_SUCCESS);
}