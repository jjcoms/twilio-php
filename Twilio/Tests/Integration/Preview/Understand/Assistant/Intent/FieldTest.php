<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Tests\Integration\Preview\Understand\Assistant\Intent;

use Twilio\Exceptions\DeserializeException;
use Twilio\Exceptions\TwilioException;
use Twilio\Http\Response;
use Twilio\Tests\HolodeckTestCase;
use Twilio\Tests\Request;

class FieldTest extends HolodeckTestCase {
    public function testFetchRequest() {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->preview->understand->assistants("UAXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                              ->intents("UDXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                              ->fields("UEXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->fetch();
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $this->assertRequest(new Request(
            'get',
            'https://preview.twilio.com/understand/Assistants/UAXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX/Intents/UDXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX/Fields/UEXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX'
        ));
    }

    public function testFetchResponse() {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "url": "https://preview.twilio.com/understand/Assistants/UAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Intents/UDaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Fields/UEaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "unique_name": "unique_name",
                "date_updated": "2015-07-30T20:00:00Z",
                "assistant_sid": "UAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "intent_sid": "UDaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "date_created": "2015-07-30T20:00:00Z",
                "sid": "UEaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "field_type": "field_type"
            }
            '
        ));

        $actual = $this->twilio->preview->understand->assistants("UAXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                                    ->intents("UDXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                                    ->fields("UEXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->fetch();

        $this->assertNotNull($actual);
    }

    public function testReadRequest() {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->preview->understand->assistants("UAXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                              ->intents("UDXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                              ->fields->read();
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $this->assertRequest(new Request(
            'get',
            'https://preview.twilio.com/understand/Assistants/UAXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX/Intents/UDXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX/Fields'
        ));
    }

    public function testReadEmptyResponse() {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "fields": [],
                "meta": {
                    "page": 0,
                    "first_page_url": "https://preview.twilio.com/understand/Assistants/UAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Intents/UDaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Fields?PageSize=50&Page=0",
                    "url": "https://preview.twilio.com/understand/Assistants/UAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Intents/UDaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Fields?PageSize=50&Page=0",
                    "key": "fields",
                    "next_page_url": null,
                    "previous_page_url": null,
                    "page_size": 50
                }
            }
            '
        ));

        $actual = $this->twilio->preview->understand->assistants("UAXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                                    ->intents("UDXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                                    ->fields->read();

        $this->assertNotNull($actual);
    }

    public function testReadFullResponse() {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "fields": [
                    {
                        "url": "https://preview.twilio.com/understand/Assistants/UAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Intents/UDaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Fields/UEaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "unique_name": "unique_name",
                        "date_updated": "2015-07-30T20:00:00Z",
                        "assistant_sid": "UAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "intent_sid": "UDaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "date_created": "2015-07-30T20:00:00Z",
                        "sid": "UEaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "field_type": "field_type"
                    }
                ],
                "meta": {
                    "page": 0,
                    "first_page_url": "https://preview.twilio.com/understand/Assistants/UAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Intents/UDaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Fields?PageSize=50&Page=0",
                    "url": "https://preview.twilio.com/understand/Assistants/UAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Intents/UDaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Fields?PageSize=50&Page=0",
                    "key": "fields",
                    "next_page_url": null,
                    "previous_page_url": null,
                    "page_size": 50
                }
            }
            '
        ));

        $actual = $this->twilio->preview->understand->assistants("UAXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                                    ->intents("UDXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                                    ->fields->read();

        $this->assertGreaterThan(0, count($actual));
    }

    public function testCreateRequest() {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->preview->understand->assistants("UAXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                              ->intents("UDXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                              ->fields->create("fieldType", "uniqueName");
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $values = array('FieldType' => "fieldType", 'UniqueName' => "uniqueName", );

        $this->assertRequest(new Request(
            'post',
            'https://preview.twilio.com/understand/Assistants/UAXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX/Intents/UDXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX/Fields',
            null,
            $values
        ));
    }

    public function testCreateResponse() {
        $this->holodeck->mock(new Response(
            201,
            '
            {
                "url": "https://preview.twilio.com/understand/Assistants/UAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Intents/UDaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Fields/UEaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "unique_name": "unique_name",
                "date_updated": "2015-07-30T20:00:00Z",
                "assistant_sid": "UAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "intent_sid": "UDaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "date_created": "2015-07-30T20:00:00Z",
                "sid": "UEaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "field_type": "field_type"
            }
            '
        ));

        $actual = $this->twilio->preview->understand->assistants("UAXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                                    ->intents("UDXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                                    ->fields->create("fieldType", "uniqueName");

        $this->assertNotNull($actual);
    }

    public function testDeleteRequest() {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->preview->understand->assistants("UAXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                              ->intents("UDXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                              ->fields("UEXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->delete();
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $this->assertRequest(new Request(
            'delete',
            'https://preview.twilio.com/understand/Assistants/UAXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX/Intents/UDXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX/Fields/UEXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX'
        ));
    }

    public function testDeleteResponse() {
        $this->holodeck->mock(new Response(
            204,
            null
        ));

        $actual = $this->twilio->preview->understand->assistants("UAXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                                    ->intents("UDXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                                    ->fields("UEXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->delete();

        $this->assertTrue($actual);
    }
}