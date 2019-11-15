CREATE DATABASE aptechPHP;

CREATE TABLE aptechPHP.users
(
	id int,
    first_name varchar(255),
    last_name varchar(255),
    email varchar(255) UNIQUE,
    address varchar(255),
    city varchar(255)
    
);

INSERT INTO aptechPHP.users
(id,first_name, last_name,email, address, city)
VALUES
(1, ' PhuNguyen ', 'NguyenDinh ', 'ndpn.dev@gmail.com', ' Nghe An ', 'Thanh Chuong'),
(2, ' VanQuang ', 'Tran ', 'bngjs@gmail.com', ' Dak lAk ', 'Krong bong'),
(3, ' Nam ', 'NguyenHai ', 'hainam@gmail.com', ' Da Nang ', 'Hai Chau'),
(4, ' Phuc ', 'BuiXuan ', 'bxp@gmail.com', ' Phu Yen', 'khong biet');





