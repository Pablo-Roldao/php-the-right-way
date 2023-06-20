<?php
    #constants
    const STATUS_PAID = 'paid';

    echo STATUS_PAID;

    #variables
    $firstName = 'Pablo';

    echo $firstName;

    $firstName = 'Maria';

    echo $firstName;

    #variable variables

    $foo = 'bar';
    $$foo = 'baz';

    echo $foo, $bar;