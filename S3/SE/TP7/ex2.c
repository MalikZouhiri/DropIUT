#include <unistd.h>
#include <signal.h>
#include <stdlib.h>
#include <stdio.h>

void recup(int s)
{
	printf("signal recu %d\n", s);
}

int main() {
	signal (SIGINT, recup);
	while(1)
		pause();
	exit (EXIT_SUCCESS);
}
