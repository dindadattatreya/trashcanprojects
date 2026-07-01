#include <stdio.h>
int main(){
    int a[5], i, k = 0;
    printf("\n enter array elements: ");
    for (i = 0; i < 5; i++) {
        scanf("%d", &a[i]);
        if (a[i] % 2 == 0) {
            k = k + a[i];
        }
    }
    printf("\n array elements are: \n");
    for (i = 0; i < 5; i++) {
        printf("%d \t", a[i]);
    }
    printf("\n sum of even no: %d \t", k);
    return 0;
}
