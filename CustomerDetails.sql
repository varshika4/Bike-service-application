CREATE TABLE CustomerDetails (
    customer_id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50),
    last_name VARCHAR(50),
    dob DATE,
    gender VARCHAR(20),
    nationality VARCHAR(50),
    address VARCHAR(100),
    country VARCHAR(50),
    state VARCHAR(50),
    city VARCHAR(50),
    email VARCHAR(100),
    phone_number VARCHAR(20),
    alternate_phone VARCHAR(20)
);
