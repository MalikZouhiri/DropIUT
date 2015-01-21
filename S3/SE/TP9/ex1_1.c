#include <sys/types.h>
#include <sys/ipc.h>
#include <sys/sem.h>
#include <unistd.h>
#include <stdio.h>
#include <fcntl.h>
#include <stdlib.h>

int main(){
	key_t cle;
	struct sembuf operation;
	int semid;

	if((cle=ftok("/home/etudiants/etud13/mzouhiri/2emeannee/superdossier",1)) == -1)
	{
		perror("Probleme de cle ftok");
		exit(EXIT_FAILURE);
	}
	if((semid=semget(cle, 1, IPC_CREAT|IPC_EXCL|0600)) == -1){
		perror("\nErreur de création de sémaphore");
		exit(EXIT_FAILURE);
	}
	semctl(semid,0,SETVAL,0);
	printf("Je suis la tache 1 et je suis en section critique pendant 5 secondes...\n");
	sleep(5);
	printf("T1: Fin de section critique, operation V sur le semaphore...\n");
	operation.sem_num=0;
	operation.sem_op=1;
	operation.sem_flg=0;
	if(semop(semid,&operation,1)==-1){
		perror("\nImpossible d'incrémenter le sémaphore");
		exit(EXIT_FAILURE);
	}
	printf("Fin de T1\n");
	exit(EXIT_SUCCESS);
}
