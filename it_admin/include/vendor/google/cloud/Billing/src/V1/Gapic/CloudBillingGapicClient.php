<?php
/*
 * Copyright 2020 Google LLC
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
 * This file was generated from the file
 * https://github.com/google/googleapis/blob/master/google/cloud/billing/v1/cloud_billing.proto
 * and updates to that file get reflected here through a refresh process.
 */

namespace Google\Cloud\Billing\V1\Gapic;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\PathTemplate;
use Google\ApiCore\RequestParamsHeaderDescriptor;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\Billing\V1\BillingAccount;
use Google\Cloud\Billing\V1\CreateBillingAccountRequest;
use Google\Cloud\Billing\V1\GetBillingAccountRequest;
use Google\Cloud\Billing\V1\GetProjectBillingInfoRequest;
use Google\Cloud\Billing\V1\ListBillingAccountsRequest;
use Google\Cloud\Billing\V1\ListBillingAccountsResponse;
use Google\Cloud\Billing\V1\ListProjectBillingInfoRequest;
use Google\Cloud\Billing\V1\ListProjectBillingInfoResponse;
use Google\Cloud\Billing\V1\ProjectBillingInfo;
use Google\Cloud\Billing\V1\UpdateBillingAccountRequest;
use Google\Cloud\Billing\V1\UpdateProjectBillingInfoRequest;
use Google\Cloud\Iam\V1\GetIamPolicyRequest;
use Google\Cloud\Iam\V1\GetPolicyOptions;
use Google\Cloud\Iam\V1\Policy;
use Google\Cloud\Iam\V1\SetIamPolicyRequest;
use Google\Cloud\Iam\V1\TestIamPermissionsRequest;
use Google\Cloud\Iam\V1\TestIamPermissionsResponse;
use Google\Protobuf\FieldMask;

/**
 * Service Description: Retrieves GCP Console billing accounts and associates them with projects.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * ```
 * $cloudBillingClient = new CloudBillingClient();
 * try {
 *     $formattedName = $cloudBillingClient->billingAccountName('[BILLING_ACCOUNT]');
 *     $response = $cloudBillingClient->getBillingAccount($formattedName);
 * } finally {
 *     $cloudBillingClient->close();
 * }
 * ```
 *
 * Many parameters require resource names to be formatted in a particular way. To assist
 * with these names, this class includes a format method for each type of name, and additionally
 * a parseName method to extract the individual identifiers contained within formatted names
 * that are returned by the API.
 */
class CloudBillingGapicClient
{
    use GapicClientTrait;

    /**
     * The name of the service.
     */
    const SERVICE_NAME = 'google.cloud.billing.v1.CloudBilling';

    /**
     * The default address of the service.
     */
    const SERVICE_ADDRESS = 'cloudbilling.googleapis.com';

    /**
     * The default port of the service.
     */
    const DEFAULT_SERVICE_PORT = 443;

    /**
     * The name of the code generator, to be included in the agent header.
     */
    const CODEGEN_NAME = 'gapic';

