<?php

// Defining a type with parameters
protected $casts = [
    'some_attribute' => 'class[App\SomeClass, param2, param3]',
];

// Bind the type to the handler
protected $castHandlers = [
    'class' => 'SomeHandler',
];
