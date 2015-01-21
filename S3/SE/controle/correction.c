#define N 10

void main()
{
	int [N] descr_tubes;
	d=1000000000/N;
	a=0;
	b=d;

	for(i=0;i<N;i++)
	{
		int n=fork();
		if(n==0)
		{
			code_fils();
		}		
		if (n>0)
		{
			close(fd[1]);
			descr_tubes[i] = fd[0];
			a=b;
			b=a+d;
		}
	}


	for(int i=0;i<N;i++)
	{
		read(descr_tubes[i],&n,sizeof(int));
		printf("%d",n);
		while(n!=0)
		{
			read(descr_tubes[i],&n,sizeof(int));
			printf("%d",n);
		}	
	}

}

execute_code_fils(int a,int b, int[] fd)
{
	close(fd[0]);
	for(int i=a;i<b;i++)
	{
		if(estNombrePremier(i))
		{
			write(fd[1],&i,sizeof(int));
		}
	}
}
