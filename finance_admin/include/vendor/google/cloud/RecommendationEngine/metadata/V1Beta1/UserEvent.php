<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/recommendationengine/v1beta1/user_event.proto

namespace GPBMetadata\Google\Cloud\Recommendationengine\V1Beta1;

class UserEvent
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Cloud\Recommendationengine\V1Beta1\Catalog::initOnce();
        \GPBMetadata\Google\Cloud\Recommendationengine\V1Beta1\Common::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a9f140a3a676f6f676c652f636c6f75642f7265636f6d6d656e646174696f6e656e67696e652f763162657461312f757365725f6576656e742e70726f746f1229676f6f676c652e636c6f75642e7265636f6d6d656e646174696f6e656e67696e652e763162657461311a37676f6f676c652f636c6f75642f7265636f6d6d656e646174696f6e656e67696e652f763162657461312f636174616c6f672e70726f746f1a36676f6f676c652f636c6f75642f7265636f6d6d656e646174696f6e656e67696e652f763162657461312f636f6d6d6f6e2e70726f746f1a1f676f6f676c652f70726f746f6275662f74696d657374616d702e70726f746f1a1c676f6f676c652f6170692f616e6e6f746174696f6e732e70726f746f2292040a09557365724576656e7412170a0a6576656e745f747970651801200128094203e04102124b0a09757365725f696e666f18022001280b32332e676f6f676c652e636c6f75642e7265636f6d6d656e646174696f6e656e67696e652e763162657461312e55736572496e666f4203e0410212510a0c6576656e745f64657461696c18032001280b32362e676f6f676c652e636c6f75642e7265636f6d6d656e646174696f6e656e67696e652e763162657461312e4576656e7444657461696c4203e0410112600a1470726f647563745f6576656e745f64657461696c18042001280b323d2e676f6f676c652e636c6f75642e7265636f6d6d656e646174696f6e656e67696e652e763162657461312e50726f647563744576656e7444657461696c4203e0410112330a0a6576656e745f74696d6518052001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d704203e04101125b0a0c6576656e745f736f7572636518062001280e32402e676f6f676c652e636c6f75642e7265636f6d6d656e646174696f6e656e67696e652e763162657461312e557365724576656e742e4576656e74536f757263654203e0410122580a0b4576656e74536f75726365121c0a184556454e545f534f555243455f554e5350454349464945441000120a0a064155544f4d4c1001120d0a0945434f4d4d45524345100212100a0c42415443485f55504c4f41441003228d010a0855736572496e666f12170a0a76697369746f725f69641801200128094203e0410212140a07757365725f69641802200128094203e0410112170a0a69705f616464726573731803200128094203e0410112170a0a757365725f6167656e741804200128094203e0410112200a136469726563745f757365725f726571756573741805200128084203e0410122eb010a0b4576656e7444657461696c12100a037572691801200128094203e0410112190a0c72656665727265725f7572691806200128094203e0410112190a0c706167655f766965775f69641802200128094203e04101121b0a0e6578706572696d656e745f6964731803200328094203e0410112210a147265636f6d6d656e646174696f6e5f746f6b656e1804200128094203e0410112540a106576656e745f6174747269627574657318052001280b32352e676f6f676c652e636c6f75642e7265636f6d6d656e646174696f6e656e67696e652e763162657461312e466561747572654d61704203e0410122ea020a1250726f647563744576656e7444657461696c12140a0c7365617263685f717565727918012001280912610a0f706167655f63617465676f7269657318022003280b32482e676f6f676c652e636c6f75642e7265636f6d6d656e646174696f6e656e67696e652e763162657461312e436174616c6f674974656d2e43617465676f727948696572617263687912510a0f70726f647563745f64657461696c7318032003280b32382e676f6f676c652e636c6f75642e7265636f6d6d656e646174696f6e656e67696e652e763162657461312e50726f6475637444657461696c120f0a076c6973745f696418042001280912140a07636172745f69641805200128094203e0410112610a1470757263686173655f7472616e73616374696f6e18062001280b323e2e676f6f676c652e636c6f75642e7265636f6d6d656e646174696f6e656e67696e652e763162657461312e50757263686173655472616e73616374696f6e4203e0410122f2020a1350757263686173655472616e73616374696f6e120f0a0269641801200128094203e0410112140a07726576656e75651802200128024203e04102125d0a05746178657318032003280b32492e676f6f676c652e636c6f75642e7265636f6d6d656e646174696f6e656e67696e652e763162657461312e50757263686173655472616e73616374696f6e2e5461786573456e7472794203e04101125d0a05636f73747318042003280b32492e676f6f676c652e636c6f75642e7265636f6d6d656e646174696f6e656e67696e652e763162657461312e50757263686173655472616e73616374696f6e2e436f737473456e7472794203e04101121a0a0d63757272656e63795f636f64651806200128094203e041021a2c0a0a5461786573456e747279120b0a036b6579180120012809120d0a0576616c75651802200128023a0238011a2c0a0a436f737473456e747279120b0a036b6579180120012809120d0a0576616c75651802200128023a02380122e6020a0d50726f6475637444657461696c120f0a0269641801200128094203e04102121a0a0d63757272656e63795f636f64651802200128094203e04101121b0a0e6f726967696e616c5f70726963651803200128024203e04101121a0a0d646973706c61795f70726963651804200128024203e0410112620a0b73746f636b5f737461746518052001280e32482e676f6f676c652e636c6f75642e7265636f6d6d656e646174696f6e656e67696e652e763162657461312e50726f64756374436174616c6f674974656d2e53746f636b53746174654203e0410112150a087175616e746974791806200128054203e04101121f0a12617661696c61626c655f7175616e746974791807200128054203e0410112530a0f6974656d5f6174747269627574657318082001280b32352e676f6f676c652e636c6f75642e7265636f6d6d656e646174696f6e656e67696e652e763162657461312e466561747572654d61704203e04101429f020a2d636f6d2e676f6f676c652e636c6f75642e7265636f6d6d656e646174696f6e656e67696e652e7631626574613150015a5d676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f636c6f75642f7265636f6d6d656e646174696f6e656e67696e652f763162657461313b7265636f6d6d656e646174696f6e656e67696e65a202055245434149aa0229476f6f676c652e436c6f75642e5265636f6d6d656e646174696f6e456e67696e652e56314265746131ca0229476f6f676c655c436c6f75645c5265636f6d6d656e646174696f6e456e67696e655c56316265746131ea022c476f6f676c653a3a436c6f75643a3a5265636f6d6d656e646174696f6e456e67696e653a3a56316265746131620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

