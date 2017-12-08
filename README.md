# L'Équipage API REST

This is the documentation to use the API of the team **L'Équipage**

## CRUD for users

There are all methods available on users

### **GET** All users
`URL : http://212.47.252.1/~purpleunikorn/api-ndi/public/index.php/v1/bros`

#### Exemple Request

```
$ curl -X GET http://212.47.252.1/~purpleunikorn/api-ndi/public/index.php/v1/bros
```

#### Response  
Return a list of users
```javascript
{
    id: {int},  
    username: {string},  
    email: {string},  
    password: {string},
    phone: {string},
    driver_licence: {boolean},  
    created_at: {datetime},  
    updated_at: {datetime},
},
...
{
    id: {int},  
    username: {string},  
    email: {string},  
    password: {string},
    phone: {string},
    driver_licence: {boolean},  
    created_at: {datetime},  
    updated_at: {datetime},
}
```


### **GET** Unique user
`URL : http://212.47.252.1/~purpleunikorn/api-ndi/public/index.php/v1/bros?{id}`

### Parameters
  * {id} : *(Integer)* id is required to retrieve an user with his id

#### Exemple Request

```
$ curl -X GET http://212.47.252.1/~purpleunikorn/api-ndi/public/index.php/v1/bros?{id}
```

#### Response  
```javascript
{
    id: {int},  
    username: {string},  
    email: {string},  
    password: {string},
    phone: {string},
    driver_licence: {boolean},  
    created_at: {datetime},  
    updated_at: {datetime},
}
```

### **PUT** Update an user
`URL : http://212.47.252.1/~purpleunikorn/api-ndi/public/index.php/v1/bros?{id}`

#### Exemple Request

### Parameters
* {id} : *(Integer)* id is required to retrieve an user with his id
* username: *(String)* is required,  
* email: *(String)* is required,  
* password: *(String)* is required,
* phone: *(String)* is required,
* driver_licence: *(Boolean)* is required

```
$ curl -X PUT http://212.47.252.1/~purpleunikorn/api-ndi/public/index.php/v1/bros?{id} -d {"username":"HeadFox", "email":"example@gmail.com", "password":"azerty123", "phone", "0670504158", "driver_licence":1}
```


#### Response  
```javascript
{
    id: {int},  
    username: {string},  
    email: {string},  
    password: {string},
    phone: {string},
    driver_licence: {boolean},  
    created_at: {datetime},  
    updated_at: {datetime},
}
```


### **POST** Create an user
`URL : http://212.47.252.1/~purpleunikorn/api-ndi/public/index.php/v1/bros?{user_data}`

### Parameters
* username: *(String)* is required,  
* email: *(String)* is required,  
* password: *(String)* is required,
* phone: *(String)* is required,
* driver_licence: *(Boolean)* is required  

#### Exemple Request

```
$ curl -X POST http://212.47.252.1/~purpleunikorn/api-ndi/public/index.php/v1/bros -d {"username":"HeadFox", "email":"example@gmail.com", "password":"azerty123", "phone", "0670504158", "driver_licence":1}
```

#### Response  
```javascript
{
    id: {int},  
    username: {string},  
    email: {string},  
    password: {string},
    phone: {string},
    driver_licence: {boolean},  
    created_at: {datetime},  
    updated_at: {datetime},
}
```

### **DELETE** An user
`URL : http://212.47.252.1/~purpleunikorn/api-ndi/public/index.php/v1/bros?{id}`

### Parameters
  * {id} : *(Integer)* id is required to retrieve an user with his id

#### Exemple Request

```
$ curl -X DELETE http://212.47.252.1/~purpleunikorn/api-ndi/public/index.php/v1/bros?{id}
```

#### Response  
```javascript
{
    delete: true
}
```

### **POST** Check login
`URL : http://212.47.252.1/~purpleunikorn/api-ndi/public/index.php/v1/bros/login?{email}&{password}`

### Parameters
  * {email} : *(String)* Email is required to retrieve the user by email
  * {password} : *(String)* Password is required to check if the user can login

#### Exemple Request

```
$ curl -X POST http://212.47.252.1/~purpleunikorn/api-ndi/public/index.php/v1/bros -d {"email":"example@gmail.com", "password":"azerty123"}
```

#### Response  
```javascript
{
    connected: true|false
}
```

## CRUD for events

### **GET** All events
`URL : http://212.47.252.1/~purpleunikorn/api-ndi/public/index.php/v1/murge`

#### Response  
```javascript
{
    id: {int},  
    event_name: {string},  
    event_date: {string}
    event_address: {string},  
    event_city: {string},  
    event_cp: {string},  
    list_users: {string}
    fk_id_user_owner: {int},
    fk_id_user_sam: {int},
    created_at: {datetime},
    updated_at: {datetime},
}
...
{
    id: {int},  
    event_name: {string},  
    event_date: {string}
    event_address: {string},  
    event_city: {string},  
    event_cp: {string},  
    list_users: {string},
    fk_id_user_owner: {int},
    fk_id_user_sam: {int},
    created_at: {datetime},
    updated_at: {datetime},
}
```

