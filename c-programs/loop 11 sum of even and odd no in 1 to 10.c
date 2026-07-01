#include <stdio.h>
int main ()
{int i,s1=0,s2=0;
for (i=1;i<=10;i++)
{if (i%2==0)
s1=s1+i;
else
s2=s2+i;}
printf ("\n s even is %d",s1);
printf ("\n s odd is %d",s2);
return 0;
}
