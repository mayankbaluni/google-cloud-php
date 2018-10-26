<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1beta1/cluster_service.proto

namespace Google\Cloud\Container\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Configuration options for private clusters.
 *
 * Generated from protobuf message <code>google.container.v1beta1.PrivateClusterConfig</code>
 */
class PrivateClusterConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Whether nodes have only private IP addresses, and communicate with the
     * master via private networking.
     *
     * Generated from protobuf field <code>bool enable_private_nodes = 1;</code>
     */
    private $enable_private_nodes = false;
    /**
     * Whether the master's internal IP address is used as the cluster endpoint.
     *
     * Generated from protobuf field <code>bool enable_private_endpoint = 2;</code>
     */
    private $enable_private_endpoint = false;
    /**
     * The IP prefix in CIDR notation to use for the hosted master network. This
     * prefix will be used for assigning private IP addresses to the master or
     * set of masters, as well as the ILB VIP.
     *
     * Generated from protobuf field <code>string master_ipv4_cidr_block = 3;</code>
     */
    private $master_ipv4_cidr_block = '';
    /**
     * Output only. The internal IP address of this cluster's master endpoint.
     *
     * Generated from protobuf field <code>string private_endpoint = 4;</code>
     */
    private $private_endpoint = '';
    /**
     * Output only. The external IP address of this cluster's master endpoint.
     *
     * Generated from protobuf field <code>string public_endpoint = 5;</code>
     */
    private $public_endpoint = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $enable_private_nodes
     *           Whether nodes have only private IP addresses, and communicate with the
     *           master via private networking.
     *     @type bool $enable_private_endpoint
     *           Whether the master's internal IP address is used as the cluster endpoint.
     *     @type string $master_ipv4_cidr_block
     *           The IP prefix in CIDR notation to use for the hosted master network. This
     *           prefix will be used for assigning private IP addresses to the master or
     *           set of masters, as well as the ILB VIP.
     *     @type string $private_endpoint
     *           Output only. The internal IP address of this cluster's master endpoint.
     *     @type string $public_endpoint
     *           Output only. The external IP address of this cluster's master endpoint.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Container\V1Beta1\ClusterService::initOnce();
        parent::__construct($data);
    }

    /**
     * Whether nodes have only private IP addresses, and communicate with the
     * master via private networking.
     *
     * Generated from protobuf field <code>bool enable_private_nodes = 1;</code>
     * @return bool
     */
    public function getEnablePrivateNodes()
    {
        return $this->enable_private_nodes;
    }

    /**
     * Whether nodes have only private IP addresses, and communicate with the
     * master via private networking.
     *
     * Generated from protobuf field <code>bool enable_private_nodes = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setEnablePrivateNodes($var)
    {
        GPBUtil::checkBool($var);
        $this->enable_private_nodes = $var;

        return $this;
    }

    /**
     * Whether the master's internal IP address is used as the cluster endpoint.
     *
     * Generated from protobuf field <code>bool enable_private_endpoint = 2;</code>
     * @return bool
     */
    public function getEnablePrivateEndpoint()
    {
        return $this->enable_private_endpoint;
    }

    /**
     * Whether the master's internal IP address is used as the cluster endpoint.
     *
     * Generated from protobuf field <code>bool enable_private_endpoint = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setEnablePrivateEndpoint($var)
    {
        GPBUtil::checkBool($var);
        $this->enable_private_endpoint = $var;

        return $this;
    }

    /**
     * The IP prefix in CIDR notation to use for the hosted master network. This
     * prefix will be used for assigning private IP addresses to the master or
     * set of masters, as well as the ILB VIP.
     *
     * Generated from protobuf field <code>string master_ipv4_cidr_block = 3;</code>
     * @return string
     */
    public function getMasterIpv4CidrBlock()
    {
        return $this->master_ipv4_cidr_block;
    }

    /**
     * The IP prefix in CIDR notation to use for the hosted master network. This
     * prefix will be used for assigning private IP addresses to the master or
     * set of masters, as well as the ILB VIP.
     *
     * Generated from protobuf field <code>string master_ipv4_cidr_block = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setMasterIpv4CidrBlock($var)
    {
        GPBUtil::checkString($var, True);
        $this->master_ipv4_cidr_block = $var;

        return $this;
    }

    /**
     * Output only. The internal IP address of this cluster's master endpoint.
     *
     * Generated from protobuf field <code>string private_endpoint = 4;</code>
     * @return string
     */
    public function getPrivateEndpoint()
    {
        return $this->private_endpoint;
    }

    /**
     * Output only. The internal IP address of this cluster's master endpoint.
     *
     * Generated from protobuf field <code>string private_endpoint = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setPrivateEndpoint($var)
    {
        GPBUtil::checkString($var, True);
        $this->private_endpoint = $var;

        return $this;
    }

    /**
     * Output only. The external IP address of this cluster's master endpoint.
     *
     * Generated from protobuf field <code>string public_endpoint = 5;</code>
     * @return string
     */
    public function getPublicEndpoint()
    {
        return $this->public_endpoint;
    }

    /**
     * Output only. The external IP address of this cluster's master endpoint.
     *
     * Generated from protobuf field <code>string public_endpoint = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setPublicEndpoint($var)
    {
        GPBUtil::checkString($var, True);
        $this->public_endpoint = $var;

        return $this;
    }

}

