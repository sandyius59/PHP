<?php
return
    [
    'Car' => function () {
        return new Car(new Engine(new Part()));
    },
    'Engine' => function () {
        return new Engine(new Part());
    },
    'part' => function () {
        return part;
    },
];
