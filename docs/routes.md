# Web Routes

### `GET /`

- **Description**: This route returns the welcome view.
- **Name**: welcome

### `GET /home`

- **Description**: This route returns the home page.
- **Name**: home
- **Controller**: HomeController
- **Method**: index

### Admin Routes

#### `GET /admin`

- **Description**: This route returns the admin dashboard.
- **Name**: admin
- **Controller**: AdminController
- **Method**: index

#### Resource Routes

##### `GET /admin/locations`

- **Description**: This route returns a list of locations.
- **Name**: locations.index
- **Controller**: LocationController
- **Method**: index

##### `GET /admin/locations/create`

- **Description**: This route returns the form to create a new location.
- **Name**: locations.create
- **Controller**: LocationController
- **Method**: create

##### `POST /admin/locations`

- **Description**: This route saves a new location.
- **Name**: locations.store
- **Controller**: LocationController
- **Method**: store

##### `GET /admin/locations/{location}`

- **Description**: This route returns the details of a specific location.
- **Name**: locations.show
- **Controller**: LocationController
- **Method**: show

##### `GET /admin/locations/{location}/edit`

- **Description**: This route returns the form to edit a specific location.
- **Name**: locations.edit
- **Controller**: LocationController
- **Method**: edit

##### `PUT/PATCH /admin/locations/{location}`

- **Description**: This route updates a specific location.
- **Name**: locations.update
- **Controller**: LocationController
- **Method**: update

##### `DELETE /admin/locations/{location}`

- **Description**: This route deletes a specific location.
- **Name**: locations.destroy
- **Controller**: LocationController
- **Method**: destroy

##### `GET /admin/users`

- **Description**: This route returns a list of users.
- **Name**: users.index
- **Controller**: UserController
- **Method**: index

##### `GET /admin/users/create`

- **Description**: This route returns the form to create a new user.
- **Name**: users.create
- **Controller**: UserController
- **Method**: create

##### `POST /admin/users`

- **Description**: This route saves a new user.
- **Name**: users.store
- **Controller**: UserController
- **Method**: store

##### `GET /admin/users/{user}`

- **Description**: This route returns the details of a specific user.
- **Name**: users.show
- **Controller**: UserController
- **Method**: show

##### `GET /admin/users/{user}/edit`

- **Description**: This route returns the form to edit a specific user.
- **Name**: users.edit
- **Controller**: UserController
- **Method**: edit

##### `PUT/PATCH /admin/users/{user}`

- **Description**: This route updates a specific user.
- **Name**: users.update
- **Controller**: UserController
- **Method**: update

##### `DELETE /admin/users/{user}`

- **Description**: This route deletes a specific user.
- **Name**: users.destroy
- **Controller**: UserController
- **Method**: destroy

## API Routes

### `GET /user`

- **Description**: This route returns the authenticated user's information.
- **Middleware**: auth:sanctum