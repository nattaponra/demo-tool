<?php

class Triangle
{
    /**
     * @param $a double
     * @param $b double
     * @param $c double
     * @return string
     */
    public function validateTriangle($a, $b, $c)
    {
        $isATriangle = False;

        if (($a < $b + $c) && ($b < $a + $c) && ($c < $a + $b)) {
            $isATriangle = True;
        }

        if ($isATriangle) {

            if ($a == $b && $b == $c) {
                $TriangleType = "Equilateral";

            } else if ($a != $b && $a != $c && $b != $c) {
                $TriangleType = "Scalene";

            } else {
                $TriangleType = "Isosceles";

            }

        } else {
            $TriangleType = "Not a Triangle";

        }

        return $TriangleType;
    }
}