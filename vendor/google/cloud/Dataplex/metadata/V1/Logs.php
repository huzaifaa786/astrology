<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/logs.proto

namespace GPBMetadata\Google\Cloud\Dataplex\V1;

class Logs
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
#google/cloud/dataplex/v1/logs.protogoogle.cloud.dataplex.v1google/protobuf/duration.protogoogle/protobuf/timestamp.proto"�	
DiscoveryEvent
message (	
lake_id (	
zone_id (	
asset_id (	
data_location (	@
type
 (22.google.cloud.dataplex.v1.DiscoveryEvent.EventTypeH
config (26.google.cloud.dataplex.v1.DiscoveryEvent.ConfigDetailsH H
entity (26.google.cloud.dataplex.v1.DiscoveryEvent.EntityDetailsH N
	partition (29.google.cloud.dataplex.v1.DiscoveryEvent.PartitionDetailsH H
action (26.google.cloud.dataplex.v1.DiscoveryEvent.ActionDetailsH �
ConfigDetailsZ

parameters (2F.google.cloud.dataplex.v1.DiscoveryEvent.ConfigDetails.ParametersEntry1
ParametersEntry
key (	
value (	:8b
EntityDetails
entity (	A
type (23.google.cloud.dataplex.v1.DiscoveryEvent.EntityType�
PartitionDetails
	partition (	
entity (	A
type (23.google.cloud.dataplex.v1.DiscoveryEvent.EntityType
sampled_data_locations (	
ActionDetails
type (	"�
	EventType
EVENT_TYPE_UNSPECIFIED 

CONFIG
ENTITY_CREATED
ENTITY_UPDATED
ENTITY_DELETED
PARTITION_CREATED
PARTITION_UPDATED
PARTITION_DELETED"A

EntityType
ENTITY_TYPE_UNSPECIFIED 	
TABLE
FILESETB	
details"�
JobEvent
message (	
job_id (	.

start_time (2.google.protobuf.Timestamp,
end_time (2.google.protobuf.Timestamp7
state (2(.google.cloud.dataplex.v1.JobEvent.State
retries (5
type (2\'.google.cloud.dataplex.v1.JobEvent.Type;
service (2*.google.cloud.dataplex.v1.JobEvent.Service
service_job	 (	"5
Type
TYPE_UNSPECIFIED 	
SPARK
NOTEBOOK"U
State
STATE_UNSPECIFIED 
	SUCCEEDED

FAILED
	CANCELLED
ABORTED"0
Service
SERVICE_UNSPECIFIED 
DATAPROC"�
SessionEvent
message (	
user_id (	

session_id (	>
type (20.google.cloud.dataplex.v1.SessionEvent.EventTypeC
query (22.google.cloud.dataplex.v1.SessionEvent.QueryDetailH 
event_succeeded (
fast_startup_enabled (6
unassigned_duration (2.google.protobuf.Duration�
QueryDetail
query_id (	

query_text (	I
engine (29.google.cloud.dataplex.v1.SessionEvent.QueryDetail.Engine+
duration (2.google.protobuf.Duration
result_size_bytes (
data_processed_bytes ("=
Engine
ENGINE_UNSPECIFIED 
	SPARK_SQL
BIGQUERY"S
	EventType
EVENT_TYPE_UNSPECIFIED 	
START
STOP	
QUERY

CREATEB
detail"�	
DataScanEvent
data_source (	
job_id (	.

start_time (2.google.protobuf.Timestamp,
end_time (2.google.protobuf.Timestamp>
type (20.google.cloud.dataplex.v1.DataScanEvent.ScanType<
state (2-.google.cloud.dataplex.v1.DataScanEvent.State
message (	
spec_version (	@
trigger	 (2/.google.cloud.dataplex.v1.DataScanEvent.Trigger<
scope
 (2-.google.cloud.dataplex.v1.DataScanEvent.ScopeQ
data_profilee (29.google.cloud.dataplex.v1.DataScanEvent.DataProfileResultH Q
data_qualityf (29.google.cloud.dataplex.v1.DataScanEvent.DataQualityResultH &
DataProfileResult
	row_count (�
DataQualityResult
	row_count (
passed (h
dimension_passed (2N.google.cloud.dataplex.v1.DataScanEvent.DataQualityResult.DimensionPassedEntry6
DimensionPassedEntry
key (	
value (:8"I
ScanType
SCAN_TYPE_UNSPECIFIED 
DATA_PROFILE
DATA_QUALITY"U
State
STATE_UNSPECIFIED 
STARTED
	SUCCEEDED

FAILED
	CANCELLED"?
Trigger
TRIGGER_UNSPECIFIED 
	ON_DEMAND
SCHEDULE"9
Scope
SCOPE_UNSPECIFIED 
FULL
INCREMENTALB
resultBe
com.google.cloud.dataplex.v1B	LogsProtoPZ8cloud.google.com/go/dataplex/apiv1/dataplexpb;dataplexpbbproto3'
        , true);

        static::$is_initialized = true;
    }
}

