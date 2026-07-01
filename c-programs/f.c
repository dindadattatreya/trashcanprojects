#include <stdio.h>
int main ()
{
int a,b,c,d,e,f,g;
printf ("    enter 2 numbers\n");
scanf ("%d %d",&a,&b);
c=a+b;
d=b-a;
e=a*b;
f=a/b;
g=a%b;
printf ("\n sum= %d",c);
printf ("\n dif= %d",d);
printf ("\n mul= %d",e);
printf ("\n div= %d",f);
printf ("\n rem= %d",g);
return 0;
}
