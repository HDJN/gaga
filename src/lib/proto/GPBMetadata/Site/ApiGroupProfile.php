<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: site/api_group_profile.proto

namespace GPBMetadata\Site;

class ApiGroupProfile
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Core\Group::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ab3020a1c736974652f6170695f67726f75705f70726f66696c652e7072" .
            "6f746f12047369746522290a1641706947726f757050726f66696c655265" .
            "7175657374120f0a0767726f75704964180120012809227f0a1741706947" .
            "726f757050726f66696c65526573706f6e736512290a0770726f66696c65" .
            "18012001280b32182e636f72652e5075626c696347726f757050726f6669" .
            "6c65120e0a0669734d75746518022001280812290a0a6d656d6265725479" .
            "706518032001280e32152e636f72652e47726f75704d656d626572547970" .
            "6542590a13636f6d2e7a616c792e70726f746f2e736974655a3067697468" .
            "75622e636f6d2f616b6178696e636f6d2f6475636b636861742d67617465" .
            "7761792f70726f746f2f73697465ca020f5a616c795c50726f746f5c5369" .
            "7465620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}
