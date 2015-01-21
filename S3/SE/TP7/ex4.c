#include <unistd.h>
#include <signal.h>
#include <stdlib.h>
#include <stdio.h>



void reveil (int s)
{
	printf("l'alarme sonne !\n");
}

int main()
{
	signal(SIGALRM, reveil);
	alarm(1);	
	pause(); // Pour bloquer le processus, il est préférable d'utiliser un pause() psk c plus swaag	
		
	exit (EXIT_SUCCESS);
}
