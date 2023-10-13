<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function testFunc()
    {
        $xmlString = '
        <root>
            <item>
                <id>1</id>
                <title>10</title>
                <author>Item 1</author>
                <price>10</price>
                <yearRelease>10</yearRelease>
            </item>
            <item>
                <id>Item 1</id>
                <title>10</title>
                <author>Item 1</author>
                <price>10</price>
                <yearRelease>10</yearRelease>
            </item>
            <item>
                <id>Item 1</id>
                <title>10</title>
                <author>Item 1</author>
                <price>10</price>
                <yearRelease>10</yearRelease>
            </item>
            <item>
                <id>Item 1</id>
                <title>10</title>
                <author>Item 1</author>
                <price>10</price>
                <yearRelease>10</yearRelease>
            </item>
            <item>
                <id>Item 1</id>
                <title>10</title>
                <author>Item 1</author>
                <price>10</price>
                <yearRelease>10</yearRelease>
            </item>
            <item>
                <id>Item 1</id>
                <title>10</title>
                <author>Item 1</author>
                <price>10</price>
                <yearRelease>10</yearRelease>
            </item>
        </root>';

        $xmlObject = simplexml_load_string($xmlString);
        $jsonString = json_encode($xmlObject);

        $jsonData = json_decode($jsonString, true);
        return response()->json($jsonData['item']);
    }
}
