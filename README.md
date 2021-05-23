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

Relationships with Paginator:

```graphql
{
    users(count: 3, page: 1, first: 1) {
        paginatorInfo{
            total
        }
        data{
            id
            email
            jobs(first: 1) {
                paginatorInfo{
                    total
                }
                data{
                    title
                }
            }
        }

    }
}
```

Filtering

```graphql
{
    jobsByStatus(status: PROCESSING){
        title
        status
        user{
            name
        }
    }
}

{
    jobsByStatus(status: PROCESSING, first: 3) {
        data {
            title
            status
            user {
                name
            }
        }
    }
}

{
    user(id: 1){
        jobs(status: COMPLETE, first: 4){
            data{
                status
                title
            }
        }
    }
}


```

```graphql
mutation{
    login(email:"john@gmail.com", password: "password")
}
```  

```graphql
{
    me {
        name,
        email
        jobs(first: 10, status:QUEUED){
            data{
                title
            }
        }
    }
}

Authorization:
{
"Authorization": "Bearer 8SfnCuGzHpllvcTIR7PNYNS6p2qrjp14SNhfFBb1xa8L9ki6LoJAdecHYVTv"
}
```  

Create user

```graphql
mutation {
    createUser(
        name: "lol"
        email: "testd@gmail.com"
        password: "secret"
    ) {
        id
        email
    }
}

```

```php
DB::listen(function($executed){
 info($executed->sql);
});
```
