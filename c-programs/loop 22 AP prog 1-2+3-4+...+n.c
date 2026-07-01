// s= 1-2+3-4+...+n //
#include  <stdio.h>
int main ()
{
int n,i,s=0;
printf ("\n enter the range");
scanf ("%d",&n);
for (i=1;i<=n;i++)
{
if (i%2==0)
s=s-i;
else
s=s+i;
}
printf ("\n s= %d",s);
return 0;
}
