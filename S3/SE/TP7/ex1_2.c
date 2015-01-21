#include <unistd.h>
#include <signal.h>
#include <stdlib.h>
#include <stdio.h>

void gestionnaire (int s)
{
	printf("Signal recu %d\n", s);
}

int main()
{
	signal (SIGUSR1, gestionnaire);
	printf("processus %d attend\n", getpid());
	pause();
	printf("fin processus\n");
	exit(EXIT_SUCCESS);
}
