//switch case prog1//
#include <stdio.h>
int main()
{int day;
printf ("\n enter no. of day");
scanf ("%d",&day);
switch (day)
{
case 1:
 printf ("\n sunday");
 break;
case 2:
 printf ("\n monday");
 break;
case 3:
 printf ("\n tuesday");
 break;
case 4:
 printf ("\n wednesday");
 break;
case 5:
 printf ("\n thursday");
 break;
case 6:
 printf ("\n friday");
 break;
case 7:
 printf ("\n saturday");
 break;
default:
 printf ("\n invalid input");
}
return 0;
}
