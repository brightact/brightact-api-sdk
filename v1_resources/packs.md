# Packs Management

***

Working with packs data

| Endpoint | Description |
| ---- | --------------- |
| [GET /api/v1/packs?user_id=:user_id](/v1_resources/packs.md) | Get packs list |
| [GET /api/v1/pack/:pack_key](/v1_resources/packs.md) | Get pack info |
| [POST /api/v1/pack](/v1_resources/packs.md) | Create pack |
| [PUT /api/v1/pack/:pack_key](/v1_resources/packs.md) | Update pack |
| [DELETE /api/v1/pack/:pack_key](/v1_resources/packs.md) | Delete pack |
| [GET /api/v1/tiles?pack_key=:pack_key](/v1_resources/packs.md) | Get tiles list |
| [POST /api/v1/tile](/v1_resources/packs.md) | Create tile |
| [PUT /api/v1/tile/:tile_id](/v1_resources/packs.md) | Update tile |
| [DELETE /api/v1/tile/:tile_id](/v1_resources/packs.md) | Delete tile |
| [POST /api/v1/attachContentToTile](/v1_resources/packs.md) | Attach content to tile |
| [POST /api/v1/duplicatePack](/v1_resources/packs.md) | Duplicate pack |
| [GET /api/v1/contents?user_id=:user_id](/v1_resources/packs.md) | Get content list from library |
| [GET /api/v1/covers?user_id=:user_id](/v1_resources/packs.md) | Get covers list from library |
| [GET /api/v1/content/:content_id](/v1_resources/packs.md) | Get content info |
| [PUT /api/v1/assetWeight/:content_id](/v1_resources/packs.md) | Update asset weight |
| [DELETE /api/v1/content/:content_id](/v1_resources/packs.md) | Delete content |
| [GET /api/v1/getPackThumbnail/:pack_key](/v1_resources/packs.md) | Get pack thumbnail |
| [GET /api/v1/getPackLinks/:pack_key](/v1_resources/packs.md) | Get pack share links |
| [POST /api/v1/sharePackInEmail](/v1_resources/packs.md) | Share pack via email |


## Methods details


## `GET /api/v1/packs?user_id=:user_id`

Get packs list

### Parameters

<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Required?</th>
            <th width="50">Type</th>
            <th width=100%>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><code>user_id</code></td>
            <td>required</td>
            <td>integer</td>
            <td>UserID</td>
        </tr>
    </tbody>
</table>

### Example Response

```json
[
    {
        "id":"98",
        "key":"1372690091722986",
        "type":"0",
        "name":"Pack1",
        "description":"",
        "tags":"tag, tag2",
        "email_validation":"1",
        "is_adv":"1",
        "opt_in_text":"Test",
        "legal_text":"Legal test",
        "is_opt":"1",
        "custom_welcome":"1",
        "welcome_title":"Test",
        "welcome_desc":"Some description",
        "short_link":"http:\/\/spkg.co\/X8iE",
        "alert_contact":"1",
        "alert_download":"0",
        "alert_score":"0",
        "alert_score_limit":"50",
        "alert_type":"0",
        "color_theme_id":"0",
        "is_deleted":"0",
        "is_anonymous":"0",
        "template":"0",
        "created_at":"2013-07-01 17:51:15",
        "updated_at":"2014-05-13 19:22:35"
    },
    ...
]
```


## `GET /api/v1/pack/:pack_key`

Get pack info

### Parameters

<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Required?</th>
            <th width="50">Type</th>
            <th width=100%>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><code>pack_key</code></td>
            <td>required</td>
            <td>string</td>
            <td>PackKey</td>
        </tr>
    </tbody>
</table>

### Example Response

