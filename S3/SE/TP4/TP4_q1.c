#include <stdlib.h>
#include <stdio.h>
#include <sys/types.h>
#include <unistd.h>

int main()
{
	pid_t idproc;
	idproc =fork();
	
	if (idproc ==-1)
	{
		perror ("echec du fork");
		exit(EXIT_FAILURE);
	}
	printf ("A - Processus %d\n", getpid()); // à ajouter pour question b)
	if (idproc == 0) 
	{
	printf("processus fils %d\n",getpid());
	exit (EXIT_SUCCESS); // à enlever pr question b)
	}
        if(idproc>0)
	{
	sleep(5);
	}
	printf ("B-Processus %d\n", getpid());
	exit(EXIT_SUCCESS);
	
}


