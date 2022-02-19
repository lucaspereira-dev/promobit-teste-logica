<?php

namespace App;

class ProductStructure
{
    const products = [
        "preto-PP",
        "preto-M",
        "preto-G",
        "preto-GG",
        "preto-GG",
        "branco-PP",
        "branco-G",
        "vermelho-M",
        "azul-XG",
        "azul-XG",
        "azul-XG",
        "azul-P"
    ];

    public function make(): array
    {
        $rowsProducts = array();
        foreach (self::products as $productCurrent) {

            if (strpos($productCurrent, '-')) {

                $productExplode = explode('-', $productCurrent);

                if (count($productExplode) == 2) {
                
                    $color = current($productExplode);
                    $size  = end($productExplode);

                    if(!isset($rowsProducts[$color][$size])){
                        $rowsProducts[$color][$size] = 1;
                        continue;
                    }

                    $rowsProducts[$color][$size] += 1;
                }
            }
        }
        return $rowsProducts;
    }
}
