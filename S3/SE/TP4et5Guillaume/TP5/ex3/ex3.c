#include <stdio.h> 
#include <unistd.h>

char *arguments[5] = { "./necho", "au revoir", "123", "3.14159" }; 

int main() {
	/* Pour la fonction execl*/
	arguments [4] = ( char *) 0;
	execl ("./necho", arguments[0], arguments[1], arguments[2], arguments[3], (char *) 0);

	/* Pour la fonction execv
	execv ("./necho", arguments);*/
	}