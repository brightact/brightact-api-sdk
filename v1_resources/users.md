# Users Management

***

Working with users data.

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


## Mobile providers

Mobile provides list

| ID | Description |
| ---- | --------------- |
| 1 | Alltel |
| 2 | AT&T |
| 3 | Boost Mobile |
| 4 | Cingular Wireless |
| 5 | Cricket |
| 6 | MetroPCS |
| 7 | Nextel Wireless |
| 8 | PowerTel |
| 9 | Sprint |
| 10 | SunCom |
| 11 | T-Mobile |
| 12 | U.S. Cellular |
| 13 | Verizon Wireless |
| 14 | Virgin Mobile |


## Methods details


## `POST /api/v1/user`

Create user (allowed only for admin API key)

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
            <td><code>username</code></td>
            <td>required</td>
            <td>string</td>
            <td>Username/Email</td>
        </tr>
        <tr>
            <td><code>password</code></td>
            <td>required</td>
            <td>string</td>
            <td>User password</td>
        </tr>
        <tr>
            <td><code>first_name</code></td>
            <td>required</td>
            <td>string</td>
            <td>First name</td>
        </tr>
        <tr>
            <td><code>last_name</code></td>
            <td>required</td>
            <td>string</td>
            <td>Last name</td>
        </tr>
        <tr>
            <td><code>status</code></td>
            <td>optional</td>
            <td>integer</td>
            <td>Activation status. Default: 1</td>
        </tr>
        <tr>
            <td><code>mobile</code></td>
            <td>optional</td>
            <td>string</td>
            <td>Mobile number</td>
        </tr>
        <tr>
            <td><code><a href="/v1_resources/users.md#mobile-providers">mobile_provider</a></code></td>
            <td>optional</td>
            <td>integer</td>
            <td>Mobile provider ID</td>
        </tr>
        <tr>
            <td><code>sp_num</code></td>
            <td>optional</td>
            <td>integer</td>
            <td>Packs limit. Default: 0</td>
        </tr>
        <tr>
            <td><code>org_id</code></td>
            <td>optional</td>
            <td>integer</td>
            <td>Organization ID</td>
        </tr>
        <tr>
            <td><code>extra_email</code></td>
            <td>optional</td>
            <td>string</td>
            <td>Extra emails for alerts</td>
        </tr>
        <tr>
            <td><code>suppress_emails</code></td>
            <td>optional</td>
            <td>string</td>
            <td>Suppress emails</td>
        </tr>
    </tbody>
</table>

### Example Response

```json
{
    "id":"1"
}
```


## `PUT /api/v1/user/:user_id`

Update user

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
            <td><code>password</code></td>
            <td>optional</td>
            <td>string</td>
            <td>User password</td>
        </tr>
        <tr>
            <td><code>first_name</code></td>
            <td>optional</td>
            <td>string</td>
            <td>First name</td>
        </tr>
        <tr>
            <td><code>last_name</code></td>
            <td>optional</td>
            <td>string</td>
            <td>Last name</td>
        </tr>
        <tr>
            <td><code>status</code></td>
            <td>optional</td>
            <td>integer</td>
            <td>Activation status. Default: 1</td>
        </tr>
        <tr>
            <td><code>mobile</code></td>
            <td>optional</td>
            <td>string</td>
            <td>Mobile number</td>
        </tr>
        <tr>
            <td><code><a href="/v1_resources/users.md#mobile-providers">mobile_provider</a></code></td>
            <td>optional</td>
            <td>integer</td>
            <td>Mobile provider ID</td>
        </tr>
        <tr>
            <td><code>sp_num</code></td>
            <td>optional</td>
            <td>integer</td>
            <td>Packs limit. Default: 0</td>
        </tr>
        <tr>
            <td><code>org_id</code></td>
            <td>optional</td>
            <td>integer</td>
            <td>Organization ID</td>
        </tr>
        <tr>
            <td><code>extra_email</code></td>
            <td>optional</td>
            <td>string</td>
            <td>Extra emails for alerts</td>
        </tr>
        <tr>
            <td><code>suppress_emails</code></td>
            <td>optional</td>
            <td>string</td>
            <td>Suppress emails</td>
        </tr>
    </tbody>
</table>

