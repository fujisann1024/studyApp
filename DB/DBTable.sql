--データベース作成
CREATE DATABASE "AppDB"
    WITH 
    OWNER = postgres
    TEMPLATE = template0
    ENCODING = 'UTF8'
    LC_COLLATE = 'Japanese_Japan.932'
    LC_CTYPE = 'Japanese_Japan.932'
    TABLESPACE = pg_default
    CONNECTION LIMIT = -1;

--テーブル作成
CREATE TABLE master_staffs (
    staff_id SERIAL NOT NULL,
    staff_name VARCHAR(100) NOT NULL,
    login_id VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    miss_count INTEGER DEFAULT 0,
    miss_flag BOOLEAN DEFAULT FALSE,
    miss_time TIMESTAMP DEFAULT NULL,
    login_time TIMESTAMP DEFAULT NULL,
    PRIMARY KEY(staff_id)
);

--テーブルの中身を表示
SELECT * FROM master_staffs;

--テーブルの中身にデータを挿入
INSERT INTO master_staffs ( staff_name,login_id,password)
VALUES ('佐藤','sato@email.com','12345678'),
       ('鈴木','suzuki@email.com','12349999'),
       ('加藤','kato@email.com','88888888')
;

SELECT * FROM master_staffs;
