// s= 1-2/2!+3/3!-4/4!+...+n //
#include  <stdio.h>
#include <math.h>
int main ()
{
int n,i,j,s=0,f;
printf ("\n enter the range");
scanf ("%d",&n);
for (i=1;i<=n;i++)
{
f=1;
 for (j=1;j<=i;j++)
 {
 f=f*j;
 }
 if (i%2==0)
s=s- (float)(i/f);
 else
s=s+ (float)(i/f);
}
printf ("\n s= %d",s);
return 0;
}

