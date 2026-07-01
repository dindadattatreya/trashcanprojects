// sum of even digits of a number//

#include <stdio.h>
int main()
{
int n,r,s=0;
printf ("\n enter a number");
scanf ("%d",&n);
while (n!=0)
{r=n%10;
if (r%2==0)
s=s+r;
n=n/10;
}
printf ("\n sum =%d",s);
return 0;
}
