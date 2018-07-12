<?php
$data = ["John","James","Smith","01-Jan-2000","F"];
$data = ["Johanna","","Gibbs","13-Dec-1981","F"];
function driver($data)
{
    $license = '';
    list($forename, $middleName, $surname, $birthDate, $gender) = $data;
    
    $surname = strtoupper(substr($surname, 0, 5));
    $birthTime = strtotime($birthDate);
    $birthYear = date('Y', $birthTime);
    $birthMonth = date('m', $birthTime);
    $birthDay = date('d', $birthTime);
    $license .= str_pad($surname, 5, 9);
    $decadeDigit = (int)($birthYear % 100 / 10);
    $license .= $decadeDigit;

    $monthOfBirth = $gender == 'F' ? $birthMonth[0] + 5 . $birthMonth[1] : $birthMonth;
    $license .= $monthOfBirth;
    $license .= $birthDay;
    $yearDigit = (int)($birthYear % 10);
    $license .= $yearDigit;
    $fmName = !empty($middleName) ? $forename[0] . $middleName[0] : str_pad($forename[0], 2, 9);
    $license .= $fmName;
    $arbitraryDigit = 9;
    $license .= $arbitraryDigit;
    $checkDigit = 'AA';
    $license .= $checkDigit;
    return $license;
}
echo driver($data);
