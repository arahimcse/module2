<?php

/**
 * Task 3: Break on Condition
 * Write a PHP program that calculates and prints the first 10 Fibonacci numbers. But, if a Fibonacci number is greater than 100, break out of the loop using the break statement.
 */
include_once('./header.php');
?>

<body>
    <section class="w-11/12 mx-auto mt-10 flex flex-col">
        <h1 class="text-2xl self-center">Welcome to "Task 3: Break on Condition"</h1>
        <article class="mt-10">
            <p class="text-center">
                <?php
                // Function to calculate the nth Fibonacci number
                function fibonacci($n)
                {
                    if ($n <= 1) {
                        return $n;
                    } else {
                        return fibonacci($n - 1) + fibonacci($n - 2);
                    }
                }

                $count = 0;
                $previous = 0;
                $current = 1;

                echo "First 10 Fibonacci numbers: ";

                while ($count < 10) {
                    $fibonacciNumber = fibonacci($count);
                    if ($fibonacciNumber > 100) {
                        break;
                    }
                    echo $count == 9 ? $fibonacciNumber : $fibonacciNumber . ", ";
                    $count++;
                    $previous = $current;
                    $current = $fibonacciNumber;
                }

                /**
                 * debug the above code
                 * $count = 0 f(0)  = 0 
                 * $count = 1 f(1)  = 1
                 * $count = 2 f(2)  = f(1)+f(0) = 1+0 = 1  
                 * $count = 3 f(3)  = f(2)+f(1) = 1+1 = 2
                 * $count = 4 f(4)  = f(3)+f(2) = 2+1 = 3
                 * $count = 5 f(5)  = f(4)+f(3) = 3+2 = 5
                 * $count = 6 f(6)  = f(5)+f(4) = 5+3 = 8
                 * $count = 7 f(7)  = f(6)+f(5) = 8+5 = 13
                 * $count = 8 f(8)  = f(7)+f(6) = 13+8 = 21
                 * $count = 9 f(9)  = f(8)+f(7) = 21+13 = 34 
                 * 
                 */

                 
                ?>
            </p>
        </article>
        <span class="flex flex-row justify-center mt-10 bg-blue-500 text-white p-3 font-bold w-[200px] mx-auto hover:bg-blue-400"><a href="./index.php">Back to Home</a></span>

        <p class="mt-20"><span class="text-red-500 font-bold">Question: </span>  Write a PHP program that calculates and prints the first 10 Fibonacci numbers. But, if a Fibonacci number is greater than 100, break out of the loop using the break statement.</p>
    </section>
</body>

</html>