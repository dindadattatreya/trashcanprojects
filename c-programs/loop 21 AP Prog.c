// s= (1/2^2)+(2/3^2)+(3^4^2)+...+n //
#include  <stdio.h>
#include <math.h>
int main ()
{
float s=0.0;
int n,i;
printf ("\n enter the range");
scanf ("%d",&n);
for (i=1;i<=n;i++)
{
s=s+ (float)(i/pow((i+1),2));
}
printf ("\n s= %f",s);
return 0;
}
