#include <unistd.h>
#include <signal.h>
#include <stdlib.h>
#include <stdio.h>

int fin_premier = 0;
int fin_deuxieme = 0;
void recup(int s)
{
	printf("Signal 1 reçu, code : %d\n", s);
	fin_premier = 1;
}

void recup2(int s)
{
	printf("Signal 2 reçu, code : %d\n", s);
	fin_deuxieme = 1;
}

int main() {
	
	signal (SIGUSR1, recup);
	signal (SIGUSR2, recup2);

	pid_t pid_a = -10;

	pid_t pid_b = -10;

	pid_a = fork();
	if (pid_a>0)
	{
		pid_b = fork();
	}
		//Fin de création des 2 fils

	//Fils 1
	if (pid_b==-10 && pid_a==0)
	{
		sleep(4);
		kill(getppid(),SIGUSR1);
		pause();
	}
	
	//Fils2
	if (pid_a>0 && pid_b==0)
	{
		sleep(5);
		kill(getppid(), SIGUSR2);
		pause();
	}
	
	//Papa
	if (pid_a>0 && pid_b >0)
	{
		while(fin_premier==0 || fin_deuxieme==0)
		{
			pause();
		}
		kill(pid_a, SIGTERM);
		kill(pid_b, SIGTERM);

		exit(0);

	}
	
}
