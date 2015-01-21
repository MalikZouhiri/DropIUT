function[resultat]= fct(l,x)
    if x>0 then resultat = l*exp(-(l*x))
        return resultat
    else
        resultat = 0
        return resultat
    end
endfunction


//p = integrate('fct(1.5,x)','x',0,6)
p = integrate('fct(1.5,x)','x',0,[0:0.1:6]);
p(length(p))
// ^ ==> renvoie un vecteur qui contient integrale de 0 à 0.1 de f, 0 à 0.2 de f etc.
// p(length(p)) = integrale de 0 à la dern. valeur = integrale de 0 à 6.
// on peut faire aussi (et c'est mieux) integrate('fct(1.5,x)','x',min(x),max(x));

function[resultat]= cdf(l,x)
    resultat= integrate('fct(l,u)','u',0,x);
        return resultat
endfunction

a = cdf(1.5,6)