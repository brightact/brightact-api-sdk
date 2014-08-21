Brightact API v1
=================

Overview
=================

Thank you for reviewing the BrightAct API.

Our API is a way for you to access and add content to your account, as well as get analyitc data and authenticate users from your own 3rd party applications.


API Versions
=================
For now we have only one version of API (**v1**). 

Formats
=================
The base URL for all API resources is http://app.brightact.com/api/v1.

We present two formats for response: **json** and **xml**. By default API use **json** format. 

Errors
================

All error responses can have different responses.

First type with single error:
```
{
    "error":"The server encountered an error processing your request."
}
```

Second type with multi errors:
```
{
    "errors":
        {
            "username":["Username cannot be blank."],
            "password":["Password cannot be blank."],
            "first_name":["First Name cannot be blank."],
            "last_name":["Last Name cannot be blank."]
        }
}
```

Authentication
================
For auth we use API key, what you can find at your account. And we have two main roles at API: **admininistrator** and **user**. Roles based on your key access level. All methods at this moment requires authentication.

Example of request with API key:
```
/api/v1/contentBoardData/1?key={api_key}
```

Methods
================

### [Users Management](/v1_resources/users.md)

| Endpoint | Description |
| ---- | --------------- |
| [POST /api/v1/user](/v1_resources/users.md#post-apiv1user) | Create user |
| [PUT /api/v1/user/:user_id](/v1_resources/users.md#put-apiv1useruser_id) | Update user |
| [DELETE /api/v1/user/:user_id](/v1_resources/users.md#delete-apiv1useruser_id) | Delete user |
| [GET /api/v1/resetUserPassword/:user_id](/v1_resources/users.md#get-apiv1resetuserpassworduser_id) | Reset user password |
| [GET /api/v1/users?org_id=:org_id](/v1_resources/users.md#get-apiv1usersorg_idorg_id) | Get users list |
| [GET /api/v1/user/:user_id](/v1_resources/users.md#get-apiv1useruser_id) | Get user info |
| [POST /api/v1/org](/v1_resources/users.md#post-apiv1org) | Create organization |
| [PUT /api/v1/org/:org_id](/v1_resources/users.md#put-apiv1orgorg_id) | Update organization |
| [DELETE /api/v1/org/:org_id](/v1_resources/users.md#delete-apiv1orgorg_id) | Delete organization |
| [GET /api/v1/orgs](/v1_resources/users.md#get-apiv1orgs) | Get organizations list |
| [GET /api/v1/org/:org_id](/v1_resources/users.md#get-apiv1orgorg_id) | Get organization info |


### [Packs Management](/v1_resources/packs.md)

| Endpoint | Description |
| ---- | --------------- |
| [GET /api/v1/packs?user_id=:user_id](/v1_resources/packs.md#get-apiv1packsuser_iduser_id) | Get packs list |
| [GET /api/v1/pack/:pack_key](/v1_resources/packs.md#get-apiv1packpack_key) | Get pack info |
| [POST /api/v1/pack](/v1_resources/packs.md#post-apiv1pack) | Create pack |
| [PUT /api/v1/pack/:pack_key](/v1_resources/packs.md#put-apiv1packpack_key) | Update pack |
| [DELETE /api/v1/pack/:pack_key](/v1_resources/packs.md#delete-apiv1packpack_key) | Delete pack |
| [GET /api/v1/tiles?pack_key=:pack_key](/v1_resources/packs.md#get-apiv1tilespack_keypack_key) | Get tiles list |
| [POST /api/v1/tile](/v1_resources/packs.md#post-apiv1tile) | Create tile |
| [PUT /api/v1/tile/:tile_id](/v1_resources/packs.md#put-apiv1tiletile_id) | Update tile |
| [DELETE /api/v1/tile/:tile_id](/v1_resources/packs.md#delete-apiv1tiletile_id) | Delete tile |
| [POST /api/v1/attachContentToTile](/v1_resources/packs.md#post-apiv1attachcontenttotile) | Attach content to tile |
| [POST /api/v1/duplicatePack](/v1_resources/packs.md#post-apiv1duplicatepack) | Duplicate pack |
| [GET /api/v1/contents?user_id=:user_id](/v1_resources/packs.md#get-apiv1contentsuser_iduser_id) | Get content list from library |
| [GET /api/v1/covers?user_id=:user_id](/v1_resources/packs.md#get-apiv1coversuser_iduser_id) | Get covers list from library |
| [GET /api/v1/content/:content_id](/v1_resources/packs.md#get-apiv1contentcontent_id) | Get content info |
| [PUT /api/v1/assetWeight/:content_id](/v1_resources/packs.md#put-apiv1assetweightcontent_id) | Update asset weight |
| [DELETE /api/v1/content/:content_id](/v1_resources/packs.md#delete-apiv1contentcontent_id) | Delete content |
| [GET /api/v1/getPackThumbnail/:pack_key](/v1_resources/packs.md#get-apiv1getpackthumbnailpack_key) | Get pack thumbnail |
| [GET /api/v1/getPackLinks/:pack_key](/v1_resources/packs.md#get-apiv1getpacklinkspack_key) | Get pack share links |
| [POST /api/v1/sharePackInEmail](/v1_resources/packs.md#post-apiv1sharepackinemail) | Share pack via email |


### [Analytics Management](/v1_resources/analytics.md)

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
| [GET /api/v1/getPackLeadEngagement/:pack_key?range=:range&only_unique= :only_unique&show_anonymous=:show_anonymous](/v1_resources/analytics.md#get-apiv1getpackleadengagementpack_keyrangerangeonly_uniqueonly_uniqueshow_anonymousshow_anonymous) | Get pack lead engagement |
| [GET /api/v1/getLeadScoreCard/:lead_token](/v1_resources/analytics.md#get-apiv1getleadscorecardlead_token) | Get Lead score card |
| [GET /api/v1/getPackContentReport/:pack_key](/v1_resources/analytics.md#get-apiv1getpackcontentreportpack_key) | Get pack content report data |
| [GET /api/v1/getLeadOverallEngagement/:user_id?email=:email&range=:range](/v1_resources/analytics.md#get-apiv1getleadoverallengagementuser_idemailemailrangerange) | Get lead overall engagement |
| [GET /api/v1/getLeadAssetEngagement/:content_id?lead_token=:lead_token](/v1_resources/analytics.md#get-apiv1getleadassetengagementcontent_idlead_tokenlead_token) | Get lead asset engagement |
| [GET /api/v1/getAssetInfo/:content_id?range=:range](/v1_resources/analytics.md#get-apiv1getassetinfocontent_idrangerange) | Get asset info |

