#include <unistd.h>
#include <stdio.h>
#include <stdio.h>

int main() {
	printf("processus %d attend\n", getpid());
	pause();
	printf("fin processus\n);
	exit(EXIT_SUCCESS);
}
