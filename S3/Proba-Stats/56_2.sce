for i =1:10
    x(i)=i*2;
end
for i = 1:10
    if modulo(x(i),2)==0 then x(i)=2*i+1;
    else x(i)=0;
    end
end
x