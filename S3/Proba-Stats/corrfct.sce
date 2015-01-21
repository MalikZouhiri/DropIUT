clear;clc();clf();

function loi1= loiexp(l,x)
   loi1 = l*exp(-l*x);
endfunction

function loi2=loiexpc(x1,x2)
    loi2=integrate('loiexp(l,x)','x',x1,x2);
endfunction
// P(X<1,3)=>loi expc(0,1.3)
// P(X€[0,75;1,41] ==> loi expc(0,75,1,41))


l=1.5;
dx=0.1;
x=0:dx:6;
somme = integrate('loiexp(l,x)','x',min(x),max(x))

y=loiexp(l,x);
subplot(211);plot2d(x,y);xgrid();

esp = integrate('x.*loiexp(l,x)','x',min(x),max(x))
//esperance = 1/lambda

//E(X²)-E²(X)
var = integrate('x**2.*loiexp(l,x)','x',min(x),max(x))-esp**2
//var = 1/lambda²

//Fct de repartition
z=integrate('loiexp(l,x)','x',min(x),x)
subplot(212);plot2d(x,z);xgrid();