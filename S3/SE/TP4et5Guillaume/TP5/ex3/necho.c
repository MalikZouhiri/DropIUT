#include <stdio.h>
#include <unistd.h>
#include <stdlib.h>

int main (int argc, char *argv[]) { 
	int i; 
	for (i=0; i<argc; i++) { 
		printf("argv[%i] = %s\n", i, argv[i]); 
	} 
}