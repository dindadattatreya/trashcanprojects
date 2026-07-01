#include <stdio.h>
int main ()
{
int a,b;
printf ("\n enter 2 numbers \n");
scanf ("%d %d",&a,&b);
if (a>b)
printf ("\n %d is greater",a);
else if (b>a)
printf ("\n %d is greater",b);
else
printf ("\n both are same");
return 0;
}
