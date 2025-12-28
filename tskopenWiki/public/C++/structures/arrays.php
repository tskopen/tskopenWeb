<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include 'config.php'; ?>
        <link rel="stylesheet" href="../../styles.css?v=<?php echo $version; ?>">
        <title>Arrays</title>
        
    </head>
    <?php include "navbar.php"; ?>
    <main class="project">
    
        <header>
            <h1>Intro to Arrays</h1>
        </header>
        <section>
        <p>
        <strong> Definition: </strong>
        An array is a sequence of elements. It can be ordered or unordered. Contain variables or raw data like integers. And is a foundation for later data structures. 
        </p>


        <p>
        <strong> Example implementation </strong>

        <a "class=.code-entry"> 
        int ARRAY_SIZE = 5;
        int nums[ARRAY_SIZE] = {1, 2, 1, 3, 4};

        

        </a>

        Here the code creates an array with 5 elements that store various numbers.
        It is good practice to now hard code the size of your array as the amount you wish to store may change.
        
        One thing to note is arrays store their elements position starting at zero. So nums[0], will represent the first element.
        you can call this just like a variable.

        <a "class=.code-entry"> 
        #include <std>;

        int ARRAY_SIZE = 5;
        int nums[ARRAY_SIZE] = {1, 2, 1, 3, 4};

        int main()
        {
        std::cout << nums[0];
        }

        </a>
        Expected output: 1
        </p>
        </section>

      <header>
            <h1>Intro to Matrixs</h1>
        </header>
        <section>
        <p>
        <strong> Definition: </strong>
    A matrix can be thought of as multiple arrays combined together.
    Think about what 3 dimensions axis looks like. Its a X, Y, and Z axis conbined to make a cube. A Matrix is alot like this with elements being points on each line.
    A two dimenional matrix is made up of two arrays. in This example think of it as X and Y in a 2d game. Again each elemnt has a corresponding value and can be called with its position in the array.
    Important note: 2D matrix structures are construcuted first with rows, then columns. Example: matrix[numOfRows][numOfColumns]


        This can be used for a wide range of applications. Here is a implementation example with arbitary data.
        <a "class=.code-entry"> 
/*
Compile command:
clang++ -std=c++17 -o test test.cpp

  */

#include <iostream>

int main()
{

    int numsMatrix[2][5] = {{5, 2, 1, 3, 4},
				{3, 3, 1, 2, 1}};
    std::cout << numsMatrix[0][0] << std::endl;

}

</a>

Expected output is 5
</p>



    </main>
</html>
