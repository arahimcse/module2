<?php

/**
 * Task 4: Fibonacci Series printing using a Function
 * Write a PHP function to print the first 15 numbers in the Fibonacci series. You should take this 15 as an argument of a function and use a for loop to generate these numbers and print them by calling the function.
 */
include_once('./header.php');
?>

<body>
    <section class="w-11/12 mx-auto mt-10 flex flex-col">
        <h1 class="text-2xl self-center">Welcome to "Task 4: Fibonacci Series printing using a Function"</h1>
        <article class="mt-10">
            <p class="text-center">
                <?php
                function printFibonacci($n)
                {
                    if ($n <= 0) {
                        echo "Invalid input. Please provide a positive number.";
                        return;
                    }

                    $fibonacci = array();
                    $fibonacci[0] = 0;
                    $fibonacci[1] = 1;

                    echo "The first $n numbers in the Fibonacci series are:\n";

                    if ($n >= 1) {
                        echo $fibonacci[0] . ", ";
                    }
                    if ($n >= 2) {
                        echo $fibonacci[1] . ", ";
                    }

                    for ($i = 2; $i < $n; $i++) {
                        $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
                        echo ($i == 14) ?  $fibonacci[$i] : $fibonacci[$i]. ", ";
                    }
                }
                printFibonacci(15);

                /**
                 * My debugging steps
                 * f[0] = 0
                 * f[1] = 1
                 * f[2] = f[1]+f[0] [0+1] = 1
                 * f[3] = f[2]+f[1] [1+1] = 2
                 * f[4] = f[3]+f[2] [2+1] = 3
                 * f[5] = f[4]+f[3] [3+2] = 5
                 * f[6] = f[5]+f[4] [5+3] = 8
                 * f[7] = f[6]+f[5] [8+5] = 13
                 * .
                 * . 
                 * .
                 * f[15] = f[14]+f[13] [233+144] = 377
                 * 
                 */
                ?>
            </p>
        </article>
        <span class="flex flex-row justify-center mt-10 bg-blue-500 text-white p-3 font-bold w-[200px] mx-auto hover:bg-blue-400"><a href="./index.php">Back to Home</a></span>

        <p class="mt-20"><span class="text-red-500 font-bold">Question: </span>  Write a PHP function to print the first 15 numbers in the Fibonacci series. You should take this 15 as an argument of a function and use a for loop to generate these numbers and print them by calling the function.
        </p>
    </section>
</body>

</html>