```json
{
    "id":"1138",
    "user_id":"1",
    "key":"1397499861257993",
    "type":"4",
    "name":"Getting Started.pdf",
    "description":"",
    "tags":"",
    "show_questions":"1",
    "email_validation":"0",
    "is_adv":"0",
    "opt_in_text":"",
    "legal_text":"",
    "is_opt":"0",
    "custom_welcome":"0",
    "welcome_title":"",
    "welcome_desc":"",
    "short_link":"http:\/\/spkg.co\/EtdO",
    "alert_contact":"0",
    "alert_download":"0",
    "alert_score":"1",
    "alert_score_limit":"50",
    "alert_type":"0",
    "color_theme_id":"0",
    "is_deleted":"0",
    "is_anonymous":"1",
    "template":"0",
    "created_at":"2014-04-14 21:24:32",
    "updated_at":"2014-07-17 21:54:41"
}
```


## `POST /api/v1/pack`

Create pack

### Parameters

<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Required?</th>
            <th width="50">Type</th>
            <th width=100%>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><code>user_id</code></td>
            <td>required</td>
            <td>integer</td>
            <td>UserID</td>
        </tr>
        <tr>
            <td><code>name</code></td>
            <td>required</td>
            <td>string</td>
            <td>Pack name</td>
        </tr>
        <tr>
            <td><code>type</code></td>
            <td>optional</td>
            <td>integer</td>
            <td>Pack type. Default: 0</td>
        </tr>
        <tr>
            <td><code>template</code></td>
            <td>optional</td>
            <td>integer</td>
            <td>Template ID for Mini-Pack</td>
        </tr>
        <tr>
            <td><code>description</code></td>
            <td>optional</td>
            <td>string</td>
            <td>Pack description</td>
        </tr>
        <tr>
            <td><code>tags</code></td>
            <td>optional</td>
            <td>string</td>
            <td>Pack tags</td>
        </tr>
        <tr>
            <td><code>show_questions</code></td>
            <td>optional</td>
            <td>integer</td>
            <td>Show questions after registration. Default: 0</td>
        </tr>
        <tr>
            <td><code>email_validation</code></td>
            <td>optional</td>
            <td>integer</td>
            <td>Accept generic email addresses (Gmail, Yahoo!, me.com and such). Default: 0</td>
        </tr>
        <tr>
            <td><code>is_adv</code></td>
            <td>optional</td>
            <td>integer</td>
            <td>Legal note status. Default: 0</td>
        </tr>
        <tr>
            <td><code>legal_text</code></td>
            <td>optional</td>
            <td>string</td>
            <td>Legal note text</td>
        </tr>
        <tr>
            <td><code>is_opt</code></td>
            <td>optional</td>
            <td>integer</td>
            <td>Opt in message status. Default: 0</td>
        </tr>
        <tr>
            <td><code>opt_in_text</code></td>
            <td>optional</td>
            <td>string</td>
            <td>Opt in message text</td>
        </tr>
        <tr>
            <td><code>custom_welcome</code></td>
            <td>optional</td>
            <td>integer</td>
            <td>Welcome note status. Default: 0</td>
        </tr>
        <tr>
            <td><code>welcome_title</code></td>
            <td>optional</td>
            <td>string</td>
            <td>Welcome note title</td>
        </tr>
        <tr>
            <td><code>welcome_desc</code></td>
            <td>optional</td>
            <td>string</td>
            <td>Welcome note description</td>
        </tr>
        <tr>
            <td><code>alert_type</code></td>
            <td>optional</td>
            <td>integer</td>
            <td>Alert type. Default: 0</td>
        </tr>
        <tr>
            <td><code>alert_contact</code></td>
            <td>optional</td>
            <td>integer</td>
            <td>Trigger alert if user leave a message at contact form. Default: 0</td>
        </tr>
        <tr>
            <td><code>alert_download</code></td>
            <td>optional</td>
            <td>integer</td>
            <td>Trigger alert if user download or print asset. Default: 0</td>
        </tr>
        <tr>
            <td><code>alert_score</code></td>
            <td>optional</td>
            <td>integer</td>
            <td>Status of score trigger for Alerts</td>
        </tr>
        <tr>
            <td><code>alert_score_limit</code></td>
            <td>optional</td>
            <td>integer</td>
            <td>Score limit for Alerts trigger</td>
        </tr>
        <tr>
            <td><code>color_theme_id</code></td>
            <td>optional</td>
            <td>integer</td>
            <td>Theme for pack (Branding)</td>
        </tr>
    </tbody>
