<?php
/**
 * Created by PhpStorm.
 * User: ilogachev
 * Date: 13.03.20
 * Time: 21:08
 */
require_once __DIR__ . '/Validate.php';
class Figure implements Validate
{
    protected $isBlack;
    /**
     * @param string $xFrom
     * @param string $yFrom
     * @param string $xTo
     * @param string $yTo
     * @param array $figures
     * @return bool
     * проверка привил игры
     */
    public function validate($xFrom='',$yFrom='',$xTo='',$yTo='',$figures=[])
    {
        return true;
    }

    /**
     * Figure constructor.
     * @param $isBlack
     */
    public function __construct($isBlack)
    {
        $this->isBlack = $isBlack;
    }

    /**
     * @return mixed
     */
    public function isBlack()
    {
        return $this->isBlack;
    }

    /** @noinspection PhpToStringReturnInspection */
    public function __toString()
    {
        throw new \Exception("Not implemented");
    }
}
