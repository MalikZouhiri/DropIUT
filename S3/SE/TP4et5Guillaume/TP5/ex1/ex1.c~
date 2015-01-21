#include <stdlib.h>
#include <stdio.h>
#include <sys/types.h>
#include <unistd.h>

void code_fils(int i);

void main()
{
	int N, i, j;
	int proc_crees = 0;
	printf("Entrer N: ");
	scanf("%i", &N);
	pid_t idproc;

	for(i=0;i<N;i++)
	{
		idproc= fork();
		if( idproc == -1) {
			printf("error");
			exit(1);
		}
	
		if( idproc == 0) {
			code_fils(i);
			exit(0);
		}
	
		if( idproc > 0){
			proc_crees++;
		}
	}
	
	for(j=0;j<proc_crees;j++) 
	{
 		wait();
	}
	printf("Père fini");
}

void code_fils(int a)
{
	printf("Je suis le processus %i, mon pid est %d, je suis un multiple de %d\n",a+1, getpid(),a+1);
	int i;
	for(i=1;i<=100;i++)
	{
		printf("%i*%i = %i\n", a+1, i, (a+1)*i);
	}
}

