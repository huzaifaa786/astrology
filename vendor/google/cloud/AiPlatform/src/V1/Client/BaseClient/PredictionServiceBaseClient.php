<?php
/*
 * Copyright 2023 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * Generated by gapic-generator-php from the file
 * https://github.com/googleapis/googleapis/blob/master/google/cloud/aiplatform/v1/prediction_service.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\AIPlatform\V1\Client\BaseClient;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\PagedListResponse;
use Google\ApiCore\ResourceHelperTrait;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Api\HttpBody;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\AIPlatform\V1\ExplainRequest;
use Google\Cloud\AIPlatform\V1\ExplainResponse;
use Google\Cloud\AIPlatform\V1\PredictRequest;
use Google\Cloud\AIPlatform\V1\PredictResponse;
use Google\Cloud\AIPlatform\V1\RawPredictRequest;
use Google\Cloud\Iam\V1\GetIamPolicyRequest;
use Google\Cloud\Iam\V1\Policy;
use Google\Cloud\Iam\V1\SetIamPolicyRequest;
use Google\Cloud\Iam\V1\TestIamPermissionsRequest;
use Google\Cloud\Iam\V1\TestIamPermissionsResponse;
use Google\Cloud\Location\GetLocationRequest;
use Google\Cloud\Location\ListLocationsRequest;
use Google\Cloud\Location\Location;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * Service Description: A service for online predictions and explanations.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods.
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assist with these names, this class includes a format method for each type of
 * name, and additionally a parseName method to extract the individual identifiers
 * contained within formatted names that are returned by the API.
 *
 * This class is currently experimental and may be subject to changes.
 *
 * @experimental
 *
 * @internal
 *
 * @method PromiseInterface explainAsync(ExplainRequest $request, array $optionalArgs = [])
 * @method PromiseInterface predictAsync(PredictRequest $request, array $optionalArgs = [])
 * @method PromiseInterface rawPredictAsync(RawPredictRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getLocationAsync(GetLocationRequest $request, array $optionalArgs = [])
 * @method PromiseInterface listLocationsAsync(ListLocationsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getIamPolicyAsync(GetIamPolicyRequest $request, array $optionalArgs = [])
 * @method PromiseInterface setIamPolicyAsync(SetIamPolicyRequest $request, array $optionalArgs = [])
 * @method PromiseInterface testIamPermissionsAsync(TestIamPermissionsRequest $request, array $optionalArgs = [])
 */
abstract class PredictionServiceBaseClient
{
    use GapicClientTrait;
    use ResourceHelperTrait;

    /** The name of the service. */
    private const SERVICE_NAME = 'google.cloud.aiplatform.v1.PredictionService';

    /** The default address of the service. */
    private const SERVICE_ADDRESS = 'aiplatform.googleapis.com';

    /** The default port of the service. */
    private const DEFAULT_SERVICE_PORT = 443;

    /** The name of the code generator, to be included in the agent header. */
    private const CODEGEN_NAME = 'gapic';

