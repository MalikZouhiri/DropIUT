#include <unistd.h>
#include <signal.h>
#include <stdlib.h>
#include <stdio.h>

int recu=0;

void inter (int s)
{
	//signal(s,inter);
	recu++;
	printf("signal recu\n");
}

void sortie (int s)
{
	printf ("sortie du pere par Ctl-C, il a recu %d signaux \n", recu);
	exit(EXIT_SUCCESS);
}

int main()
{
	pid_t pid;
	pid = fork();
	if (pid==-1)
	{
		perror ("erreur fork");
		exit (EXIT_FAILURE);
	}
	if (pid ==0)
	{
		int i;
		for (i=0;i<10;i++)
		{
			kill(getppid(), SIGUSR1);
			sleep(1);
		}
		printf("fin du fils \n");
		exit (EXIT_SUCCESS);
	}
	else
	{
		signal(SIGUSR1, inter);
		signal (SIGINT, sortie);
		pause();				
		printf("fin du pere \n");
		exit (EXIT_SUCCESS);
	}
}
















