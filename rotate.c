#include <stdio.h>
#include <stdlib.h>
#include "defs.h"

/* 
 * Please fill in the following struct with your name and the name you'd like to appear on the scoreboard
 */
who_t who = {
    "YUH YEET",           /* Scoreboard name */

    "Sanjana Hajela",   /* Full name */
    "sh9as@virginia.edu",  /* Email address */
};

/***************
 * ROTATE KERNEL
 ***************/

/******************************************************
 * Your different versions of the rotate kernel go here
 ******************************************************/

/* 
 * naive_rotate - The naive baseline version of rotate 
 */
char naive_rotate_descr[] = "naive_rotate: Naive baseline implementation";
void naive_rotate(int dim, pixel *src, pixel *dst) 
{
    for (int i = 0; i < dim; i++)
	for (int j = 0; j < dim; j++)
	    dst[RIDX(dim-1-j, i, dim)] = src[RIDX(i, j, dim)];
}
/* 
 * rotate - Your current working version of rotate
 *          Our supplied version simply calls naive_rotate
 */
char another_rotate_descr[] = "another_rotate: Another version of rotate";
void another_rotate(int dim, pixel *src, pixel *dst)
{

        for (int j = 0; j < dim; j+=8){
                for (int i = 0; i < dim; i++){
                        dst[RIDX((dim-1-j), i, dim)] = src[RIDX(i, j, dim)];
                        dst[RIDX((dim-2-j), i, dim)] = src[RIDX(i, j+1, dim)];
                        dst[RIDX((dim-3-j), i, dim)] = src[RIDX(i, j+2, dim)];
                        dst[RIDX((dim-4-j), i, dim)] = src[RIDX(i, j+3, dim)];
                        dst[RIDX((dim-5-j), i, dim)] = src[RIDX(i, j+4, dim)];
                        dst[RIDX((dim-6-j), i, dim)] = src[RIDX(i, j+5, dim)];
                        dst[RIDX((dim-7-j), i, dim)] = src[RIDX(i, j+6, dim)];
                        dst[RIDX((dim-8-j), i, dim)] = src[RIDX(i, j+7, dim)];
}}

}


/*********************************************************************
 * register_rotate_functions - Register all of your different versions
 *     of the rotate function by calling the add_rotate_function() for
 *     each test function. When you run the benchmark program, it will
 *     test and report the performance of each registered test
 *     function.  
 *********************************************************************/

void register_rotate_functions() {
    add_rotate_function(&naive_rotate, naive_rotate_descr);
    add_rotate_function(&another_rotate, another_rotate_descr);
}
