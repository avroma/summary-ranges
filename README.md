Самая длинная подстрока
-----------------


>Реализуйте функцию longestLength принимающую на вход строку и возвращающую длину максимальной последовательности из неповторяющихся символов. Подстрока может состоять из одного символа. Например в строке qweqrty, можно выделить следующие подстроки: qwe, weqrty. Самой длинной будет weqrty.

     Пример:

longestLength('abcdeef'); // 5

longestLength('jabjcdel'); // 7


Here are located automated tests for TestCafe.
--------------

**Installing TestCafe**

    npm install -g testcafe

**Running the test**

For running the test in Google Chrome:

    testcafe chrome .\login-page\


>***Notice:***
>***Make sure to keep the browser tab that is running tests active. Do not minimize the browser window. Inactive tabs and minimized browser windows switch to a lower resource consumption mode where tests are not guaranteed to execute correctly.***

Also, tests may be run with **TestCafe Studio**.

[Download it here](https://www.devexpress.com/products/testcafestudio/)
