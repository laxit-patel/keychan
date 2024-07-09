<?php

namespace Laxit\Keychan;

class Tag
{
    public const DAYS = [
        "01" => "1", "02" => "2", "03" => "3", "04" => "4", "05" => "5",
        "06" => "6", "07" => "7", "08" => "8", "09" => "9", "10" => "A",
        "11" => "B", "12" => "C", "13" => "D", "14" => "E", "15" => "F",
        "16" => "G", "17" => "H", "18" => "I", "19" => "J", "20" => "K",
        "21" => "L", "22" => "M", "23" => "N", "24" => "O", "25" => "P",
        "26" => "Q", "27" => "R", "28" => "S", "29" => "T", "30" => "U", "31" => "V"
    ];

    public const MONTHS = [
        "01" => "1", "02" => "2", "03" => "3", "04" => "4", "05" => "5", "06" => "6",
        "07" => "7", "08" => "8", "09" => "9", "10" => "A", "11" => "B", "12" => "C"
    ];

    public static function date(): string
    {
        return \Carbon\Carbon::now()->format('y') . self::MONTHS[date('m')] . self::DAYS[date('d')];
    }

    public static function generate(string $tag, int $hexLength = 4): string
    {
        // Validate $hexLength to be a positive integer between 4 and 10
        if (!is_int($hexLength) || $hexLength < 4 || $hexLength > 10) {
            throw new \InvalidArgumentException('$hexLength must be an integer between 4 and 10');
        }

        return self::date() . $tag . self::generateCaseSensitiveHex($hexLength);
    }

    public static function generateCaseSensitiveHex($length)
    {
        $chars = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
        $charsLength = strlen($chars);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $chars[rand(0, $charsLength - 1)];
        }
        return $randomString;
    }
}
