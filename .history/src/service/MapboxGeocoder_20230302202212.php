<?p
namespace App\Service;

use Geocoder\Geocoder;
use Geocoder\Provider\Mapbox\Mapbox;
use Geocoder\Query\GeocodeQuery;

class MapboxGeocoder
{
    private $geocoder;

    public function __construct(string $mapboxApiKey)
    {
        $provider = new Mapbox($mapboxApiKey);
        $this->geocoder = new Geocoder($provider);
    }

    public function geocode(string $address): array
    {
        $result = $this->geocoder->geocodeQuery(GeocodeQuery::create($address));
        return $result->toArray();
    }
}