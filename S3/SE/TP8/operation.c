#include <stdlib.h>
#include <stdio.h>
#include <sys/types.h>
#include <sys/uio.h>
#include <unistd.h>
#include <sys/stat.h>
#include <fcntl.h>
#include <string.h>
#include <time.h>
#include <stdbool.h>


int main (int argc, char *argv[])
{
    bool isDebiteur=false;
    int fd;
    
    srand(time(NULL));
    if (argc != 2)
    {
      printf(" Utilisation : %s max_depôt_ou_extraction! \n", argv[0]);
      exit(2);
    }
  
    int max_depot_ou_extraction=0;
    if ((max_depot_ou_extraction = atoi (argv[1])) == -1)
    {
      perror ("Error convert ");
      exit (1); 
    }

    if(max_depot_ou_extraction==0){
        /** if the parameter is 0 then I only init the account with 0 **/
        if ((fd = open("account.txt", O_WRONLY | O_CREAT | O_TRUNC, S_IRUSR | S_IWUSR | S_IRGRP | S_IROTH)) == -1)
        {
            perror ("error open");
            exit (1);
        }
        int initValue=0;
        lseek(fd, 0L, 0);
        write(fd, &initValue, sizeof(int));
        close(fd);
        exit(0);
    }
    
    if(max_depot_ou_extraction<0)  {
        isDebiteur=true;
        printf("Processus %d debiteur \n", getpid());
        max_depot_ou_extraction=-max_depot_ou_extraction;
        
    }
    else {
        printf("Processus %d processus crediteur \n", getpid());
    }
    
    if ((fd=open ("account.txt", O_RDWR)) == -1)
    {
        perror ("error open");
        exit (1);
    }
    
    int oldValue=0;
    int op=0;
    int sum=0;
    while(op<10){
        
        int oldValue=0;
        lseek(fd, 0L, 0);
        read(fd, &oldValue, sizeof(int));
        printf("Processus %d, I read %d from the account\n", getpid(), oldValue);
    
        int  value = rand() % max_depot_ou_extraction;
        if(isDebiteur) printf("Processus %d, I extract %d from the account\n", getpid(), value );
        else printf("Processus %d, I add %d to the account\n", getpid(), value );
        
        if(isDebiteur) {
            oldValue-=value;
            sum-=value;
        }
        else{
         sum+=value;
         oldValue+=value;
        }
        
        sleep(rand() % 2);
        
        lseek(fd, 0L, 0);
        write(fd, &oldValue, sizeof(int));
        printf("Processus %d, I wrote %d on the account\n", getpid(), value );
        
       
        op++;
        
    }
  
    lseek(fd, 0L, 0);
    read(fd, &oldValue, sizeof(int));
    printf("Processus %d, I operated  %d on the account and now the account is %d \n", getpid(), sum, oldValue );
    
    close(fd);
    
}
