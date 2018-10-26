<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1beta1/cluster_service.proto

namespace Google\Cloud\Container\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * UsableSubnetwork resource returns the subnetwork name, its associated network
 * and the primary CIDR range.
 *
 * Generated from protobuf message <code>google.container.v1beta1.UsableSubnetwork</code>
 */
class UsableSubnetwork extends \Google\Protobuf\Internal\Message
{
    /**
     * Subnetwork Name.
     * Example: projects/my-project/regions/us-central1/subnetworks/my-subnet
     *
     * Generated from protobuf field <code>string subnetwork = 1;</code>
     */
    private $subnetwork = '';
    /**
     * Network Name.
     * Example: projects/my-project/global/networks/my-network
     *
     * Generated from protobuf field <code>string network = 2;</code>
     */
    private $network = '';
    /**
     * The range of internal addresses that are owned by this subnetwork.
     *
     * Generated from protobuf field <code>string ip_cidr_range = 3;</code>
     */
    private $ip_cidr_range = '';
    /**
     * Secondary IP ranges.
     *
     * Generated from protobuf field <code>repeated .google.container.v1beta1.UsableSubnetworkSecondaryRange secondary_ip_ranges = 4;</code>
     */
    private $secondary_ip_ranges;
    /**
     * A human readable status message representing the reasons for cases where
     * the caller cannot use the secondary ranges under the subnet. For example if
     * the secondary_ip_ranges is empty due to a permission issue, an insufficient
     * permission message will be given by status_message.
     *
     * Generated from protobuf field <code>string status_message = 5;</code>
     */
    private $status_message = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $subnetwork
     *           Subnetwork Name.
     *           Example: projects/my-project/regions/us-central1/subnetworks/my-subnet
     *     @type string $network
     *           Network Name.
     *           Example: projects/my-project/global/networks/my-network
     *     @type string $ip_cidr_range
     *           The range of internal addresses that are owned by this subnetwork.
     *     @type \Google\Cloud\Container\V1beta1\UsableSubnetworkSecondaryRange[]|\Google\Protobuf\Internal\RepeatedField $secondary_ip_ranges
     *           Secondary IP ranges.
     *     @type string $status_message
     *           A human readable status message representing the reasons for cases where
     *           the caller cannot use the secondary ranges under the subnet. For example if
     *           the secondary_ip_ranges is empty due to a permission issue, an insufficient
     *           permission message will be given by status_message.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Container\V1Beta1\ClusterService::initOnce();
        parent::__construct($data);
    }

    /**
     * Subnetwork Name.
     * Example: projects/my-project/regions/us-central1/subnetworks/my-subnet
     *
     * Generated from protobuf field <code>string subnetwork = 1;</code>
     * @return string
     */
    public function getSubnetwork()
    {
        return $this->subnetwork;
    }

    /**
     * Subnetwork Name.
     * Example: projects/my-project/regions/us-central1/subnetworks/my-subnet
     *
     * Generated from protobuf field <code>string subnetwork = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSubnetwork($var)
    {
        GPBUtil::checkString($var, True);
        $this->subnetwork = $var;

        return $this;
    }

    /**
     * Network Name.
     * Example: projects/my-project/global/networks/my-network
     *
     * Generated from protobuf field <code>string network = 2;</code>
     * @return string
     */
    public function getNetwork()
    {
        return $this->network;
    }

    /**
     * Network Name.
     * Example: projects/my-project/global/networks/my-network
     *
     * Generated from protobuf field <code>string network = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNetwork($var)
    {
        GPBUtil::checkString($var, True);
        $this->network = $var;

        return $this;
    }

    /**
     * The range of internal addresses that are owned by this subnetwork.
     *
     * Generated from protobuf field <code>string ip_cidr_range = 3;</code>
     * @return string
     */
    public function getIpCidrRange()
    {
        return $this->ip_cidr_range;
    }

    /**
     * The range of internal addresses that are owned by this subnetwork.
     *
     * Generated from protobuf field <code>string ip_cidr_range = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setIpCidrRange($var)
    {
        GPBUtil::checkString($var, True);
        $this->ip_cidr_range = $var;

        return $this;
    }

    /**
     * Secondary IP ranges.
     *
     * Generated from protobuf field <code>repeated .google.container.v1beta1.UsableSubnetworkSecondaryRange secondary_ip_ranges = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSecondaryIpRanges()
    {
        return $this->secondary_ip_ranges;
    }

    /**
     * Secondary IP ranges.
     *
     * Generated from protobuf field <code>repeated .google.container.v1beta1.UsableSubnetworkSecondaryRange secondary_ip_ranges = 4;</code>
     * @param \Google\Cloud\Container\V1beta1\UsableSubnetworkSecondaryRange[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSecondaryIpRanges($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Container\V1beta1\UsableSubnetworkSecondaryRange::class);
        $this->secondary_ip_ranges = $arr;

        return $this;
    }

    /**
     * A human readable status message representing the reasons for cases where
     * the caller cannot use the secondary ranges under the subnet. For example if
     * the secondary_ip_ranges is empty due to a permission issue, an insufficient
     * permission message will be given by status_message.
     *
     * Generated from protobuf field <code>string status_message = 5;</code>
     * @return string
     */
    public function getStatusMessage()
    {
        return $this->status_message;
    }

    /**
     * A human readable status message representing the reasons for cases where
     * the caller cannot use the secondary ranges under the subnet. For example if
     * the secondary_ip_ranges is empty due to a permission issue, an insufficient
     * permission message will be given by status_message.
     *
     * Generated from protobuf field <code>string status_message = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setStatusMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->status_message = $var;

        return $this;
    }

}

