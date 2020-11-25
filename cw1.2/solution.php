<?php
function substitute( $sourceString, $dictionary ): string{
    if(gettype($sourceString) != 'string')throw new INPUT_ERROR;
    if($dictionary == []) throw new EMPTY_DICTIONARY;
    foreach ($dictionary as $key => $value) {
        $sourceString = mb_ereg_replace($key, '$value', $sourceString, "ignoreCase");
    }
    return $sourceString;
}
?>  