<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/appengine/v1/operation.proto

namespace GPBMetadata\Google\Appengine\V1;

class Operation
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
#google/appengine/v1/operation.protogoogle.appengine.v1"�
OperationMetadataV1
method (	/
insert_time (2.google.protobuf.Timestamp,
end_time (2.google.protobuf.Timestamp
user (	
target (	
ephemeral_message (	
warning (	O
create_version_metadata (2,.google.appengine.v1.CreateVersionMetadataV1H B
method_metadata"1
CreateVersionMetadataV1
cloud_build_id (	B�
com.google.appengine.v1BOperationProtoPZ;cloud.google.com/go/appengine/apiv1/appenginepb;appenginepb�Google.Cloud.AppEngine.V1�Google\\Cloud\\AppEngine\\V1�Google::Cloud::AppEngine::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