    /**
     * The default scopes required by the service.
     */
    public static $serviceScopes = [
        'https://www.googleapis.com/auth/cloud-platform',
    ];
    private static $billingAccountNameTemplate;
    private static $pathTemplateMap;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'serviceAddress' => self::SERVICE_ADDRESS.':'.self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__.'/../resources/cloud_billing_client_config.json',
            'descriptorsConfigPath' => __DIR__.'/../resources/cloud_billing_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__.'/../resources/cloud_billing_grpc_config.json',
            'credentialsConfig' => [
                'scopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__.'/../resources/cloud_billing_rest_client_config.php',
                ],
            ],
        ];
    }

    private static function getBillingAccountNameTemplate()
    {
        if (null == self::$billingAccountNameTemplate) {
            self::$billingAccountNameTemplate = new PathTemplate('billingAccounts/{billing_account}');
        }

        return self::$billingAccountNameTemplate;
    }

    private static function getPathTemplateMap()
    {
        if (null == self::$pathTemplateMap) {
            self::$pathTemplateMap = [
                'billingAccount' => self::getBillingAccountNameTemplate(),
            ];
        }

        return self::$pathTemplateMap;
    }

    /**
     * Formats a string containing the fully-qualified path to represent
     * a billing_account resource.
     *
     * @param string $billingAccount
     *
     * @return string The formatted billing_account resource.
     */
    public static function billingAccountName($billingAccount)
    {
        return self::getBillingAccountNameTemplate()->render([
            'billing_account' => $billingAccount,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - billingAccount: billingAccounts/{billing_account}.
     *
     * The optional $template argument can be supplied to specify a particular pattern, and must
     * match one of the templates listed above. If no $template argument is provided, or if the
     * $template argument does not match one of the templates listed, then parseName will check
     * each of the supported templates, and return the first match.
     *
     * @param string $formattedName The formatted name string
     * @param string $template      Optional name of template to match
     *
     * @return array An associative array from name component IDs to component values.
     *
     * @throws ValidationException If $formattedName could not be matched.
     */
    public static function parseName($formattedName, $template = null)
    {
        $templateMap = self::getPathTemplateMap();

        if ($template) {
            if (!isset($templateMap[$template])) {
                throw new ValidationException("Template name $template does not exist");
            }

            return $templateMap[$template]->match($formattedName);
        }

        foreach ($templateMap as $templateName => $pathTemplate) {
            try {
                return $pathTemplate->match($formattedName);
            } catch (ValidationException $ex) {
                // Swallow the exception to continue trying other path templates
            }
        }
        throw new ValidationException("Input did not match any known format. Input: $formattedName");
    }

    /**
     * Constructor.
     *
     * @param array $options {
     *                       Optional. Options for configuring the service API wrapper.
     *
     *     @type string $serviceAddress
     *           **Deprecated**. This option will be removed in a future major release. Please
     *           utilize the `$apiEndpoint` option instead.
     *     @type string $apiEndpoint
     *           The address of the API remote host. May optionally include the port, formatted
     *           as "<uri>:<port>". Default 'cloudbilling.googleapis.com:443'.
     *     @type string|array|FetchAuthTokenInterface|CredentialsWrapper $credentials
     *           The credentials to be used by the client to authorize API calls. This option
     *           accepts either a path to a credentials file, or a decoded credentials file as a
     *           PHP array.
     *           *Advanced usage*: In addition, this option can also accept a pre-constructed
     *           {@see \Google\Auth\FetchAuthTokenInterface} object or
     *           {@see \Google\ApiCore\CredentialsWrapper} object. Note that when one of these
     *           objects are provided, any settings in $credentialsConfig will be ignored.
     *     @type array $credentialsConfig
     *           Options used to configure credentials, including auth token caching, for the client.
     *           For a full list of supporting configuration options, see
     *           {@see \Google\ApiCore\CredentialsWrapper::build()}.
     *     @type bool $disableRetries
     *           Determines whether or not retries defined by the client configuration should be
     *           disabled. Defaults to `false`.
     *     @type string|array $clientConfig
     *           Client method configuration, including retry settings. This option can be either a
     *           path to a JSON file, or a PHP array containing the decoded JSON data.
     *           By default this settings points to the default client config file, which is provided
     *           in the resources folder.
     *     @type string|TransportInterface $transport
     *           The transport used for executing network requests. May be either the string `rest`
     *           or `grpc`. Defaults to `grpc` if gRPC support is detected on the system.
     *           *Advanced usage*: Additionally, it is possible to pass in an already instantiated
     *           {@see \Google\ApiCore\Transport\TransportInterface} object. Note that when this
     *           object is provided, any settings in $transportConfig, and any `$apiEndpoint`
     *           setting, will be ignored.
     *     @type array $transportConfig
     *           Configuration options that will be used to construct the transport. Options for
     *           each supported transport type should be passed in a key for that transport. For
     *           example:
     *           $transportConfig = [
     *               'grpc' => [...],
     *               'rest' => [...]
     *           ];
     *           See the {@see \Google\ApiCore\Transport\GrpcTransport::build()} and
     *           {@see \Google\ApiCore\Transport\RestTransport::build()} methods for the
     *           supported options.
     * }
     *
     * @throws ValidationException
     */
    public function __construct(array $options = [])
    {
        $clientOptions = $this->buildClientOptions($options);
        $this->setClientOptions($clientOptions);
    }

    /**
     * Gets information about a billing account. The current authenticated user
     * must be a [viewer of the billing
     * account](https://cloud.google.com/billing/docs/how-to/billing-access).
     *
     * Sample code:
     * ```
     * $cloudBillingClient = new CloudBillingClient();
     * try {
     *     $formattedName = $cloudBillingClient->billingAccountName('[BILLING_ACCOUNT]');
     *     $response = $cloudBillingClient->getBillingAccount($formattedName);
     * } finally {
     *     $cloudBillingClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The resource name of the billing account to retrieve. For example,
     *                             `billingAccounts/012345-567890-ABCDEF`.
     * @param array  $optionalArgs {
     *                             Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Billing\V1\BillingAccount
     *
     * @throws ApiException if the remote call fails
     */
    public function getBillingAccount($name, array $optionalArgs = [])
    {
        $request = new GetBillingAccountRequest();
        $request->setName($name);

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'GetBillingAccount',
            BillingAccount::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Lists the billing accounts that the current authenticated user has
     * permission to
     * [view](https://cloud.google.com/billing/docs/how-to/billing-access).
     *
     * Sample code:
     * ```
     * $cloudBillingClient = new CloudBillingClient();
     * try {
     *     // Iterate over pages of elements
     *     $pagedResponse = $cloudBillingClient->listBillingAccounts();
     *     foreach ($pagedResponse->iteratePages() as $page) {
     *         foreach ($page as $element) {
     *             // doSomethingWith($element);
     *         }
     *     }
     *
     *
     *     // Alternatively:
     *
     *     // Iterate through all elements
     *     $pagedResponse = $cloudBillingClient->listBillingAccounts();
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $cloudBillingClient->close();
     * }
     * ```
     *
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type int $pageSize
     *          The maximum number of resources contained in the underlying API
     *          response. The API may return fewer values in a page, even if
     *          there are additional values to be retrieved.
     *     @type string $pageToken
     *          A page token is used to specify a page of values to be returned.
     *          If no page token is specified (the default), the first page
     *          of values will be returned. Any page token used here must have
     *          been generated by a previous call to the API.
     *     @type string $filter
     *          Options for how to filter the returned billing accounts.
     *          Currently this only supports filtering for
     *          [subaccounts](https://cloud.google.com/billing/docs/concepts) under a
     *          single provided reseller billing account.
     *          (e.g. "master_billing_account=billingAccounts/012345-678901-ABCDEF").
     *          Boolean algebra and other fields are not currently supported.
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\ApiCore\PagedListResponse
     *
     * @throws ApiException if the remote call fails
     */
    public function listBillingAccounts(array $optionalArgs = [])
    {
        $request = new ListBillingAccountsRequest();
        if (isset($optionalArgs['pageSize'])) {
            $request->setPageSize($optionalArgs['pageSize']);
        }
        if (isset($optionalArgs['pageToken'])) {
            $request->setPageToken($optionalArgs['pageToken']);
        }
        if (isset($optionalArgs['filter'])) {
            $request->setFilter($optionalArgs['filter']);
        }

        return $this->getPagedListResponse(
            'ListBillingAccounts',
            $optionalArgs,
            ListBillingAccountsResponse::class,
            $request
        );
    }

    /**
     * Updates a billing account's fields.
     * Currently the only field that can be edited is `display_name`.
     * The current authenticated user must have the `billing.accounts.update`
     * IAM permission, which is typically given to the
     * [administrator](https://cloud.google.com/billing/docs/how-to/billing-access)
     * of the billing account.
     *
     * Sample code:
     * ```
     * $cloudBillingClient = new CloudBillingClient();
     * try {
     *     $formattedName = $cloudBillingClient->billingAccountName('[BILLING_ACCOUNT]');
     *     $account = new BillingAccount();
     *     $response = $cloudBillingClient->updateBillingAccount($formattedName, $account);
     * } finally {
     *     $cloudBillingClient->close();
     * }
     * ```
     *
     * @param string         $name         Required. The name of the billing account resource to be updated.
     * @param BillingAccount $account      Required. The billing account resource to replace the resource on the server.
     * @param array          $optionalArgs {
     *                                     Optional.
     *
     *     @type FieldMask $updateMask
     *          The update mask applied to the resource.
     *          Only "display_name" is currently supported.
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Billing\V1\BillingAccount
     *
     * @throws ApiException if the remote call fails
     */
    public function updateBillingAccount($name, $account, array $optionalArgs = [])
    {
        $request = new UpdateBillingAccountRequest();
        $request->setName($name);
        $request->setAccount($account);
        if (isset($optionalArgs['updateMask'])) {
            $request->setUpdateMask($optionalArgs['updateMask']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'UpdateBillingAccount',
            BillingAccount::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Creates a billing account.
     * This method can only be used to create
     * [billing subaccounts](https://cloud.google.com/billing/docs/concepts)
     * by GCP resellers.
     * When creating a subaccount, the current authenticated user must have the
     * `billing.accounts.update` IAM permission on the master account, which is
     * typically given to billing account
     * [administrators](https://cloud.google.com/billing/docs/how-to/billing-access).
     * This method will return an error if the master account has not been
     * provisioned as a reseller account.
     *
     * Sample code:
     * ```
     * $cloudBillingClient = new CloudBillingClient();
     * try {
     *     $billingAccount = new BillingAccount();
     *     $response = $cloudBillingClient->createBillingAccount($billingAccount);
     * } finally {
     *     $cloudBillingClient->close();
     * }
     * ```
     *
     * @param BillingAccount $billingAccount Required. The billing account resource to create.
     *                                       Currently CreateBillingAccount only supports subaccount creation, so
     *                                       any created billing accounts must be under a provided master billing
     *                                       account.
     * @param array          $optionalArgs   {
     *                                       Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Billing\V1\BillingAccount
     *
     * @throws ApiException if the remote call fails
     */
    public function createBillingAccount($billingAccount, array $optionalArgs = [])
    {
        $request = new CreateBillingAccountRequest();
        $request->setBillingAccount($billingAccount);

        return $this->startCall(
            'CreateBillingAccount',
            BillingAccount::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Lists the projects associated with a billing account. The current
     * authenticated user must have the `billing.resourceAssociations.list` IAM
     * permission, which is often given to billing account
     * [viewers](https://cloud.google.com/billing/docs/how-to/billing-access).
     *
     * Sample code:
     * ```
     * $cloudBillingClient = new CloudBillingClient();
     * try {
     *     $formattedName = $cloudBillingClient->billingAccountName('[BILLING_ACCOUNT]');
     *     // Iterate over pages of elements
     *     $pagedResponse = $cloudBillingClient->listProjectBillingInfo($formattedName);
     *     foreach ($pagedResponse->iteratePages() as $page) {
     *         foreach ($page as $element) {
     *             // doSomethingWith($element);
     *         }
     *     }
     *
     *
     *     // Alternatively:
     *
     *     // Iterate through all elements
     *     $pagedResponse = $cloudBillingClient->listProjectBillingInfo($formattedName);
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $cloudBillingClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The resource name of the billing account associated with the projects that
     *                             you want to list. For example, `billingAccounts/012345-567890-ABCDEF`.
     * @param array  $optionalArgs {
     *                             Optional.
     *
     *     @type int $pageSize
     *          The maximum number of resources contained in the underlying API
     *          response. The API may return fewer values in a page, even if
     *          there are additional values to be retrieved.
     *     @type string $pageToken
     *          A page token is used to specify a page of values to be returned.
     *          If no page token is specified (the default), the first page
     *          of values will be returned. Any page token used here must have
     *          been generated by a previous call to the API.
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\ApiCore\PagedListResponse
     *
     * @throws ApiException if the remote call fails
     */
    public function listProjectBillingInfo($name, array $optionalArgs = [])
    {
        $request = new ListProjectBillingInfoRequest();
        $request->setName($name);
        if (isset($optionalArgs['pageSize'])) {
            $request->setPageSize($optionalArgs['pageSize']);
        }
        if (isset($optionalArgs['pageToken'])) {
            $request->setPageToken($optionalArgs['pageToken']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->getPagedListResponse(
            'ListProjectBillingInfo',
            $optionalArgs,
            ListProjectBillingInfoResponse::class,
            $request
        );
    }

    /**
     * Gets the billing information for a project. The current authenticated user
     * must have [permission to view the
     * project](https://cloud.google.com/docs/permissions-overview#h.bgs0oxofvnoo
     * ).
     *
     * Sample code:
     * ```
     * $cloudBillingClient = new CloudBillingClient();
     * try {
     *     $name = '';
     *     $response = $cloudBillingClient->getProjectBillingInfo($name);
     * } finally {
     *     $cloudBillingClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The resource name of the project for which billing information is
     *                             retrieved. For example, `projects/tokyo-rain-123`.
     * @param array  $optionalArgs {
     *                             Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Billing\V1\ProjectBillingInfo
     *
     * @throws ApiException if the remote call fails
     */
    public function getProjectBillingInfo($name, array $optionalArgs = [])
    {
        $request = new GetProjectBillingInfoRequest();
        $request->setName($name);

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'GetProjectBillingInfo',
            ProjectBillingInfo::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Sets or updates the billing account associated with a project. You specify
     * the new billing account by setting the `billing_account_name` in the
     * `ProjectBillingInfo` resource to the resource name of a billing account.
     * Associating a project with an open billing account enables billing on the
     * project and allows charges for resource usage. If the project already had a
     * billing account, this method changes the billing account used for resource
     * usage charges.
     *
     * *Note:* Incurred charges that have not yet been reported in the transaction
     * history of the GCP Console might be billed to the new billing
     * account, even if the charge occurred before the new billing account was
     * assigned to the project.
     *
     * The current authenticated user must have ownership privileges for both the
     * [project](https://cloud.google.com/docs/permissions-overview#h.bgs0oxofvnoo
     * ) and the [billing
     * account](https://cloud.google.com/billing/docs/how-to/billing-access).
     *
     * You can disable billing on the project by setting the
     * `billing_account_name` field to empty. This action disassociates the
     * current billing account from the project. Any billable activity of your
     * in-use services will stop, and your application could stop functioning as
     * expected. Any unbilled charges to date will be billed to the previously
     * associated account. The current authenticated user must be either an owner
     * of the project or an owner of the billing account for the project.
     *
     * Note that associating a project with a *closed* billing account will have
     * much the same effect as disabling billing on the project: any paid
     * resources used by the project will be shut down. Thus, unless you wish to
     * disable billing, you should always call this method with the name of an
     * *open* billing account.
     *
     * Sample code:
     * ```
     * $cloudBillingClient = new CloudBillingClient();
     * try {
     *     $name = '';
     *     $response = $cloudBillingClient->updateProjectBillingInfo($name);
     * } finally {
     *     $cloudBillingClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The resource name of the project associated with the billing information
     *                             that you want to update. For example, `projects/tokyo-rain-123`.
     * @param array  $optionalArgs {
     *                             Optional.
     *
     *     @type ProjectBillingInfo $projectBillingInfo
     *          The new billing information for the project. Read-only fields are ignored;
     *          thus, you can leave empty all fields except `billing_account_name`.
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Billing\V1\ProjectBillingInfo
     *
     * @throws ApiException if the remote call fails
     */
    public function updateProjectBillingInfo($name, array $optionalArgs = [])
    {
        $request = new UpdateProjectBillingInfoRequest();
        $request->setName($name);
        if (isset($optionalArgs['projectBillingInfo'])) {
            $request->setProjectBillingInfo($optionalArgs['projectBillingInfo']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'UpdateProjectBillingInfo',
            ProjectBillingInfo::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Gets the access control policy for a billing account.
     * The caller must have the `billing.accounts.getIamPolicy` permission on the
     * account, which is often given to billing account
     * [viewers](https://cloud.google.com/billing/docs/how-to/billing-access).
     *
     * Sample code:
     * ```
     * $cloudBillingClient = new CloudBillingClient();
     * try {
     *     $resource = '';
     *     $response = $cloudBillingClient->getIamPolicy($resource);
     * } finally {
     *     $cloudBillingClient->close();
     * }
     * ```
     *
     * @param string $resource     REQUIRED: The resource for which the policy is being requested.
     *                             See the operation documentation for the appropriate value for this field.
     * @param array  $optionalArgs {
     *                             Optional.
     *
     *     @type GetPolicyOptions $options
     *          OPTIONAL: A `GetPolicyOptions` object for specifying options to
     *          `GetIamPolicy`. This field is only used by Cloud IAM.
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Iam\V1\Policy
     *
     * @throws ApiException if the remote call fails
     */
    public function getIamPolicy($resource, array $optionalArgs = [])
    {
        $request = new GetIamPolicyRequest();
        $request->setResource($resource);
        if (isset($optionalArgs['options'])) {
            $request->setOptions($optionalArgs['options']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'resource' => $request->getResource(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'GetIamPolicy',
            Policy::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Sets the access control policy for a billing account. Replaces any existing
     * policy.
     * The caller must have the `billing.accounts.setIamPolicy` permission on the
     * account, which is often given to billing account
     * [administrators](https://cloud.google.com/billing/docs/how-to/billing-access).
     *
     * Sample code:
     * ```
     * $cloudBillingClient = new CloudBillingClient();
     * try {
     *     $resource = '';
     *     $policy = new Policy();
     *     $response = $cloudBillingClient->setIamPolicy($resource, $policy);
     * } finally {
     *     $cloudBillingClient->close();
     * }
     * ```
     *
     * @param string $resource     REQUIRED: The resource for which the policy is being specified.
     *                             See the operation documentation for the appropriate value for this field.
     * @param Policy $policy       REQUIRED: The complete policy to be applied to the `resource`. The size of
     *                             the policy is limited to a few 10s of KB. An empty policy is a
     *                             valid policy but certain Cloud Platform services (such as Projects)
     *                             might reject them.
     * @param array  $optionalArgs {
     *                             Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Iam\V1\Policy
     *
     * @throws ApiException if the remote call fails
     */
    public function setIamPolicy($resource, $policy, array $optionalArgs = [])
    {
        $request = new SetIamPolicyRequest();
        $request->setResource($resource);
        $request->setPolicy($policy);

        $requestParams = new RequestParamsHeaderDescriptor([
          'resource' => $request->getResource(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'SetIamPolicy',
            Policy::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Tests the access control policy for a billing account. This method takes
     * the resource and a set of permissions as input and returns the subset of
     * the input permissions that the caller is allowed for that resource.
     *
     * Sample code:
     * ```
     * $cloudBillingClient = new CloudBillingClient();
     * try {
     *     $resource = '';
     *     $permissions = [];
     *     $response = $cloudBillingClient->testIamPermissions($resource, $permissions);
     * } finally {
     *     $cloudBillingClient->close();
     * }
     * ```
     *
     * @param string   $resource     REQUIRED: The resource for which the policy detail is being requested.
     *                               See the operation documentation for the appropriate value for this field.
     * @param string[] $permissions  The set of permissions to check for the `resource`. Permissions with
     *                               wildcards (such as '*' or 'storage.*') are not allowed. For more
     *                               information see
     *                               [IAM Overview](https://cloud.google.com/iam/docs/overview#permissions).
     * @param array    $optionalArgs {
     *                               Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Iam\V1\TestIamPermissionsResponse
     *
     * @throws ApiException if the remote call fails
     */
    public function testIamPermissions($resource, $permissions, array $optionalArgs = [])
    {
        $request = new TestIamPermissionsRequest();
        $request->setResource($resource);
        $request->setPermissions($permissions);

        $requestParams = new RequestParamsHeaderDescriptor([
          'resource' => $request->getResource(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'TestIamPermissions',
            TestIamPermissionsResponse::class,
            $optionalArgs,
            $request
        )->wait();
    }
}
