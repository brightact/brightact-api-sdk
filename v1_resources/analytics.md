# Analytics

***

Get analytics data.

| Endpoint | Description |
| ---- | --------------- |
| [POST /api/v1/approveDashboardReport](/v1_resources/analytics.md#post-apiv1approvedashboardreport) | Approve Dashboard report |
| [POST /api/v1/approveLeaderBoardReport](/v1_resources/analytics.md#post-apiv1approveleaderboardreport) | Approve LeaderBoard report |
| [GET /api/v1/contentBoardData/:user_id?range=:range](/v1_resources/analytics.md#get-apiv1contentboarddatauser_idrangerange) | Get ContentBoard data |
| [GET /api/v1/leaderBoardData/:user_id?range=:range&only_unique=:only_unique](/v1_resources/analytics.md#get-apiv1leaderboarddatauser_idrangerangeonly_uniqueonly_unique) |  Get LeaderBoard data |
| [GET /api/v1/getScoreOfTilePerViewer/:tile_id?token=:token](/v1_resources/analytics.md#get-apiv1getscoreoftileperviewertile_idtokentoken) |  Get score of time per lead session |
| [GET /api/v1/getTopXPackViews/:user_id?range=:range&limit=:limit](/v1_resources/analytics.md#get-apiv1gettopxpackviewsuser_idrangerangelimitlimit) | Get Top pack views |
| [GET /api/v1/getTopXPackShared/:user_id?range=:range&limit=:limit](/v1_resources/analytics.md#get-apiv1gettopxpackshareduser_idrangerangelimitlimit) | Get Top pack shared |
| [GET /api/v1/getTopXLeadAccounts/:user_id?range=:range&limit=:limit](/v1_resources/analytics.md#get-apiv1gettopxleadaccountsuser_idrangerangelimitlimit) | Get Top pack leads |
| [GET /api/v1/getTopXExternalLeads/:user_id?range=:range&limit=:limit](/v1_resources/analytics.md#get-apiv1gettopxexternalleadsuser_idrangerangelimitlimit) | Get Top external leads |
| [GET /api/v1/getTopXInternalLeads/:user_id?range=:range&limit=:limit](/v1_resources/analytics.md#get-apiv1gettopxinternalleadsuser_idrangerangelimitlimit) | Get Top internal leads |
| [GET /api/v1/getPackLeadEngagement/:pack_key?range=:range&only_unique=:only_unique&show_anonymous=:show_anonymous](/v1_resources/analytics.md#get-apiv1getpackleadengagementpack_keyrangerangeonly_uniqueonly_uniqueshow_anonymousshow_anonymous) | Get pack lead engagement |
| [GET /api/v1/getLeadScoreCard/:lead_token](/v1_resources/analytics.md#get-apiv1getleadscorecardlead_token) | Get Lead score card |
| [GET /api/v1/getPackContentReport/:pack_key](/v1_resources/analytics.md#get-apiv1getpackcontentreportpack_key) | Get pack content report data |
| [GET /api/v1/getLeadOverallEngagement/:user_id?email=:email&range=:range](/v1_resources/analytics.md#get-apiv1getleadoverallengagementuser_idemailemailrangerange) | Get lead overall engagement |
| [GET /api/v1/getLeadAssetEngagement/:content_id?lead_token=:lead_token](/v1_resources/analytics.md#get-apiv1getleadassetengagementcontent_idlead_tokenlead_token) | Get lead asset engagement |
| [GET /api/v1/getAssetInfo/:content_id?range=:range](/v1_resources/analytics.md#get-apiv1getassetinfocontent_idrangerange) | Get asset info |


### Date ranges
=================
All reports methods used one format of date ranges. We did not allow custom date periods at this moment.

| RangeID | Description |
| ---- | --------------- |
| 1 | All time |
| 2 | Last 90 days |
| 3 | Last 30 days |
| 4 | Recent week |
| 5 | Today |


### Methods details
=================

## `POST /api/v1/approveDashboardReport`

Approve Dashboard report

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
            <td>Pack key</td>
        </tr>
        <tr>
            <td><code>cc</code></td>
            <td>optional</td>
            <td>string</td>
            <td>CC emails for report</td>
        </tr>
        <tr>
            <td><code>lead_table</code></td>
            <td>optional</td>
            <td>integer</td>
            <td>Send or did not send lead table report. Default: 1</td>
        </tr>
        <tr>
            <td><code>score_cards</code></td>
            <td>optional</td>
            <td>integer</td>
            <td>Send or did not send score cards report. Default: 0</td>
        </tr>
        <tr>
            <td><code>score_offset</code></td>
            <td>optional</td>
            <td>integer</td>
            <td>Score offset. Default: 0. Range of value: 0-100</td>
        </tr>
    </tbody>
</table>

### Example Response

```json
{
    "id":"56"
}
```


## `POST /api/v1/approveLeaderBoardReport`

Approve LeaderBoard report

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
            <td><code>cc</code></td>
            <td>optional</td>
            <td>string</td>
            <td>CC emails for report</td>
        </tr>
    </tbody>
</table>

### Example Response

```json
{
    "id":"57"
}
```


## `GET /api/v1/contentBoardData/:user_id?range=:range`

Get ContentBoard data

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
            <td>integer|string</td>
            <td>UserID | my(for current account)</td>
        </tr>
        <tr>
            <td><a href="/v1_resources/analytics.md#dateranges">range</a></td>
            <td>optional</td>
            <td>integer</td>
            <td>Date period. Default: 1</td>
        </tr>
    </tbody>
</table>

### Example Response

```json
[
    {
        "id":293,
        "type":"1",
        "name":"admin-new-user.pptx",
        "avg_score":37,
        "score":"100",
        "views":52,
        "used_in_packs":
            [
                "1373646662448292",
                "1373646662448304",
                "1373646662444589",
                ...
            ],
        "rating":0,
        "weight":"100",
        "rate_users":0,
        "created_at":"2013-07-12 19:31:46"
    },
    ...
]
```


## `GET /api/v1/leaderBoardData/:user_id?range=:range&only_unique=:only_unique`

Get LeaderBoard data

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
            <td>integer|string</td>
            <td>UserID | my(for current account)</td>
        </tr>
        <tr>
            <td><code>range</code></td>
            <td>optional</td>
            <td>integer</td>
            <td>Date period. Default: 1</td>
        </tr>
        <tr>
            <td><code>only_unique</code></td>
            <td>optional</td>
            <td>integer</td>
            <td>Show only unique leads. Default: 0</td>
        </tr>
    </tbody>
</table>

```json
[
    {
        "token":"51e406ea62d0f1373898474",
        "email":"onehels@gmail.com",
        "score":"100",
        "date":"2013-07-15 17:29:15",
        "overall_num":76,
        "lead_name":"---",
        "pack_name":"5 tiles portrait mode"
    },
    ...
]
```


## `GET /api/v1/getScoreOfTilePerViewer/:tile_id?token=:token`

Get score of time per lead session

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
            <td><code>token</code></td>
            <td>required</td>
            <td>string</td>
            <td>Lead session token</td>
        </tr>
    </tbody>
</table>

### Example Response

```json
{
    "score":"100"
}
```


## `GET /api/v1/getTopXPackViews/:user_id?range=:range&limit=:limit`

Get Top pack views

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
            <td>integer|string</td>
            <td>UserID | my(for current account)</td>
        </tr>
        <tr>
            <td><code>range</code></td>
            <td>optional</td>
            <td>integer</td>
            <td>Date period. Default: 1</td>
        </tr><tr>
            <td><code>limit</code></td>
            <td>optional</td>
            <td>integer</td>
            <td>Result limit. Default: 5</td>
        </tr>
    </tbody>
</table>

### Example Response

```json
[
    {
        "pack_id":"1096",
        "pack_name":"With splash screen (update)",
        "num":129
    },
    ...
]
```


## `GET /api/v1/getTopXPackShared/:user_id?range=:range&limit=:limit`

Get Top pack shared

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
            <td>integer|string</td>
            <td>UserID | my(for current account)</td>
        </tr>
        <tr>
            <td><code>range</code></td>
            <td>optional</td>
            <td>integer</td>
            <td>Date period. Default: 1</td>
        </tr><tr>
            <td><code>limit</code></td>
            <td>optional</td>
            <td>integer</td>
            <td>Result limit. Default: 5</td>
        </tr>
    </tbody>
</table>

### Example Response

```json
[
    {
        "pack_id":"1096",
        "pack_name":"With splash screen (update)",
        "num":16
    },
    ...
]
```


## `GET /api/v1/getTopXLeadAccounts/:user_id?range=:range&limit=:limit`

Get Top pack leads

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
            <td>integer|string</td>
            <td>UserID | my(for current account)</td>
        </tr>
        <tr>
            <td><code>range</code></td>
            <td>optional</td>
            <td>integer</td>
            <td>Date period. Default: 1</td>
        </tr><tr>
            <td><code>limit</code></td>
            <td>optional</td>
            <td>integer</td>
            <td>Result limit. Default: 5</td>
        </tr>
    </tbody>
</table>

### Example Response

```json
[
    {
        "name":"test",
        "num":7,
        "dates":
            [
                "2014-04-01",
                ...
            ]
    },
    ...
]
```


## `GET /api/v1/getTopXExternalLeads/:user_id?range=:range&limit=:limit`

Get Top external leads

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
            <td>integer|string</td>
            <td>UserID | my(for current account)</td>
        </tr>
        <tr>
            <td><code>range</code></td>
            <td>optional</td>
            <td>integer</td>
            <td>Date period. Default: 1</td>
        </tr><tr>
            <td><code>limit</code></td>
            <td>optional</td>
            <td>integer</td>
            <td>Result limit. Default: 5</td>
        </tr>
    </tbody>
</table>

### Example Response

```json
[
    {
        "email":"test",
        "score":"100",
        "date":"2014-01-24"
    },
    ...
]
```


## `GET /api/v1/getTopXInternalLeads/:user_id?range=:range&limit=:limit`

Get Top internal leads

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
            <td>integer|string</td>
            <td>UserID | my(for current account)</td>
        </tr>
        <tr>
            <td><code>range</code></td>
            <td>optional</td>
            <td>integer</td>
            <td>Date period. Default: 1</td>
        </tr><tr>
            <td><code>limit</code></td>
            <td>optional</td>
            <td>integer</td>
            <td>Result limit. Default: 5</td>
        </tr>
    </tbody>
</table>

### Example Response

```json
[
    {
        "email":"onehels@gmail.com",
        "score":"100"
    },
    ...
]
```


## `GET /api/v1/getPackLeadEngagement/:pack_key?range=:range&only_unique=:only_unique&show_anonymous=:show_anonymous`

Get pack lead engagement

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
            <td>Pack key</td>
        </tr>
        <tr>
            <td><code>range</code></td>
            <td>optional</td>
            <td>integer</td>
            <td>Date period. Default: 1</td>
        </tr>
        <tr>
            <td><code>only_unique</code></td>
            <td>optional</td>
            <td>integer</td>
            <td>Show only unique leads. Default: 0</td>
        </tr>
        <tr>
            <td><code>show_anonymous</code></td>
            <td>optional</td>
            <td>integer</td>
            <td>Show anonymous leads. Default: 0</td>
        </tr>
    </tbody>
</table>

### Example Response

```json
[
    {
        "name":"---",
        "email":"onehels@gmail2.com",
        "shared":0,
        "score":"12",
        "message_id":0,
        "referral_id":0,
        "referral_all":0,
        "token":"53064ea8bfa411392922280",
        "date":"2014-02-20 20:51:20",
        "opt_in":null
    },
    ...
]
```


## `GET /api/v1/getLeadScoreCard/:lead_token`

Get Lead score card

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
            <td><code>lead_token</code></td>
            <td>required</td>
            <td>string</td>
            <td>Lead session token</td>
        </tr>
    </tbody>
</table>

### Example Response

```json
{
    "main_data":
        {
            "lead_name":"---",
            "email":"onehels@gmail.com",
            "score":"0",
            "referral":"me",
            "pack_name":"Firts SalesPack Admin",
            "share":0,
            "messages":
                [
                    ...
                ],
            "date":"13 Jun 2013 16:19:39 (PST)",
            "city":"",
            "country":"",
            "region":"",
            "device_type":"Mac",
            "browser":"Firefox",
            "opt_in":"No",
            "user_id":"5",
            "is_anonymous":"0"
        },
    "q_list":
        [
            ...
        ],
    "opt_in_q":
        [
            {
                "question":"Opt-In to Informatica Communications - would you like to receive communications from Informatica about products, solutions and events?",
                "answer":"No"
            }
        ],
    "engagement_content":
        [
            {
                "c_id":6,
                "name":"Welcome Note",
                "tile_name":"Welcome Note",
                "pages":"--",
                "time":45,
                "actions":"",
            },
            ...
        ]
}
```


## `GET /api/v1/getPackContentReport/:pack_key`

Get pack content report data

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
            <td>Pack key</td>
        </tr>
    </tbody>
</table>


### Example Response

```json
{
    "best_assets":
        [
            {
                "name":"Video - The Pulpit Rock - Norway",
                "score":18
            },
            ...
        ],
    "hotspots":
        [
            {
                "id": "Readme.pdf",
                "name": "309",
                "page": "1",
                "views": "1",
                "views_p": "0",
                "max_time": "0",
                "avg_time": "0",
                "avg_time_score": "0",
                "views_p_score": "0",
                "h_score": "0",
            },
            ...
        ],
    "time_periods":
        [
            {
                "start_time_view":"00:00",
                "end_time_view":"01:00",
                "views":0,
                "views_pc":0,
                "views_mobile":0
            },
            ...
        ]
```


## `GET /api/v1/getLeadOverallEngagement/:user_id?email=:email&range=:range`

Get lead overall engagement

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
            <td>integer|string</td>
            <td>UserID | my(for current account)</td>
        </tr>
        <tr>
            <td><code>email</code></td>
            <td>required</td>
            <td>string</td>
            <td>Lead email</td>
        </tr>
        <tr>
            <td><code>range</code></td>
            <td>optional</td>
            <td>integer</td>
            <td>Date period. Default: 1</td>
        </tr>
    </tbody>
</table>

### Example Response

```json
[
    {
        "pack_key":"1373646662448292",
        "pack_name":"5 tiles portrait mode",
        "token":"51e406dc4a1ff1373898460",
        "score":"0",
        "date":"2013-07-15 17:27:43"
    },
    ...
]
```


## `GET /api/v1/getLeadAssetEngagement/:content_id?lead_token=:lead_token`

Get lead asset engagement

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
        <tr>
            <td><code>lead_token</code></td>
            <td>required</td>
            <td>string</td>
            <td>Lead session token</td>
        </tr>
    </tbody>
</table>

### Example Response

```json
[
    {
        "img_url":null,
        "page":1,
        "views":1,
        "print":0,
        "download":0,
        "avg_time":25,
        "max_time":25,
        "level":1,
        "actions":""
    },
    ...
]
```


## `GET /api/v1/getAssetInfo/:content_id?range=:range`

Get asset info

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
        <tr>
            <td><code>range</code></td>
            <td>optional</td>
            <td>integer</td>
            <td>Date period. Default: 1</td>
        </tr>
    </tbody>
</table>

### Example Response

```json
{
    "views":51,
    "printed":0,
    "downloaded":0,
}
```
