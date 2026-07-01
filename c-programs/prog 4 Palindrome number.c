// palindrome number ex. 121 reversed_no is 121//
int main()
{
int n,r,s=0,temp;
printf ("\n enter a number");
scanf ("%d",&n);
temp=n;
while (n!=0)
{r=n%10;
s=s*10+r;
n=n/10;
}
if (s==temp)
printf ("\n palindrome no");
else
printf ("\n not palindrome");
return 0;
}
