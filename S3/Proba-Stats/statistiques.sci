//Moyenne, Variance, Ecart Type, Médiane, Quartiles - Covariance, corrélation, LinReg

function[resultat]= eff_total(n)
    resultat = sum(n);
    return resultat
endfunction

function[resultat]=moyenne(x,n)
    eff_total=sum(n);
    somme=sum(x.*n);
    resultat=somme/eff_total;
    return resultat
endfunction

function[resultat]=variance(x,n)
    eff_total=sum(n);
    moy=moyenne(x,n);
    somme=sum(n.*(x^2));
    resultat=somme/eff_total;
    resultat=resultat-(moy^2);
    return resultat
endfunction

function[resultat]=ecart_type(x,n)
    resultat=sqrt(variance(x,n));
    return resultat
endfunction

function[resultat]=mediane(x,n)
    eff_total = eff_total(n);
    moitie = eff_total/2;
    reste=modulo(eff_total,2);
    resultat = reste;
    //fonction fausse, je dois faire le for pour créer un new vecteurfor i:
    end
    if reste==0 then resultat = (x(moitie)+x(moitie+1))/2
                     return resultat
                   
                else resultat = (x(floor(moitie))+x(ceil(moitie)))/2  ;  
                     return resultat        
   end
     return resultat
endfunction

x = [1,2,4,5,6,7,8,9,10,11,12,14,16,18,19];
n=[1,3,1,2,2,4,5,6,10,11,6,5,1,1,2];