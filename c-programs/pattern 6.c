#include <stdio.h>
int main()
{int i,j,n,k;
printf ("\n how many time");
scanf ("%d",&n);
for (i=1;i<=n;i++)
{
k=68;
for (j=1;j<=i;j++)
printf ("%c",k--);
printf ("\n");}
return 0;
}
