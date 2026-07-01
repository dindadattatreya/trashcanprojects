#include <stdio.h>
int main()
{
int a,b,c,d;
float e;
printf ("    enter 3 numbers    \n");
scanf ("%d %d %d",&a,&b,&c);
d=a+b+c;
e=d/3.0;
printf ("\n your numbers sum= %d",d);
printf ("\n your average of numbers is= %.2f",e);
return 0;
}
