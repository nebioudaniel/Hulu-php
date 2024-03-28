

---

# Hulu Digital Marketplace PHP API

Welcome to the Hulu Digital Marketplace PHP API! This API provides developers with access to product data and CRUD operations for managing products in the digital marketplace. Developed by Nebiou Daniel, this API simplifies integration and empowers developers to build innovative applications on top of the Hulu platform.

## Features

- **Easy Integration**: Simple-to-use API endpoints for creating, reading, updating, and deleting products.
- **Flexible**: Integrate the API into various applications, including web, mobile, and desktop.
- **Scalable**: Designed to handle large amounts of product data efficiently with MongoDB.
- **Customizable**: Easily extend the API by adding new endpoints or modifying existing ones according to your project requirements.
- **Secure**: Protects sensitive data and endpoints with secure authentication and authorization mechanisms.

## Getting Started

To start using the Hulu Digital Marketplace PHP API, follow these steps:

### Prerequisites

- PHP installed on your system
- MongoDB instance for storing product data
- Basic understanding of HTTP requests and RESTful APIs

### Installation

1. Clone the repository:
   ```
   git clone https://github.com/nebioudaniel/hulu-digital-marketplace-php-api.git
   ```

2. Install dependencies:
   ```
   cd hulu-digital-marketplace-php-api
   composer install
   ```

3. Configure MongoDB:
   - Update the MongoDB connection details in `config.php` to match your MongoDB instance.

4. Start the server:
   ```
   php -S localhost:8000 -t public
   ```

## Usage

The Hulu Digital Marketplace PHP API provides the following endpoints for managing products:

- `GET /api/products`: Retrieve all products.
- `GET /api/products/{id}`: Retrieve a specific product by ID.
- `POST /api/products`: Create a new product.
- `PUT /api/products/{id}`: Update an existing product.
- `DELETE /api/products/{id}`: Delete a product.

Refer to the API documentation or inspect the `src/routes/index.php` file for detailed information on each endpoint.

### Examples

#### Fetch all products:
```bash
curl http://localhost:8000/api/products
```

#### Create a new product:
```bash
curl -X POST -H "Content-Type: application/json" -d '{"name": "New Product", "price": 99.99, "category": "Electronics"}' http://localhost:8000/api/products
```

#### Update an existing product:
```bash
curl -X PUT -H "Content-Type: application/json" -d '{"name": "Updated Product", "price": 129.99, "category": "Electronics"}' http://localhost:8000/api/products/{id}
```

#### Delete a product:
```bash
curl -X DELETE http://localhost:8000/api/products/{id}
```

## Benefits

- **Accelerated Development**: Quickly build applications by leveraging pre-built CRUD operations for products.
- **Enhanced Flexibility**: Customize the API to suit your project's unique requirements with ease.
- **Improved Efficiency**: Utilize MongoDB for efficient data storage and retrieval, ensuring optimal performance.
- **Cost-Effective**: Open-source and free to use, reducing development costs and time-to-market.

## Contributing

Contributions are welcome! If you have suggestions for improvements, bug fixes, or new features, please open an issue or submit a pull request.

## License

This project is licensed under the [MIT License](LICENSE).

---
Follow and like please