</table>

### Example Response

```json
{
    "user_id":"1",
    "key":"1408625101932904",
    "type":0,
    "name":"Test pack 2",
    "description":"",
    "tags":"",
    "show_questions":1,
    "email_validation":1,
    "is_adv":0,
    "opt_in_text":"",
    "legal_text":"",
    "is_opt":0,
    "custom_welcome":0,
    "welcome_title":"",
    "welcome_desc":"",
    "short_link":"",
    "alert_contact":1,
    "alert_download":0,
    "alert_score":0,
    "alert_score_limit":50,
    "alert_type":0,
    "template":0,
    "color_theme_id":0,
    "is_deleted":0,
    "is_anonymous":0,
    "created_at":"2014-08-21 15:45:01",
    "updated_at":"2014-08-21 15:45:01",
    "id":"1164"
}
```

## `PUT /api/v1/pack/:pack_key`

Update pack

### Parameters

<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Required?</th>
            <th width="50">Type</th>
            <th width=100%>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><code>pack_key</code></td>
            <td>required</td>
            <td>string</td>
            <td>PackKey</td>
        </tr>
        <tr>
            <td><code>name</code></td>
            <td>required</td>
            <td>string</td>
            <td>Pack name</td>
        </tr>
        <tr>
            <td><code>type</code></td>
            <td>optional</td>
            <td>integer</td>
            <td>Pack type. Default: 0</td>
        </tr>
        <tr>
            <td><code>template</code></td>
            <td>optional</td>
            <td>integer</td>
            <td>Template ID for Mini-Pack</td>
        </tr>
        <tr>
            <td><code>description</code></td>
            <td>optional</td>
            <td>string</td>
            <td>Pack description</td>
        </tr>
        <tr>
            <td><code>tags</code></td>
            <td>optional</td>
            <td>string</td>
            <td>Pack tags</td>
        </tr>
        <tr>
            <td><code>show_questions</code></td>
            <td>optional</td>
            <td>integer</td>
            <td>Show questions after registration. Default: 0</td>
        </tr>
        <tr>
            <td><code>email_validation</code></td>
            <td>optional</td>
            <td>integer</td>
            <td>Accept generic email addresses (Gmail, Yahoo!, me.com and such). Default: 0</td>
        </tr>
        <tr>
            <td><code>is_adv</code></td>
            <td>optional</td>
            <td>integer</td>
            <td>Legal note status. Default: 0</td>
        </tr>
        <tr>
            <td><code>legal_text</code></td>
            <td>optional</td>
            <td>string</td>
            <td>Legal note text</td>
        </tr>
        <tr>
            <td><code>is_opt</code></td>
            <td>optional</td>
            <td>integer</td>
            <td>Opt in message status. Default: 0</td>
        </tr>
        <tr>
            <td><code>opt_in_text</code></td>
            <td>optional</td>
            <td>string</td>
            <td>Opt in message text</td>
        </tr>
        <tr>
            <td><code>custom_welcome</code></td>
            <td>optional</td>
            <td>integer</td>
            <td>Welcome note status. Default: 0</td>
        </tr>
        <tr>
            <td><code>welcome_title</code></td>
            <td>optional</td>
            <td>string</td>
            <td>Welcome note title</td>
        </tr>
        <tr>
            <td><code>welcome_desc</code></td>
            <td>optional</td>
            <td>string</td>
            <td>Welcome note description</td>
        </tr>
        <tr>
            <td><code>alert_type</code></td>
            <td>optional</td>
            <td>integer</td>
            <td>Alert type. Default: 0</td>
        </tr>
        <tr>
            <td><code>alert_contact</code></td>
            <td>optional</td>
            <td>integer</td>
            <td>Trigger alert if user leave a message at contact form. Default: 0</td>
        </tr>
        <tr>
            <td><code>alert_download</code></td>
            <td>optional</td>
            <td>integer</td>
            <td>Trigger alert if user download or print asset. Default: 0</td>
        </tr>
        <tr>
            <td><code>alert_score</code></td>
            <td>optional</td>
            <td>integer</td>
            <td>Status of score trigger for Alerts</td>
        </tr>
        <tr>
            <td><code>alert_score_limit</code></td>
            <td>optional</td>
            <td>integer</td>
            <td>Score limit for Alerts trigger</td>
        </tr>
        <tr>
            <td><code>color_theme_id</code></td>
            <td>optional</td>
            <td>integer</td>
            <td>Theme for pack (Branding)</td>
        </tr>
    </tbody>
