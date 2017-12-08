# L'Équipage API REST

This is the documentation to use the API of the team **L'Équipage**

## CRUD for users

There are all methods available on users

### **GET** All users
`URL : http://api-ndi.lucienpeslier.xyz/bros`

#### Exemple Request

```
$ curl -X GET http://api-ndi.lucienpeslier.xyz/bros
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
`URL : http://api-ndi.lucienpeslier.xyz/bros/{id}`

### Parameters
  * {id} : *(Integer)* id is required to retrieve an user with his id

#### Exemple Request

```
$ curl -X GET http://api-ndi.lucienpeslier.xyz/bros/{id}
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
`URL : http://api-ndi.lucienpeslier.xyz/bros/{id}`

#### Exemple Request

### Parameters
* {id} : *(Integer)* id is required to retrieve an user with his id

```
$ curl -X PUT http://api-ndi.lucienpeslier.xyz/bros/{id} -d {"username":"HeadFox", "email":"example@gmail.com", "password":"azerty123", "phone", "0670504158"}
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
`URL : http://api-ndi.lucienpeslier.xyz/bros/{id}`

### Parameters
  * {id} : *(Integer)* id is required to retrieve an user with his id

#### Exemple Request

```
$ curl -X POST http://api-ndi.lucienpeslier.xyz/bros/{id} -d {"username":"HeadFox", "email":"example@gmail.com", "password":"azerty123", "phone", "0670504158"}
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
`URL : http://api-ndi.lucienpeslier.xyz/bros/{id}`

### Parameters
  * {id} : *(Integer)* id is required to retrieve an user with his id

#### Exemple Request

```
$ curl -X DELETE http://api-ndi.lucienpeslier.xyz/bros/{id}
```

#### Response  
```javascript
{
    true
}
```

## CRUD for events

### **GET** All events
`URL : http://api-ndi.lucienpeslier.xyz/event`

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
    created_at: {datetime},
    updated_at: {datetime},
}
```

### **GET** Unique user
`URL : http://api-ndi.lucienpeslier.xyz/event/{id}`

### Parameters
  * {id} : *(Integer)* id is required to retrieve an event with its id

#### Response  
```javascript
{
    id: {int},  
    event_name: {string},  
    event_date: {string},
    event_address: {string},  
    event_city: {string},  
    event_cp: {string},  
    list_users: {string}
    fk_id_user_owner: {int},
    created_at: {datetime},
    updated_at: {datetime},
}
```

### **PUT** Update an event
`URL : http://api-ndi.lucienpeslier.xyz/event/{id}`

### Parameters
  * {id} : *(Integer)* id is required to retrieve an event with its id

  ```
  $ curl -X PUT http://api-ndi.lucienpeslier.xyz/event/{id} -d {"event_name":"HeadFoxEvent", "event_date":"2017-12-31 22:00:00", "event_address":"55 rue de la Course", "event_city", "Strasbourg", "event_cp":"67000", "list_users":"{id_user, ..., id_user}"}
  ```

#### Response  
```javascript
{
    id: {int},  
    event_name: {string},  
    event_date: {string},
    event_address: {string},  
    event_city: {string},  
    event_cp: {string},  
    list_users: {string}
    fk_id_user_owner: {int},
    created_at: {datetime},
    updated_at: {datetime},
}
```


### **POST** Create an event
`URL : http://api-ndi.lucienpeslier.xyz/event/{id}`

### Parameters
  * {id} : *(Integer)* id is required to retrieve an event with its id

#### Response  
```javascript
{
    id: {int},  
    event_name: {string},  
    event_date: {string},
    event_address: {string},  
    event_city: {string},  
    event_cp: {string},  
    list_users: {string}
    fk_id_user_owner: {int},
    created_at: {datetime},
    updated_at: {datetime},
}
```

### **DELETE** An event
`URL : http://api-ndi.lucienpeslier.xyz/event/{id}`

### Parameters
  * {id} : *(Integer)* id is required to retrieve an event with its id

#### Response  
```javascript
{
    true
}
```
