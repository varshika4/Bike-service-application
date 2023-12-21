CREATE TABLE BookedOrders (
    order_id INT AUTO_INCREMENT PRIMARY KEY,
    customer_email VARCHAR(100), 
    service_id INT,
    status VARCHAR(50),
    payment_status VARCHAR(50),
    delivery_address TEXT,
    delivery_date DATE,
    additional_instructions TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (customer_email) REFERENCES CustomerDetails(email),
    FOREIGN KEY (service_id) REFERENCES Services(service_id)
);