### **GET** Unique event
`URL : http://212.47.252.1/~purpleunikorn/api-ndi/public/index.php/v1/murge?{id}`

### Parameters
  * {id} : *(Integer)* id is required to retrieve an event with its id

#### Response  
```javascript
{
    id: {int},  
    event_name: {string},  
    event_date_start: {datetime},
    event_date_end: {datetime},
    event_address: {string},  
    event_city: {string},  
    event_cp: {string},  
    list_users: {string}
    fk_id_user_owner: {int},
    fk_id_user_sam: {int},
    created_at: {datetime},
    updated_at: {datetime},
}
```

### **PUT** Update an event
`URL : http://212.47.252.1/~purpleunikorn/api-ndi/public/index.php/v1/murge?{id}`

### Parameters
  * {id} : *(Integer)* id is required to retrieve an event with its id

#### Exemple Request
```
$ curl -X PUT http://212.47.252.1/~purpleunikorn/api-ndi/public/index.php/v1/murge?{id} -d {"event_name":"HeadFoxEvent", "event_date_start":"2017-12-11", "event_date_end":"2017-12-09", "event_address":"55 rue de la Course", "event_city", "Strasbourg", "event_cp":"67000", "list_users":"{id_user, ..., id_user}"}
```

#### Response  
```javascript
{
    id: {int},  
    event_name: {string},  
    event_date_start: {datetime},
    event_date_end: {datetime},
    event_address: {string},  
    event_city: {string},  
    event_cp: {string},  
    list_users: {string}
    fk_id_user_owner: {int},
    fk_id_user_sam: {int},
    created_at: {datetime},
    updated_at: {datetime},
}
```

### **POST** Create an event
`URL : http://212.47.252.1/~purpleunikorn/api-ndi/public/index.php/v1/murge?{id}`

### Parameters
  * {id} : *(Integer)* id is required to retrieve an event with its id


#### Exemple Request
```
$ curl -X POST http://212.47.252.1/~purpleunikorn/api-ndi/public/index.php/v1/murge?{id} -d {"event_name":"HeadFoxEvent", "event_date_start":"2017-12-11", "event_date_end":"2017-12-09", "event_address":"55 rue de la Course", "event_city", "Strasbourg", "event_cp":"67000", "list_users":"{id_user, ..., id_user}"}
```

#### Response  
```javascript
{
    id: {int},  
    event_name: {string},  
    event_date_start: {datetime},
    event_date_end: {datetime},
    event_address: {string},  
    event_city: {string},  
    event_cp: {string},  
    list_users: {string}
    fk_id_user_owner: {int},
    fk_id_user_sam: {int},
    created_at: {datetime},
    updated_at: {datetime},
}
```

### **DELETE** An event
`URL : http://212.47.252.1/~purpleunikorn/api-ndi/public/index.php/v1/murge?{id}`

### Parameters
  * {id} : *(Integer)* id is required to retrieve an event with its id

#### Response  
```javascript
{
    delete: true
}
```

### **GET** List of current event
`URL : http://212.47.252.1/~purpleunikorn/api-ndi/public/index.php/v1/murge/cest-ce-soir?{id}`

### Parameters
  * {id} : *(Integer)* id is required to retrieve an event with the owner id

#### Response  
```javascript
{
    id: {int},  
    event_name: {string},  
    event_date_start: {datetime},
    event_date_end: {datetime},
    event_address: {string},  
    event_city: {string},  
    event_cp: {string},  
    list_users: {string}
    fk_id_user_owner: {int},
    fk_id_user_sam: {int},
    created_at: {datetime},
    updated_at: {datetime},
}
```

### **GET** List of passed event
`URL : http://212.47.252.1/~purpleunikorn/api-ndi/public/index.php/v1/murge/cest-trop-tard?{id}`

### Parameters
  * {id} : *(Integer)* id is required to retrieve an event with the owner id

#### Response  
```javascript
{
    id: {int},  
    event_name: {string},  
    event_date_start: {datetime},
    event_date_end: {datetime},
    event_address: {string},  
    event_city: {string},  
    event_cp: {string},  
    list_users: {string}
    fk_id_user_owner: {int},
    fk_id_user_sam: {int},
    created_at: {datetime},
    updated_at: {datetime},
}
```

### **POST** List of passed event
`URL : http://212.47.252.1/~purpleunikorn/api-ndi/public/index.php/v1/murge/ramene-tes-fesses`

### Parameters
  * {id} : *(Integer)* id is required to retrieve an event with the owner id

#### Response  
```javascript
{
    send: true|false,
}
```