</table>

### Example Response

```json
{
    "id":"1164",
    "user_id":"1",
    "key":"1408625101932904",
    "type":"0",
    "name":"Test pack 3",
    "description":"",
    "tags":"",
    "show_questions":"1",
    "email_validation":"1",
    "is_adv":"0",
    "opt_in_text":"",
    "legal_text":"",
    "is_opt":"0",
    "custom_welcome":"0",
    "welcome_title":"",
    "welcome_desc":"",
    "created_at":"2014-08-21 15:45:01",
    "short_link":"",
    "alert_contact":"1",
    "alert_download":"0",
    "alert_score":"0",
    "alert_score_limit":"50",
    "alert_type":"0",
    "template":"0",
    "color_theme_id":"0",
    "is_deleted":"0",
    "is_anonymous":"0",
    "updated_at":"2014-08-21 16:19:36"
}
```

## `DELETE /api/v1/pack/:pack_key`

Delete pack

### Parameters

<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Required?</th>
            <th width="50">Type</th>
            <th width=100%>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><code>pack_key</code></td>
            <td>required</td>
            <td>string</td>
            <td>PackKey</td>
        </tr>
    </tbody>
</table>

### Example Response

```json
{
    "message":"Success"
}
```


## `GET /api/v1/tiles?pack_key=:pack_key`

Get tiles list

### Parameters

<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Required?</th>
            <th width="50">Type</th>
            <th width=100%>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><code>pack_key</code></td>
            <td>required</td>
            <td>string</td>
            <td>PackKey</td>
        </tr>
    </tbody>
</table>

### Example Response

```json
[
    {
        "id":"21388",
        "name":"Getting Started.pdf",
        "description":"",
        "tags":"",
        "pos":"999",
        "salespack_key":"1397499861257993",
        "color_id":"0",
        "is_home":"0",
        "created_at":"2014-04-14 21:24:32",
        "updated_at":"2014-07-17 21:54:41"
    },
    ...
]
```


## `POST /api/v1/tile`

Create tile

### Parameters