    /** The default scopes required by the service. */
    public static $serviceScopes = [
        'https://www.googleapis.com/auth/cloud-platform',
    ];

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../../resources/prediction_service_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../../resources/prediction_service_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../../resources/prediction_service_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../../resources/prediction_service_rest_client_config.php',
                ],
            ],
        ];
    }

    /**
     * Formats a string containing the fully-qualified path to represent a endpoint
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $endpoint
     *
     * @return string The formatted endpoint resource.
     */
    public static function endpointName(string $project, string $location, string $endpoint): string
    {
        return self::getPathTemplate('endpoint')->render([
            'project' => $project,
            'location' => $location,
            'endpoint' => $endpoint,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_location_endpoint resource.
     *
     * @param string $project
     * @param string $location
     * @param string $endpoint
     *
     * @return string The formatted project_location_endpoint resource.
     */
    public static function projectLocationEndpointName(string $project, string $location, string $endpoint): string
    {
        return self::getPathTemplate('projectLocationEndpoint')->render([
            'project' => $project,
            'location' => $location,
            'endpoint' => $endpoint,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_location_publisher_model resource.
     *
     * @param string $project
     * @param string $location
     * @param string $publisher
     * @param string $model
     *
     * @return string The formatted project_location_publisher_model resource.
     */
    public static function projectLocationPublisherModelName(string $project, string $location, string $publisher, string $model): string
    {
        return self::getPathTemplate('projectLocationPublisherModel')->render([
            'project' => $project,
            'location' => $location,
            'publisher' => $publisher,
            'model' => $model,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - endpoint: projects/{project}/locations/{location}/endpoints/{endpoint}
     * - projectLocationEndpoint: projects/{project}/locations/{location}/endpoints/{endpoint}
     * - projectLocationPublisherModel: projects/{project}/locations/{location}/publishers/{publisher}/models/{model}
     *
     * The optional $template argument can be supplied to specify a particular pattern,
     * and must match one of the templates listed above. If no $template argument is
     * provided, or if the $template argument does not match one of the templates
     * listed, then parseName will check each of the supported templates, and return
     * the first match.
     *
     * @param string $formattedName The formatted name string
     * @param string $template      Optional name of template to match
     *
     * @return array An associative array from name component IDs to component values.
     *
     * @throws ValidationException If $formattedName could not be matched.
     */
    public static function parseName(string $formattedName, string $template = null): array
    {
        return self::parseFormattedName($formattedName, $template);
    }

    /**
     * Constructor.
     *
     * @param array $options {
     *     Optional. Options for configuring the service API wrapper.
     *
     *     @type string $apiEndpoint
     *           The address of the API remote host. May optionally include the port, formatted
     *           as "<uri>:<port>". Default 'aiplatform.googleapis.com:443'.
     *     @type string|array|FetchAuthTokenInterface|CredentialsWrapper $credentials
     *           The credentials to be used by the client to authorize API calls. This option
     *           accepts either a path to a credentials file, or a decoded credentials file as a
     *           PHP array.
     *           *Advanced usage*: In addition, this option can also accept a pre-constructed
     *           {@see \Google\Auth\FetchAuthTokenInterface} object or
     *           {@see \Google\ApiCore\CredentialsWrapper} object. Note that when one of these
     *           objects are provided, any settings in $credentialsConfig will be ignored.
     *     @type array $credentialsConfig
     *           Options used to configure credentials, including auth token caching, for the
     *           client. For a full list of supporting configuration options, see
     *           {@see \Google\ApiCore\CredentialsWrapper::build()} .
     *     @type bool $disableRetries
     *           Determines whether or not retries defined by the client configuration should be
     *           disabled. Defaults to `false`.
     *     @type string|array $clientConfig
     *           Client method configuration, including retry settings. This option can be either
     *           a path to a JSON file, or a PHP array containing the decoded JSON data. By
     *           default this settings points to the default client config file, which is
     *           provided in the resources folder.
     *     @type string|TransportInterface $transport
     *           The transport used for executing network requests. May be either the string
     *           `rest` or `grpc`. Defaults to `grpc` if gRPC support is detected on the system.
     *           *Advanced usage*: Additionally, it is possible to pass in an already
     *           instantiated {@see \Google\ApiCore\Transport\TransportInterface} object. Note
     *           that when this object is provided, any settings in $transportConfig, and any
     *           $apiEndpoint setting, will be ignored.
     *     @type array $transportConfig
     *           Configuration options that will be used to construct the transport. Options for
     *           each supported transport type should be passed in a key for that transport. For
     *           example:
     *           $transportConfig = [
     *               'grpc' => [...],
     *               'rest' => [...],
     *           ];
     *           See the {@see \Google\ApiCore\Transport\GrpcTransport::build()} and
     *           {@see \Google\ApiCore\Transport\RestTransport::build()} methods for the
     *           supported options.
     *     @type callable $clientCertSource
     *           A callable which returns the client cert as a string. This can be used to
     *           provide a certificate and private key to the transport layer for mTLS.
     * }
     *
     * @throws ValidationException
     */
    public function __construct(array $options = [])
    {
        $clientOptions = $this->buildClientOptions($options);
        $this->setClientOptions($clientOptions);
    }

    /** Handles execution of the async variants for each documented method. */
    public function __call($method, $args)
    {
        if (substr($method, -5) !== 'Async') {
            trigger_error('Call to undefined method ' . __CLASS__ . "::$method()", E_USER_ERROR);
        }

        array_unshift($args, substr($method, 0, -5));
        return call_user_func_array([$this, 'startAsyncCall'], $args);
    }

    /**
     * Perform an online explanation.
     *
     * If
     * [deployed_model_id][google.cloud.aiplatform.v1.ExplainRequest.deployed_model_id]
     * is specified, the corresponding DeployModel must have
     * [explanation_spec][google.cloud.aiplatform.v1.DeployedModel.explanation_spec]
     * populated. If
     * [deployed_model_id][google.cloud.aiplatform.v1.ExplainRequest.deployed_model_id]
     * is not specified, all DeployedModels must have
     * [explanation_spec][google.cloud.aiplatform.v1.DeployedModel.explanation_spec]
     * populated. Only deployed AutoML tabular Models have
     * explanation_spec.
     *
     * The async variant is {@see self::explainAsync()} .
     *
     * @param ExplainRequest $request     A request to house fields associated with the call.
     * @param array          $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return ExplainResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function explain(ExplainRequest $request, array $callOptions = []): ExplainResponse
    {
        return $this->startApiCall('Explain', $request, $callOptions)->wait();
    }

    /**
     * Perform an online prediction.
     *
     * The async variant is {@see self::predictAsync()} .
     *
     * @param PredictRequest $request     A request to house fields associated with the call.
     * @param array          $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return PredictResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function predict(PredictRequest $request, array $callOptions = []): PredictResponse
    {
        return $this->startApiCall('Predict', $request, $callOptions)->wait();
    }

    /**
     * Perform an online prediction with an arbitrary HTTP payload.
     *
     * The response includes the following HTTP headers:
     *
     * * `X-Vertex-AI-Endpoint-Id`: ID of the
     * [Endpoint][google.cloud.aiplatform.v1.Endpoint] that served this
     * prediction.
     *
     * * `X-Vertex-AI-Deployed-Model-Id`: ID of the Endpoint's
     * [DeployedModel][google.cloud.aiplatform.v1.DeployedModel] that served this
     * prediction.
     *
     * The async variant is {@see self::rawPredictAsync()} .
     *
     * @param RawPredictRequest $request     A request to house fields associated with the call.
     * @param array             $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return HttpBody
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function rawPredict(RawPredictRequest $request, array $callOptions = []): HttpBody
    {
        return $this->startApiCall('RawPredict', $request, $callOptions)->wait();
    }

    /**
     * Gets information about a location.
     *
     * The async variant is {@see self::getLocationAsync()} .
     *
     * @param GetLocationRequest $request     A request to house fields associated with the call.
     * @param array              $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Location
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getLocation(GetLocationRequest $request, array $callOptions = []): Location
    {
        return $this->startApiCall('GetLocation', $request, $callOptions)->wait();
    }

    /**
     * Lists information about the supported locations for this service.
     *
     * The async variant is {@see self::listLocationsAsync()} .
     *
     * @param ListLocationsRequest $request     A request to house fields associated with the call.
     * @param array                $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return PagedListResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function listLocations(ListLocationsRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListLocations', $request, $callOptions);
    }

    /**
     * Gets the access control policy for a resource. Returns an empty policy
    if the resource exists and does not have a policy set.
     *
     * The async variant is {@see self::getIamPolicyAsync()} .
     *
     * @param GetIamPolicyRequest $request     A request to house fields associated with the call.
     * @param array               $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Policy
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getIamPolicy(GetIamPolicyRequest $request, array $callOptions = []): Policy
    {
        return $this->startApiCall('GetIamPolicy', $request, $callOptions)->wait();
    }

    /**
     * Sets the access control policy on the specified resource. Replaces
    any existing policy.

    Can return `NOT_FOUND`, `INVALID_ARGUMENT`, and `PERMISSION_DENIED`
    errors.
     *
     * The async variant is {@see self::setIamPolicyAsync()} .
     *
     * @param SetIamPolicyRequest $request     A request to house fields associated with the call.
     * @param array               $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Policy
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function setIamPolicy(SetIamPolicyRequest $request, array $callOptions = []): Policy
    {
        return $this->startApiCall('SetIamPolicy', $request, $callOptions)->wait();
    }

    /**
     * Returns permissions that a caller has on the specified resource. If the
    resource does not exist, this will return an empty set of
    permissions, not a `NOT_FOUND` error.

    Note: This operation is designed to be used for building
    permission-aware UIs and command-line tools, not for authorization
    checking. This operation may "fail open" without warning.
     *
     * The async variant is {@see self::testIamPermissionsAsync()} .
     *
     * @param TestIamPermissionsRequest $request     A request to house fields associated with the call.
     * @param array                     $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return TestIamPermissionsResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function testIamPermissions(TestIamPermissionsRequest $request, array $callOptions = []): TestIamPermissionsResponse
    {
        return $this->startApiCall('TestIamPermissions', $request, $callOptions)->wait();
    }
}