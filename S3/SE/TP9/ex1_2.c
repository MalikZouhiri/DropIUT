#include <sys/types.h>
#include <sys/ipc.h>
#include <sys/sem.h>
#include <unistd.h>
#include <stdlib.h>
#include <stdio.h>

int main(){
	key_t cle;
	struct sembuf operation;
	int semid;

	if((cle=ftok("/home/etudiants/etud13/mzouhiri/2emeannee/superdossier",1)) == -1) {
		fprintf(stderr,"Probleme de cle\n");
		exit(EXIT_FAILURE);
	}
	if((semid=semget (cle,1,0))==-1) {
		perror("\nErreur de création de sémaphore");
		exit(EXIT_FAILURE);
	}
	printf("Je suis la tache 2 et j'attends le semaphore ... \n");
	operation.sem_num=0; operation.sem_op=-1; operation.sem_flg=0;
	if(semop(semid,&operation,1)==-1) {
		perror("\nImpossible de décrémenter le sémaphore");
		exit(EXIT_FAILURE);
	}
	printf("Je suis le tache 2 et je peux rentrer en section critique... \n");
	sleep(5);
	printf("Fin de T2\n");
	semctl(semid,0,IPC_RMID);
	exit(EXIT_SUCCESS);
}
