Create or replace trigger inser_tot
after insert or update or delete on item
for each row
declare
	commande item.ordid%type;
begin
	if inserting or updating
	then commande := :new.ordid;
	end if;

	if deleting
	then commande := :old.ordid;
	end if;


update ord
set total = (select sum(itemtot) from item where ordid = commande)
where ordid = commande;
end;
/