<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Required?</th>
            <th width="50">Type</th>
            <th width=100%>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><code>pack_key</code></td>
            <td>required</td>
            <td>string</td>
            <td>PackKey</td>
        </tr>
        <tr>
            <td><code>name</code></td>
            <td>required</td>
            <td>string</td>
            <td>Tile name</td>
        </tr>
        <tr>
            <td><code>description</code></td>
            <td>optional</td>
            <td>string</td>
            <td>Tile description</td>
        </tr>
        <tr>
            <td><code>tags</code></td>
            <td>optional</td>
            <td>string</td>
            <td>Tile tags</td>
        </tr>
        <tr>
            <td><code>pos</code></td>
            <td>optional</td>
            <td>integer</td>
            <td>Tile position</td>
        </tr>
        <tr>
            <td><code>color_id</code></td>
            <td>optional</td>
            <td>integer</td>
            <td>Color of tile (only for Mini-Pack)</td>
        </tr>
        <tr>
            <td><code>is_home</code></td>
            <td>optional</td>
            <td>integer</td>
            <td>Do this tile as default tile (only for Mini-Pack)</td>
        </tr>
        <tr>
            <td><code>content_id</code></td>
            <td>optional</td>
            <td>integer</td>
            <td>ContentID from library</td>
        </tr>
        <tr>
            <td><code>cover_id</code></td>
            <td>optional</td>
            <td>integer</td>
            <td>CoverID from library</td>
        </tr>
        <tr>
            <td><code>content_type</code></td>
            <td>optional</td>
            <td>integer</td>
            <td>Content type</td>
        </tr>
        <tr>
            <td><code>content_url</code></td>
            <td>optional</td>
            <td>string</td>
            <td>Content url</td>
        </tr>
        <tr>
            <td><code>content_name</code></td>
            <td>optional</td>
            <td>string</td>
            <td>Content name. Only for images</td>
        </tr>
        <tr>
            <td><code>content_html</code></td>
            <td>optional</td>
            <td>string</td>
            <td>Content HTML for Custom HTML type</td>
        </tr>
        <tr>
            <td><code>auto_play</code></td>
            <td>optional</td>
            <td>integer</td>
            <td>Auto play status. Default: 0. Only for videos</td>
        </tr>
        <tr>
            <td><code>offset_time</code></td>
            <td>optional</td>
            <td>integer</td>
            <td>Offset time for video. Default: 0. Value in seconds</td>
        </tr>
        <tr>
            <td><code>open_in_new_window</code></td>
            <td>optional</td>
            <td>integer</td>
            <td>Open in new window status. Default: 0. Only for embed links</td>
        </tr>
    </tbody>
</table>

### Example Response

```json
{
    "id":"1"
}
```


## `PUT /api/v1/tile/:tile_id`

Update tile

### Parameters

<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Required?</th>
            <th width="50">Type</th>
            <th width=100%>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><code>tile_id</code></td>
            <td>required</td>
            <td>integer</td>
            <td>TileID</td>
        </tr>
        <tr>
            <td><code>name</code></td>
            <td>required</td>
            <td>string</td>
            <td>Tile name</td>
        </tr>
        <tr>
            <td><code>description</code></td>
            <td>optional</td>
            <td>string</td>
            <td>Tile description</td>
        </tr>
        <tr>
            <td><code>tags</code></td>
            <td>optional</td>
            <td>string</td>
            <td>Tile tags</td>
        </tr>
        <tr>
            <td><code>pos</code></td>
            <td>optional</td>
            <td>integer</td>
            <td>Tile position</td>
        </tr>
        <tr>
            <td><code>color_id</code></td>
            <td>optional</td>
            <td>integer</td>
            <td>Color of tile (only for Mini-Pack)</td>
        </tr>
        <tr>
            <td><code>is_home</code></td>
            <td>optional</td>
            <td>integer</td>
            <td>Do this tile as default tile (only for Mini-Pack)</td>
        </tr>
        <tr>
            <td><code>content_id</code></td>
            <td>optional</td>
            <td>integer</td>
            <td>ContentID from library</td>
        </tr>
        <tr>
            <td><code>content_type</code></td>
            <td>optional</td>
            <td>integer</td>
            <td>Content type</td>
        </tr>
        <tr>
            <td><code>content_url</code></td>
            <td>optional</td>
            <td>string</td>
            <td>Content url</td>
        </tr>
        <tr>
            <td><code>content_name</code></td>
            <td>optional</td>
            <td>string</td>
            <td>Content name. Only for images</td>
        </tr>
        <tr>
            <td><code>content_html</code></td>
            <td>optional</td>
            <td>string</td>
            <td>Content HTML for Custom HTML type</td>
        </tr>
        <tr>
            <td><code>auto_play</code></td>
            <td>optional</td>
            <td>integer</td>
            <td>Auto play status. Default: 0. Only for videos</td>
        </tr>
        <tr>
            <td><code>offset_time</code></td>
            <td>optional</td>
            <td>integer</td>
            <td>Offset time for video. Default: 0. Value in seconds</td>
        </tr>
        <tr>
            <td><code>open_in_new_window</code></td>
            <td>optional</td>
            <td>integer</td>
            <td>Open in new window status. Default: 0. Only for embed links</td>
        </tr>
        <tr>
            <td><code>cover_id</code></td>
            <td>optional</td>
            <td>integer</td>
            <td>CoverID from library</td>
        </tr>
        <tr>
            <td><code>cover_image_url</code></td>
            <td>optional</td>
            <td>integer</td>
            <td>Cover URL</td>
        </tr>
        <tr>
            <td><code>cover_image_name</code></td>
            <td>optional</td>
            <td>integer</td>
            <td>Cover Name (required for cover_image_url)</td>
        </tr>
    </tbody>
