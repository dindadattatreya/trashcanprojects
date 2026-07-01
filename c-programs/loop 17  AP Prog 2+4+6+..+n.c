// s= 2+4+6+8+...+n //
#include  <stdio.h>
int main ()
{
int n,i,s=0;
printf ("\n enter the range");
scanf ("%d",&n);
for (i=2;i<=n;i=i+2)
{
s=s+i;
}
printf ("\n s= %d",s);
return 0;
}
