#include <stdio.h>

int main() {
    int n, i, fl = 0;
    printf("\nEnter a number: ");
    scanf("%d", &n);

    if (n == 1) {
        printf("\n1 is not a prime number.");
    } else {
        for (i = 2; i < n; i++) {
            if (n % i == 0) {
                fl = 1;
                break;
            }
        }
        if (fl == 1)
            printf("\n%d is not a prime number.", n);
        else
            printf("\n%d is a prime number.", n);
    }

    return 0;
}
