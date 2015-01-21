Create or replace trigger inser_tot
after insert or update or delete on item
for each row
declare
	commande item.ordid%type;
begin
	if inserting then 
		update ord set total = total + :new.ordid
		where ordid = :new.ordid;
	end if;
	
	if updating then
		if :new.ordid = :old.ordid then
			update ord set total = total - old.itemtot + new.itemtot
			where ordid = :new.ordid;
		end if;
		if(:new.ordid != :old.ordid) then
			update ord set total = total - :old.itemtot where ordid = old.ordid;
			update ord set total = total + :new.itemtot where ordid = new.ordid;
		end if;
	end if;

	if deleting then
		update ord set total = total - :old.itemtot where ordid = old.ordid;
	end if;
end;
/