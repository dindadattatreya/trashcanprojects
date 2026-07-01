// armstrong no.//
#include <stdio.h>
int main()
{
int n,r,s=0,temp;
printf ("\n enter a number");
scanf ("%d",&n);
temp=n;
while (n!=0)
{r=n%10;
s=s+(r*r*r);
n=n/10;
}
if (temp==s)
printf ("\n armstrong no");
else
printf ("\n not armstrong no");
return 0;
}
