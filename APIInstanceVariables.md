# LanguageArray #

An array of language specific phrases.

```
@var array
@access public
@see __construct()
```

# Report #

Holds a message if one was generated.

```
@var string
@access public
@see FormatMessage()
```

# liHomeId #

A comma separated list of MODx document IDs to attempt to redirect the user to after login.

```
@var string
@access public
@see login()
@see LoginHomePage()
```

# loHomeId #

The MODx document ID to redirect the user to after logout.

```
@var string
@access public
@see logout()
@see LogoutHomePage()
```

# Type #

The type of WebLoginPE (simple, register, profile, or taconite)

```
@var string
@access protected
```

# Username #

Value of $_POST['username']._

```
@var string
@access protected
```

# Password #

Value of $_POST['password']._

```
@var string
@access protected
```

# User #

The user object assembled from data queried from the web user tables

```
@var array
@access protected
@see QueryDbForUser()
```

# UserImageSettings #

Dimensions for the user image

```
@var string
@access protected
@see CreateUserImage
```

# MessageTemplate #

Template for messages returned by WebLoginPE

```
@var string;
@access public
@see FormatMessage;
```

# LoginErrorCount #

Number of failed logins

```
@var string
@access protected
@see Authenticate
```

# CustomTable #

Full table name of the custom extended user attributes table.

```
@var string
@access protected
@see CustomTable
```

# CustomFields #

An array of column names for the extended user attributes table.

```
@var array
@access protected
@see CustomTable
```

# DateFormat #

PHP strftime() format for dates in placeholders

```
@var string
@access protected
@see PlaceHolders
```