</table>

### Example Response

```json
{
    "id":"21682",
    "name":"Tile name 2",
    "description":"",
    "tags":"",
    "pos":"0",
    "salespack_key":"1380028793497428",
    "color_id":"0",
    "is_home":"0",
    "created_at":"2014-08-21 16:42:52",
    "updated_at":"2014-08-21 16:49:00"
}
```


## `DELETE /api/v1/tile/:tile_id`

Delete tile

### Parameters

<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Required?</th>
            <th width="50">Type</th>
            <th width=100%>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><code>tile_id</code></td>
            <td>required</td>
            <td>integer</td>
            <td>TileID</td>
        </tr>
    </tbody>
</table>

### Example Response

```json
{
    "message":"Success"
}
```


## `POST /api/v1/attachContentToTile`

Attach content to tile (only for Mini-Pack)

### Parameters

<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Required?</th>
            <th width="50">Type</th>
            <th width=100%>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><code>id</code></td>
            <td>required</td>
            <td>integer</td>
            <td>TileID</td>
        </tr>
        <tr>
            <td><code>content_id</code></td>
            <td>optional</td>
            <td>integer</td>
            <td>ContentID from library</td>
        </tr>
        <tr>
            <td><code>content_type</code></td>
            <td>optional</td>
            <td>integer</td>
            <td>Content type</td>
        </tr>
        <tr>
            <td><code>content_url</code></td>
            <td>optional</td>
            <td>string</td>
            <td>Content url</td>
        </tr>
        <tr>
            <td><code>content_name</code></td>
            <td>optional</td>
            <td>string</td>
            <td>Content name. Only for images</td>
        </tr>
        <tr>
            <td><code>content_html</code></td>
            <td>optional</td>
            <td>string</td>
            <td>Content HTML for Custom HTML type</td>
        </tr>
        <tr>
            <td><code>auto_play</code></td>
            <td>optional</td>
            <td>integer</td>
            <td>Auto play status. Default: 0. Only for videos</td>
        </tr>
        <tr>
            <td><code>offset_time</code></td>
            <td>optional</td>
            <td>integer</td>
            <td>Offset time for video. Default: 0. Value in seconds</td>
        </tr>
        <tr>
            <td><code>open_in_new_window</code></td>
            <td>optional</td>
            <td>integer</td>
            <td>Open in new window status. Default: 0. Only for embed links</td>
        </tr>
    </tbody>
</table>

### Example Response

```json
{
    "id":"1"
}
```


## `POST /api/v1/duplicatePack`

Duplicate pack

### Parameters

<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Required?</th>
            <th width="50">Type</th>
            <th width=100%>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><code>id</code></td>
            <td>required</td>
            <td>integer</td>
            <td>PackKey</td>
        </tr>
    </tbody>
</table>

### Example Response

```json
{
    "id":"1408630885409563"
}
```


## `GET /api/v1/contents?user_id=:user_id`

Get contents list from library

### Parameters

<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Required?</th>
            <th width="50">Type</th>
            <th width=100%>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><code>user_id</code></td>
            <td>required</td>
            <td>integer</td>
            <td>UserID</td>
        </tr>
    </tbody>
</table>

### Example Response

```json
[
    {
        "id":"289",
        "name":"SalesPack - Dashboard-1.png",
        "type":"8",
        "desc":"Tutorials",
        "score":0,
        "rating":0,
        "weight":"100",
        "tags":""
    },
    ...
]
```


