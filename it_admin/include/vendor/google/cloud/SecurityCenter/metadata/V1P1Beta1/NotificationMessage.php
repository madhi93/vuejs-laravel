<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v1p1beta1/notification_message.proto

namespace GPBMetadata\Google\Cloud\Securitycenter\V1P1Beta1;

class NotificationMessage
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Cloud\Securitycenter\V1P1Beta1\Asset::initOnce();
        \GPBMetadata\Google\Cloud\Securitycenter\V1P1Beta1\Finding::initOnce();
        \GPBMetadata\Google\Cloud\Securitycenter\V1P1Beta1\Resource::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ad8050a40676f6f676c652f636c6f75642f736563757269747963656e7465722f7631703162657461312f6e6f74696669636174696f6e5f6d6573736167652e70726f746f1225676f6f676c652e636c6f75642e736563757269747963656e7465722e7631703162657461311a31676f6f676c652f636c6f75642f736563757269747963656e7465722f7631703162657461312f61737365742e70726f746f1a33676f6f676c652f636c6f75642f736563757269747963656e7465722f7631703162657461312f66696e64696e672e70726f746f1a34676f6f676c652f636c6f75642f736563757269747963656e7465722f7631703162657461312f7265736f757263652e70726f746f22c6010a134e6f74696669636174696f6e4d65737361676512200a186e6f74696669636174696f6e5f636f6e6669675f6e616d6518012001280912410a0766696e64696e6718022001280b322e2e676f6f676c652e636c6f75642e736563757269747963656e7465722e7631703162657461312e46696e64696e67480012410a087265736f7572636518032001280b322f2e676f6f676c652e636c6f75642e736563757269747963656e7465722e7631703162657461312e5265736f7572636542070a056576656e7442fd010a29636f6d2e676f6f676c652e636c6f75642e736563757269747963656e7465722e76317031626574613150015a53676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f636c6f75642f736563757269747963656e7465722f7631703162657461313b736563757269747963656e746572aa0225476f6f676c652e436c6f75642e536563757269747943656e7465722e563150314265746131ca0225476f6f676c655c436c6f75645c536563757269747943656e7465725c563170316265746131ea0228476f6f676c653a3a436c6f75643a3a536563757269747943656e7465723a3a563170316265746131620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}
