#include <stdio.h>
int main()
{int a[5],i,k,fl=0;
printf ("\n enter array element \n");
for (i=0;i<5;i++)
scanf ("%d",&a[i]);
printf ("\n enter the value to search:");
scanf ("%d",&k);
for (i=0;i<5;i++)
{if (a[i]==k)
{fl=1;
break;
}
}
if (fl==1)
printf ("\n value found at %d location",(i+1));
else
printf ("\n value not found");
return 0;
}
