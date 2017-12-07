# L'Équipage API REST

## CRUD for users

### **GET** All users
`URL : http://api-ndi.lucienpeslier.xyz/user`

#### Response  
```javascript
{
    id: {int},  
    event_name: {string},  
    event_address: {string},  
    event_city: {string},  
    fk_id_user_owner: {int},
    list_users: {string}
}
```
