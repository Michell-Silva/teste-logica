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
        $data = [];
        $count = 1;
        $productData = [];
        $products = self::products;

        foreach ($products as $key => $product) {
            $arrayData = explode('-', $product);
            if(!array_search($product, $arrayData)) {
                $productData[$arrayData[0]][$key] = $arrayData[1];
                unset($arrayData);
                unset($products[$key]);
            }
        }
        foreach ($productData as $keyColor => $items){
            foreach ($items as $item){
                if (in_array($item, $items)) {
                    $data[$keyColor][$item] += $count;
                }
            }
        }
        return $data;
    }
}
