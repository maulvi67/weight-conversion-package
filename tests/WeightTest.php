<?php

use Maulvi67\WeightConversionPackage\WeightConversion;

it('can convert kilograms to pounds correctly', function(){
    $pounds = WeightConversion::kilograms(100)->toPounds();

    expect($pounds)->toEqual(220.46);
});

it('can convert kilograms to stones correctly', function(){
    $pounds = WeightConversion::kilograms(100)->toStones();

    expect($pounds)->toEqual(15.747);
});
