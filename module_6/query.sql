CREATE TABLE customers(
	id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
	NAME VARCHAR(50) NOT NULL,
	email VARCHAR(30) NOT NULL,
	location VARCHAR(100) NOT NULL,
	created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP(),
	update_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP() ON UPDATE CURRENT_TIMESTAMP()
);


CREATE TABLE orders(
	id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
	customer_id INT(11) UNSIGNED NOT NULL,
	order_date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP(),
	total_amount INT(11) UNSIGNED NOT NULL,
	FOREIGN KEY (customer_id) REFERENCES customers(id) ON DELETE RESTRICT ON UPDATE CASCADE,
	created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP(),
	update_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP() ON UPDATE CURRENT_TIMESTAMP()
);



CREATE TABLE categories(
	id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
	NAME VARCHAR(50) NOT NULL,
	created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP(),
	update_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP() ON UPDATE CURRENT_TIMESTAMP()
);



CREATE TABLE products(
	id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
	category_id INT(11) UNSIGNED NOT NULL,
	FOREIGN KEY (category_id) REFERENCES categories(id) ON DELETE RESTRICT ON UPDATE CASCADE,
	NAME VARCHAR(50) NOT NULL,
	description VARCHAR(255) NOT NULL,
	price int(11) NOT NULL,
	created_at timestamp not null default current_timestamp(),
	update_at timestamp not null default current_timestamp() on update current_timestamp()
);



create table order_items(
	id int(11) unsigned not null auto_increment primary key,
	order_id int(11) unsigned not null,
	foreign key (order_id) references orders(id) on delete restrict on update cascade,
	product_id int(11) unsigned not null,
	foreign key (product_id) references products(id) on delete restrict on update cascade,
	quantity int(6) unsigned not null,
	unit_price int(11) unsigned not null,
	created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP(),
	update_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP() ON UPDATE CURRENT_TIMESTAMP()
);







SELECT customers.*, COUNT(orders.id) AS total_number_of_order_placed
FROM customers
INNER JOIN orders ON customers.id = orders.customer_id
GROUP BY orders.customer_id ORDER BY total_number_of_order_placed DESC;


SELECT o.id,p.name, oi.quantity, (oi.quantity*oi.unit_price) AS total_amount
FROM products p
INNER JOIN order_items oi ON oi.product_id = p.id
INNER JOIN orders o ON o.id = oi.order_id
ORDER BY o.id ASC;


SELECT c.name AS category_name,SUM(oi.quantity*oi.unit_price) AS revenue
FROM categories c
INNER JOIN products p ON p.category_id = c.id
INNER JOIN order_items oi ON oi.product_id = p.id
GROUP BY p.category_id ORDER BY revenue DESC;


SELECT c.name AS customer_name,SUM(o.total_amount) AS purchase_amount
FROM customers c
INNER JOIN orders o ON o.customer_id = c.id
GROUP BY o.customer_id ORDER BY purchase_amount DESC LIMIT 5;







SELECT c.name,o.* 
FROM orders o
INNER JOIN customers c ON c.id = o.customer_id;



SELECT c.name,p.name FROM 
products p
LEFT JOIN categories c ON c.id = p.category_id;









CREATE TABLE testimonials(
	id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
	NAME VARCHAR(50) NOT NULL,
	designation VARCHAR(30) NOT NULL,
	review VARCHAR(500) NOT NULL,
	image VARCHAR(50) NOT NULL,
	created_by INT(11) UNSIGNED NOT NULL,
	FOREIGN KEY (created_by) REFERENCES users(id) ON DELETE RESTRICT ON UPDATE CASCADE,
	created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP(),
	update_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP() ON UPDATE CURRENT_TIMESTAMP()
);



CREATE TABLE contact(
	id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
	NAME VARCHAR(50) NOT NULL,
	email VARCHAR(30) NOT NULL,
	phone VARCHAR(30) NOT NULL,
	message VARCHAR(500) NOT NULL,
	created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP()
);


CREATE TABLE users(
	id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
	NAME VARCHAR(50) NOT NULL,
	email VARCHAR(30) NOT NULL,
	phone VARCHAR(30) NOT NULL,
	image VARCHAR(50) NOT NULL,
	role VARCHAR(10) NOT NULL,
	user_pass VARCHAR(100) NOT NULL,
	new_pass VARCHAR(100) NOT NULL,
	created_by INT(11) NOT NULL,
	created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP(),
	update_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP() ON UPDATE CURRENT_TIMESTAMP()
);


CREATE TABLE teams(
	id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
	NAME VARCHAR(50) NOT NULL,
	email VARCHAR(30) NOT NULL,
	designation VARCHAR(50) NOT NULL,
	facebook VARCHAR(255),
	twitter VARCHAR(255),
	linked_in VARCHAR(255),
	created_by INT(11) UNSIGNED NOT NULL,
	FOREIGN KEY (created_by) REFERENCES users(id) ON DELETE RESTRICT ON UPDATE CASCADE,
	created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP(),
	update_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP() ON UPDATE CURRENT_TIMESTAMP()
);



