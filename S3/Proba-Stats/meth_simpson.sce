//n=10
//a=0
//b=1
//h=(b-a)/n
//x=a:h:b
//y=x**2
//k = (1:1:n-1)
//l = (0:1:n-1)
//yk = (a+(k*(b-a)/n))**2
//yl = (a+((2*l+1)*(b-a)/2*n))**2
//res=((b-a)/6*n)*(a**2+b**2+2*sum(yk)+4*sum(yl))

//Correction :

n=10
a=0
b=1
h=(b-a)/n
x1 = a+h:h:b-h // (b-a)/n = h, on remplace donc et on a f(a+kh)
y1=x1**2
S1 = sum(y1)
x2 = a+(h/2):h:b-(h/2)
y2=x2**2
S2=sum(y2)
S=h*(a**2+b**2+2*S1+4*S2)/6 // b-a/6n = 1/6 * ((b-a)/n) = 1/6 * h