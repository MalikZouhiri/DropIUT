Prompt Nom d employe ?
Accept nom_employe

Declare
	sal_moy number;
	salaire_base number;
	salaire_new number;
	
Begin
	select sal into salaire_base From EMP where ename = '&nom_employe';
	select avg(sal) into sal_moy from emp where job in (select job from emp where ename = '&nom_employe');
	
	If salaire_base >= sal_moy
	Then Update EMP set sal = sal*1.1
		 Where ename = '&nom_employe';
	Else Update EMP set sal = sal_moy
		 Where ename = '&nom_employe';
	end if;
	select sal into salaire_new From EMP where ename = '&nom_employe';
	dbms_output.put_line(' Lancien salaire est'||salaire_base||' et le nouveau salaire est :'||salaire_new);
	commit;
End;
/