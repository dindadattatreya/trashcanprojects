//problem program due//
#include <stdio.h>
int main()
{int i,j,n,k=n+1,m;
printf ("\n how many time");
scanf ("%d",&n);
for (i=1;i<=n;i++)
{k--;
m=k;
for (j=1;j<=i;j++)
printf ("%d",m++);
printf ("\n");}
return 0;
}
