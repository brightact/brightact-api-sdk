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
| [GET /api/v1/getPackLeadEngagement/:pack_key?range=:range&only_unique=:only_unique&show_anonymous=:show_anonymous](/v1_resources/analytics.md) | Get pack lead engagement |
| [GET /api/v1/getLeadScoreCard/:lead_token](/v1_resources/analytics.md) | Get Lead score card |
| [GET /api/v1/getPackContentReport/:pack_key](/v1_resources/analytics.md) | Get pack content report data |
| [GET /api/v1/getLeadOverallEngagement/:user_id?email=:email&range=:range](/v1_resources/analytics.md) | Get lead overall engagement |
| [GET /api/v1/getLeadAssetEngagement/:content_id?lead_token=:lead_token](/v1_resources/analytics.md) | Get lead asset engagement |
| [GET /api/v1/getAssetInfo/:content_id?range=:range](/v1_resources/analytics.md) | Get asset info |


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
            <td>Ccore offset. Default: 0. Range of value: 0-100</td>
        </tr>
    </tbody>
</table>


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
            <td><code>range</code></td>
            <td>optional</td>
            <td>integer</td>
            <td>Date period. Default: 1</td>
        </tr>
    </tbody>
</table>


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
