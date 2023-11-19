<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/tpu/v1/cloud_tpu.proto

namespace GPBMetadata\Google\Cloud\Tpu\V1;

class CloudTpu
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�/
#google/cloud/tpu/v1/cloud_tpu.protogoogle.cloud.tpu.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto#google/longrunning/operations.protogoogle/protobuf/timestamp.proto"9
SchedulingConfig
preemptible (
reserved ("3
NetworkEndpoint

ip_address (	
port ("�

Node
name (	B�A�A
description (	
accelerator_type (	B�A

ip_address (	B
port (	B3
state	 (2.google.cloud.tpu.v1.Node.StateB�A
health_description
 (	B�A
tensorflow_version (	B�A
network (	

cidr_block (	
service_account (	B�A4
create_time (2.google.protobuf.TimestampB�A@
scheduling_config (2%.google.cloud.tpu.v1.SchedulingConfigD
network_endpoints (2$.google.cloud.tpu.v1.NetworkEndpointB�A0
health (2 .google.cloud.tpu.v1.Node.Health5
labels (2%.google.cloud.tpu.v1.Node.LabelsEntry
use_service_networking (>
api_version& (2$.google.cloud.tpu.v1.Node.ApiVersionB�A3
symptoms\' (2.google.cloud.tpu.v1.SymptomB�A-
LabelsEntry
key (	
value (	:8"�
State
STATE_UNSPECIFIED 
CREATING	
READY

RESTARTING
	REIMAGING
DELETING
	REPAIRING
STOPPED
STOPPING	
STARTING

	PREEMPTED

TERMINATED

HIDING

HIDDEN
UNHIDING"�
Health
HEALTH_UNSPECIFIED 
HEALTHY
DEPRECATED_UNHEALTHY
TIMEOUT
UNHEALTHY_TENSORFLOW
UNHEALTHY_MAINTENANCE"O

ApiVersion
API_VERSION_UNSPECIFIED 
	V1_ALPHA1
V1
	V2_ALPHA1:R�AO
tpu.googleapis.com/Node4projects/{project}/locations/{location}/nodes/{node}"j
ListNodesRequest/
parent (	B�A�Atpu.googleapis.com/Node
	page_size (

page_token (	"k
ListNodesResponse(
nodes (2.google.cloud.tpu.v1.Node
next_page_token (	
unreachable (	"?
GetNodeRequest-
name (	B�A�A
tpu.googleapis.com/Node"�
CreateNodeRequest/
parent (	B�A�Atpu.googleapis.com/Node
node_id (	,
node (2.google.cloud.tpu.v1.NodeB�A"B
DeleteNodeRequest-
name (	B�A�A
tpu.googleapis.com/Node">
ReimageNodeRequest
name (	
tensorflow_version (	"
StopNodeRequest
name (	" 
StartNodeRequest
name (	"�
TensorFlowVersion
name (	
version (	:{�Ax
$tpu.googleapis.com/TensorFlowVersionPprojects/{project}/locations/{location}/tensorFlowVersions/{tensor_flow_version}"Y
GetTensorFlowVersionRequest:
name (	B,�A�A&
$tpu.googleapis.com/TensorFlowVersion"�
ListTensorFlowVersionsRequest<
parent (	B,�A�A&
$tpu.googleapis.com/TensorFlowVersion
	page_size (

page_token (	
filter (	
order_by (	"�
ListTensorFlowVersionsResponseC
tensorflow_versions (2&.google.cloud.tpu.v1.TensorFlowVersion
next_page_token (	
unreachable (	"�
AcceleratorType
name (	
type (	:t�Aq
"tpu.googleapis.com/AcceleratorTypeKprojects/{project}/locations/{location}/acceleratorTypes/{accelerator_type}"U
GetAcceleratorTypeRequest8
name (	B*�A�A$
"tpu.googleapis.com/AcceleratorType"�
ListAcceleratorTypesRequest:
parent (	B*�A�A$
"tpu.googleapis.com/AcceleratorType
	page_size (

page_token (	
filter (	
order_by (	"�
ListAcceleratorTypesResponse?
accelerator_types (2$.google.cloud.tpu.v1.AcceleratorType
next_page_token (	
unreachable (	"�
OperationMetadata/
create_time (2.google.protobuf.Timestamp,
end_time (2.google.protobuf.Timestamp
target (	
verb (	
status_detail (	
cancel_requested (
api_version (	"�
Symptom/
create_time (2.google.protobuf.Timestamp>
symptom_type (2(.google.cloud.tpu.v1.Symptom.SymptomType
details (	
	worker_id (	"�
SymptomType
SYMPTOM_TYPE_UNSPECIFIED 

LOW_MEMORY
OUT_OF_MEMORY
EXECUTE_TIMED_OUT
MESH_BUILD_FAIL
HBM_OUT_OF_MEMORY
PROJECT_ABUSE2�
Tpu�
	ListNodes%.google.cloud.tpu.v1.ListNodesRequest&.google.cloud.tpu.v1.ListNodesResponse":���+)/v1/{parent=projects/*/locations/*}/nodes�Aparent�
GetNode#.google.cloud.tpu.v1.GetNodeRequest.google.cloud.tpu.v1.Node"8���+)/v1/{name=projects/*/locations/*/nodes/*}�Aname�

CreateNode&.google.cloud.tpu.v1.CreateNodeRequest.google.longrunning.Operation"i���1")/v1/{parent=projects/*/locations/*}/nodes:node�Aparent,node,node_id�A
NodeOperationMetadata�

DeleteNode&.google.cloud.tpu.v1.DeleteNodeRequest.google.longrunning.Operation"T���+*)/v1/{name=projects/*/locations/*/nodes/*}�Aname�A
NodeOperationMetadata�
ReimageNode\'.google.cloud.tpu.v1.ReimageNodeRequest.google.longrunning.Operation"X���6"1/v1/{name=projects/*/locations/*/nodes/*}:reimage:*�A
NodeOperationMetadata�
StopNode$.google.cloud.tpu.v1.StopNodeRequest.google.longrunning.Operation"U���3"./v1/{name=projects/*/locations/*/nodes/*}:stop:*�A
NodeOperationMetadata�
	StartNode%.google.cloud.tpu.v1.StartNodeRequest.google.longrunning.Operation"V���4"//v1/{name=projects/*/locations/*/nodes/*}:start:*�A
NodeOperationMetadata�
ListTensorFlowVersions2.google.cloud.tpu.v1.ListTensorFlowVersionsRequest3.google.cloud.tpu.v1.ListTensorFlowVersionsResponse"G���86/v1/{parent=projects/*/locations/*}/tensorflowVersions�Aparent�
GetTensorFlowVersion0.google.cloud.tpu.v1.GetTensorFlowVersionRequest&.google.cloud.tpu.v1.TensorFlowVersion"E���86/v1/{name=projects/*/locations/*/tensorflowVersions/*}�Aname�
ListAcceleratorTypes0.google.cloud.tpu.v1.ListAcceleratorTypesRequest1.google.cloud.tpu.v1.ListAcceleratorTypesResponse"E���64/v1/{parent=projects/*/locations/*}/acceleratorTypes�Aparent�
GetAcceleratorType..google.cloud.tpu.v1.GetAcceleratorTypeRequest$.google.cloud.tpu.v1.AcceleratorType"C���64/v1/{name=projects/*/locations/*/acceleratorTypes/*}�AnameF�Atpu.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformBU
com.google.cloud.tpu.v1BCloudTpuProtoPZ)cloud.google.com/go/tpu/apiv1/tpupb;tpupbbproto3'
        , true);

        static::$is_initialized = true;
    }
}

