Brightact API v1
=================

Overview
=================

Thank you for reviewing the BrightAct API.
Brightact API allow you to get access to all information at your account at BrightAct service. At current version you can get only Analytics data, but soon will be more. To use this API you can use our PHP SDK library, which allow to use all methods. 

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

### [Analytics](/v1_resources/analytics.md)

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