## `GET /api/v1/covers?user_id=:user_id`

Get covers list from library

### Parameters

<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Required?</th>
            <th width="50">Type</th>
            <th width=100%>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><code>user_id</code></td>
            <td>required</td>
            <td>integer</td>
            <td>UserID</td>
        </tr>
    </tbody>
</table>

### Example Response

```json
[
    {
        "id":"3632",
        "name":"2013-09-05_1554.png"
    },
    ...
]
```



## `GET /api/v1/content/:content_id`

Get content info

### Parameters

<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Required?</th>
            <th width="50">Type</th>
            <th width=100%>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><code>content_id</code></td>
            <td>required</td>
            <td>integer</td>
            <td>ContentID</td>
        </tr>
    </tbody>
</table>

### Example Response

```json
{
    "id":"11",
    "pos":"0",
    "salespack_key":"1371065623705788",
    "element_id":"11",
    "parent_id":"0",
    "type":"1",
    "name":"1549_Data_Exchange_and_Information_Sharing.pdf",
    "description":"",
    "url":"1371220395513909.pdf",
    "uuid":"01be9097-f373-41dd-9983-7c048b6037e2",
    "value":"0",
    "user_id":"5",
    "allow_extra":"1",
    "is_deleted":"1",
    "weight":"70"
}
```


## `PUT /api/v1/assetWeight/:content_id`

Update asset weight

### Parameters

<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Required?</th>
            <th width="50">Type</th>
            <th width=100%>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><code>content_id</code></td>
            <td>required</td>
            <td>integer</td>
            <td>ContentID</td>
        </tr>
    </tbody>
</table>

### Example Response

```json
{
    "id":"11",
    "pos":"0",
    "salespack_key":"1371065623705788",
    "element_id":"11",
    "parent_id":"0",
    "type":"1",
    "name":"1549_Data_Exchange_and_Information_Sharing.pdf",
    "description":"",
    "url":"1371220395513909.pdf",
    "uuid":"01be9097-f373-41dd-9983-7c048b6037e2",
    "value":"0",
    "user_id":"5",
    "allow_extra":"1",
    "is_deleted":"1",
    "weight":"70"
}
```



## `GET /api/v1/getPackThumbnail/:pack_key`

Get pack thumbnail

### Parameters

<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Required?</th>
            <th width="50">Type</th>
            <th width=100%>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><code>pack_key</code></td>
            <td>required</td>
            <td>string</td>
            <td>PackKey</td>
        </tr>
    </tbody>
</table>

### Example Response

```json
{
    "url":"http:\/\/app.brightact.com\/site\/thumbnails\/1408560911572534",
    "embed":"<a target='_blank' href='http:\/\/app.brightact.com\/p\/1408560911572534?e={EmailAddress}&n={First%20Last}'><img src='http:\/\/app.brightact.com\/site\/thumbnails\/1408560911572534' width='210' height='140' style='border: #ccc 2px solid;'><\/a>"
}
```


## `POST /api/v1/sharePackInEmail`

Share pack in email

### Parameters

<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Required?</th>
            <th width="50">Type</th>
            <th width=100%>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><code>pack_key</code></td>
            <td>required</td>
            <td>string</td>
            <td>PackKey</td>
        </tr>
        <tr>
            <td><code>to</code></td>
            <td>required</td>
            <td>string</td>
            <td>Send to</td>
        </tr>
        <tr>
            <td><code>from</code></td>
            <td>optional</td>
            <td>string</td>
            <td>From email</td>
        </tr>
        <tr>
            <td><code>from_name</code></td>
            <td>optional</td>
            <td>string</td>
            <td>From name</td>
        </tr>
        <tr>
            <td><code>subject</code></td>
            <td>optional</td>
            <td>string</td>
            <td>Subject</td>
        </tr>
        <tr>
            <td><code>message</code></td>
            <td>optional</td>
            <td>string</td>
            <td>Message body</td>
        </tr>
    </tbody>
</table>

### Example Response

```json
{
    "id":1
}
```
