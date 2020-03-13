<?php

class Pawn extends Figure
{
    public function validate($xFrom = '', $yFrom = '', $xTo = '', $yTo = '', $figures = [])
    {
        if(isset($figures[$xTo][$yTo]) ){
            $cur_from = $figures[$xFrom][$yFrom]->isBlack();
            $cur_to = $figures[$xTo][$yTo]->isBlack();
            if(($cur_from == $cur_to && $figures[$xTo][$yTo]!=$figures[$xFrom--][$yFrom++])
                || $cur_from == $cur_to && $figures[$xTo][$yTo]!=$figures[$xFrom++][$yFrom++]){
                throw new \Exception("Game rules violated ");
            }
        } else {
            if($xFrom != $xTo && $yFrom !=$yTo){
                throw new \Exception("Game rules violated ");
            }
        }
        $this->isBlack() ? --$yFrom : ++$yFrom;
        if (($yFrom == 3 && $yTo == 4) || ($yFrom == 6 && $yTo == 5) ) {
           if(isset($figures[$xFrom][$yFrom++])){
                throw new \Exception("Game rules violated ");
            }
            $out = true;
        } else {
            $out = $yFrom == $yTo;
        }
        return $out;
    }
    public function __toString()
    {
        return !$this->isBlack ? '♟' : '♙';
    }
}
