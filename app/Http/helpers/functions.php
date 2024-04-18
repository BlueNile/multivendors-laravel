<?php
public static function adminAsset($assetlink)
{
    $assetlink="{{url('admin/assets/'+.${$assetlink})}}";
    return $assetlink;
}