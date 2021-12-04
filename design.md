BRAND
    id          int             [AI]
    name        varchar(40)     [unique]
    
MODEL
    id          int             [AI]
    name        varchar(50)     [unique]
    brand       int             [FK->brand.id]
    version     varchar(25)     [unique for brand & model]

PART
    id          id              [AI]
    name        varchar(50)     []
    manufacture int             [FK->Manufacture]
    
