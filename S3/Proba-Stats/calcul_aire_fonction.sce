n=10
a=0
b=1
h=(b-a)/n
x1=a:h:b-h
x2=a+h:h:b
y1=x1**2
y2=x2**2
S1=h*sum(y1)
S2=h*sum(y2)
S=(S1+S2)/2
