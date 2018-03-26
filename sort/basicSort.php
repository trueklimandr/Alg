<?php
/**
 * Created by PhpStorm.
 * User: klimandr
 * Date: 26.03.18
 * Time: 9:21
 */

namespace sort;

class basicSort
{
    /**
     * @param array $a (input array for sort)
     * @param int $order (ascending or descending)
     * @return array|string (sorted array or string with message in case wrong input)
     */
    public function insertionSort(array $a, int $order)
    {
        if (!$this->arrayKeysIsInt($a)) {
            return 'Array keys are not int';
        }
        if ($order == 1) {
            for ($j = 1; $j < count($a) - 1; $j++) {
                $key = $a[$j];
                $i = $j - 1;
                while ($i > -1 && $a[$i] > $key) {
                    $a[$i + 1] = $a[$i];
                    $i--;
                }
                $a[$i + 1] = $key;
            }
            return $a;
        } elseif ($order == -1) {
            for ($j = 1; $j < count($a) - 1; $j++) {
                $key = $a[$j];
                $i = $j - 1;
                while ($i > -1 && $a[$i] < $key) {
                    $a[$i + 1] = $a[$i];
                    $i--;
                }
                $a[$i + 1] = $key;
            }
            return $a;
        } else {
            return 'Received wrong order';
        }
    }

    /**
     * @param array $a
     * @return bool (array keys are int or not)
     */
    public function arrayKeysIsInt(array $a):bool
    {
        $return = true;
        $keys = array_keys($a);
        foreach ($keys as $key) {
            $return = $return && is_int($key);
        }
        return $return;
    }
}
