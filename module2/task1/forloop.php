<?php
/**
 * Task 1: Looping with Increment using a Function
 * Write a PHP function that uses a for loop to print all even numbers from 1 to 20, but with a step of 2. In other words, you should print 2, 4, 6, 8, 10, 12, 14, 16, 18, 20. The function should take the arguments like start as 1, end as 20 and step as 2. You must call the function to print. Also do the same using while loop and do-while loop also.
 */
include_once('../header.php');
?>
<body>
    <section class="w-11/12 mx-auto mt-10 flex flex-col">
        <h1 class="text-2xl self-center">For Loop</h1>
        <article class="mt-10">
           <p class="text-center">
            <?php 
            function printEventNumber($start, $end, $step) {
                for ($i = $start; $i <= $end; $i++) {
                    if ($i % $step == 0) {
                      echo ($i == $end )? $i : $i . ", ";
                    }
                }
            }
            printEventNumber(1, 20, 2);
            ?>
           </p>
        </article>
        <span class="flex flex-row justify-center mt-10 bg-blue-500 text-white p-3 font-bold w-[200px] mx-auto hover:bg-blue-400"><a href="./index.php">Back to Task 1</a></span>

        <p class="mt-20"><span class="text-red-500 font-bold">Question: </span>  Write a PHP function that uses a for loop to print all even numbers from 1 to 20, but with a step of 2. In other words, you should print 2, 4, 6, 8, 10, 12, 14, 16, 18, 20. The function should take the arguments like start as 1, end as 20 and step as 2. You must call the function to print. Also do the same using while loop and do-while loop also.</p>
    </section>
</body>
</html>