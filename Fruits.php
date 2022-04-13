<?php

class Fruits
{
    public $name;
    public $max_price;
    public $min_price;
    public $price = [];

    // 必要な値を出力するための初期設定
    public function __construct($name,$num,$min_price,$max_price){
        $this->name = $name;
        $this->max_price = $max_price;
        $this->min_price = $min_price;
        //指定された価格の範囲で指定された個数分の果物の価格を出す
        for($i = 0; $i < $num; $i++){
            $this->price[] = mt_rand($min_price,$max_price);
        }
    }

    // 最高値を出す
    public function maxPrice(){
        return max($this->price);
    }

    // 最安値を出す
    public function minPrice(){
        return min($this->price);
    }

    // 平均価格を出す
    public function avePrice(){
        return round(array_sum($this->price)/count($this->price));
    }

    // 果物の価格に関する統計結果を出す
    public function printData(){
        echo "[{$this->name}の価格]\n";
        echo "最高値：{$this->maxPrice()}円\n";
        echo "最安値：{$this->minPrice()}円\n";
        echo "平均価格：{$this->avePrice()}円\n";
    }
}
?>