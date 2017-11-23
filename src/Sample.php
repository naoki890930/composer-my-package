<?php
/**
 * サンプル機能
 *
 * 名前を設定できる
 * 設定した名前で挨拶してくれる
 *
 * @see https://https://github.com/naoki890930/composer-my-package
 * @see:unit-test \MyPackage\Test\Sample
 *
 * @author Naoki Nishiyama <naoki890930@gmail.com>
 * @copyright 2017 Naoki Nishiyama
 * @license MIT
 */

namespace MyPackage;

/**
 * サンプルクラス
 *
 * 名前を保持し、その名前を使って挨拶する
 *
 * @package MyPackage\Sample
 */
class Sample
{
    /**
     * 名前
     *
     * @var string
     */
    private $name = '';

    /**
     * 名前を取得する
     *
     * @return string 名前
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * 名前を設定する
     *
     * @param string $name 名前
     * @return void
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * 挨拶する
     *
     * 名前があれば名前をつけて挨拶する
     *
     * @return void
     */
    public function sayHello(): void
    {
        $message = 'Hello' . ($this->name ? ' ' . $this->name : '') . '!';
        echo $message . PHP_EOL;
    }
}
