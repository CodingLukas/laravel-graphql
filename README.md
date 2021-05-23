## GraphQL

All users:
```graphql
{
  users {
    data{
    id
    name
    email
    }
  }
}
```
Specific user:
```graphql
{
    user(id: 1) {
        id
        name
        email
    }
}
```

@eq = Model::where('id', ' $id)->first()


  
