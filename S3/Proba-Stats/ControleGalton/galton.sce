function X=galton(nbexp,nbniv)
    X = zeros(1,nbniv+1); // On initialise le vecteur : 0 bille dans chaque receptacle
    for i=1:nbexp
        r=1 // On initialise au 1er receptacle
        for i=1:nbniv
            u=modulo(ceil(10*rand()),2) //1 chance sur 2 : soit 0 soit 1
            if u==1 then r = r+1 // Si 1 = on va à droite, donc 1 receptacle )à droite
            end
        end
    X(r)=X(r)+1 // On ajoute une bille au réceptacle
    end
    return X
endfunction

galton(3000,12)

// On modéliserait l'expérience de la planche de Galton par une loi Binomiale.
// En effet, on a 2 issues à chaque test (chaque fois que la bille touche un godet)
// Soit la bille part à gauche (échec) avec une probabilité d'1/2
// Soit la bille part à droite (succès) avec également une probabilité d'1/2.
// C'est donc une expérience de Bernoulli. Pour chaque bille, l'expérience de Bernoulli
//     est répétée 12 fois
// X suit dont une loi binomiale (12,1/2)

// On répète la loi binomiale 3000 fois : on tend à se rapprocher d'une loi normale !
// 


