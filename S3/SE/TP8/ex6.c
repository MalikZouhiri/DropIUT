#include <unistd.h>
#include <stdio.h>
#include <fcntl.h>
#define TRUE 1


int main(void ) {
	int fd;
	fd= open("verrou.txt", O_RDWR); /* doit exister */
		if(lockf(fd, F_LOCK, 0) == 0){ 
		   	printf("%d a verrouillé le fichier\n",getpid());
            		printf("  %d: Je travail dans la zone critique \n",getpid());
		   	sleep(5);
			if(lockf(fd, F_ULOCK, 0) == 0)
			printf("%d a déverrouillé le	fichier\n", getpid());
			return 0;
		}
}
