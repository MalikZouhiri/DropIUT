// n[12345] x[12345]
// n*x = erreur
// n.*x = 1 4 9 16 25
// n*x' = 0

//ones(x) crée un vecteur que de 1

function effTotal = leEffectif(n)
       effTotal = sum(n);
endfunction

function moy=laMoyenne(x,n)
    moy=n*x'/leEffectif(n);
endfunction

function var=laVariance(x,n)
    var=n*(x**2)'/leEffectif(n)-(laMoyenne(x,n)**2);
endfunction

function etype=leEcartType(x,n)
    etype=sqrt(laVariance(x,n));
endfunction

function med=laMediane(x,n)
    xx=[];
    // xtrie=gsort(x,lc,'i')
    //Comment faire si x n'est pas trié?
    for(i=1:length(x))
        xx=[xx x(i)*ones(l,n(i))]; // crée un vecteur que de 1, de longueur n(i)
        // On considère qu'on est à la 2e fois qu'on passe, xx = [10] 
        //xx =[xx x(2)*ones(1,n(2))] >>> xx = [10, 12, 12, 12, 12] On a inséré n(i) fois x(i)
        //                                                         à la suite de xx
    end
    c = quart(xx);
    med(1) = c(1); //quartile 1
    med(2) = c(2); //médiane
    med(3)=c(3); //quatile 3
    med(4)=c(3)-c(1); // ecart interquartile
endfunction

//---------------------
//stats à 2 variables
//---------------------

function cov=laCovariance(x,n)
    N=length(x);
    //cov = (sum(x.*y))/N-mean(x)*mean(y);
    cov = x*y'/N-mean(x)*mean(y)
endfunction

function cor=laCorrelation(x,y)
    N=length(x);
    cor=N*laConvatiance(x,y)/((N-1)*stdev(x)*stdev(y));
endfunction
//stdev (standard deviation) = sx (pas l'ecart type, le S là)
// sigmax = sqrt((n-1)/n) sx

//r= cov(x,y)/sqrt((n-1)/n)*stdev(x)*sqrt((n-1)/n)stdev(y) = (n*cov(x,y))/(n-1)*stdev(x)*stdev(y)

function linreg=linReg(x,y)
    linreg=[0 0];
    N=length(x);
    sx=sqrt((N-1)/N)*stdev(x);
    sy=sqrt((N-1)/N)*stdev(y);
    linreg(1)=laCovariance(x,y)/(sx-sy);
    linreg(2)=mean(y)-linreg(1)*mean(x);
endfunction