#include <stdio.h>
int main ()
{
int a,b,c;
printf ("\n enter 3 numbers");
scanf ("%d %d %d",&a,&b,&c);
if (a>b && a>c)
printf ("\n maximum is %d",a);
else if (b>a && b>c)
printf ("\n maximum is %d",b);
else if (c>a && c>b)
printf ("\n maximum is %d",c);
return 0;
}
