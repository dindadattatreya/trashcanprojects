//GCD (doubt)//
#include <stdio.h>
int main()
{int a,b,r,temp;
printf ("\n enter 2 no");
scanf ("%d%d",&a,&b);
if (b>a)
{
temp=a;
a=b;
b=temp;
}
do
{r=a+b;
a=b;
b=r;
}
while (r!=0);
printf ("\n GCD =%d",a);
return 0;
}
