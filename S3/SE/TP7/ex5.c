#include <unistd.h>
#include <signal.h>
#include <stdlib.h>
#include <stdio.h>

void recup(int s)
{
	printf("Bonjour%d\n", s);
}

void recup2(int s)
{
	printf("Bonsoir%d\n", s);
}

int main() {
	
	pid_t pid;
	pid = fork();
		
	if (pid==-1)
	{
		perror ("erreur fork");
		exit (EXIT_FAILURE);
	}
	if (pid ==0)
	{
		printf("Le fils envoie un signal SIGUSR1\n");
		kill(getppid(),SIGUSR1);
		printf("Le fils envoie un signal SIGUSR2\n");
		kill(getppid(),SIGUSR2);
		exit(EXIT_SUCCESS);
	}
	else
	{
		signal (SIGUSR1, recup);
		signal (SIGUSR2, recup2);
		pause();
		wait(); // On attend que le fils se termine.
		exit (EXIT_SUCCESS);
	}
	
}
