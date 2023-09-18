<?php
/**
 * Task 2: Skip Multiples of 5
 * Create a PHP script that prints numbers from 1 to 50 using a for loop. However, when the loop encounters a multiple of 5, it  should skip that number using the continue statement and continue to the next iteration.
 */
include_once('./header.php');
?>
<body>
    <section class="w-11/12 mx-auto mt-10 flex flex-col">
        <h1 class="text-2xl self-center">Welcome to "Task 2: Skip Multiples of 5"</h1>
        <article class="mt-10">
           <p class="text-center">
            <?php 
            for ($i = 1; $i <= 50; $i++) {
                if ($i % 5 == 0) {
                    continue; 
                }
                echo ($i == 49 )? $i : $i.", ";
            }
            ?>
           </p>
        </article>
        <span class="flex flex-row justify-center mt-10 bg-blue-500 text-white p-3 font-bold w-[200px] mx-auto hover:bg-blue-400"><a href="./index.php">Back to Home</a></span>

        <p class="mt-20"><span class="text-red-500 font-bold">Question: </span>  Create a PHP script that prints numbers from 1 to 50 using a for loop. However, when the loop encounters a multiple of 5, it  should skip that number using the continue statement and continue to the next iteration.</p>
    </section>
</body>
</html>