CREATE TABLE IF NOT EXISTS birds (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(100) NOT NULL,
        scientific_name VARCHAR(150) NOT NULL,
        habitat VARCHAR(255),
        description TEXT,
        image_url VARCHAR(255),
        video_url VARCHAR(255),
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
