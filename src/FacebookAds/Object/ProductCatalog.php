<?php
/**
 * Copyright (c) 2015-present, Facebook, Inc. All rights reserved.
 *
 * You are hereby granted a non-exclusive, worldwide, royalty-free license to
 * use, copy, modify, and distribute this software in source code or binary
 * form for use in connection with the web services and APIs provided by
 * Facebook.
 *
 * As with any software that integrates with the Facebook platform, your use
 * of this software is subject to the Facebook Developer Principles and
 * Policies [http://developers.facebook.com/policy/]. This copyright notice
 * shall be included in all copies or substantial portions of the software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL
 * THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
 * FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER
 * DEALINGS IN THE SOFTWARE.
 *
 */

namespace FacebookAds\Object;

use FacebookAds\ApiRequest;
use FacebookAds\Cursor;
use FacebookAds\Http\RequestInterface;
use FacebookAds\TypeChecker;
use FacebookAds\Object\Fields\ProductCatalogFields;
use FacebookAds\Object\Values\AdVideoContainerTypeValues;
use FacebookAds\Object\Values\AdVideoContentCategoryValues;
use FacebookAds\Object\Values\AdVideoFormattingValues;
use FacebookAds\Object\Values\AdVideoOriginalProjectionTypeValues;
use FacebookAds\Object\Values\AdVideoSwapModeValues;
use FacebookAds\Object\Values\AdVideoUnpublishedContentTypeValues;
use FacebookAds\Object\Values\AdVideoUploadPhaseValues;
use FacebookAds\Object\Values\ProductCatalogCategoryCategorizationCriteriaValues;
use FacebookAds\Object\Values\ProductCatalogPermittedRolesValues;
use FacebookAds\Object\Values\ProductCatalogPermittedTasksValues;
use FacebookAds\Object\Values\ProductCatalogStandardValues;
use FacebookAds\Object\Values\ProductCatalogTasksValues;
use FacebookAds\Object\Values\ProductCatalogVerticalValues;
use FacebookAds\Object\Values\ProductDaEventSamplesBatchAggregationTypeValues;
use FacebookAds\Object\Values\ProductDaEventSamplesBatchEventValues;
use FacebookAds\Object\Values\ProductEventStatBreakdownsValues;
use FacebookAds\Object\Values\ProductFeedDelimiterValues;
use FacebookAds\Object\Values\ProductFeedEncodingValues;
use FacebookAds\Object\Values\ProductFeedFeedTypeValues;
use FacebookAds\Object\Values\ProductFeedQuotedFieldsModeValues;
use FacebookAds\Object\Values\ProductItemAvailabilityValues;
use FacebookAds\Object\Values\ProductItemConditionValues;
use FacebookAds\Object\Values\ProductItemGenderValues;
use FacebookAds\Object\Values\ProductItemVisibilityValues;
use FacebookAds\Object\Values\VehicleAvailabilityValues;
use FacebookAds\Object\Values\VehicleBodyStyleValues;
use FacebookAds\Object\Values\VehicleConditionValues;
use FacebookAds\Object\Values\VehicleDrivetrainValues;
use FacebookAds\Object\Values\VehicleFuelTypeValues;
use FacebookAds\Object\Values\VehicleStateOfVehicleValues;
use FacebookAds\Object\Values\VehicleTransmissionValues;
use FacebookAds\Object\Values\VehicleVehicleTypeValues;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class ProductCatalog extends AbstractCrudObject {

  /**
   * @deprecated getEndpoint function is deprecated
   */
  protected function getEndpoint() {
    return 'owned_product_catalogs';
  }

  /**
   * @return ProductCatalogFields
   */
  public static function getFieldsEnum() {
    return ProductCatalogFields::getInstance();
  }

  protected static function getReferencedEnums() {
    $ref_enums = array();
    $ref_enums['Vertical'] = ProductCatalogVerticalValues::getInstance()->getValues();
    $ref_enums['PermittedRoles'] = ProductCatalogPermittedRolesValues::getInstance()->getValues();
    $ref_enums['PermittedTasks'] = ProductCatalogPermittedTasksValues::getInstance()->getValues();
    $ref_enums['Tasks'] = ProductCatalogTasksValues::getInstance()->getValues();
    $ref_enums['Standard'] = ProductCatalogStandardValues::getInstance()->getValues();
    return $ref_enums;
  }


  public function deleteAgencies(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'business' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_DELETE,
      '/agencies',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getAgencies(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/agencies',
      new Business(),
      'EDGE',
      Business::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createAgency(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'business' => 'string',
      'permitted_roles' => 'list<permitted_roles_enum>',
      'permitted_tasks' => 'list<permitted_tasks_enum>',
    );
    $enums = array(
      'permitted_roles_enum' => ProductCatalogPermittedRolesValues::getInstance()->getValues(),
      'permitted_tasks_enum' => ProductCatalogPermittedTasksValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/agencies',
      new ProductCatalog(),
      'EDGE',
      ProductCatalog::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function deleteAssignedUsers(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'business' => 'string',
      'user' => 'int',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_DELETE,
      '/assigned_users',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getAssignedUsers(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'business' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/assigned_users',
      new AssignedUser(),
      'EDGE',
      AssignedUser::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createAssignedUser(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'business' => 'string',
      'tasks' => 'list<tasks_enum>',
      'user' => 'int',
    );
    $enums = array(
      'tasks_enum' => ProductCatalogTasksValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/assigned_users',
      new ProductCatalog(),
      'EDGE',
      ProductCatalog::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getAutomotiveModels(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'bulk_pagination' => 'bool',
      'filter' => 'Object',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/automotive_models',
      new AutomotiveModel(),
      'EDGE',
      AutomotiveModel::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createBatch(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'allow_upsert' => 'bool',
      'requests' => 'list<map>',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/batch',
      new ProductCatalog(),
      'EDGE',
      ProductCatalog::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getBundleFolders(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/bundle_folders',
      new DynamicItemDisplayBundleFolder(),
      'EDGE',
      DynamicItemDisplayBundleFolder::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createBundleFolder(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'bundles' => 'list<string>',
      'name' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/bundle_folders',
      new DynamicItemDisplayBundleFolder(),
      'EDGE',
      DynamicItemDisplayBundleFolder::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getBundles(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/bundles',
      new DynamicItemDisplayBundle(),
      'EDGE',
      DynamicItemDisplayBundle::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createBundle(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'additional_urls' => 'map',
      'description' => 'string',
      'name' => 'string',
      'product_set' => 'string',
      'text_tokens' => 'map',
      'url' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/bundles',
      new DynamicItemDisplayBundle(),
      'EDGE',
      DynamicItemDisplayBundle::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getCategories(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'categorization_criteria' => 'categorization_criteria_enum',
      'filter' => 'Object',
    );
    $enums = array(
      'categorization_criteria_enum' => ProductCatalogCategoryCategorizationCriteriaValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/categories',
      new ProductCatalogCategory(),
      'EDGE',
      ProductCatalogCategory::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createCategory(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'data' => 'list<map>',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/categories',
      new ProductCatalogCategory(),
      'EDGE',
      ProductCatalogCategory::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getCheckBatchRequestStatus(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'handle' => 'string',
      'load_ids_of_invalid_requests' => 'bool',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/check_batch_request_status',
      new CheckBatchRequestStatus(),
      'EDGE',
      CheckBatchRequestStatus::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getDaEventSamples(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'aggregation_type' => 'aggregation_type_enum',
      'event' => 'event_enum',
      'source_id' => 'string',
    );
    $enums = array(
      'aggregation_type_enum' => ProductDaEventSamplesBatchAggregationTypeValues::getInstance()->getValues(),
      'event_enum' => ProductDaEventSamplesBatchEventValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/da_event_samples',
      new ProductDaEventSamplesBatch(),
      'EDGE',
      ProductDaEventSamplesBatch::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getDestinations(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'bulk_pagination' => 'bool',
      'filter' => 'Object',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/destinations',
      new Destination(),
      'EDGE',
      Destination::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createDestination(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'address' => 'Object',
      'currency' => 'string',
      'description' => 'string',
      'destination_id' => 'string',
      'images' => 'list<Object>',
      'name' => 'string',
      'price' => 'unsigned int',
      'types' => 'string',
      'url' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/destinations',
      new Destination(),
      'EDGE',
      Destination::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getEventStats(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'breakdowns' => 'list<breakdowns_enum>',
    );
    $enums = array(
      'breakdowns_enum' => ProductEventStatBreakdownsValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/event_stats',
      new ProductEventStat(),
      'EDGE',
      ProductEventStat::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function deleteExternalEventSources(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'external_event_sources' => 'list<string>',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_DELETE,
      '/external_event_sources',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getExternalEventSources(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/external_event_sources',
      new ExternalEventSource(),
      'EDGE',
      ExternalEventSource::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createExternalEventSource(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'external_event_sources' => 'list<string>',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/external_event_sources',
      new ProductCatalog(),
      'EDGE',
      ProductCatalog::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getFlights(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'bulk_pagination' => 'bool',
      'filter' => 'Object',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/flights',
      new Flight(),
      'EDGE',
      Flight::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createFlight(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'currency' => 'string',
      'description' => 'string',
      'destination_airport' => 'string',
      'images' => 'list<Object>',
      'origin_airport' => 'string',
      'price' => 'unsigned int',
      'url' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/flights',
      new Flight(),
      'EDGE',
      Flight::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getHomeListings(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'bulk_pagination' => 'bool',
      'filter' => 'Object',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/home_listings',
      new HomeListing(),
      'EDGE',
      HomeListing::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createHomeListing(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'address' => 'Object',
      'availability' => 'string',
      'currency' => 'string',
      'description' => 'string',
      'home_listing_id' => 'string',
      'images' => 'list<Object>',
      'listing_type' => 'string',
      'name' => 'string',
      'num_baths' => 'float',
      'num_beds' => 'float',
      'num_units' => 'float',
      'price' => 'float',
      'property_type' => 'string',
      'url' => 'string',
      'year_built' => 'unsigned int',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/home_listings',
      new HomeListing(),
      'EDGE',
      HomeListing::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getHotelRoomsBatch(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'handle' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/hotel_rooms_batch',
      new ProductCatalogHotelRoomsBatch(),
      'EDGE',
      ProductCatalogHotelRoomsBatch::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createHotelRoomsBatch(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'file' => 'file',
      'password' => 'string',
      'standard' => 'standard_enum',
      'update_only' => 'bool',
      'url' => 'string',
      'username' => 'string',
    );
    $enums = array(
      'standard_enum' => ProductCatalogStandardValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/hotel_rooms_batch',
      new ProductCatalog(),
      'EDGE',
      ProductCatalog::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getHotels(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'bulk_pagination' => 'bool',
      'filter' => 'Object',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/hotels',
      new Hotel(),
      'EDGE',
      Hotel::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createHotel(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'address' => 'Object',
      'applinks' => 'Object',
      'base_price' => 'unsigned int',
      'brand' => 'string',
      'currency' => 'string',
      'description' => 'string',
      'guest_ratings' => 'list<Object>',
      'hotel_id' => 'string',
      'images' => 'list<Object>',
      'name' => 'string',
      'phone' => 'string',
      'star_rating' => 'float',
      'url' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/hotels',
      new Hotel(),
      'EDGE',
      Hotel::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createItemsBatch(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'allow_upsert' => 'bool',
      'item_type' => 'string',
      'requests' => 'map',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/items_batch',
      new ProductCatalog(),
      'EDGE',
      ProductCatalog::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getPricingVariablesBatch(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'handle' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/pricing_variables_batch',
      new ProductCatalogPricingVariablesBatch(),
      'EDGE',
      ProductCatalogPricingVariablesBatch::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createPricingVariablesBatch(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'file' => 'file',
      'password' => 'string',
      'standard' => 'standard_enum',
      'update_only' => 'bool',
      'url' => 'string',
      'username' => 'string',
    );
    $enums = array(
      'standard_enum' => ProductCatalogStandardValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/pricing_variables_batch',
      new ProductCatalog(),
      'EDGE',
      ProductCatalog::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getProductFeeds(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/product_feeds',
      new ProductFeed(),
      'EDGE',
      ProductFeed::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createProductFeed(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'country' => 'string',
      'default_currency' => 'string',
      'deletion_enabled' => 'bool',
      'delimiter' => 'delimiter_enum',
      'encoding' => 'encoding_enum',
      'feed_type' => 'feed_type_enum',
      'file_name' => 'string',
      'name' => 'string',
      'quoted_fields_mode' => 'quoted_fields_mode_enum',
      'rules' => 'list<string>',
      'schedule' => 'string',
      'update_schedule' => 'string',
    );
    $enums = array(
      'delimiter_enum' => ProductFeedDelimiterValues::getInstance()->getValues(),
      'encoding_enum' => ProductFeedEncodingValues::getInstance()->getValues(),
      'feed_type_enum' => ProductFeedFeedTypeValues::getInstance()->getValues(),
      'quoted_fields_mode_enum' => ProductFeedQuotedFieldsModeValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/product_feeds',
      new ProductFeed(),
      'EDGE',
      ProductFeed::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getProductGroups(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/product_groups',
      new ProductGroup(),
      'EDGE',
      ProductGroup::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createProductGroup(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'retailer_id' => 'string',
      'variants' => 'list<Object>',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/product_groups',
      new ProductGroup(),
      'EDGE',
      ProductGroup::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getProductSets(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'ancestor_id' => 'string',
      'has_children' => 'bool',
      'parent_id' => 'string',
      'retailer_id' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/product_sets',
      new ProductSet(),
      'EDGE',
      ProductSet::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createProductSet(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'filter' => 'Object',
      'name' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/product_sets',
      new ProductSet(),
      'EDGE',
      ProductSet::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getProductSetsBatch(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'handle' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/product_sets_batch',
      new ProductCatalogProductSetsBatch(),
      'EDGE',
      ProductCatalogProductSetsBatch::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createProductSetsBatch(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'file' => 'file',
      'password' => 'string',
      'standard' => 'standard_enum',
      'update_only' => 'bool',
      'url' => 'string',
      'username' => 'string',
    );
    $enums = array(
      'standard_enum' => ProductCatalogStandardValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/product_sets_batch',
      new ProductCatalog(),
      'EDGE',
      ProductCatalog::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getProducts(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'bulk_pagination' => 'bool',
      'filter' => 'Object',
      'return_only_approved_products' => 'bool',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/products',
      new ProductItem(),
      'EDGE',
      ProductItem::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createProduct(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'additional_image_urls' => 'list<string>',
      'additional_variant_attributes' => 'map',
      'android_app_name' => 'string',
      'android_class' => 'string',
      'android_package' => 'string',
      'android_url' => 'string',
      'availability' => 'availability_enum',
      'brand' => 'string',
      'category' => 'string',
      'checkout_url' => 'string',
      'color' => 'string',
      'condition' => 'condition_enum',
      'currency' => 'string',
      'custom_data' => 'map',
      'custom_label_0' => 'string',
      'custom_label_1' => 'string',
      'custom_label_2' => 'string',
      'custom_label_3' => 'string',
      'custom_label_4' => 'string',
      'description' => 'string',
      'expiration_date' => 'string',
      'gender' => 'gender_enum',
      'gtin' => 'string',
      'image_url' => 'string',
      'inventory' => 'unsigned int',
      'ios_app_name' => 'string',
      'ios_app_store_id' => 'unsigned int',
      'ios_url' => 'string',
      'ipad_app_name' => 'string',
      'ipad_app_store_id' => 'unsigned int',
      'ipad_url' => 'string',
      'iphone_app_name' => 'string',
      'iphone_app_store_id' => 'unsigned int',
      'iphone_url' => 'string',
      'manufacturer_part_number' => 'string',
      'material' => 'string',
      'mobile_link' => 'string',
      'name' => 'string',
      'offer_price_amount' => 'unsigned int',
      'offer_price_end_date' => 'datetime',
      'offer_price_start_date' => 'datetime',
      'ordering_index' => 'unsigned int',
      'pattern' => 'string',
      'price' => 'unsigned int',
      'product_type' => 'string',
      'retailer_id' => 'string',
      'retailer_product_group_id' => 'string',
      'sale_price' => 'unsigned int',
      'sale_price_end_date' => 'datetime',
      'sale_price_start_date' => 'datetime',
      'short_description' => 'string',
      'size' => 'string',
      'start_date' => 'string',
      'url' => 'string',
      'visibility' => 'visibility_enum',
      'windows_phone_app_id' => 'string',
      'windows_phone_app_name' => 'string',
      'windows_phone_url' => 'string',
    );
    $enums = array(
      'availability_enum' => ProductItemAvailabilityValues::getInstance()->getValues(),
      'condition_enum' => ProductItemConditionValues::getInstance()->getValues(),
      'gender_enum' => ProductItemGenderValues::getInstance()->getValues(),
      'visibility_enum' => ProductItemVisibilityValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/products',
      new ProductItem(),
      'EDGE',
      ProductItem::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getVehicles(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'bulk_pagination' => 'bool',
      'filter' => 'Object',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/vehicles',
      new Vehicle(),
      'EDGE',
      Vehicle::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createVehicle(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'address' => 'map',
      'applinks' => 'Object',
      'availability' => 'availability_enum',
      'body_style' => 'body_style_enum',
      'condition' => 'condition_enum',
      'currency' => 'string',
      'date_first_on_lot' => 'string',
      'dealer_id' => 'string',
      'dealer_name' => 'string',
      'dealer_phone' => 'string',
      'description' => 'string',
      'drivetrain' => 'drivetrain_enum',
      'exterior_color' => 'string',
      'fuel_type' => 'fuel_type_enum',
      'images' => 'list<Object>',
      'interior_color' => 'string',
      'make' => 'string',
      'mileage' => 'map',
      'model' => 'string',
      'price' => 'unsigned int',
      'state_of_vehicle' => 'state_of_vehicle_enum',
      'title' => 'string',
      'transmission' => 'transmission_enum',
      'trim' => 'string',
      'url' => 'string',
      'vehicle_id' => 'string',
      'vehicle_type' => 'vehicle_type_enum',
      'vin' => 'string',
      'year' => 'unsigned int',
    );
    $enums = array(
      'availability_enum' => VehicleAvailabilityValues::getInstance()->getValues(),
      'body_style_enum' => VehicleBodyStyleValues::getInstance()->getValues(),
      'condition_enum' => VehicleConditionValues::getInstance()->getValues(),
      'drivetrain_enum' => VehicleDrivetrainValues::getInstance()->getValues(),
      'fuel_type_enum' => VehicleFuelTypeValues::getInstance()->getValues(),
      'state_of_vehicle_enum' => VehicleStateOfVehicleValues::getInstance()->getValues(),
      'transmission_enum' => VehicleTransmissionValues::getInstance()->getValues(),
      'vehicle_type_enum' => VehicleVehicleTypeValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/vehicles',
      new Vehicle(),
      'EDGE',
      Vehicle::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createVideo(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'adaptive_type' => 'string',
      'animated_effect_id' => 'unsigned int',
      'application_id' => 'string',
      'asked_fun_fact_prompt_id' => 'unsigned int',
      'attribution_app_id' => 'string',
      'audio_story_wave_animation_handle' => 'string',
      'composer_entry_picker' => 'string',
      'composer_entry_point' => 'string',
      'composer_entry_time' => 'unsigned int',
      'composer_session_events_log' => 'string',
      'composer_session_id' => 'string',
      'composer_source_surface' => 'string',
      'composer_type' => 'string',
      'container_type' => 'container_type_enum',
      'content_category' => 'content_category_enum',
      'description' => 'string',
      'embeddable' => 'bool',
      'end_offset' => 'unsigned int',
      'fbuploader_video_file_chunk' => 'string',
      'file_size' => 'unsigned int',
      'file_url' => 'string',
      'fisheye_video_cropped' => 'bool',
      'formatting' => 'formatting_enum',
      'fov' => 'unsigned int',
      'front_z_rotation' => 'float',
      'fun_fact_prompt_id' => 'unsigned int',
      'fun_fact_toastee_id' => 'unsigned int',
      'guide' => 'list<list<unsigned int>>',
      'guide_enabled' => 'bool',
      'has_nickname' => 'bool',
      'holiday_card' => 'string',
      'initial_heading' => 'unsigned int',
      'initial_pitch' => 'unsigned int',
      'instant_game_entry_point_data' => 'string',
      'is_boost_intended' => 'bool',
      'is_explicit_share' => 'bool',
      'is_group_linking_post' => 'bool',
      'is_voice_clip' => 'bool',
      'location_source_id' => 'string',
      'manual_privacy' => 'bool',
      'offer_like_post_id' => 'unsigned int',
      'og_action_type_id' => 'string',
      'og_icon_id' => 'string',
      'og_object_id' => 'string',
      'og_phrase' => 'string',
      'og_suggestion_mechanism' => 'string',
      'original_fov' => 'unsigned int',
      'original_projection_type' => 'original_projection_type_enum',
      'publish_event_id' => 'unsigned int',
      'react_mode_metadata' => 'string',
      'referenced_sticker_id' => 'string',
      'replace_video_id' => 'string',
      'sales_promo_id' => 'unsigned int',
      'slideshow_spec' => 'map',
      'source' => 'string',
      'spherical' => 'bool',
      'start_offset' => 'unsigned int',
      'swap_mode' => 'swap_mode_enum',
      'text_format_metadata' => 'string',
      'throwback_camera_roll_media' => 'string',
      'thumb' => 'file',
      'time_since_original_post' => 'unsigned int',
      'title' => 'string',
      'transcode_setting_properties' => 'string',
      'unpublished_content_type' => 'unpublished_content_type_enum',
      'upload_phase' => 'upload_phase_enum',
      'upload_session_id' => 'string',
      'upload_setting_properties' => 'string',
      'video_file_chunk' => 'string',
      'video_start_time_ms' => 'unsigned int',
      'waterfall_id' => 'string',
    );
    $enums = array(
      'container_type_enum' => AdVideoContainerTypeValues::getInstance()->getValues(),
      'content_category_enum' => AdVideoContentCategoryValues::getInstance()->getValues(),
      'formatting_enum' => AdVideoFormattingValues::getInstance()->getValues(),
      'original_projection_type_enum' => AdVideoOriginalProjectionTypeValues::getInstance()->getValues(),
      'swap_mode_enum' => AdVideoSwapModeValues::getInstance()->getValues(),
      'unpublished_content_type_enum' => AdVideoUnpublishedContentTypeValues::getInstance()->getValues(),
      'upload_phase_enum' => AdVideoUploadPhaseValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/videos',
      new AdVideo(),
      'EDGE',
      AdVideo::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function deleteSelf(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_DELETE,
      '/',
      new AbstractCrudObject(),
      'NODE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getSelf(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/',
      new ProductCatalog(),
      'NODE',
      ProductCatalog::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function updateSelf(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'da_display_settings' => 'Object',
      'default_image_url' => 'string',
      'destination_catalog_settings' => 'map',
      'fallback_image_url' => 'string',
      'flight_catalog_settings' => 'map',
      'name' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/',
      new ProductCatalog(),
      'NODE',
      ProductCatalog::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  /**
   * @param int $user_id
   * @param string $role
   */
  public function addUserPermission($user_id, $role) {
    $params = array(
      'user' => $user_id,
      'role' => $role,
    );
    $this->getApi()->call(
      '/'.$this->assureId().'/userpermissions',
      RequestInterface::METHOD_POST,
      $params);
  }

  /**
   * @param int $user_id
   */
  public function deleteUserPermission($user_id) {
    $params = array(
      'user' => $user_id,
    );
    $this->getApi()->call(
      '/'.$this->assureId().'/userpermissions',
      RequestInterface::METHOD_DELETE,
      $params);
  }
}
