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

All users with jobs:

```graphql
{
    users {
        id
        name
        email
        jobs{
            title
        }
    }
}

```
@eq = Model::where('id', ' $id)->first()


  
