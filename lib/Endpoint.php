<?php

namespace AmazonBusinessApi;

use InvalidArgumentException;

/***************************/
/** Region/endpoint pairs **/
/***************************/

class Endpoint
{
    // North America
    public const NA = [
        'url' => 'https://na.business-api.amazon.com',
        'region' => 'us-east-1',
    ];

    // Europe
    public const EU = [
        'url' => 'https://eu.business-api.amazon.com',
        'region' => 'eu-west-1',
    ];

    // Far East
    public const FE = [
        'url' => 'https://jp.business-api.amazon.com/',
        'region' => 'us-west-2',
    ];

    /**
     * Returns the endpoint for the marketplace with the given ID.
     *
     * @param string $marketplaceId The identifier for the marketplace. (required)
     *
     * @throws InvalidArgumentException
     * @return array of the endpoint details
     *
     * @link https://developer-docs.amazon.com/amazon-business/docs/marketplace-ids
     */
    public static function getByMarketplaceId(string $marketplaceId) {
        $map = [
            // North America.
            // Canada
            'A2EUQ1WTGCTBG2' => 'NA',
            // US.
            'ATVPDKIKX0DER' => 'NA',
            // Europe.
            // United Arab Emirates (U.A.E.).
            'A2VIGQ35RCS4UG' => 'EU',
            // Belgium.
            'AMEN7PMS3EDWL' => 'EU',
            // Germany.
            'A1PA6795UKMFR9' => 'EU',
            // Egypt.
            'ARBP9OOSHTCHU' => 'EU',
            // Spain.
            'A1RKKUPIHCS9HS' => 'EU',
            // France.
            'A13V1IB3VIYZZH' => 'EU',
            // UK.
            'A1F83G8C2ARO7P' => 'EU',
            // India.
            'A21TJRUUN4KGV' => 'EU',
            // Italy.
            'APJ6JRA9NG5V4' => 'EU',
            // Netherlands.
            'A1805IZSGTT6HS' => 'EU',
            // Poland.
            'A1C3SOZRARQ6R3' => 'EU',
            // Saudi Arabia.
            'A17E79C6D8DWNP' => 'EU',
            // Sweden.
            'A2NODRKZP88ZB9' => 'EU',
            // Turkey.
            'A33AVAJ2PDY3EV' => 'EU',
            // Far East.
            // Singapore.
            'A19VAU5U5O7RUS' => 'FE',
            // Australia.
            'A39IBJ37TRP1C6' => 'FE',
            // Japan.
            'A1VC38T7YXB528' => 'FE',
        ];
        if (!isset($map[$marketplaceId])) {
            throw new InvalidArgumentException(sprintf(
                'Unknown marketplace ID "%s".',
                $marketplaceId
            ));
        }
        $region = $map[$marketplaceId];

        return constant("\AmazonBusinessApi\Endpoint::$region");
    }
}
