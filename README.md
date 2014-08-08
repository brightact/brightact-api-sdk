Brightact API v1
=================

Overview
=================

Brightact API allow you to get access to all information at your account at BrightAct service. At current version you can get only Analytics data, but soon will be more. To use this API you can use our PHP SDK library, which allow to use all methods. 

API Versions
=================
For now we have only one version of API (**v1**). 

Formats
=================
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




