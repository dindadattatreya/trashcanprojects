// 2 5 10 17//
// 1^2+1 2^2+1 3^2+1//
#include <stdio.h>
int main()
{int n,i,a;
printf ("\n enter the range");
scanf ("%d",&n);
for (i=1;i<=n;i++)
{
a=(i*i)+1;
printf ("%d ",a);
}
return 0;
}
