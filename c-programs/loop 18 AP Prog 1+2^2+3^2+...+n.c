// s= 1+2^2+3^2+...+n //
#include  <stdio.h>
int main ()
{
int n,i,s=0;
printf ("\n enter the range");
scanf ("%d",&n);
for (i=1;i<=n;i++)
{
s=s+(i*i);
}
printf ("\n s= %d",s);
return 0;
}
