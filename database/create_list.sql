CREATE TABLE IF NOT EXISTS `Products` (
    `id` int AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(100) NOT NULL,
    `brand` VARCHAR(100) NOT NULL,
    `price` DECIMAL(12,2) DEFAULT 0,
    `size` VARCHAR(100) NOT NULL,
    `flavor` VARCHAR(100) NOT NULL
)