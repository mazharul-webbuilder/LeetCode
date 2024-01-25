<?php

class LongestCommonPrefix
{
    /**
     * @param String[] $listOrString
     * @return String
     */
    public function getLongestCommonPrefix(array $listOFString)
    {
        $commonPrefix = '';
        $tempElementPrefix = '';

        for ($i=0; $i < count($listOFString); $i++){
            // get single string element
            $singleString = $listOFString[$i]; // flower

            for ($j=0; $j < strlen($singleString); $j++) {
                if (is_null($tempElementPrefix)) {
                    $tempElementPrefix = $singleString[$j]; // f
                } else{
//                    if ($tempElementPrefix )
                }
            }
        }
    }

}

$object = new LongestCommonPrefix();
echo $object->getLongestCommonPrefix(['flower', 'flow', 'flight']);