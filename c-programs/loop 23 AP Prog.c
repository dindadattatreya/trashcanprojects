// s= 1-(2/2^2)+(3/3^3)-...+n //
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
if (i%2==0)
s=s- (float)(i/pow(i,i));
else
s=s+ (float)(i/pow(i,i));
}
printf ("\n s= %f",s);
return 0;
}
