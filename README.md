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
  