### Example Response

```json
{
    "id":"13",
    "username":"test2@mail.com",
    "first_name":"Test",
    "last_name":"Test3555",
    "company":"Company333555",
    "status":"1",
    "mobile":"0",
    "mobile_provider":"0",
    "sp_num":"15",
    "org_id":"0",
    "extra_email":"",
    "suppress_emails":"",
    "created_at":"2014-08-21 14:13:56",
    "updated_at":"2014-08-21 14:20:16",
    "last_login":"2014-08-21 14:13:56"
}
```

## `DELETE /api/v1/user/:user_id`

Delete user (allowed only for admin API key)

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
{
    "message":"Success"
}
```


## `GET /api/v1/resetUserPassword/:user_id`

Reset user password

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
{
    "id":"13",
    "password":"53f5d7eaddc61"
}
```


## `GET /api/v1/users?org_id=:org_id`

Get users list (allowed only for admin API key)

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
            <td><code>org_id</code></td>
            <td>required</td>
            <td>integer</td>
            <td>OrganizationID</td>
        </tr>
    </tbody>
</table>

### Example Response

```json
[
    {
        "id":"1",
        "username":"test1@domain.com",
        "first_name":"Test1",
        "last_name":"Test2",
        "company":"BrightAct",
        "status":"1",
        "mobile":"0",
        "mobile_provider":"0",
        "sp_num":"100",
        "org_id":"3",
        "extra_email":"",
        "suppress_emails":"test.com",
        "created_at":"2013-05-22 19:50:23",
        "updated_at":"2014-07-21 21:46:23",
        "last_login":"2014-08-20 21:55:06"
     },
     ...
]
```


## `GET /api/v1/user/:user_id`

Get user info

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
{
    "id":"13",
    "username":"test2@mail.com",
    "first_name":"Test",
    "last_name":"Test3555",
    "company":"Company333555",
    "status":"1",
    "mobile":"0",
    "mobile_provider":"0",
    "sp_num":"15",
    "org_id":"0",
    "is_deleted":"0",
    "extra_email":"",
    "suppress_emails":"",
    "created_at":"2014-08-21 14:13:56",
    "updated_at":"2014-08-21 14:28:42",
    "last_login":"2014-08-21 14:13:56"
}
```

## `POST /api/v1/org`

Create organization (allowed only for admin API key)

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
            <td><code>name</code></td>
            <td>required</td>
            <td>string</td>
            <td>Organization name</td>
        </tr>
    </tbody>
</table>

### Example Response

```json
{
    "id":"1"
}
```


## `PUT /api/v1/org/:org_id`

Update organization (allowed only for admin API key)

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
            <td><code>org_id</code></td>
            <td>required</td>
            <td>integer</td>
            <td>OrganizationID</td>
        </tr>
        <tr>
            <td><code>name</code></td>
            <td>required</td>
            <td>string</td>
            <td>Organization name</td>
        </tr>
    </tbody>
</table>

### Example Response

```json
{
    "id":"5",
    "name":"TestOrg3",
    "created_at":"2014-08-21 14:41:41",
    "updated_at":"2014-08-21 14:43:55"
}
```


## `DELETE /api/v1/org/:org_id`

Delete organization (allowed only for admin API key)

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
            <td><code>org_id</code></td>
            <td>required</td>
            <td>integer</td>
            <td>OrganizationID</td>
        </tr>
    </tbody>
</table>

### Example Response

```json
{
    "message":"Success"
}
```


## `GET /api/v1/orgs`

Get organizations list (allowed only for admin API key)

### Example Response

```json
[
    {
        "id":"1",
        "name":"TestOrg1",
        "created_at":"2013-09-30 18:03:09",
        "updated_at":"2014-01-13 11:32:31"
    },
    ...
]
```


## `GET /api/v1/org/:org_id`

Get organization info (allowed only for admin API key)

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
            <td><code>org_id</code></td>
            <td>required</td>
            <td>integer</td>
            <td>OrganizationID</td>
        </tr>
    </tbody>
</table>

### Example Response

```json
{
    "id":"1",
    "name":"TestOrg1",
    "created_at":"2013-09-30 18:03:09",
    "updated_at":"2014-01-13 11:32:31"
}
```
