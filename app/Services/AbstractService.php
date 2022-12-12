<?php

namespace App\Services;

class AbstractService
{

    public function arrayHandler()
    {
        $array = [];
        array_push($array, 1, 2, 3, 11, 6, 73, 9);
        dump("Terceira Posição : $array[2]");
        dump("Posição 3: $array[3]");

        $variavel = implode(',', $array);
        dump($variavel);

        $newArray = explode(',', $variavel);
        dump($newArray);

        unset($variavel);

        if (in_array(14, $newArray)) dump("The Array includes 14");
        else dump("The Array doesnt include 14");

        $toRemove = [];
        for ($i = 1; $i < count($newArray); ++$i) {
            if ($newArray[$i] < $newArray[$i - 1]) {
                array_push($toRemove, $newArray[$i]);
            }
        }

        $arr2 = array_filter($newArray, function ($item) use ($toRemove) {
            return !in_array($item, $toRemove);
        });
        dump($arr2);

        array_pop($arr2);
        dump($arr2);

        dump(count($arr2));

        $arr2 = array_reverse($arr2);
        dump($arr2);




        return 'handler';
    }
}