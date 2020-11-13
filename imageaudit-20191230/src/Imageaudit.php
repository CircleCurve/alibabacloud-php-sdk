<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageaudit\V20191230;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Imageaudit\V20191230\Models\ScanImageRequest;
use AlibabaCloud\SDK\Imageaudit\V20191230\Models\ScanImageResponse;
use AlibabaCloud\SDK\Imageaudit\V20191230\Models\ScanTextRequest;
use AlibabaCloud\SDK\Imageaudit\V20191230\Models\ScanTextResponse;
use AlibabaCloud\Tea\Rpc\Rpc;
use AlibabaCloud\Tea\Tea;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;

class Imageaudit extends Rpc
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('imageaudit', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @param ScanTextRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return ScanTextResponse
     */
    public function scanTextWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ScanTextResponse::fromMap($this->doRequest('ScanText', 'HTTPS', 'POST', '2019-12-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ScanTextRequest $request
     *
     * @return ScanTextResponse
     */
    public function scanText($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->scanTextWithOptions($request, $runtime);
    }

    /**
     * @param ScanImageRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return ScanImageResponse
     */
    public function scanImageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);

        return ScanImageResponse::fromMap($this->doRequest('ScanImage', 'HTTPS', 'POST', '2019-12-30', 'AK', null, Tea::merge($request), $runtime));
    }

    /**
     * @param ScanImageRequest $request
     *
     * @return ScanImageResponse
     */
    public function scanImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->scanImageWithOptions($request, $runtime);
    }

    /**
     * @param string   $productId
     * @param string   $regionId
     * @param string   $endpointRule
     * @param string   $network
     * @param string   $suffix
     * @param string[] $endpointMap
     * @param string   $endpoint
     *
     * @return string
     */
    public function getEndpoint($productId, $regionId, $endpointRule, $network, $suffix, $endpointMap, $endpoint)
    {
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }
}
