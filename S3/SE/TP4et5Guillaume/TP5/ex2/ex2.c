#include <stdio.h>
#include <unistd.h>

int main(){
	printf ("avant l’execution de bonjour\n"); 
	execl ("./bonjour", "./bonjour",(char*) 0); 
	printf ("apres l’execution de bonjour\n");
}