<?php declare(strict_types=1);


class ArrayUtils
{
    public static function remover(string $elemento, array &$array)
    {
        $posicao = array_search($elemento, $array, true);
        if (is_int($posicao)) {
            unset($array[$posicao]);
        } else {
            echo "Não foi encontrado no array";
        }

    }

    public static function acharMaior(int $saldo, array $array): array
    {
        $correntistasMaior = $array();
        foreach ($array as $chave=>$valor) {
            if ($valor > $saldo) {
                $correntistasMaior[] = $chave;
            }
        }
        return $correntistasMaior;
    }
}