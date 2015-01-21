Create or Replace TRIGGER inser_tot AFTER INSERT or UPDATE or DELETE on ITEM
FOR EACH ROW

Begin
UPDATE ORD
Set total = (select sum(itemtot) from ITEM where ordid = :new.ordid);
end
/